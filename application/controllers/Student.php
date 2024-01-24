<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Student extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Dba_model');
		$this->load->model('Student_M');
		$this->load->model('Event_M');
		$this->load->helper('string');
	}

	public function index()
	{
		$student_id=$this->session->userdata('user_id');
		$enrollment_no=$this->session->userdata('enrollment_no');
		$data['student_data']  = $this->Student_M->Get_StudentDetails($student_id,$enrollment_no);
		$data['event_data']  = $this->Event_M->Get_EventList($flag=1);
		//echo"<pre>"; print_r($data);die;
		$this->load->view('student/dashboard',$data);
	}


	public function ViewDetails()
	{
		$flag=2;
		$student_id=$this->session->userdata('user_id');
		$enrollment_no=$this->session->userdata('enrollment_no');


		$data['course_data']  = $this->Student_M->Get_CourseList();
		$data['branch_data']  = $this->Student_M->Get_BranchList();
		$data['state_data']  = $this->Student_M->Get_StateList();
		$data['city_data']  = $this->Student_M->Get_CityList();
		$data['year_data']  = $this->Student_M->Get_YearList();
		$data['month_data']  = $this->Student_M->Get_MonthList();
		$data['student_data']  = $this->Student_M->Get_StudentDetails($student_id,$enrollment_no);
		$data['academic_data']  = $this->Student_M->Get_AcademicDetails($flag,$student_id);
		$data['employment_data']  = $this->Student_M->Get_EmploymentDetails($flag,$student_id);

		//echo"<pre>"; print_r($data); die;
		$this->load->view('student/student_details',$data);
	}


	public function Update_PersonalDetails()
	{
		$con['student_id']=$this->session->userdata('user_id');
		$con['enrollment_no']=$this->session->userdata('enrollment_no');
		$data['date_of_birth']=$this->input->post("date_of_birth");
		$data['mobile']=$this->input->post("mobile");
		$data['email']=$this->input->post("email");
		$data['father_name']=$this->input->post("father_name");
		$data['batch']=$this->input->post("batch");
		//$data['branch']=$this->input->post("branch");
		$data['gender']=$this->input->post("gender");
		$data['passing_year']=$this->input->post("passing_year");
		$data['permanent_address']=$this->input->post("permanent_address");
		$data['show_on_front']=$this->input->post("show_on_front_YN");
		$student_name=$this->input->post("student_name");

		/* File Upload */
		$code=date('ymdhis');
		if ($_FILES['student_image']['name']) {
			$genratedID = "PI" . "_" .$code."_". $this->session->userdata('user_id') . "";
			$ext = pathinfo($_FILES['student_image']['name'], PATHINFO_EXTENSION);
			$uploadpath = strtolower($genratedID . "." . $ext);

			$config['upload_path']   = './assets/alumni/batch'.$this->input->post("batch").'/';
			$config['allowed_types'] = '*';
			$config['max_size']	= '1000000000000000';
			$config['file_name']	= $uploadpath;
			$this->load->library('upload', $config);
			$this->upload->initialize($config);

			if ($this->upload->do_upload('student_image')) {
				$upload_data = $this->upload->data();
				$data['student_image'] = $uploadpath;
			} else {
				echo $this->upload->display_errors();
			}
		} else {
			$data['student_image'] = $this->input->post('simage');
		}
		/* File Upload */
		//echo"<pre>"; print_r($data); die;

		$n=$this->Dba_model->update("alumini_student_master",$data,$con);

		if($n==1)
		{
			/* Email Send */
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
			$this->email->subject('Alumni Profile Updation');

			$message = "
			<p>Hello  ,</p>
			<p> $student_name has been update their Profile. </p>

			<p>Thanks & Regards, <br/>SSR-GSP</p>";

			$this->email->message($message);
			$this->email->send();
			/* Email Send */
			echo "<script>alert('Profile Updated Successfully!');window.location='" . base_url() . "Student" . "';</script>";
		}else{
			echo "<script>alert('No Changes Done!');window.location='" . base_url() . "Student" . "';</script>";
		}
	}

	public function Update_AcademicDetails()
	{
		$am_id=$this->input->post("am_id");
		$data['student_id']=$this->input->post("student_id");
		$data['college_name']=$this->input->post("college_name");
		$data['highest_qualification']=$this->input->post("highest_qualification");
		$data['10th_marks']=$this->input->post("10th_marks");
		$data['12th_marks']=$this->input->post("12th_marks");
		$data['percentage']=$this->input->post("percentage");

		//echo"<pre>"; print_r($am_id); die;
		if(empty($am_id)){

		$n=$this->Dba_model->insert("academic_master",$data);
		}
		else{
		$con['am_id']=$this->input->post("am_id");
		$con['student_id']=$this->input->post("student_id");
		$n=$this->Dba_model->update("academic_master",$data,$con);
		}
		if($n==1)
		{
			echo "<script>alert('Academic Details Updated Successfully!');window.location='" . base_url() . "Student" . "';</script>";
		}else{
			echo "<script>alert('No Changes Done!');window.location='" . base_url() . "Student" . "';</script>";
		}
	}

	public function Save_Qualification()
	{

		$student_name = $this->input->post('student_name');
		$enrollment_no = $this->input->post('enrollment_no');
		$data['student_id'] = $this->input->post('student_id');
		$data['college_name'] = $this->input->post('college_name');
		$data['highest_qualification'] = $this->input->post('highest_qualification');
		$data['total_marks'] = $this->input->post('total_marks');
		$data['obt_marks'] = $this->input->post('obt_marks');
		$data['percentage'] = $this->input->post('percentage');
		//print_r($data); die;
		$check1 = $this->Dba_model->select_where("academic_master", array("student_id" => $this->input->post('student_id'), "highest_qualification" => $this->input->post('highest_qualification')));
		$chk = $check1->num_rows();
		//print_r($chk); die;
		if ($chk == 0) {
			$n = $this->Dba_model->insert('academic_master', $data);
			echo 1;
		}
	}

	public function SendMail_Qualification()
	{

		$student_name = $this->input->post('student_name');
		$enrollment_no = $this->input->post('enrollment_no');

		/* Email Send */
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
		$this->email->subject('Alumni Profile Updation');

		$message = "
		<p>Hello  ,</p>
		<p> $student_name ($enrollment_no) has been update their Profile. </p>

		<p>Thanks & Regards, <br/>SSR-GSP</p>";

		$this->email->message($message);
		$this->email->send();
		echo 1;
		/* Email Send */

	}

	//////////////////////////////////////////
	public function Update_EmploymentDetails()
	{
		$em_id=$this->input->post("em_id");
		$data['student_id']=$this->input->post("student_id");
		$data['designation']=$this->input->post("designation");
		$data['technology']=$this->input->post("technology");
		$data['current_employer']=$this->input->post("current_employer");
		$data['city']=$this->input->post("city");
		$data['state']=$this->input->post("state");
		$data['country']=$this->input->post("country");
		$data['employer_address']=$this->input->post("employer_address");
		$data['achievment']=$this->input->post("achievment");

		//echo"<pre>"; print_r($am_id); die;
		if(empty($em_id)){

		$n=$this->Dba_model->insert("employment_master",$data);
		}
		else{
		$con['em_id']=$this->input->post("em_id");
		$con['student_id']=$this->input->post("student_id");
		$n=$this->Dba_model->update("employment_master",$data,$con);
		}

		if($n==1)
		{
			echo "<script>alert('Employment Details Updated Successfully!');window.location='" . base_url() . "Student" . "';</script>";
		}else{
			echo "<script>alert('No Changes Done!');window.location='" . base_url() . "Student" . "';</script>";
		}
	}


	public function Save_Employement()
	{
		$student_name = $this->input->post('student_name');
		$enrollment_no = $this->input->post('enrollment_no');
		$data['student_id'] = $this->input->post('student_id');
		$data['emp_type'] = $this->input->post('emp_type');
		$data['designation'] = $this->input->post('designation');
		$data['company_name'] = $this->input->post('company_name');
		$data['location'] = $this->input->post('location');
		$data['location_type'] = $this->input->post('location_type');
		$data['job_description'] = $this->input->post('job_description');
		$data['current_working_YN'] = $this->input->post('current_working_YN');
		$data['working_month'] = $this->input->post('working_month');
		$data['working_from'] = $this->input->post('working_from');
		$data['working_to'] = $this->input->post('working_to');
		//$data['employer_address'] = $this->input->post('employer_address');
		//print_r($data); die;
		$check1 = $this->Dba_model->select_where("employment_master", array("student_id" => $this->input->post('student_id'), "working_from" => $this->input->post('working_from'),"working_to" => $this->input->post('working_to')));
		$chk = $check1->num_rows();
		//print_r($chk); die;
		if ($chk == 0) {
			$n = $this->Dba_model->insert('employment_master', $data);
			echo 1;
		}

		/* Email Send */
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
		$this->email->subject('Alumni Profile Updation');

		$message = "
		<p>Hello  ,</p>
		<p> $student_name ($enrollment_no) has been update their Profile. </p>

		<p>Thanks & Regards, <br/>SSR-GSP</p>";

		$this->email->message($message);
		$this->email->send();

		/* Email Send */

	}


	/* Testimonials */

	public function Testimonial()
	{
		$student_id = $this->session->userdata('user_id');
		$data['student_data']  = $this->Student_M->Get_TestimoniDetails($student_id);
		//echo"<pre>"; print_r($data['student_data']); die;
		$this->load->view('testimonial/testimonial', $data);
	}

	public function Add_TestimonialSave()
	{

		$tm_id=$this->input->post("tm_id");

		/* $data['cr_designation']=$this->input->post("cr_designation");
		$data['current_location']=$this->input->post("current_location"); */

		$data['testimoni_description']=$this->input->post("testimoni_description");
		$data['student_id']=$this->session->userdata('user_id');
		/* File Upload */

		//echo"<pre>"; print_r($data); die;


		if(empty($tm_id)){

			$n=$this->Dba_model->insert("testimonial_master",$data);
			}
			else{
			$con['student_id']=$this->session->userdata('user_id');
			$con['tm_id']=$this->input->post("tm_id");
			$n=$this->Dba_model->update("testimonial_master",$data,$con);
			}

		if($n==1)
		{
			echo "<script>alert('Message Successfully Added!');window.location='" . base_url() . "Student/Testimonial" . "';</script>";
		}else{
			echo "<script>alert('Something Wrong!');window.location='" . base_url() . "Student/Testimonial" . "';</script>";
		}

	}






}
