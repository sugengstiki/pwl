<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mahasiswa extends CI_Controller {
	public function __construct(){
		parent::__construct();
	}
	
	public function index()
	{
		$this->load->model('mhs_model');
		$temp['m'] = $this->mhs_model->getAll();
		$this->load->view('mhs/tabel_mhs',$temp);
	}
	public function show($arg1 = '0', $arg2 = ''){
		$temp['nrp'] = $arg1;
		$temp['nama'] = $arg2;
		$this->load->view('mhs/detil_mhs',$temp);
	}	
	
		
		
	
}
