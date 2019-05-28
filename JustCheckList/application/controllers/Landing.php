<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Landing extends CI_Controller
{

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function __construct()
	{
		parent::__construct();
		$this->load->library('form_validation');
	}
	public function index()
	{
		$this->load->view('landingpage/landing');
	}
	public function login()
	{
		$this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email');
		$this->form_validation->set_rules('password', 'Password ', 'required|trim');

		if ($this->form_validation->run() == false) {
			$this->load->view('landingpage/login');
		} else {
			$this->_login();
		}
	}

	private function _login()
	{
		$email = $this->input->post('email');
		$password = $this->input->post('password');
		// $role = $this->input->post('role');
		$user = $this->db->get_where('users', ['email' => $email])->row_array();

		if ($user) {
			//cek password
			if (password_verify($password, $user['password'])) {
				$data = [
					'email' => $user['email'],
					'id' => $user['id'],
					'role' => $user['role']
				];
				if ($user['role'] == 1) {
					$this->session->set_userdata($data);
					redirect('Admin/index');
				} else {
					$this->session->set_userdata($data);
					redirect('home/index');
				}
			} else {
				$this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Wrong password!</div>');
				redirect('landing/login');
			}
		} else {
			$this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Email is not registered!</div>');
			redirect('landing/login');
		}
	}

	public function signup_admin()
	{
		$this->load->view('landingpage/signup_admin');

		$this->form_validation->set_rules('nama', 'Nama', 'required|trim');
		$this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email');
		$this->form_validation->set_rules('alamat', 'Alamat', 'required|trim');
		$this->form_validation->set_rules('nohp', 'Nohp', 'required|trim');
		$this->form_validation->set_rules('password1', 'Password ', 'required|trim');
		$this->form_validation->set_rules('password2', 'Password ', 'required|trim|matches[password1]');
		$this->form_validation->set_rules('pelabuhan', 'Pelabuhan', 'required|trim');
		$this->form_validation->set_rules('id_pelabuhan', 'id_Pelabuhan', 'required|trim');

		if ($this->form_validation->run() == false) {
			$this->load->view('landingpage/signup_admin');
		} else {
			$data = [
				'nama' => $this->input->post('nama', true),
				'email' => $this->input->post('email', true),
				'alamat' => $this->input->post('alamat', true),
				'no_hp' => $this->input->post('nohp', true),
				'password' => password_hash($this->input->post('password1'), PASSWORD_DEFAULT),
				'pelabuhan' => $this->input->post('pelabuhan', true),
				'id_pelabuhan' => $this->input->post('id_pelabuhan', true),
				'role' => 1
			];
			$this->db->insert('users', $data);
			$this->session->set_flashdata('message', '<div class= "alert alert-success" role="alert">
 			Selamat, Admin telah terdaftar...  </div>');
			redirect('index.php/landing');
		}
	}

	public function signup_member()
	{
		$this->load->view('landingpage/signup_member');
	}
	public function dosignup_user()
	{
		$this->form_validation->set_rules('nama', 'Nama', 'required|trim');
		$this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email');
		$this->form_validation->set_rules('alamat', 'Alamat', 'required|trim');
		$this->form_validation->set_rules('nohp', 'Nohp', 'required|trim');
		$this->form_validation->set_rules('password1', 'Password ', 'required|trim|matches[password2]');
		$this->form_validation->set_rules('password2', 'Password ', 'required|trim|matches[password1]');
		$this->form_validation->set_rules('id_kapal', 'id_kapal', 'required|trim');
		if ($this->form_validation->run() == false) {
			$this->load->view('landingpage/signup_member');
		} else {
			$data = [
				'nama' => $this->input->post('nama', true),
				'email' => $this->input->post('email', true),
				'alamat' => $this->input->post('alamat', true),
				'no_hp' => $this->input->post('nohp', true),
				'password' => password_hash($this->input->post('password1'), PASSWORD_DEFAULT),
				'id_kapal' => $this->input->post('id_kapal', true),
				'role' => 2

			];

			$this->db->insert('users', $data);
			$this->session->set_flashdata('message', '<div class= "alert alert-success" role="alert">
 			Selamat, user telah terdaftar...  </div>');
			redirect('index.php/landing');
		}
	}
}
