<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Backend_tim extends MX_Controller{
    //put your code here
    public function __construct() {
        parent::__construct();
        $this->load->model('m_tim');
    }

    public function index(){
        $a['layout'] = 'v_tim';
        $a['modules'] = 'backend_tim';
        $a['data'] = $this->m_tim->get_tim();
        echo Modules::run('template/backend', $a);
    }

    public function tambah_tim(){
        $a['layout'] = 'v_tambah_tim';
        $a['modules'] = 'backend_tim';
        // $a['data'] = $this->m_faq->get_faq();
        echo Modules::run('template/backend', $a);
    }

    public function tambah_aksi_tim(){
        $pertanyaan = $this->input->post('pertanyaan');
		$jawaban = $this->input->post('jawaban');
		
 
		$data = array(
			'pertanyaan' => $pertanyaan,
			'jawaban' => $jawaban
			);
		$this->m_faq->input_data($data,'t_faq');
		redirect('backend_faq');
    }

    function hapus_tim($kd_tim){
		$where = array('kd_tim' => $kd_tim);
		$this->m_faq->hapus_tim($where,'t_tim');
		redirect('backend_tim');
	}
    
}