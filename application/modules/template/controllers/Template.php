<?php


class Template extends MX_Controller{

    
    public function frontend ($template){

        $this->load->view('v_front',$template);
    }

    public function backend ($template_backend){

        $this->load->view('v_backend',$template_backend);
    }
}
