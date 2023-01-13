<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_tim extends CI_Model{
    public function get_tim(){
		$data2 = $this->db->query("SELECT * FROM t_tim");
		return $data2->result();
	} 

	public function input_data($data,$table){
		$this->db->insert($table,$data);
	}

	public function hapus_tim($where,$table){
	$this->db->where($where);
	$this->db->delete($table);
}
}