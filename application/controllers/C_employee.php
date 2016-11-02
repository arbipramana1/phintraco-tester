<?php 

class C_employee extends CI_Controller{

	function __construct(){
		parent::__construct();		
		$this->load->model('M_data_karyawan');
                $this->load->helper('url');
	}

	function index(){
		$data['loop'] = $this->M_data_karyawan->tampil_data()->result();
		$this->load->view('V_employee',$data);
	}

	function new_employee(){
		$this->load->view('v_new_employee');
	}

	function new_addressform(){
		$this->load->view('v_new_addressform');
	}

	function new_bankaccountform(){
		$this->load->view('v_new_bankaccountform');
	}

	function new_educationform(){
		$this->load->view('v_new_educationform');
	}

	function new_documentform(){
		$this->load->view('v_new_documentform');
	}

	function new_familyform(){
		$this->load->view('v_new_familyform');
	}

	function detail_employee(){
		$this->load->view('v_detail_employee');
	}

	function edit_employee(){
		$this->load->view('v_edit_employee');
	}

	function new_claimmedical(){
		$this->load->view('v_new_claimmedical');
	}

	function history_employee(){
		$this->load->view('v_history_employee');
	}

	function tambah_karyawan_aksi(){
		
		// $nrp= $this->input->post('nrp');
		// $full_name = $this->input->post('full_name');
		// $gender = $this->input->post('gender');
		// $no_ktp = $this->input->post('no_ktp');
		// $date_of_birth=$this->input->post('date_of_birth');
		// $birth_place=$this->input->post('birth_place');
		// $mother_maiden_name=$this->input->post('mother_maiden_name');
		// $jamsostek=$this->input->post('jamsostek');
		// $join_date=$this->input->post('join_date');
		// $telephone=$this->input->post('telephone');
		// $mobile=$this->input->post('mobile');
		// $email=$this->input->post('email');
		// $npwp=$this->input->post('npwp');
		// $marital_status=$this->input->post('marital_status');
		// $children=$this->input->post('children');
		// $dependent=$this->input->post('dependent');
		// $religion=$this->input->post('religion');
		// $password=$this->input->post('password');
		// $company=$this->input->post('company');
		// $division=$this->input->post('division');
		// $departement=$this->input->post('departement');
		// $employee_status=$this->input->post('employee_status');
		// $from_date=$this->input->post('from_date');
		// $to_date=$this->input->post('to_date');
		// $position=$this->input->post('position');
		// $jabatan=$this->input->post('jabatan');
		// $photos=$this->input->post('photos');
		// $note=$this->input->post('note');
		
		$post = $this->input->post();
		// unset($post['photos']);

		print_r($post);
		exit();
		
			$data = array(
			
			'nrp' => $nrp,
			'full_name' => $full_name,
			'gender' => $gender,
			'no_ktp' => $no_ktp,
			'date_of_birth' => $date_of_birth,
			'birth_place' => $birth_place,
			'mother_maiden_name' => $mother_maiden_name,
			'jamsostek' => $jamsostek,
			'join_date' => $join_date,
			'telephone' => $telephone,
			'mobile' => $mobile,
			'email' => $email,	
			'npwp' => $npwp,
			'marital_status' => $marital_status,
			'children' => $children,
			'dependent' => $dependent,
			'religion' => $religion,
			'password' => $password,
			'company' => $company,
			'division' => $division,
			'departement' => $departement,
			'employee_status' => $employee_status,
			'from_date' => $from_date,
			'to_date' => $to_date,
			'position' => $position,
			'jabatan' => $jabatan,
			'photos' => $photos,
			'note' => $note
			);

		//upload file
			$config['upload_path']          = "<?php echo base_url(). 'assets\uploads'";
            $config['allowed_types']        = 'gif|jpg|png';
            /*$config['max_size']             = 1000;
            $config['max_width']            = 1024;
            $config['max_height']           = 768;*/

            $this->load->library('upload', $config);

            if ( ! $this->upload->do_upload('photos'))
            {
                    $error = array('error' => $this->upload->display_errors());
                    print_r($error);
                    exit();
                    //$this->load->view('upload_form', $error);
            }
            else
            {
                    $data = array('upload_data' => $this->upload->data());
                    print_r($data);
                    exit();
                    //$this->load->view('upload_success', $data);
            }


		$data['nrp'] = $nrp;
		$this->M_data_karyawan->insert_data($data,'employee_form');
		redirect("http://localhost/phintraco/c_data_karyawan/edit_address/$nrp");
		
	}

	public function do_upload($photos)
    {
            $config['upload_path']          = "<?php echo base_url(). 'assets\uploads'";
            $config['allowed_types']        = 'gif|jpg|png';
            $config['max_size']             = 100;
            $config['max_width']            = 1024;
            $config['max_height']           = 768;

            $this->load->library('upload', $config);

            if ( ! $this->upload->do_upload($photos))
            {
                    $error = array('error' => $this->upload->display_errors());

                    //$this->load->view('upload_form', $error);
            }
            else
            {
                    $data = array('upload_data' => $this->upload->data());

                    //$this->load->view('upload_success', $data);
            }
        }

