<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Website extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
    }
    public function index()
    {
        $this->load->view('website/landing');
    }
    public function login()
    {
        $this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email');
        $this->form_validation->set_rules('password', 'Password ', 'required|trim');

        if ($this->form_validation->run() == false) {
            $this->load->view('website/login');
        } else {
            $this->_login();
        }
    }

    private function _login()
    {
        $email = $this->input->post('email');
        $password = $this->input->post('password');
        // $role = $this->input->post('role');
        $user = $this->db->get_where('users', ['email' => $email])->row_array();
        // $role = $this->db->get_where('role', ['role' => $role])->row_array();

        if ($user) {
            //cek password
            if (password_verify($password, $user['password'])) {
                $data = [
                    'email' => $user['email'],
                    'role' => $user['role']
                ];
                if ($this->session->userdata('role') == 1) {
                    $this->session->set_userdata($data);
                    redirect('website/dashboard_admin');
                } else {
                    $this->session->set_userdata($data);
                    redirect('website/dashboard_member');
                }
            } else {
                $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Wrong password!</div>');
                redirect('website/login');
            }
        } else {
            $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Email is not registered!</div>');
            redirect('website/login');
        }
    }
    public function signup_admin()
    {
        $this->form_validation->set_rules('nama', 'Nama', 'required|trim');
        $this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email');
        $this->form_validation->set_rules('alamat', 'Alamat', 'required|trim');
        $this->form_validation->set_rules('nohp', 'Nohp', 'required|trim');
        $this->form_validation->set_rules('password1', 'Password ', 'required|trim');
        $this->form_validation->set_rules('password2', 'Password ', 'required|trim|matches[password1]');
        $this->form_validation->set_rules('pelabuhan', 'Pelabuhan', 'required|trim');
        $this->form_validation->set_rules('id_pelabuhan', 'id_Pelabuhan', 'required|trim');


        if ($this->form_validation->run() == false) {
            $this->load->view('website/signup_admin');
        } else {
            $data = [
                'nama' => $this->input->post('nama', true),
                'email' => $this->input->post('email', true),
                'alamat' => $this->input->post('alamat', true),
                'no_hp' => $this->input->post('nohp', true),
                'password' => password_hash($this->input->post('password1'), PASSWORD_DEFAULT),
                'pelabuhan' => $this->input->post('pelabuhan', true),
                'role' => 1
            ];
            $this->db->insert('users', $data);
            $this->session->set_flashdata('message', '<div class= "alert alert-success" role="alert">
            Selamat, Admin telah terdaftar...  </div>');
            redirect('index.php/website');
        }
    }


    public function signUp()
    {
        $this->load->view('website/signup_member');
    }

    public function dosignup_user()
    {
        $this->form_validation->set_rules('nama', 'Nama', 'required|trim');
        $this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email');
        $this->form_validation->set_rules('alamat', 'Alamat', 'required|trim');
        $this->form_validation->set_rules('nohp', 'Nohp', 'required|trim');
        $this->form_validation->set_rules('password1', 'Password ', 'required|trim|matches[password2]');
        $this->form_validation->set_rules('password2', 'Password ', 'required|trim|matches[password1]');
        $this->form_validation->set_rules('id_kapal', 'id_kapal', 'required|trim');
        if ($this->form_validation->run() == false) {
            $this->load->view('index.php/website/signup_member');
        } else {
            $data = [
                'nama' => $this->input->post('nama', true),
                'email' => $this->input->post('email', true),
                'alamat' => $this->input->post('alamat', true),
                'no_hp' => $this->input->post('nohp', true),
                'password' => password_hash($this->input->post('password1'), PASSWORD_DEFAULT),
                'id_kapal' => $this->input->post('id_kapal', true),
                'role' => 2

            ];

            $this->db->insert('users', $data);
            $this->session->set_flashdata('message', '<div class= "alert alert-success" role="alert">
            Selamat, user telah terdaftar...  </div>');
            redirect('index.php/website');
        }
    }

    public function dashboard_admin()
    {
        $this->load->view('website/dashboard_admin');
    }

    public function dashboard_member()
    {
        $this->load->view('website/dashboard_member');
    }

    public function home()
    {
        $this->load->view('website/home');
    }

    public function homeAdmin()
    {
        $this->load->view('website/homeAdmin');
    }

    public function adminDashboard()
    {
        $this->load->view('website/adminDashboard');
    }

    public function member()
    {
        $this->load->view('website/member');
    }

    public function memberAdmin()
    {
        $this->load->view('website/memberAdmin');
    }

    public function memberView()
    {
        $this->load->view('website/memberView');
    }

    public function berangkat()
    {
        $this->load->view('website/berangkat');
    }

    public function cek_profile()
    {
        $this->load->view('website/cek_profile');
    }

    public function cek_profileAdmin()
    {
        $this->load->view('website/cek_profileAdmin');
    }

    public function edit_profile()
    {
        $this->load->view('website/edit_profile');
    }

    public function edit_profileAdmin()
    {
        $this->load->view('website/edit_profileAdmin');
    }

    public function history()
    {
        $this->load->view('website/history');
    }

    public function inbox()
    {
        $this->load->view('website/inbox');
    }

    public function preview()
    {
        $this->load->view('website/preview');
    }

    public function schedule()
    {
        $this->load->view('website/schedule');
    }

    public function tiba()
    {
        $this->load->view('website/tiba');
    }

    public function pesan()
    {
        $this->load->view('website/pesan');
    }
}
