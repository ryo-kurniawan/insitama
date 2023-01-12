<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Loker extends MX_Controller{
    //put your code here
    // public function __construct() {
    //     parent::__construct();
    //     $this->load->model('m_repository');
    // }

    public function index(){
        $a['layout'] = 'v_loker';
        $a['modules'] = 'loker';
        echo Modules::run('template/frontend', $a);
    }
    
}