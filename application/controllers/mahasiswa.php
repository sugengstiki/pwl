<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mahasiswa extends CI_Controller {
	
	public function index()
	{
		$this->load->view('tabel_mhs');
	}
	public function show($arg1 = '0', $arg2 = ''){
		$temp['nrp'] = $arg1;
		$temp['nama'] = $arg2;
		$this->load->view('detil_mhs',$temp);
	}	
}
