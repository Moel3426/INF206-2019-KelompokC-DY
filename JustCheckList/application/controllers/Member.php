<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Member extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('member_model');
	}

	public function tambah_aksi()
	{
		$data['user'] = $this->db->get_where('users', ['email' => $this->session->userdata('email')])->row_array();
		$data['tb_member'] = $this->db->get_where('tb_member', ['id_member' => $this->session->userdata('id')])->result_array();

		//validasi untuk tambah anggota
		$this->form_validation->set_rules('nama', 'Nama', 'required', ['required' => "Nama harus diisi"]);
		$this->form_validation->set_rules('agama', 'Agama', 'required',  ['required' => "Agama harus diisi"]);
		$this->form_validation->set_rules('status', 'Status', 'required', ['required' => "Status harus diisi"]);
		$this->form_validation->set_rules('email', 'Email', 'required|valid_email', ['required' => "Email harus diisi"]);
		$this->form_validation->set_rules('noHp', 'noHP/Telp', 'required|numeric|max_length[12]', ['required' => "NoHp/Telp harus diisi"]);
		$this->form_validation->set_rules('alamat', 'Alamat', 'required', ['required' => "Alamat harus diisi"]);
		$this->form_validation->set_rules('negara', 'Negara', 'required', ['required' => "Negara harus diisi"]);
		$this->form_validation->set_rules('kotakabupaten', 'Kota/kabupaten', 'required', ['required' => "Kota Kabupaten harus diisi"]);
		$this->form_validation->set_rules('kodepos', 'Kode pos', 'required|numeric|max_length[5]', ['required' => "Kode pos harus diisi[5 digit]"]);
		$this->form_validation->set_rules('deskripsi', 'Deskripsi', 'required', ['required' => "deskripsi harus diisi"]);

		//kondisi untuk validasi 
		if ($this->form_validation->run() == FALSE) {
			$this->load->view('templates/member/header', $data);
			$this->load->view('member/member', $data);
			$this->load->view('templates/member/footer');
		} else {
			$this->member_model->input_data();
			//flashdata
			$this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible fade show" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button> Data berhasil ditambahkan!
            </div>');
			redirect('home/member');
		}
	}
	//fungsi untuk menghapus data anggota
	public function hapus($id)
	{
		$where = array('id' => $id);
		$this->member_model->hapus_data($where, 'tb_member');
		//flashdata
		$this->session->set_flashdata('message', '<div class="alert alert-danger alert-dismissible fade show" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button> Data berhasil dihapus!
            </div>');
		redirect('home/member');
	}

	//fungsi untuk mengedit data anggota
	public function edit($id)
	{
		$where = array('id' => $id);
		$data['member'] = $this->member_model->edit_data($where, 'tb_member')->result();
	}

	//fungsi untuk update data anggota
	public function update()
	{
		$id = $this->input->post('id');
		$nama = $this->input->post('nama');
		$agama = $this->input->post('agama');
		$status = $this->input->post('status');
		$email = $this->input->post('email');
		$noHp = $this->input->post('noHp');
		$alamat = $this->input->post('alamat');
		$negara = $this->input->post('$negara');
		$kotakabupaten = $this->input->post('kotakabupaten');
		$kodepos = $this->input->post('kodepos');
		$deskripsi = $this->input->post('deskripsi');
		$foto   = $_FILES['foto'];
		if ($foto = '') { } else {
			$config['upload_path'] = './assets/foto';
			$config['allowed_types'] = 'jpg|png|gif';
			$config['max_size']      = '2048';
			$this->load->library('upload', $config);
			if (!$this->upload->do_upload('foto')) {
				echo "Mohon Masukkan Foto Anda";
				die();
			} else {
				$foto = $this->upload->data('file_name');
			}
		}

		$data = array(
			'nama'                  => $nama,
			'agama'                 => $agama,
			'status'                => $status,
			'email'                 => $email,
			'noHp'                  => $noHp,
			'alamat'                => $alamat,
			'negara'                => $negara,
			'kotakabupaten'         => $kotakabupaten,
			'kodepos'               => $kodepos,
			'deskripsi'             => $deskripsi,
			'foto'             => $foto
		);
		$where = array(
			'id'    => $id
		);
		$this->member_model->update_data($where, $data, 'tb_member');
		//flashdata
		$this->session->set_flashdata('message', '<div class="alert alert-info alert-dismissible fade show" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button> Data berhasil diupdate!
            </div>');
		redirect('home/member');
	}

	//fungsi untuk data foto yang dimasukkan
	function data_foto()
	{
		$data['foto'] = $this->member_model->ambil_foto('tb_member')->result();
		$this->load->view('member/member', $data);
	}

	//fungsi untuk menampilkan profil anggota
	public function detail($id)
	{
		$this->load->model('member_model');
		$detail = $this->member_model->detail_data($id);
		$data['detail'] = $detail;
		$this->load->view('member/member', $data);
	}
	//fungsi untuk mencetak data anggota
	public function print()
	{
		$data['user'] = $this->db->get_where('users', ['email' => $this->session->userdata('email')])->row_array();
		$data['tb_member'] = $this->db->get_where('tb_member', ['id_member' => $this->session->userdata('id')])->result_array();
		$this->load->view('member/print_member', $data);
	}

	//fungsi untuk mencetak profil tiap anggota
	public function print1()
	{
		$data['tb_member'] = $this->db->get_where('tb_member', ['id_member' => $this->session->userdata('id')])->result_array();
		$this->load->view('member/print_profil_anggota', $data);
	}
}
