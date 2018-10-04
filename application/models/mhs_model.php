<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class mhs_model extends CI_Model {

	public function __construct()
	{
		parent::__construct();
		$this->load->database();
	}
	public function getAll(){
		$data = $this->db->get('mahasiswa');
		return $data->result();	
	}
	
	public function get($nrp = FALSE)
	{
	   if ($nrp === FALSE)
	   {
		  $query = $this->db->get('mahasiswa');
		  return $query->result();
	   }

	   $this->db->where('nrp',$nrp);
	   $query = $this->db->get('mahasiswa');
	   return $query->row();
	}
	
	public function koreksi($data,$id){
		$this->db->where('nrp',$id);
		$this->db->update('mahasiswa',$data);
	}
}
