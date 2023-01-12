<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_beranda extends CI_Model{
    public function get_faq(){
		$data2 = $this->db->query("SELECT * FROM t_faq");
		return $data2->result();
	} 
}