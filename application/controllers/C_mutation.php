<?php 

class C_mutation extends CI_Controller{

	function __construct(){
		parent::__construct();		
		$this->load->model('M_data_karyawan');
                $this->load->helper('url');
	}

	function index(){
		$data['loop'] = $this->M_data_karyawan->tampil_data()->result();
		$this->load->view('V_mutation',$data);
	}

	function mutation_detail(){
		$data['loop'] = $this->M_data_karyawan->tampil_data()->result();
		$this->load->view('V_mutationdetail',$data);
	}

	function mutation_form(){
		$data['loop'] = $this->M_data_karyawan->tampil_data()->result();
		$this->load->view('V_new_mutation',$data);
	}

	
}