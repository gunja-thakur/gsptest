<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Placement extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Dba_model');
		$this->load->model('Student_M');
		$this->load->model('Enquiry_M');
		$this->load->model('Recruiters_M');
		$this->load->model('CampusDrive_M');
		$this->load->model('Vacancy_M');
		$this->load->helper('string');
		$this->load->library('email');
	}

	public function index()
	{
		$data['recruiter_countdata']  = $this->Recruiters_M->Get_RecruiterCount();
		$this->load->view('recruiters/recruiter_dashboard',$data);
		//$this->AlumniList();
	}


	public function RecruitersList()
	{

		$data['recruiters_data']  = $this->Recruiters_M->Get_RecruitersList($flag = 1, $status = '', $from_date = '', $to_date = '');
		//echo"<pre>"; print_r($data['recruiters_data']); die;
		$this->load->view('recruiters/recruiters_list', $data);
	}


	public function RecruitersList_Ajax()
	{
		$val=$this->input->post('rc_status');

		if($val=='')
		{
		$status='';
		}else if($val=='0')
		{
		$status=0;
		}else{
		$status=$val;
		}

		$data['recruiters_data']  = $this->Recruiters_M->Get_RecruitersList_Ajax($status);
	    //echo"<pre>"; print_r($data['recruiters_data']); die;
		$this->load->view('recruiters/recruiters_list_status_ajax', $data);
	}

	public function Recruiter_Details()
	{

		$rm_id=$this->input->post('rm_id');
		$data['recruiters_details']  = $this->Recruiters_M->Get_RecruiterDetails($rm_id);
		//echo"<pre>"; print_r($data['recruiters_details']); die;
		$this->load->view('recruiters/recruiter_detail_view_ajax', $data);
	}



	public function VerifiedRecruiter()
	{
		$con['rm_id'] = $this->input->post("rm_id");
		$data['verification'] = $this->input->post("status");
		$data['verified_by'] = $this->session->userdata('user_id');
		$data['verified_date'] = date('Y-m-d');

		$n = $this->Dba_model->update("recruiter_master", $data, $con);

		$recruiters_data  = $this->Recruiters_M->Get_RecruiterDetails($rm_id = $this->input->post("rm_id"));
		if ($n > 0) {
			foreach ($recruiters_data as $rd) {
				extract($rd);
				//	print_r($data);
				$com_name = $name_of_company;
				$username = $email;
				$password = mb_substr($username, 0, 5) . "@123";
			}

			$data1['username'] = $username;
			$data1['password'] = $password;
			$data1['status'] = 1;
			$this->Dba_model->update("recruiter_details", $data1, $con);

			$config = array(
				'protocol'  => 'smtp',
				'smtp_host' => 'zimbra135.megavelocity.net',
				'smtp_port' => 587,
				'smtp_user' => 'info@globalskillspark.in',
				'smtp_pass' => 'BLi+99fgMB@12mgG#32',
				'mailtype'  => 'html',
				'smtp_crypto' => 'tls',
				'newline'   => '\r\n',
				'charset'   => 'iso-8859-1',
				'wordwrap' => TRUE
			);

			$this->email->initialize($config);
			$this->email->set_crlf("\r\n");
			$this->email->set_newline("\r\n");
			$this->email->from('info@globalskillspark.in', 'SSR-GSP');
			//$this->email->to($username);
			$this->email->to('gunja609@gmail.com');
			$this->email->subject('Verification');

			$message = "
			<p>Hello $com_name ,</p>
			<p> Your Account has been Verified Successfully. Now you can Login to SSR-GSP Portl. <br>Login Credential is below.</p>
			<p> Username : $username <br> Password : $password</p>
			<p>Thanks & Regards, <br/>SSR-GSP</p>";

			$this->email->message($message);
			$this->email->send();
			//print_r($data1);die;

			/* Email Send */

			echo 1;
		} else {
			echo 0;
		}
	}

	public function ViewList()
	{
		$flag = 1;
		$pd_id='';
		$data['placement_data']  = $this->Recruiters_M->Get_PlacementList($flag,$pd_id);
		//echo"<pre>"; print_r($data['student_data']); die;
		$this->load->view('placement/placement_list', $data);
	}

	public function View_PlacementDetail()
	{
		$flag = 2;
		$pd_id=$this->input->post('pd_id');
		$data['placement_data']  = $this->Recruiters_M->Get_PlacementList($flag,$pd_id);
		$data['recruiters_data']  = $this->Recruiters_M->Get_RecruitersList($flag = 1, $status = '', $from_date = '', $to_date = '');
		$data['year_data'] = $this->Recruiters_M->Get_YearList();
		$data['course_data'] = $this->Dba_model->select_query("select * from course_master group by course_name")->result_array();
		//echo"<pre>"; print_r($data['student_data']); die;
		$this->load->view('placement/placement_modification_ajax', $data);
	}

	public function Add_Details()
	{
		$data['recruiters_data']  = $this->Recruiters_M->Get_RecruitersList($flag = 1, $status = '', $from_date = '', $to_date = '');
		$data['year_data'] = $this->Recruiters_M->Get_YearList();
		$data['course_data'] = $this->Dba_model->select_query("select * from course_master group by course_name")->result_array();

		//echo"<pre>"; print_r($data);die;
		$this->load->view('placement/add_placement_details', $data);

	}

	public function Add_DetailSave()
	{
		$data['year']=$this->input->post('year');
		$data['company']=$this->input->post('company');
		$data['course']=$this->input->post('course');
		$data['total_appears']=$this->input->post('total_appears');
		$data['no_of_placed']=$this->input->post('no_of_placed');
		$data['create_by']=$this->session->userdata('user_id');

		$n=$this->Dba_model->insert("placement_details_master",$data);

		if($n==1)
		{
		echo "<script>alert('Placement Details Successfully Added!');window.location='" . base_url() . "Placement/ViewList" . "';</script>";
		}
		else{
		echo "<script>alert('Something Wrong!');window.location='" . base_url() . "Placement/Add_Details" . "';</script>";
		}
	}

	public function Update_DetailSave()
	{
		$con['pd_id']=$this->input->post('pd_id');
		$data['year']=$this->input->post('year');
		$data['company']=$this->input->post('company');
		$data['course']=$this->input->post('course');
		$data['total_appears']=$this->input->post('total_appears');
		$data['no_of_placed']=$this->input->post('no_of_placed');
		$data['create_by']=$this->session->userdata('user_id');

		$n=$this->Dba_model->update("placement_details_master",$data,$con);

		if($n==1)
		{
		echo "<script>alert('Placement Details Successfully Updated!');window.location='" . base_url() . "Placement/ViewList" . "';</script>";
		}
		else{
		echo "<script>alert('Something Wrong!');window.location='" . base_url() . "Placement/ViewList" . "';</script>";
		}
	}


	public function Remove_PlacementDetails()
	{
		$con['pd_id'] = $this->input->post("pd_id");
		$data['flag'] = 0;
		//$data['removed_by'] = $this->session->userdata('user_role');

		$n = $this->Dba_model->update("placement_details_master", $data, $con);
		if ($n > 0) {
			echo 1;
		} else {
			echo 0;
		}
	}












	/* --------------ALUMNI ---------------- */

	public function AlumniList()
	{
		$flag = 1;
		$data['student_data']  = $this->Enquiry_M->Get_AluminiList($flag);
		//echo"<pre>"; print_r($data['student_data']); die;
		$this->load->view('admin/alumini_list', $data);
	}

	public function EnquiryList()
	{

		$data['student_data']  = $this->Enquiry_M->Get_EnquiryList($flag = 1, $qualification = '', $from_date = '', $to_date = '');
		//echo"<pre>"; print_r($data['student_data']); die;
		$this->load->view('admin/enquiry_dashboard', $data);
	}

	public function EnquiryList_Ajax()
	{
		$flag = 2;
		$qualification = $this->input->post('qualification');
		if (!empty($this->input->post('from_date'))) {
			$from_date = $this->input->post('from_date');
		} else {
			$from_date = '1990-01-01';
		}

		if (!empty($this->input->post('to_date'))) {
			$to_date = $this->input->post('to_date');
		} else {
			$to_date = '1990-01-01';
		}

		//print_r($qualification."-".$from_date."-".$to_date);die;
		$data['student_data']  = $this->Enquiry_M->Get_EnquiryList($flag, $qualification, $from_date, $to_date);
		//echo"<pre>"; print_r($data['student_data']); die;
		$this->load->view('admin/enquiry_list_ajax', $data);
	}


	/* --------------- */

	public function Home()
	{
		$flag=3;
		$rm_id='';
		$data['campus_data']  = $this->CampusDrive_M->Get_CampusList($flag,$rm_id);
		$data['vacancy_data']  = $this->Vacancy_M->Get_VacancyList($flag,$rm_id);
		//echo"<pre>"; print_r($data);die;
		$this->load->view('frontend/placement/index',$data);
	}

	public function OJT()
	{
	    $this->load->view('frontend/placement/on_job_training');
	}

	public function Why_recruit_from_GSP()
	{
	    $this->load->view('frontend/placement/why_recruit');
	}

	public function Recruitment_process()
	{
	    $this->load->view('frontend/placement/recruitment_process');
	}

	public function Placement_partners()
	{
	    $this->load->view('frontend/placement/placement_partners');
	}

	public function Campus_drive()
	{
	    $flag=3;
		$rm_id='';
		$data['campus_data']  = $this->CampusDrive_M->Get_CampusList($flag,$rm_id);
	    $this->load->view('frontend/placement/campus_list',$data);
	}

	public function View_Campus()
	{
		$cm_id=$this->input->post("cm_id");
		$rm_id=$this->input->post("rm_id");

		$data['campus_data']  = $this->CampusDrive_M->Get_SingleCampus($cm_id,$rm_id);

		//echo"<pre>"; print_r($data['campus_data']); die;
		$this->load->view('frontend/placement/campus_view_ajax',$data);
	}


	public function Vacancy()
	{
	    $flag=3;
		$rm_id='';
		$data['vacancy_data']  = $this->Vacancy_M->Get_VacancyList($flag,$rm_id);
	    $this->load->view('frontend/placement/vacancy_list',$data);
	}

	public function View_Vacancy()
	{
		$vacancy_id=$this->input->post("vacancy_id");
		$rm_id=$this->input->post("rm_id");
		$data['vacancy_data']  = $this->Vacancy_M->Get_SingleVacancy($vacancy_id,$rm_id);

		//echo"<pre>"; print_r($data['campus_data']); die;
		$this->load->view('frontend/placement/vacancy_view_ajax',$data);
	}

}
