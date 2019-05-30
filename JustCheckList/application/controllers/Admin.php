<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin extends CI_Controller
{
	public function __construct()
	{
		Parent::__construct();
		$this->load->model('member_model');
	}
	public function index()
	{
		$list = [
			'cuaca buruk',
			'hasil tangkapan belum mencapai target'
		];

		$data['jumlah_alasan'] = count($list);
		for ($i = 0; $i < $data['jumlah_alasan']; $i++) {
			$data['item'][] = $this->db->query("select * from keterlambatan where alasan_keterlambatan='$list[$i]' group by bulan order by bulan DESC");
		}
		$data['data'] = $this->db->query('select * from nelayan_berlayar');

		$data['user'] = $this->db->get_where('users', ['email' => $this->session->userdata('email')])->row_array();

		$this->load->view('templates/admin/header', $data);
		$this->load->view('admin/index', $data, $list);
		$this->load->view('templates/admin/footer');
	}

	public function welcome()
	{
		$data['user'] = $this->db->get_where('users', ['email' => $this->session->userdata('email')])->row_array();
		$this->load->view('templates/admin/header', $data);
		$this->load->view('admin/welcome');
		$this->load->view('templates/admin/footer');
	}

	public function member()
	{
		$data['user'] = $this->db->get_where('users', ['email' => $this->session->userdata('email')])->row_array();
		$this->load->view('templates/admin/header', $data);
		$this->load->view('admin/member');
		$this->load->view('templates/admin/footer');
	}

	public function memberView()
	{
		$data['user'] = $this->db->get_where('users', ['email' => $this->session->userdata('email')])->row_array();
		$this->load->view('templates/admin/header', $data);
		$this->load->view('admin/memberView');
		$this->load->view('templates/admin/footer');
	}

	public function inbox()
	{
		$data['user'] = $this->db->get_where('users', ['email' => $this->session->userdata('email')])->row_array();
		$this->load->view('templates/admin/header', $data);
		$this->load->view('admin/inbox');
		$this->load->view('templates/admin/footer');
	}

	public function pesan()
	{
		$data['user'] = $this->db->get_where('users', ['email' => $this->session->userdata('email')])->row_array();
		$this->load->view('templates/admin/header', $data);
		$this->load->view('admin/pesan');
		$this->load->view('templates/admin/footer');
	}

	public function cek_profile()
	{
		$data['user'] = $this->db->get_where('users', ['email' => $this->session->userdata('email')])->row_array();
		$this->load->view('templates/admin/header', $data);
		$this->load->view('admin/cek_profile', $data);
		$this->load->view('templates/admin/footer');
	}

	public function edit_profile()
	{
		$this->load->library('form_validation');

		$this->form_validation->set_rules('password', 'Password', 'trim|required|matches[password1]');
		$this->form_validation->set_rules('password1', 'Password', 'trim|required|matches[password]');
		if ($this->form_validation->run() == false) {
			$data['user'] = $this->db->get_where('users', ['email' => $this->session->userdata('email')])->row_array();
			$this->load->view('templates/admin/header', $data);
			$this->load->view('admin/edit_profile', $data);
			$this->load->view('templates/admin/footer');
		} else {
			$nama = $this->input->post('nama');
			$email = $this->input->post('email');
			$password = $this->input->post('password');
			$agama = $this->input->post('agama');
			$status = $this->input->post('status');
			$noHp = $this->input->post('no_hp');
			$alamat = $this->input->post('alamat');
			$negara = $this->input->post('negara');
			$kodepos = $this->input->post('kode_pos');
			$deskripsi = $this->input->post('deskripsi');
			$foto   = $_FILES['foto'];
			if ($foto = '') { } else {
				$config['upload_path'] = './assets/profil';
				$config['allowed_types'] = 'jpg|png|gif';

				$this->load->library('upload', $config);
				if (!$this->upload->do_upload('foto')) {
					echo "Mohon Masukkan Foto Anda";
					die();
				} else {
					$foto = $this->upload->data('file_name');
				}
			}

			$data = array(
				'nama'              => $nama,
				'password'              =>  password_hash($password, PASSWORD_DEFAULT),
				'agama'             => $agama,
				'status'            => $status,
				'no_hp'              => $noHp,
				'alamat'            => $alamat,
				'negara'            => $negara,
				'kode_pos'           => $kodepos,
				'gambar'              => $foto,
				'deskripsi'         => $deskripsi,
			);

			$this->db->where('email', $email);
			$this->db->update('users', $data);
			redirect('admin/cek_profile');
		}
	}
}
