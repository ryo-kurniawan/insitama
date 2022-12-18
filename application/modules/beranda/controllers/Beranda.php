<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Beranda extends MX_Controller{
    //put your code here
    // public function __construct() {
    //     parent::__construct();
    //     $this->load->model('m_repository');
    // }

    public function index(){
        $a['layout'] = 'v_beranda';
        $a['modules'] = 'beranda';
        echo Modules::run('template/frontend', $a);
    }
    public function info_pmb(){
        $a['layout'] = 'v_info_pmb';
        $a['modules'] = 'beranda';
        echo Modules::run('template/frontend', $a);
    }
}