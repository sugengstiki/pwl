<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Mahasiswa extends CI_Controller {
	public function __construct(){
		parent::__construct();
		$this->load->helper('url');
		$this->load->helper('form');
	}
	
	public function index()
	{
		$this->load->model('mhs_model');
		$temp['m'] = $this->mhs_model->getAll();
		$this->load->view('mhs/tabel_mhs',$temp);
	}
	
	public function show($arg1 = FALSE){
		$this->load->model('mhs_model');
		$temp['m'] = $this->mhs_model->get($arg1);
		$this->load->view('mhs/detil_mhs',$temp);
	}
	
	
		
		
	
}