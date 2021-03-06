<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('tb_member_model');
		$this->load->model('keberangkatan_model');
	}

	public function index()
	{
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
		$this->load->view('templates/member/header', $data);
		$this->load->view('member/index', $data, $list);
		$this->load->view('templates/member/footer');
	}

	public function welcome()
	{
		$data['user'] = $this->db->get_where('users', ['email' => $this->session->userdata('email')])->row_array();
		$this->load->view('templates/member/header', $data);
		$this->load->view('member/welcome');
		$this->load->view('templates/member/footer');
	}

	//fungsi menampilkan laman member
	public function member()
	{
		$data['user'] = $this->db->get_where('users', ['email' => $this->session->userdata('email')])->row_array();
		$data['member'] = $this->member_model->tampil_data()->result();
		$data['tb_member'] = $this->db->get_where('tb_member', ['id_member' => $this->session->userdata('id')])->result_array();
		$this->load->view('templates/member/header', $data);
		$this->load->view('member/member', $data);
		$this->load->view('templates/member/footer');
	}

	public function berangkat()
	{
		$data['user'] = $this->db->get_where('users', ['email' => $this->session->userdata('email')])->row_array();
		$data['anggota'] = $this->tb_member_model->getAnggotaByIdBos($this->session->userdata('id'));
		$this->load->view('templates/member/header', $data);
		$this->load->view('member/berangkat', $data);
		$this->load->view('templates/member/footer');
	}


	public function hapustiba()
	{
		$this->db->where('id', $this->input->post('tolak'));
		$this->db->delete('keberangkatan');
		redirect('home/tiba');
	}
	public function insertBerangkat()
	{
		// menjadikan array menjadi string
		$anggota = json_encode($this->input->post('anggotaIkut'));
		$data = [
			'id_kapal' => $this->input->post('idkapal'),
			'keberangkatan' => $this->input->post('Keberangkatan', true),
			'tiba' => $this->input->post('Tiba', true),
			'anggota' => $anggota,
			'user_id' => $this->session->userdata('id')
		];
		$this->db->insert('keberangkatan',  $data);

		$this->session->set_userdata($data);
		$jumlah_keberangkatan = $this->db->get_where('nelayan_berlayar', ['bulan' => date('F', strtotime($this->input->post('Keberangkatan')))])->row_array();
		$this->db->set('jumlah_user_berlayar', $jumlah_keberangkatan['jumlah_user_berlayar'] + 1);
		$this->db->where('bulan', date('F', strtotime($this->input->post('Keberangkatan'))));
		$this->db->update('nelayan_berlayar');
		redirect('home/preview');
	}



	public function preview()
	{
		$data['user'] = $this->db->get_where('users', ['email' => $this->session->userdata('email')])->row_array();
		$data['anggotaIkut'] = $this->keberangkatan_model->getAnggotaIkutByIdKapal($data['user']['id_kapal']);
		$data['anggota'] = $this->tb_member_model->getAnggotaByIdBos($this->session->userdata('id'));
		$this->load->view('templates/member/header', $data);
		$this->load->view('member/preview');
		$this->load->view('templates/member/footer');
	}

	public function tiba()
	{

		if (!$this->input->get('id')) {

			$data['user'] = $this->db->get_where('users', ['email' => $this->session->userdata('email')])->row_array();
			$data['anggotaIkut'] = $this->keberangkatan_model->getAnggotaIkutByIdKapal($data['user']['id_kapal']);
			$data['keberangkatan'] = $this->db->get_where('keberangkatan', ['id_kapal' => $data['user']['id_kapal']]);

			$this->load->view('templates/member/header', $data);
			$this->load->view('member/tiba');
			$this->load->view('templates/member/footer');
		} else {
			$this->db->set('waktu_konfirmasi', date('Y-m-d H:i:s', time()));
			$this->db->set('waktu',  date('m/d/Y', time()));
			$this->db->set('keterangan', 'On Time');
			$this->db->where('id', $this->input->get('id'));
			$this->db->update('keberangkatan');
			redirect('home/tiba');
		}
	}

	public function terlambat()
	{
		$this->db->set('waktu_konfirmasi', date('Y-m-d H:i:s', time()));
		$this->db->set('waktu',  date('m/d/Y', time()));
		$this->db->set('keterangan', 'Terlambat');
		$this->db->where('id', $this->input->post('id'));
		$this->db->update('keberangkatan');

		$jumlah_keterlambatan = $this->db->get_where('keterlambatan', ['bulan' => date('F', time()), 'alasan_keterlambatan' => $this->input->post('keterangan')])->row_array();
		$this->db->set('jumlah_keterlambatan', $jumlah_keterlambatan['jumlah_keterlambatan'] + 1);
		$this->db->where(['bulan' => date('F', time()), 'alasan_keterlambatan' => $this->input->post('keterangan')]);
		$this->db->update('keterlambatan');
		redirect('home/tiba');
	}

	public function history()
	{
		$data['user'] = $this->db->get_where('users', ['email' => $this->session->userdata('email')])->row_array();
		$data['anggotaIkut'] = $this->keberangkatan_model->getAnggotaIkutByIdKapal($data['user']['id_kapal']);
		$data['keberangkatan'] = $this->db->get_where('keberangkatan', ['id_kapal' => $data['user']['id_kapal']]);

		$data['user'] = $this->db->get_where('users', ['email' => $this->session->userdata('email')])->row_array();
		$this->load->view('templates/member/header', $data);
		$this->load->view('member/history', $data);
		$this->load->view('templates/member/footer');
	}


	public function cek_profile()
	{
		$data['user'] = $this->db->get_where('users', ['email' => $this->session->userdata('email')])->row_array();
		$this->load->view('templates/member/header', $data);
		$this->load->view('member/cek_profile', $data);
		$this->load->view('templates/member/footer');
	}

	public function edit_profile()
	{
		$this->load->library('form_validation');

		$this->form_validation->set_rules('password', 'Password', 'trim|required|matches[password1]');
		$this->form_validation->set_rules('password1', 'Password', 'trim|required|matches[password]');

		if ($this->form_validation->run() == false) {
			$data['user'] = $this->db->get_where('users', ['email' => $this->session->userdata('email')])->row_array();
			$this->load->view('templates/member/header', $data);
			$this->load->view('member/edit_profile', $data);
			$this->load->view('templates/member/footer');
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
			redirect('home/cek_profile');
		}
	}
}
