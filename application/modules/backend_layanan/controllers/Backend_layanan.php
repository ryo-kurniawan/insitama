<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Backend_layanan extends MX_Controller{
    //put your code here
    public function __construct() {
        parent::__construct();
        $this->load->model('m_layanan');
    }

    public function index(){
        $a['layout'] = 'v_layanan';
        $a['modules'] = 'backend_layanan';
        $a['data'] = $this->m_layanan->get_layanan();
        echo Modules::run('template/backend', $a);
    }

    public function tambah_layanan(){
        $a['layout'] = 'v_tambah_layanan';
        $a['modules'] = 'backend_layanan';
        // $a['data'] = $this->m_faq->get_faq();
        echo Modules::run('template/backend', $a);
    }

    public function tambah_aksi_layanan(){
        $pertanyaan = $this->input->post('pertanyaan');
		$jawaban = $this->input->post('jawaban');
		
 
		$data = array(
			'pertanyaan' => $pertanyaan,
			'jawaban' => $jawaban
			);
		$this->m_layanan->input_data($data,'t_layanan');
		redirect('backend_layanan');
    }

    function hapus_layanan($kd_layanan){
		$where = array('kd_layanan' => $kd_layanan);
		$this->m_faq->hapus_layanan($where,'t_layanan');
		redirect('backend_layanan');
	}
    
}