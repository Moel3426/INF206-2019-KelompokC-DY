<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin extends CI_Controller
{
    public function index(){
        $data['user'] = $this->db->get_where('users', ['email' => $this->session->userdata('email')])->row_array();
		$this->load->view('templates/admin/header', $data);
        $this->load->view('admin/index');
        $this->load->view('templates/admin/footer');
    }

    public function welcome(){
        $data['user'] = $this->db->get_where('users', ['email' => $this->session->userdata('email')])->row_array();
		$this->load->view('templates/admin/header', $data);
        $this->load->view('admin/welcome');
        $this->load->view('templates/admin/footer');
    }    
    
    public function member(){
        $data['user'] = $this->db->get_where('users', ['email' => $this->session->userdata('email')])->row_array();
		$this->load->view('templates/admin/header', $data);
        $this->load->view('admin/member');
        $this->load->view('templates/admin/footer');
    }

    public function memberView(){
        $data['user'] = $this->db->get_where('users', ['email' => $this->session->userdata('email')])->row_array();
		$this->load->view('templates/admin/header', $data);
        $this->load->view('admin/memberView');
        $this->load->view('templates/admin/footer');
    }

    public function inbox(){
        $data['user'] = $this->db->get_where('users', ['email' => $this->session->userdata('email')])->row_array();
		$this->load->view('templates/admin/header', $data);
        $this->load->view('admin/inbox');
        $this->load->view('templates/admin/footer');
    }

    public function pesan(){
        $data['user'] = $this->db->get_where('users', ['email' => $this->session->userdata('email')])->row_array();
		$this->load->view('templates/admin/header', $data);
        $this->load->view('admin/pesan');
        $this->load->view('templates/admin/footer');
    }

    public function cek_profile(){
        $data['user'] = $this->db->get_where('users', ['email' => $this->session->userdata('email')])->row_array();
		$this->load->view('templates/admin/header', $data);
        $this->load->view('admin/cek_profile');
        $this->load->view('templates/admin/footer');
    }

    public function edit_profile(){
        $data['user'] = $this->db->get_where('users', ['email' => $this->session->userdata('email')])->row_array();
		$this->load->view('templates/admin/header', $data);
        $this->load->view('admin/edit_profile');
        $this->load->view('templates/admin/footer');
    }

    


}