<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Backend_faq extends MX_Controller{
    //put your code here
    public function __construct() {
        parent::__construct();
        $this->load->model('m_faq');
    }

    public function index(){
        $a['layout'] = 'v_faq';
        $a['modules'] = 'backend_faq';
        $a['data'] = $this->m_faq->get_faq();
        echo Modules::run('template/backend', $a);
    }

    public function tambah_faq(){
        $a['layout'] = 'v_tambah_faq';
        $a['modules'] = 'backend_faq';
        // $a['data'] = $this->m_faq->get_faq();
        echo Modules::run('template/backend', $a);
    }

    public function tambah_aksi_faq(){
        $pertanyaan = $this->input->post('pertanyaan');
		$jawaban = $this->input->post('jawaban');
		
 
		$data = array(
			'pertanyaan' => $pertanyaan,
			'jawaban' => $jawaban
			);
		$this->m_faq->input_data($data,'t_faq');
		redirect('backend_faq');
    }

    function hapus_faq($kd_faq){
		$where = array('kd_faq' => $kd_faq);
		$this->m_faq->hapus_faq($where,'t_faq');
		redirect('backend_faq');
	}
    
}