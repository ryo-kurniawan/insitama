<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Layanan extends MX_Controller{
    //put your code here
    // public function __construct() {
    //     parent::__construct();
    //     $this->load->model('m_repository');
    // }

    public function index(){
        $a['layout'] = 'v_layanan';
        $a['modules'] = 'layanan';
        echo Modules::run('template/frontend', $a);
    }
    
}