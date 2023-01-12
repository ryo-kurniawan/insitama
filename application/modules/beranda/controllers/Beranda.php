<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Beranda extends MX_Controller{
    //put your code here
    public function __construct() {
        parent::__construct();
        $this->load->model('m_beranda');
    }

    public function index(){
        $a['layout'] = 'v_beranda';
        $a['modules'] = 'beranda';
        $a['faq'] = $this->m_beranda->get_faq();
        echo Modules::run('template/frontend', $a);
    }

}