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
		$this->load->library('form_validation');

		$this->form_validation->set_rules('nrp', 'NRP', 'required|min_length[8]');
		$this->form_validation->set_rules('nama', 'Nama', 'required');
		if($this->form_validation->run() == FALSE){
			$temp['m'] = $this->mhs_model->get($arg1);
			$this->load->view('mhs/detil_mhs',$temp);
		} else {
			$data = $this->input->post(array('nrp','nama'));
			$this->mhs_model->koreksi($data, $this->input->post('old_key'));
			$this->load->view('mhs/sukses');
		}
	}
	
	
		
		
	
}