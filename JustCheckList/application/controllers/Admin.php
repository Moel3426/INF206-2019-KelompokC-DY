<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin extends CI_Controller
{
	public function __construct()
	{
		Parent::__construct();
		$this->load->library('form_validation');
		$this->load->model('member_model');
		$this->load->model('keberangkatan_model');
	}
	public function index()
	{
		$this->form_validation->set_rules('nama', 'Nama', 'trim|required');
		if ($this->form_validation->run() == false) {
			$data['inbox'] = 0;
			$anggota = $this->db->get_where('anggota', ['admin_id' => $this->session->userdata('id')])->result();
			foreach ($anggota as $a) {
				$data['inbox'] += $this->db->get_where('keberangkatan', ['status' => 'dalam proses', 'user_id' => $a->member_id])->num_rows();
			}

			$list = [
				'cuaca buruk',
				'hasil tangkapan belum mencapai target',
				'kapal rusak'
			];

			$data['jumlah_alasan'] = count($list);
			for ($i = 0; $i < $data['jumlah_alasan']; $i++) {
				$data['item'][] = $this->db->query("select * from keterlambatan where alasan_keterlambatan='$list[$i]' group by bulan order by bulan DESC");
			}
			$data['data'] = $this->db->query('select * from nelayan_berlayar');
			$data['keberangkatan'] = $this->db->get('keberangkatan');
			$data['user'] = $this->db->get_where('users', ['email' => $this->session->userdata('email')])->row_array();

			$this->load->view('templates/admin/header', $data);
			$this->load->view('admin/index', $data, $list);
			$this->load->view('templates/admin/footer');
		} else {
			$cek = $this->db->get_where('users', ['nama' => $this->input->post('nama'), 'role' => 2]);
			if ($cek->num_rows() > 0) {
				$member = $cek->row();
				$duplikat = $this->db->get_where('anggota',['member_id'=> $member->id,'admin_id'=>$this->session->userdata('id')]);
				if(!$duplikat->num_rows()>0){ 	
					$data = [
						'member_id' => $member->id,
						'admin_id' => $this->session->userdata('id')
					];
					$this->db->insert('anggota', $data);
					redirect('admin/member');
				}else{
					$this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Member dengan nama ' . $this->input->post('nama') . ' telah terdaftar </div>');
					redirect('admin');
				}
			} else {
				$this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Member dengan nama ' . $this->input->post('nama') . ' tidak ada </div>');
				redirect('admin');
			}
		}
	}

	public function welcome()
	{
		$data['inbox'] = 0;
		$anggota = $this->db->get_where('anggota', ['admin_id' => $this->session->userdata('id')])->result();
		foreach ($anggota as $a) {
			$data['inbox'] += $this->db->get_where('keberangkatan', ['status' => 'dalam proses', 'user_id' => $a->member_id])->num_rows();
		}

		$data['user'] = $this->db->get_where('users', ['email' => $this->session->userdata('email')])->row_array();
		$this->load->view('templates/admin/header', $data);
		$this->load->view('admin/welcome');
		$this->load->view('templates/admin/footer');
	}

	public function member()
	{
		$data['inbox'] = 0;
		$anggota = $this->db->get_where('anggota', ['admin_id' => $this->session->userdata('id')])->result();
		foreach ($anggota as $a) {
			$data['inbox'] += $this->db->get_where('keberangkatan', ['status' => 'dalam proses', 'user_id' => $a->member_id])->num_rows();
		}

		$data['user'] = $this->db->get_where('users', ['email' => $this->session->userdata('email')])->row_array();
		$data['member'] = $this->db->get_where('anggota', ['admin_id' => $this->session->userdata('id')]);
		$this->load->view('templates/admin/header', $data);
		$this->load->view('admin/member', $data);
		$this->load->view('templates/admin/footer');
	}

	public function memberView()
	{

		$data['inbox'] = 0;
		$anggota = $this->db->get_where('anggota', ['admin_id' => $this->session->userdata('id')])->result();
		foreach ($anggota as $a) {
			$data['inbox'] += $this->db->get_where('keberangkatan', ['status' => 'dalam proses', 'user_id' => $a->member_id])->num_rows();
		}

		$data['lihatanggota'] = $this->db->get_where('tb_member', ['id_member' => $this->input->get('id')]);
		$data['user'] = $this->db->get_where('users', ['email' => $this->session->userdata('email')])->row_array();
		$this->load->view('templates/admin/header', $data);
		$this->load->view('admin/memberView', $data);
		$this->load->view('templates/admin/footer');
	}

	public function inbox()
	{
		if (!$this->input->get('status')) {
			$data['inbox'] = 0;
			$i = 0;
			$anggota = $this->db->get_where('anggota', ['admin_id' => $this->session->userdata('id')]);
			if($anggota->num_rows()>0){
				foreach ($anggota->result() as $a) {
					$data['inbox'] += $this->db->get_where('keberangkatan', ['status' => 'dalam proses', 'user_id' => $a->member_id])->num_rows();
					$data['konfirmasi'][$i++] = $this->db->get_where('keberangkatan', ['status' => 'dalam proses', 'user_id' => $a->member_id]);
				}
			}else{
				$data['konfirmasi'][$i]="kosong";
			}

			$data['user'] = $this->db->get_where('users', ['email' => $this->session->userdata('email')])->row_array();
			$this->load->view('templates/admin/header', $data);
			$this->load->view('admin/inbox', $data);
			$this->load->view('templates/admin/footer');
		} else {
			$this->db->set('status', $this->input->get('status'));
			$this->db->where('id', $this->input->get('id'));
			$this->db->update('keberangkatan');
			redirect('admin/inbox');
		}
	}

	public function pesan()
	{
		$data['inbox'] = 0;
		$anggota = $this->db->get_where('anggota', ['admin_id' => $this->session->userdata('id')])->result();
		foreach ($anggota as $a) {
			$data['inbox'] += $this->db->get_where('keberangkatan', ['status' => 'dalam proses', 'user_id' => $a->member_id])->num_rows();
		}

		$data['user'] = $this->db->get_where('users', ['email' => $this->session->userdata('email')])->row_array();

		$data['keterangan'] = $this->db->get_where('keberangkatan', ['id' => $this->input->get('id')])->row();
		$data['anggotaIkut'] = $this->keberangkatan_model->getAnggotaIkutById($this->input->get('id'));

		$this->load->view('templates/admin/header', $data);
		$this->load->view('admin/pesan', $data);
		$this->load->view('templates/admin/footer');
	}

	public function cek_profile()
	{
		$data['inbox'] = 0;
		$anggota = $this->db->get_where('anggota', ['admin_id' => $this->session->userdata('id')])->result();
		foreach ($anggota as $a) {
			$data['inbox'] += $this->db->get_where('keberangkatan', ['status' => 'dalam proses', 'user_id' => $a->member_id])->num_rows();
		}

		$data['user'] = $this->db->get_where('users', ['email' => $this->session->userdata('email')])->row_array();
		$this->load->view('templates/admin/header', $data);
		$this->load->view('admin/cek_profile', $data);
		$this->load->view('templates/admin/footer');
	}

	public function edit_profile()
	{
		$this->load->library('form_validation');

		$data['inbox'] = 0;
		$anggota = $this->db->get_where('anggota', ['admin_id' => $this->session->userdata('id')])->result();
		foreach ($anggota as $a) {
			$data['inbox'] += $this->db->get_where('keberangkatan', ['status' => 'dalam proses', 'user_id' => $a->member_id])->num_rows();
		}

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

	public function delete()
	{
		$where = array('id' => $this->input->get('id'));
		$this->member_model->hapus_data($where, 'anggota');
		redirect('admin/member');
	}
}
