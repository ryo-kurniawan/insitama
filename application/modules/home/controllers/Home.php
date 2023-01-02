<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends MX_Controller{
    //put your code here
    // public function __construct() {
    //     parent::__construct();
    //     $this->load->model('m_repository');
    // }

    public function index(){
        $a['layout'] = 'v_home';
        $a['modules'] = 'home';
        echo Modules::run('template/backend', $a);
    }
}