<?php
class Login extends CI_Controller {

    function __construct() {
        parent::__construct();
        if(!isset($_SESSION))
        {
            session_start();
        }
        $this->load->model(array('M_user'));
        if ($this->session->userdata('u_name')) {
            redirect('Home/readData');
        }
    }
    function index() {
        $this->load->view('login');
    }

    function proses() {
            $usr = $this->input->post('username');
            $psw = $this->input->post('password');
            $u = ($usr);
            $p = md5(($psw));
            $cek = $this->M_user->cek($u, $p);
            if ($cek->num_rows() > 0) {
                //login berhasil, buat session
                foreach ($cek->result() as $qad) {
                    $sess_data['u_id'] = $qad->u_id;
                    $sess_data['nama'] = $qad->nama;
                    $sess_data['u_name'] = $qad->u_name;
                    $sess_data['role'] = $qad->role;
                    $this->session->set_userdata($sess_data);
                }
                redirect('Home/readData');
            } else {
                $this->session->set_flashdata('result_login', '<br>Username atau Password yang anda masukkan salah.');
                redirect('login');
            }
        }
    }

    function logout() {
        $this->session->sess_destroy();
        redirect('login');
    }
