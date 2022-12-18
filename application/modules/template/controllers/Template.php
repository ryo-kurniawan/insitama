<?php


class Template extends MX_Controller{

    
    public function frontend ($template){

        $this->load->view('v_front',$template);


    }
}
