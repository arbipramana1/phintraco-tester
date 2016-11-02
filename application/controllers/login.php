<?php 

class login extends CI_Controller{

	function __construct(){
		parent::__construct();		
		$this->load->model('M_data_karyawan');
                $this->load->helper('url');
	}

	function index(){
		$data['loop'] = $this->M_data_karyawan->tampil_data()->result();
		$this->load->view('login',$data);
	}
	
}