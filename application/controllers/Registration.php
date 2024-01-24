<?php
	defined('BASEPATH') or exit("No Direct Access");
	/*error_reporting(0);
session_start();*/
	class Registration extends CI_controller
	{
		public function __construct()
		{
			parent::__construct();
			$this->load->helper('form');
			$this->load->helper('url');
			$this->load->library('form_validation');
			$this->load->helper('string');
			$this->load->library('session');
			//$this->load->model('Admission_M');
			$this->load->model('Dba_model');
			//$this->load->model('NursingRegister_M');
		}

		public function index()
		{
		$this->counselling_form();
		}

		public function counselling_form()
		{
		$con['Active_YN']=1;

		$data['category_data']=$this->Dba_model->select("category_master")->result_array();
		//print_r("fuif");die;
		$this->load->view("iti/counselling_form",$data);
		}




		public function view_district_ajax()
		{
			$id=$this->input->post("Division_Id");
			$data['district_data']=$this->Dba_model->select_query("SELECT dm.* FROM distict_master AS dm  WHERE dm.Division_Id='".$id."' and dm.Active_YN='1' ")->result_array();
			//print_r($data['district_data']);die;
			$this->load->view('iti/district_data_ajax',$data);
		}
		public function view_block_ajax()
		{
			$id=$this->input->post("District_ID");
			$data['block_data']=$this->Dba_model->select_query("SELECT bm.* FROM block_master AS bm  WHERE bm.District_ID='".$id."' and bm.Active_YN='1' ")->result_array();
			//print_r($data['district_data']);die;
			$this->load->view('iti/block_data_ajax',$data);
		}

		public function view_panchayat_ajax()
		{
			//$category=$this->input->post("category");
			$id=$this->input->post("Block_Id");
			$data['panchayat_data']=$this->Dba_model->select_query("SELECT bm.* FROM panchayat_master AS bm  WHERE bm.Block_Id='".$id."' and bm.gp_type IN('GP') And bm.Active_YN='1' ")->result_array();

			//print_r($category);die;
			/* if($category=='1'){

			$data['panchayat_data']=$this->Dba_model->select_query("SELECT bm.* FROM panchayat_master AS bm  WHERE bm.Block_Id='".$id."' and bm.gp_type IN('GP') And bm.Active_YN='1' ")->result_array();
			//
			}
			else
			if($category=='2'){
			$id=$this->input->post("Block_Id");
			$data['panchayat_data']=$this->Dba_model->select_query("SELECT bm.* FROM panchayat_master AS bm  WHERE bm.Block_Id='".$id."' and  bm.gp_type NOT IN('GP') AND bm.Active_YN='1' ")->result_array();
			//print_r($data['district_data']);die;
			}*/

			$this->load->view('iti/panchayat_data_ajax',$data);
		}

		public function view_gram_ajax()
		{
			$id=$this->input->post("Panchayat_Id");
			$data['village_data']=$this->Dba_model->select_query("SELECT bm.* FROM village_master AS bm  WHERE bm.Panchayat_Id='".$id."' and bm.Active_YN='1' ")->result_array();
			//print_r($data['district_data']);die;
			$this->load->view('iti/gram_data_ajax',$data);
		}

		public function CousellingForm_Save()
		{
			extract($this->input->post());

			$data['samagra_id'] = $this->input->post('samagra_id');
			$data['board_name'] = $this->input->post('board_name');
			$data['roll_no'] = $this->input->post('roll_no');
			$data['applicant_name_eg'] = $this->input->post('applicant_name_eg');
			$data['applicant_name_hi'] = $this->input->post('applicant_name_hi');
			$data['father_name_eg'] = $this->input->post('father_name_eg');
			$data['father_name_hi'] = $this->input->post('father_name_hi');
			$data['mother_name_eg'] = $this->input->post('mother_name_eg');
			$data['mother_name_hi'] = $this->input->post('mother_name_hi');
			$data['date_of_birth'] = $this->input->post('date_of_birth');
			$data['10_pass_yn'] = $this->input->post('10_pass_yn');
			$data['gender'] = $this->input->post('gender');
			$data['category'] = $this->input->post('category');
			$data['mp_native_yn'] = $this->input->post('mp_native_yn');
			$data['annual_family_income'] = $this->input->post('annual_family_income');
			$data['area_of_land'] = $this->input->post('area_of_land');
			$data['unorganized_worker_regno'] = $this->input->post('unorganized_worker_regno');
			$data['handicap_yn'] = $this->input->post('handicap_yn');
			$data['freedom_fighter'] = $this->input->post('freedom_fighter_yn');
			$data['soldier_exservicemen'] = $this->input->post('soldier_exservicemen_yn');
			$data['orphan'] = $this->input->post('orphan_yn');
			$data['iti_department'] = $this->input->post('iti_department_yn');
			$data['ncc_certificate'] = $this->input->post('ncc_certificate_yn');
			$data['bhopal_gas_victim'] = $this->input->post('bhopal_gas_victim_yn');
			$data['flood_displaced'] = $this->input->post('flood_displaced_yn');
			$data['narmada_dam_scheme'] = $this->input->post('narmada_dam_scheme_yn');
			$data['trained_from_sdc'] = $this->input->post('trained_from_sdc_yn');
			$data['left_wing_area'] = $this->input->post('left_wing_area_yn');
			$data['hearing_loss'] = $this->input->post('hearing_loss_yn');
			$data['blind'] = $this->input->post('blind_yn');
			$data['house_no'] = $this->input->post('house_no');
			$data['street_locality'] = $this->input->post('street_locality');
			$data['rural_urban_area'] = $this->input->post('rural_urban_area');
			$data['division'] = $this->input->post('division');
			$data['district'] = $this->input->post('district');
			$data['block'] = $this->input->post('block');
			$data['panchayat'] = $this->input->post('panchayat');
			$data['village'] = $this->input->post('village');
			$data['assembly_name'] = $this->input->post('assembly_name');
			$data['pincode'] = $this->input->post('pincode');
			$data['email'] = $this->input->post('email');
			$data['mobile'] = $this->input->post('mobile');
			$data['permanent_address'] = $this->input->post('permanent_address');

			if($this->input->post('permanent_address')=='')
			{
			$data['house_no_p'] = $this->input->post('house_no_p');
			$data['street_locality_p'] = $this->input->post('street_locality_p');
			$data['rural_urban_area_p'] = $this->input->post('rural_urban_area_p');
			$data['division_p'] = $this->input->post('division_p');
			$data['district_p'] = $this->input->post('district_p');
			$data['block_p'] = $this->input->post('block_p');
			$data['panchayat_p'] = $this->input->post('panchayat_p');
			$data['village_p'] = $this->input->post('village_p');
			$data['assembly_name_p'] = $this->input->post('assembly_name_p');
			$data['pincode_p'] = $this->input->post('pincode_p');
			$data['email_p'] = $this->input->post('email_p');
			$data['mobile_p'] = $this->input->post('mobile_p');
			}
			$data['declaration'] = $this->input->post('declaration');


			//echo"<pre>"; print_r($data);die;

			$check = $this->Dba_model->select_where("counselling_master",array('samagra_id'=>$samagra_id,'roll_no'=>$roll_no));
			$n = $check->num_rows();
			//print_r($n);die;
			if($n==0)
			{

            $n1 = $this->Dba_model->insert("counselling_master",$data);
			$last_id = $this->db->insert_id();

			if($n1==1){

			$data1['cid'] = $last_id;
			$data1['exam'] = $this->input->post('exam');
			$data1['e_rollno'] = $this->input->post('e_rollno');
			$data1['subject'] = $this->input->post('subject');
			$data1['e_board_name'] = $this->input->post('e_board_name');
			$data1['total_marks'] = $this->input->post('total_marks');
			$data1['obt_marks'] = $this->input->post('obt_marks');
			$data1['grade'] = $this->input->post('grade');
			$data1['percentage'] = $this->input->post('percentage');
			$data1['passing_year'] = $this->input->post('passing_year');
			$data1['cert_rollno'] = $this->input->post('cert_rollno');
			$data1['Registration_no'] = "CRISP/ITI/".$this->input->post('roll_no');

			$this->Dba_model->insert("educational_qualification",$data1);
			$this->session->set_userdata('roll_no',$this->input->post('roll_no'))	;
			$this->session->set_userdata('Registration_no',$data1['Registration_no'])	;

			echo "<script>alert('Your Admission Form has been Successfully Submitted!!! ');window.location='".base_url('Registration/SuccessSave/').$this->input->post('roll_no').""."';</script>";
			}
			else{

			echo "<script>alert('Something Wrong');window.location='".base_url()."Registration"."';</script>";
			}
		}
		else{
		echo "<script>alert('You Have Already Registered');window.location='".base_url()."Registration"."';</script>";
		}
		}


		public function SuccessSave()
		{

			$data = array(
				'rollno' => $this->session->userdata('roll_no'),
				'reg_no' => $this->session->userdata('Registration_no')

			);

		//	print_r($data);die;
		/* $msg="Your Online Admission Registration No is CRISP/ITI/".$Registration_no."  Please Keen in Record for further communication. "; */
		$this->load->view('success_msg',$data);

		}

		public function FromDetails()
		{
		$roll_no=$this->session->userdata('roll_no');
		//print_r($roll_no);die;
		$data['candidate_data']=$this->Dba_model->select_query("SELECT a.*,b.*,bm.boardname,c.Division_name,d.District_Name,e.Block_Name,f.Panchayat_Name,g.Village_Name FROM `counselling_master` a
		LEFT JOIN educational_qualification b ON b.cid=a.cid
		JOIN board_master bm ON bm.bid=a.board_name
		JOIN division_master c ON c.Division_id=a.division
		JOIN distict_master d ON d.District_Id=a.district
		JOIN block_master e ON e.Block_ID=a.block
		JOIN panchayat_master f ON f.Panchayat_Id=a.panchayat
		LEFT JOIN village_master g ON g.Village_Id=a.village
		WHERE a.roll_no='".$roll_no."' ")->result_array();
		$this->load->view('iti/counselling_form_view',$data);

		}





		public function GetForm()
		{
			$this->load->view('iti/get_form');
		}

		public function ViewForm()
		{
		$roll_no=$this->input->post('roll_no');
		$date_of_birth=$this->input->post('date_of_birth');

		//print_r($roll_no."---".$date_of_birth);die;

		$data['candidate_data']=$this->Dba_model->select_query("SELECT a.*,b.*,bm.boardname,c.Division_name,d.District_Name,e.Block_Name,f.Panchayat_Name,g.Village_Name FROM `counselling_master` a
		LEFT JOIN educational_qualification b ON b.cid=a.cid
		JOIN board_master bm ON bm.bid=a.board_name
		JOIN division_master c ON c.Division_id=a.division
		JOIN distict_master d ON d.District_Id=a.district
		JOIN block_master e ON e.Block_ID=a.block
		JOIN panchayat_master f ON f.Panchayat_Id=a.panchayat
		LEFT JOIN village_master g ON g.Village_Id=a.village
		WHERE a.roll_no='".$roll_no."' AND a.date_of_birth='".$date_of_birth."' ")->result_array();

		//echo"<pre>"; print_r($data);die;
		if($roll_no!='')
		{
		$this->load->view('iti/counselling_form_view',$data);
		}
		else{
		redirect("Registration/GetForm");
		}
		}













	}