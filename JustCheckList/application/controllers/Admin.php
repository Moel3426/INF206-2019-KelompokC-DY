<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin extends CI_Controller
{
    public function index(){
        $this->load->view('templates/admin/header');
        $this->load->view('admin/index');
        $this->load->view('templates/admin/footer');
    }

    public function welcome(){
        $this->load->view('templates/admin/header');
        $this->load->view('admin/welcome');
        $this->load->view('templates/admin/footer');
    }    
    
    public function member(){
        $this->load->view('templates/admin/header');
        $this->load->view('admin/member');
        $this->load->view('templates/admin/footer');
    }

    public function memberView(){
        $this->load->view('templates/admin/header');
        $this->load->view('admin/memberView');
        $this->load->view('templates/admin/footer');
    }

    public function inbox(){
        $this->load->view('templates/admin/header');
        $this->load->view('admin/inbox');
        $this->load->view('templates/admin/footer');
    }

    public function pesan(){
        $this->load->view('templates/admin/header');
        $this->load->view('admin/pesan');
        $this->load->view('templates/admin/footer');
    }

    public function cek_profile(){
        $this->load->view('templates/admin/header');
        $this->load->view('admin/cek_profile');
        $this->load->view('templates/admin/footer');
    }

    public function edit_profile(){
        $this->load->view('templates/admin/header');
        $this->load->view('admin/edit_profile');
        $this->load->view('templates/admin/footer');
    }

    


}