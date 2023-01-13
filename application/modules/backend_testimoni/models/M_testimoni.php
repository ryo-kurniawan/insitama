<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_testimoni extends CI_Model{
    public function get_testimoni(){
		$data2 = $this->db->query("SELECT * FROM t_testimoni");
		return $data2->result();
	} 

	public function input_data($data,$table){
		$this->db->insert($table,$data);
	}

	public function hapus_testimoni($where,$table){
	$this->db->where($where);
	$this->db->delete($table);
}
}