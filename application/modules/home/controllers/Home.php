<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends MX_Controller{
    
    public function __construct() {
        parent::__construct();
        // $this->load->model('m_home');
        if ($this->session->userdata('status') != "login") {
            redirect(base_url("auth"));
        }
    }
    

    public function index(){
        $a['layout'] = 'v_home';
        $a['modules'] = 'home';
        echo Modules::run('template/backend', $a);
    }
}