<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Grafik extends CI_Controller
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
	public function index()
	{
		// jika ingin menambah alasan baru yang ada di tabel keterlambatan tinggal tambah didalam list
		$list = [
			'cuaca buruk',
			'hasil tangkapan belum mencapai target'
		];
		$data['jumlah_alasan'] = count($list);
		for ($i = 0; $i < $data['jumlah_alasan']; $i++) {
			$data['item'][] = $this->db->query("select * from keterlambatan where alasan_keterlambatan='$list[$i]' group by bulan order by bulan DESC");
		}
		$this->load->view('chart', $data, $list);
	}

	public function nelayan_berlayar()
	{
		$data['data'] = $this->db->query('select * from nelayan_berlayar');
		$this->load->view('berlayar', $data);
	}
}
