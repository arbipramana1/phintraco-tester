<?php 

class C_report extends CI_Controller{

	function __construct(){
		parent::__construct();		
		$this->load->model('M_data_karyawan');
                $this->load->helper('url');
	}

	function index(){
		$data['loop'] = $this->M_data_karyawan->tampil_data()->result();
		$this->load->view('V_report_query',$data);
	}

	function report_detail(){
		$data['loop'] = $this->M_data_karyawan->tampil_data()->result();
		$this->load->view('V_report_detail',$data);
	}

	// function mutation_form(){
	// 	$data['loop'] = $this->M_data_karyawan->tampil_data()->result();
	// 	$this->load->view('V_new_mutation',$data);
	// }

	
}