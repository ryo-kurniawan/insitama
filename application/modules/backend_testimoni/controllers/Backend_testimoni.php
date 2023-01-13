<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Backend_testimoni extends MX_Controller{
    //put your code here
    public function __construct() {
        parent::__construct();
        $this->load->model('m_testimoni');
    }

    public function index(){
        $a['layout'] = 'v_testimoni';
        $a['modules'] = 'backend_testimoni';
        $a['data'] = $this->m_testimoni->get_testimoni();
        echo Modules::run('template/backend', $a);
    }

    public function tambah_testimoni(){
        $a['layout'] = 'v_tambah_testimoni';
        $a['modules'] = 'backend_testimoni';
        // $a['data'] = $this->m_faq->get_faq();
        echo Modules::run('template/backend', $a);
    }

    public function tambah_aksi_testimoni(){
        $pertanyaan = $this->input->post('pertanyaan');
		$jawaban = $this->input->post('jawaban');
		
 
		$data = array(
			'pertanyaan' => $pertanyaan,
			'jawaban' => $jawaban
			);
		$this->m_testimoni->input_data($data,'t_testimoni');
		redirect('backend_testimoni');
    }

    function hapus_testimoni($kd_testimoni){
		$where = array('kd_testimoni' => $kd_testimoni);
		$this->m_faq->hapus_testimoni($where,'t_testimoni');
		redirect('backend_testimoni');
	}
    
}