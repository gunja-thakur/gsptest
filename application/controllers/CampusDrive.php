<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class CampusDrive extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('CampusDrive_M');
		$this->load->model('Recruiters_M');
		$this->load->model('Dba_model');
		$this->load->helper('string');
		$this->load->library('email');
		date_default_timezone_set("Asia/Kolkata");
	}

	public function index()
	{
		$this->ViewList();
	}

	public function Add()
	{
		$this->load->view('campus/add_campus');
	}

	public function Add_CampusSave()
	{

		$data['campus_title']=$this->input->post("campus_title");
		$data['campus_date']=$this->input->post("campus_date");
		$data['campus_description']=$this->input->post("campus_description");
		$data['campus_details']=$this->input->post("campus_details");
		$data['contact_person']=$this->input->post("contact_person");
		$data['email']=$this->input->post("email");
		$data['contact_person_mobile']=$this->input->post("contact_person_mobile");
		$data['rm_id']=$this->session->userdata('user_id');
		/* File Upload */
		if(!empty($_FILES['campus_attachment']['name'])) {
			$genratedID = "campus" . "_" . date('Ymdhis') . "";
			$ext = pathinfo($_FILES['campus_attachment']['name'], PATHINFO_EXTENSION);
			$uploadpath = strtolower($genratedID . "." . $ext);

			$config['upload_path']   = './assets/campus/';
			$config['allowed_types'] = '*';
			$config['max_size']	= '1000000000000000';
			$config['file_name']	= $uploadpath;
			$this->load->library('upload', $config);
			$this->upload->initialize($config);

			if($this->upload->do_upload('campus_attachment')) {
				$upload_data = $this->upload->data();
				$data['campus_attachment'] = $uploadpath;
			} else {
				echo $this->upload->display_errors();
			}
		}
		/* File Upload */
		//echo"<pre>"; print_r($data); die;

		$n=$this->Dba_model->insert("campusdrive_master",$data);

		if($n==1)
		{
			echo "<script>alert('Campus Successfully Added!');window.location='" . base_url() . "CampusDrive" . "';</script>";
		}else{
			echo "<script>alert('Something Wrong!');window.location='" . base_url() . "CampusDrive/Add" . "';</script>";
		}

	}

	public function ViewList()
	{
		if($this->session->userdata('user_role') == '1' or $this->session->userdata('user_role') == '2' or $this->session->userdata('user_role') == '3') {
		$flag=1;
		$rm_id='';
		}
		else{
		$flag=2;
		$rm_id=$this->session->userdata('user_id');
		}
		$data['recruiters_data']  = $this->Recruiters_M->Get_RecruitersList($flag, $status = '', $from_date = '', $to_date = '');
		$data['campus_data']  = $this->CampusDrive_M->Get_CampusList($flag,$rm_id);
		//echo"<pre>"; print_r($data['campus_data']); die;
		$this->load->view('campus/campus_list',$data);

	}

	public function ViewList_Ajax()
	{

		$flag=1;
		$rm_id=$this->input->post('company_name');
		$vr_status=$this->input->post('vr_status');
		$from_date=$this->input->post('from_date');
		$to_date=$this->input->post('to_date');



		$data['campus_data']  = $this->CampusDrive_M->Get_CampusListAjax($flag,$rm_id,$vr_status,$from_date,$to_date);
		//echo"<pre>"; print_r($data['campus_data']); die;
		$this->load->view('campus/campus_list_ajax',$data);

	}



	public function View_Singlecampus()
	{
		$cm_id=$this->input->post("cm_id");
		$rm_id=$this->session->userdata('user_id');
		$data['campus_data']  = $this->CampusDrive_M->Get_SingleCampus($cm_id,$rm_id);

		//echo"<pre>"; print_r($data['campus_data']); die;
		$this->load->view('campus/campus_modification_ajax',$data);
	}

	public function View_Campus()
	{
		$cm_id=$this->input->post("cm_id");
		$rm_id=$this->input->post("rm_id");

		$data['campus_data']  = $this->CampusDrive_M->Get_SingleCampus($cm_id,$rm_id);

		//echo"<pre>"; print_r($data['campus_data']); die;
		$this->load->view('campus/campus_view_ajax',$data);
	}

	public function Modifycampus_Save()
	{


		$data['campus_title']=$this->input->post("campus_title");
		$data['campus_date']=$this->input->post("campus_date");
		$data['campus_description']=$this->input->post("campus_description");
		$data['campus_details']=$this->input->post("campus_details");
		$data['contact_person']=$this->input->post("contact_person");
		$data['email']=$this->input->post("email");
		$data['contact_person_mobile']=$this->input->post("contact_person_mobile");
		$con['rm_id']=$this->session->userdata('user_id');
		$con['cm_id']=$this->input->post("cm_id");
		/* File Upload */
		if(!empty($_FILES['campus_attachment']['name'])) {
			$genratedID = "campus" . "_" . date('Ymdhis') . "";
			$ext = pathinfo($_FILES['campus_attachment']['name'], PATHINFO_EXTENSION);
			$uploadpath = strtolower($genratedID . "." . $ext);

			$config['upload_path']   = './assets/campus/';
			$config['allowed_types'] = '*';
			$config['max_size']	= '1000000000000000';
			$config['file_name']	= $uploadpath;
			$this->load->library('upload', $config);
			$this->upload->initialize($config);

			if($this->upload->do_upload('campus_attachment')) {
				$upload_data = $this->upload->data();
				$data['campus_attachment'] = $uploadpath;
			} else {
				echo $this->upload->display_errors();
			}
		}
		else
		{
			$data['campus_attachment'] = $this->input->post('campus_file');
		}
		/* File Upload */
		//echo"<pre>"; print_r($data); die;

		$n=$this->Dba_model->update("campusdrive_master",$data,$con);

		if($n==1)
		{
			echo "<script>alert('Campus Modified Successfully !');window.location='" . base_url() . "CampusDrive" . "';</script>";
		}else{
			echo "<script>alert('No Changes Done!');window.location='" . base_url() . "CampusDrive" . "';</script>";
		}

	}

	public function CampusVerification()
	{
		$con['cm_id'] = $this->input->post("cm_id");

		$data['verification_yn'] = $this->input->post("vr_status");
		$data['verified_by'] = $this->session->userdata('user_id');
		$data['verification_date']=date('y-m-d h:i:s');

		$n = $this->Dba_model->update("campusdrive_master", $data, $con);
		if ($n > 0) {
			echo 1;
		} else {
			echo 0;
		}
	}


	public function RemoveCampus()
	{
		$con['cm_id'] = $this->input->post("cm_id");
		$data['flag'] = 0;
		$data['removed_by'] = $this->session->userdata('user_role');

		$n = $this->Dba_model->update("campusdrive_master", $data, $con);
		if ($n > 0) {
			echo 1;
		} else {
			echo 0;
		}
	}


	//////////////////////Web Show////////

	public function Web_campusList()
	{
		$flag=1;
		$data['campus_data']  = $this->CampusDrive_M->Get_campusList($flag);

		//echo"<pre>"; print_r($data['campus_data']); die;
		$this->load->view('campus/campus_list_web',$data);
	}





}
