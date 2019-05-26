<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{
    public function index(){
        $this->load->view('templates/member/header');
        $this->load->view('member/index');
        $this->load->view('templates/member/footer');
    }

    public function welcome(){
        $this->load->view('templates/member/header');
        $this->load->view('member/welcome');
        $this->load->view('templates/member/footer');
    }    
    
    public function member(){
        $this->load->view('templates/member/header');
        $this->load->view('member/member');
        $this->load->view('templates/member/footer');
    }

    public function berangkat(){
        $this->load->view('templates/member/header');
        $this->load->view('member/berangkat');
        $this->load->view('templates/member/footer');
    }

    public function preview(){
        $this->load->view('templates/member/header');
        $this->load->view('member/preview');
        $this->load->view('templates/member/footer');
    }

    public function tiba(){
        $this->load->view('templates/member/header');
        $this->load->view('member/tiba');
        $this->load->view('templates/member/footer');
    }

    public function history(){
        $this->load->view('templates/member/header');
        $this->load->view('member/history');
        $this->load->view('templates/member/footer');
    }

    
    public function cek_profile(){
        $this->load->view('templates/member/header');
        $this->load->view('member/cek_profile');
        $this->load->view('templates/member/footer');
    }

    public function edit_profile(){
        $this->load->view('templates/member/header');
        $this->load->view('member/edit_profile');
        $this->load->view('templates/member/footer');
    }

    


}