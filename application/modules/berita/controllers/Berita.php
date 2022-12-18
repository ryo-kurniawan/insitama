<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Berita extends MX_Controller{
    //put your code here
    // public function __construct() {
    //     parent::__construct();
    //     $this->load->model('m_repository');
    // }

    public function index(){
        $a['layout'] = 'v_berita';
        $a['modules'] = 'berita';
        echo Modules::run('template/frontend', $a);
    }
    
}