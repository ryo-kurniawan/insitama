<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends MX_Controller{
    //put your code here
    public function __construct() {
        parent::__construct();
        $this->load->model('m_auth');
    }

    public function index(){
        $this->load->view('v_auth');
    }

    function login(){
		$username = $this->input->post('username');
		$password = $this->input->post('password');
		$where = array(
			'username' => $username,
			'password' => md5($password)
			);
		$cek = $this->m_auth->cek_login("t_user",$where)->num_rows();
		if($cek > 0){

			$data_session = array(
				'username' 	=> $username,
				'status'	=> 'login'
				);

			$this->session->set_userdata($data_session);

			redirect(base_url("home"));

		}else{
			$this->session->set_flashdata('info', 'Username atau password salah! <br>Silahkan untuk dicoba kembali');
			redirect('auth');
			//echo "Username dan password salah !";
		}
	}

    function logout()
    {
        $this->session->sess_destroy();
        redirect(base_url());
    }
    
}