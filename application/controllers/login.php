<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class login extends CI_Controller {

	public function index()
	{
		$a['name'] = 'Randy Prima Putra';
		$this->load->view('v_login',$a);
	}
	
	public function main()
	{
		$this->load->model('MSiswa');
		$b['siswa'] = $this->MSiswa->get_siswa();
		
		$this->load->view('v_main', $b);
	}
	
}