	function hapus($nrp){
		$where = array('nrp' => $nrp);
		$this->M_data_karyawan->hapus_data($where,'employee_form');
		redirect('http://phintraco.abi-desain.com/c_data_karyawan/');
	}

	function edit($nrp){
	$where = array('nrp' => $nrp);
	$data['nrp'] = $nrp; // disini juga jadinya mesti kirim $id ke view
	$data['loop'] = $this->M_data_karyawan->edit_data($where,'employee_form')->result();
	$this->load->view('v_edit_data_karyawan',$data);
	}

	function update($nrp){ // << jadi masukin kesini kayak function edit

		
		$nrp= $this->input->post('nrp');
		$full_name = $this->input->post('full_name');
		$gender = $this->input->post('gender');
		$no_ktp = $this->input->post('no_ktp');
		$date_of_birth=$this->input->post('date_of_birth');
		$birth_place=$this->input->post('birth_place');
		$mother_maiden_name=$this->input->post('mother_maiden_name');
		$jamsostek=$this->input->post('jamsostek');
		$join_date=$this->input->post('join_date');
		$telephone=$this->input->post('telephone');
		$mobile=$this->input->post('mobile');
		$email=$this->input->post('email');
		$npwp=$this->input->post('npwp');
		$marital_status=$this->input->post('marital_status');
		$children=$this->input->post('children');
		$dependent=$this->input->post('dependent');
		$religion=$this->input->post('religion');
		$password=$this->input->post('password');

		$data = array(
			
			'nrp' => $nrp,
			'full_name' => $full_name,
			'gender' => $gender,
			'no_ktp' => $no_ktp,
			'date_of_birth' => $date_of_birth,
			'birth_place' => $birth_place,
			'mother_maiden_name' => $mother_maiden_name,
			'jamsostek' => $jamsostek,
			'join_date' => $join_date,
			'telephone' => $telephone,
			'mobile' => $mobile,
			'email' => $email,	
			'npwp' => $npwp,
			'marital_status' => $marital_status,
			'children' => $children,
			'dependent' => $dependent,
			'religion' => $religion,
			'password' => $password
			);

	$where = array('nrp' => $nrp); // tadi $id ini undefined
	$this->M_data_karyawan->update_data($where,$data,'employee_form');
	redirect("http://phintraco.abi-desain.com/c_data_karyawan/");
	}

	function edit_address($nrp){
	$where = array('nrp' => $nrp);
	$data['nrp'] = $nrp;
	$data['loop'] = $this->M_data_karyawan->edit_data($where,'employee_form')->result();
	$this->load->view('v_edit_data_alamat_karyawan',$data);
	}

	function update_address($nrp){ // << jadi masukin kesini kayak function edit
		
		$nrp= $this->input->post('nrp');
		$full_name = $this->input->post('full_name');
		$address = $this->input->post('address');
		$city = $this->input->post('city');
		
		$data = array(
			'nrp' => $nrp,
			'full_name' => $full_name,
			'address' => $address,
			'city' => $city,
			);
	
	$where = array('nrp' => $nrp); // tadi $id ini undefined
	
	$this->M_data_karyawan->update_data($where,$data,'employee_form');
	redirect("http://phintraco.abi-desain.com/c_data_karyawan/edit_bank/$nrp");
	}

	function edit_bank($nrp){
	$where = array('nrp' => $nrp);
	$data['nrp'] = $nrp; // disini juga jadinya mesti kirim $id ke view
	$data['loop'] = $this->M_data_karyawan->edit_data($where,'employee_form')->result();
	$this->load->view('v_edit_data_bank_karyawan',$data);
	}

	function update_bank($nrp){ // << jadi masukin kesini kayak function edit
		
		$nrp= $this->input->post('nrp');
		$full_name = $this->input->post('full_name');
		$bank = $this->input->post('bank');
		$account_number = $this->input->post('account_number');
		$basic_salary_amount = $this->input->post('basic_salary_amount');
		
		$data = array(
			
			'nrp' => $nrp,
			'full_name' => $full_name,
			'bank' => $bank,
			'account_number' => $account_number,
			'basic_salary_amount' => $basic_salary_amount,
			);
	
	$where = array('nrp' => $nrp); // tadi $id ini undefined
	$this->M_data_karyawan->update_data($where,$data,'employee_form');
	redirect("http://phintraco.abi-desain.com/c_data_karyawan/edit_education/$nrp");
	}

	function edit_education($nrp){
	$where = array('nrp' => $nrp);
	$data['nrp'] = $nrp; // disini juga jadinya mesti kirim $id ke view
	$data['loop'] = $this->M_data_karyawan->edit_data($where,'employee_form')->result();
	$this->load->view('v_edit_data_education_karyawan',$data);
	}

