<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{
    public function index(){
        $data['user'] = $this->db->get_where('users', ['email' => $this->session->userdata('email')])->row_array();
        $this->load->view('templates/member/header',$data);
        $this->load->view('member/index');
        $this->load->view('templates/member/footer');
    }

    public function welcome(){
        $data['user'] = $this->db->get_where('users', ['email' => $this->session->userdata('email')])->row_array();
        $this->load->view('templates/member/header',$data);
        $this->load->view('member/welcome');
        $this->load->view('templates/member/footer');
    }    
    
    public function member(){
        $data['user'] = $this->db->get_where('users', ['email' => $this->session->userdata('email')])->row_array();
        $data['member'] = $this->member_model->tampil_data()->result();
        $data['users'] = $this->db->get_where('users', ['email' => $this->session->userdata('email')])->row_array();
        $data['tb_member'] = $this->db->get_where('tb_member', ['id_member' => $this->session->userdata('id')])->result_array();
        $this->load->view('templates/member/header',$data);
        $this->load->view('member/member', $data);
        $this->load->view('templates/member/footer');
	
		
	}

    public function berangkat(){
        $data['user'] = $this->db->get_where('users', ['email' => $this->session->userdata('email')])->row_array();
        $this->load->view('templates/member/header',$data);
        $this->load->view('member/berangkat');
        $this->load->view('templates/member/footer');
    }

    public function preview(){
        $data['user'] = $this->db->get_where('users', ['email' => $this->session->userdata('email')])->row_array();
        $this->load->view('templates/member/header',$data);
        $this->load->view('member/preview');
        $this->load->view('templates/member/footer');
    }

    public function tiba(){
        $data['user'] = $this->db->get_where('users', ['email' => $this->session->userdata('email')])->row_array();
        $this->load->view('templates/member/header',$data);
        $this->load->view('member/tiba');
        $this->load->view('templates/member/footer');
    }

    public function history(){
        $data['user'] = $this->db->get_where('users', ['email' => $this->session->userdata('email')])->row_array();
        $this->load->view('templates/member/header',$data);
        $this->load->view('member/history');
        $this->load->view('templates/member/footer');
    }

    
    public function cek_profile(){
        $data['user'] = $this->db->get_where('users', ['email' => $this->session->userdata('email')])->row_array();
        $this->load->view('templates/member/header',$data);
        $this->load->view('member/cek_profile');
        $this->load->view('templates/member/footer');
    }

    public function edit_profile(){
        $data['user'] = $this->db->get_where('users', ['email' => $this->session->userdata('email')])->row_array();
        $this->load->view('templates/member/header',$data);
        $this->load->view('member/edit_profile');
        $this->load->view('templates/member/footer');
    }

    


}