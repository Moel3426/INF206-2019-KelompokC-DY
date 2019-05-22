<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Landing extends CI_Controller {

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
		$this->load->view('landing');
	}
	
	public function signup_admin()
	{
		$this->load->view('signup_admin');
	}

	public function signup_member()
	{
		$this->load->view('signup_member');
	}

	public function login()
	{
		$this->load->view('login');
	}

	public function dashboard()
	{
		$this->load->view('dashboard');
	}

	public function home()
	{
		$this->load->view('home');
	}

	public function homeAdmin()
	{
		$this->load->view('homeAdmin');
	}

	public function adminDashboard()
	{
		$this->load->view('adminDashboard');
	}

	public function member()
	{
		$this->load->view('member');
	}

	public function memberAdmin()
	{
		$this->load->view('memberAdmin');
	}

	public function memberView()
	{
		$this->load->view('memberView');
	}

	public function berangkat()
	{
		$this->load->view('berangkat');
	}

	public function cek_profile()
	{
		$this->load->view('cek_profile');
	}

	public function cek_profileAdmin()
	{
		$this->load->view('cek_profileAdmin');
	}

	public function edit_profile()
	{
		$this->load->view('edit_profile');
	}

	public function edit_profileAdmin()
	{
		$this->load->view('edit_profileAdmin');
	}

	public function history()
	{
		$this->load->view('history');
	}

	public function inbox()
	{
		$this->load->view('inbox');
	}

	public function preview()
	{
		$this->load->view('preview');
	}

	public function schedule()
	{
		$this->load->view('schedule');
	}

	public function tiba()
	{
		$this->load->view('tiba');
	}
}