	function update_education($nrp){ // << jadi masukin kesini kayak function edit
		
		$nrp= $this->input->post('nrp');
		$full_name = $this->input->post('full_name');
		$qualification = $this->input->post('qualification');
 		$year = $this->input->post('year');
		$school = $this->input->post('school');
		$grade = $this->input->post('grade');
		$award = $this->input->post('award');
		$note_edc = $this->input->post('note_edc');
				
		
		$data = array(

			'nrp' => $nrp,
			'full_name' => $full_name,
			'qualification' => $qualification,
			'year' => $year,        
			'school' => $school,     
			'grade'	=> $grade,     
			'award' => $award,  
			'note_edc' => $note_edc

			);
			
	
	$where = array('nrp' => $nrp); // tadi $id ini undefined
	$this->M_data_karyawan->update_data($where,$data,'employee_form');
	redirect("http://phintraco.abi-desain.com/c_data_karyawan/edit_document/$nrp");
	}

	function edit_document($nrp){
	$where = array('nrp' => $nrp);
	$data['nrp'] = $nrp; // disini juga jadinya mesti kirim $id ke view
	$data['loop'] = $this->M_data_karyawan->edit_data($where,'employee_form')->result();
	$this->load->view('v_edit_data_document_karyawan',$data);
	}

	function update_document($nrp){ // << jadi masukin kesini kayak function edit
		
		$nrp= $this->input->post('nrp');
		$full_name = $this->input->post('full_name');
		$document = $this->input->post('document');
 		$file = $this->input->post('file');
		
				
		
		$data = array(

			'nrp' => $nrp,
			'full_name' => $full_name,
			'document' => $document,
			'file' => $file,        
			

			);
	$where = array('nrp' => $nrp); // tadi $id ini undefined
	$this->M_data_karyawan->update_data($where,$data,'employee_form');
	redirect("http://phintraco.abi-desain.com/c_data_karyawan/edit_family/$nrp");
	}

	function edit_family($nrp){
	$where = array('nrp' => $nrp);
	$data['nrp'] = $nrp; // disini juga jadinya mesti kirim $id ke view
	$data['loop'] = $this->M_data_karyawan->edit_data($where,'employee_form')->result();
	$this->load->view('v_edit_data_family_karyawan',$data);
	}

	function update_family($nrp){ // << jadi masukin kesini kayak function edit
		
		$nrp= $this->input->post('nrp');
		$full_name = $this->input->post('full_name');
		$family_relation_r = $this->input->post('family_relation_r');
 		$full_name_family_r = $this->input->post('full_name_family_r');
 		$birth_place_family_r = $this->input->post('birth_place_family_r');
 		$birth_date_family_r = $this->input->post('birth_date_family_r');
 		$emergency_contact = $this->input->post('emergency_contact');
 				
		$data = array(

			'nrp' => $nrp,
			'full_name' => $full_name,
			'family_relation_r' => $family_relation_r,	
			'full_name_family_r' => $full_name_family_r,
			'birth_place_family_r' => $birth_place_family_r,
			'birth_date_family_r' => $birth_date_family_r, 
			'emergency_contact' => $emergency_contact
			);
			
	
	$where = array('nrp' => $nrp); // tadi $id ini undefined
	$this->M_data_karyawan->update_data($where,$data,'employee_form');
	redirect('http://phintraco.abi-desain.com/c_data_karyawan/');
	}

	function mutasi(){
		$data['loop'] = $this->M_data_karyawan->tampil_data()->result();
		$this->load->view('v_mutasi',$data);
	}

	function edit_mutasi($nrp){
	$where = array('nrp' => $nrp);
	$data['nrp'] = $nrp; // disini juga jadinya mesti kirim $id ke view
	$data['loop'] = $this->M_data_karyawan->edit_data($where,'employee_form')->result();
	$this->load->view('v_edit_mutasi',$data);
	}

	function update_mutasi($nrp){ // << jadi masukin kesini kayak function edit
		
		$nrp= $this->input->post('nrp');
		$full_name = $this->input->post('full_name');
		$family_relation_r = $this->input->post('family_relation_r');
		$full_name_family_r = $this->input->post('full_name_family_r');
		$join_date=$this->input->post('join_date');
		$company=$this->input->post('company');
		$division=$this->input->post('division');
		$departement=$this->input->post('departement');
		$employee_status=$this->input->post('employee_status');
		$from_date=$this->input->post('from_date');
		$to_date=$this->input->post('to_date');
		$position=$this->input->post('position');
		$jabatan=$this->input->post('jabatan');
		
		$data = array(

			'nrp' => $nrp,
			'full_name' => $full_name,
			'family_relation_r' => $family_relation_r,
			'full_name_family_r' => $full_name_family_r,
			'join_date' => $join_date,
			'company' => $company,
			'division' => $division,
			'departement' => $departement,
			'employee_status' => $employee_status,
			'from_date' => $from_date,
			'to_date' => $to_date,
			'position' => $position,
			'jabatan' => $jabatan
			
			);

		// print_r($data);
		// exit();
	$where = array('nrp' => $nrp); // tadi $id ini undefined
	$this->M_data_karyawan->update_data($where,$data,'employee_form');
	redirect("http://localhost/phintraco/c_data_karyawan/mutasi");
	}
}