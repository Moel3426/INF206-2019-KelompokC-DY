<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Member extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->library('form_validation');
		$this->load->model('member_model');
	}

	public function tambah_aksi()
	{
		$id_member = $this->session->userdata('id');
		$nama = $this->input->post('nama');
		$agama = $this->input->post('agama');
		$status = $this->input->post('status');
		$email = $this->input->post('email');
		$noHp = $this->input->post('noHp');
		$alamat = $this->input->post('alamat');
		$negara = $this->input->post('negara');
		$kotakabupaten = $this->input->post('kotakabupaten');
		$kodepos = $this->input->post('kodepos');
		$deskripsi = $this->input->post('deskripsi');
		$foto   = $_FILES['foto'];
		if ($foto = '') { } else {
			$config['upload_path'] = './assets/foto';
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
			'id_member'         => $id_member,
			'nama'              => $nama,
			'agama'             => $agama,
			'status'            => $status,
			'email'             => $email,
			'noHp'              => $noHp,
			'alamat'            => $alamat,
			'negara'            => $negara,
			'kotakabupaten'     => $kotakabupaten,
			'kodepos'           => $kodepos,
			'foto'              => $foto,
			'deskripsi'         => $deskripsi,
		);
		$this->member_model->input_data($data, 'tb_member');
		redirect('home/member');
	}

	public function hapus($id)
	{
		$where = array('id' => $id);
		$this->member_model->hapus_data($where, 'tb_member');
		redirect('home/member');
	}
	public function edit($id)
	{
		$where = array('id' => $id);
		$data['member'] = $this->member_model->edit_data($where, 'tb_member')->result();
		//$data['member'] = $this->member_model->getDataById($id);
	}
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
		$foto = $this->input->post('foto');
		$deskripsi = $this->input->post('deskripsi');

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
			'deskripsi'             => $deskripsi
		);
		$where = array(
			'id'    => $id
		);
		$this->member_model->update_data($where, $data, 'tb_member');
		redirect('home/member');
	}

	function data_foto()
	{
		$data['foto'] = $this->member_model->ambil_foto('tb_member')->result();
		$this->load->view('member', $data);
	}

	public function detail($id)
	{
		$this->load->model('member_model');
		$detail = $this->member_model->detail_data($id);
		$data['detail'] = $detail;
		$this->load->view('member/member', $data);
	}
}
