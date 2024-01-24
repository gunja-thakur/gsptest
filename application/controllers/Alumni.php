<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Alumni extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Dba_model');
		$this->load->model('Student_M');
		$this->load->model('Enquiry_M');
		$this->load->model('Alumni_M');
		$this->load->model('Recruiters_M');
		$this->load->helper('string');
		$this->load->library('email');
	}

	public function index()
	{

		$data['alumnicounter_data']  = $this->Alumni_M->Get_AlumniCounter_List();
		$data['batch_data']  = $this->Alumni_M->Get_BatchList();
		$data['chart_data']  = $this->Alumni_M->Get_Alumni_PieChart($flag=1,$batch='',$year='');
		$data1  = $this->Alumni_M->Get_Alumni_PieChart($flag=1,$batch='',$year='');
		$data['piechart_data'] = json_encode($data1);

		/* $bar_data=$this->Alumni_M->Get_Alumni_BarChart($flag=1,$batch='',$year='');
		$data['barchart_data'] = json_encode($bar_data); */

		//echo"<pre>"; print_r($data['piechart_data']);die;
		$this->load->view('admin/alumni_dashboard', $data);
		//$this->AlumniList();
	}
	public function AlumniCounter_Ajax()
	{

		$tfilter=$this->input->post('tfilter');
		if($tfilter==2 && $this->input->post('batch')==1 )
		{
		$flag=1;
		$batch='';
		$year='';

		}
		else if($tfilter==2)
		{
		$flag=2;
		$batch=$this->input->post('batch');
		$year=$this->input->post('year');
		}
		else if($tfilter==3 && $this->input->post('year')==1 )
		{
		$flag=1;
		$batch='';
		$year='';
		}
		else if($tfilter==3)
		{
		$flag=3;
		$batch='';
		$year=$this->input->post('year');
		}


		$data['alumnicounter_data']  = $this->Alumni_M->Get_AlumniCounter_ListAjax($flag,$batch,$year);
		$data['chart_data']  = $this->Alumni_M->Get_Alumni_PieChart($flag,$batch,$year);
		$data1  = $this->Alumni_M->Get_Alumni_PieChart($flag,$batch,$year);
		$data['piechart_data'] = json_encode($data1);

		//echo"<pre>"; print_r($data);die;
		$this->load->view('admin/alumni_dashboard_counter_ajax', $data);

	}


	public function StudentLogin()
	{
		if($this->session->userdata('user_id'))
		{
			header("location:".base_url()."Home");
		}

		$random_number = substr(number_format(time() * rand(), 0, '', ''), 0, 6);
		// setting up captcha config
		$vals = array(
			'word' => $random_number,
			'img_path' => './captcha_images/',
			'img_url' => base_url() . 'captcha_images/',
			'img_width' => 140,
			'img_height' => 30,
			'font_size' => 50,
			'expiration' => 7200,
			'colors'	=> array(
				'background'	=> array(255, 255, 255),
				'border'	=> array(153, 102, 102),
				'text'		=> array(154, 63, 28),
				'grid'		=> array(255, 182, 182)
			)
		);
		$data['captcha'] = create_captcha($vals);
		$this->session->set_userdata('captchaWord', $data['captcha']['word']);
		//var_dump($data['captcha']['word']);die;
		$this->load->view("alumni/gsp_login", $data);
	}

	/* Alumni Password  */
	public function ChangePassword()
		{
			if(!$this->session->userdata('user_id'))
			{
				header("location:".base_url()."alumni/Login");
			}

		$data['user_data']=$this->Dba_model->select_query("Select * from alumni_details where student_id='".$this->session->userdata('user_id')."'  ")->result_array();
		/* $flag=2;
		$user_id=$this->session->userdata('user_id');
		$data['user_data']  = $this->Recruiters_M->GetUserDataBy_ID($flag,$user_id); */
		//print_r($data);die;
		$this->load->view("alumni/change_password",$data);
		}

		public function ChangePassword_Save()
		{
			if($this->input->post('change')==1)
			{
				extract($this->input->post());
				$old_password = $old_password;
				$password = $password;
				$user_id = $this->session->userdata('user_id');
				$query1 = $this->Dba_model->select_where("alumni_details",array("password"=>$old_password,"student_id"=>$user_id));
				$n1 = $this->db->affected_rows();
				if($n1==1)
				{
					if($this->Dba_model->update("alumni_details",array("password"=>$password),array("student_id"=>$user_id,"password"=>$old_password))>0)
					echo 1;
					else
					echo 0;
				}

			}
		}
	public function Forget_Password()
	{
		$this->load->view("alumni/alumni_forget_password");
	}

	public function CheckUser()
	{
		if ($this->input->post('forget') == 1) {
			extract($this->input->post());
			$query1 = $this->Dba_model->select_where("alumni_details", array("username" => $username));
			if ($query1->num_rows()) {
				$res = $query1->result_array();
				foreach ($res as $r) {
					extract($r);
				}
				$reset_code = random_int(100000, 999999);


				if ($this->Dba_model->update("alumni_details", array("reset_code" => $reset_code), array("rm_id" => $rm_id))) {
					$this->session->set_userdata('reset_user_id', $rm_id);
					$this->session->set_userdata('reset_code', $reset_code);

					/* Email Sending */
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
					<p>Hello ,</p>
					<p> Your  OTP is $reset_code For Changing Password.</p>

					<p>Thanks & Regards, <br/>SSR-GSP</p>";

					$this->email->message($message);
					$this->email->send();
					/* Email Sending */

					echo 1;
				}
			} else {
				echo 0;
			}
		}
	}

	public function Verify_OTP(){

		if(!$this->session->userdata('reset_user_id'))
			{
				header("location:".base_url()."alumni/Login");
			}
			else{
				$this->load->view('alumni/alumni_verify_otp');
			}
	}

	public function NewPassword()
	{
		if(!$this->session->userdata('reset_user_id'))
		{
		header("location:".base_url()."alumni/Login");
		}
		else
		{
		if ($this->input->post('verify') == 1) {
			extract($this->input->post());
			$rm_id=$this->input->post('rm_id');
			$otp=$this->input->post('otp');
			$reset_code=$this->input->post('reset_code');


			$query1 = $this->Dba_model->select_where("alumni_details", array("rm_id" => $rm_id,"reset_code" => $reset_code));

			//print_r($query1);die;
			if ($query1->num_rows()) {
				$res = $query1->result_array();
				$data['recruter_data'] = $query1->result_array();
				$this->load->view('alumni/alumni_new_password',$data);
			}
			else
			{
				echo 0;
			}
		}
	}
	}
	public function NewPassword_Save()
	{
			if($this->input->post('change')==1)
			{
				extract($this->input->post());
				$rm_id = $rm_id;
				$reset_code = $reset_code;
				$password = $password;


				if($this->Dba_model->update("alumni_details",array("password"=>$password,"reset_code"=>''),array("rm_id"=>$rm_id,"reset_code"=>$reset_code))>0)
					echo 1;
					else
					echo 0;


			}
		}
	/* Alumni Password  */







	/* --------------ALUMNI ---------------- */

	public function ViewList()
	{
		$flag = 1;
		$batch = "";
		$passing_year =  "";
		$branch =  "";
		$data['branch_data']  = $this->Alumni_M->Get_BranchList();
		$data['student_data']  = $this->Alumni_M->Get_AluminiList($flag, $batch, $passing_year, $branch);
		//echo"<pre>"; print_r($data['student_data']); die;
		$this->load->view('admin/alumini_list', $data);
	}

	public function ViewList_Ajax()
	{
		$flag = 2;
		$batch = $this->input->post('batch');
		$passing_year =  $this->input->post('passing_year');
		$branch =  $this->input->post('branch');
		$data['student_data']  = $this->Alumni_M->Get_AluminiList($flag, $batch, $passing_year, $branch);

		//echo"<pre>"; print_r($data['student_data']); die;
		$this->load->view('admin/alumni_list_ajax', $data);
	}


	public function AlumniCountList_Ajax()
	{
		$val=$this->input->post('rc_status');


		if($val=='') ///For Get All
		{
		$flag=1;
		$status='';
		}
		else if($val=='1')
		{
		$flag=2;
		$status=1;
		}
		else if($val=='2')
		{
		$flag=3;
		$status=0;
		}
		else if($val=='3')
		{
		$flag=4;
		$status=1;
		}
		else if($val=='4')
		{
		$flag=5;
		$status=1;
		}
		$batch=$this->input->post('batch');
		$passing_year=$this->input->post('passing_year');
		//print_r($val."-".$batch."-".$passing_year);die;

		$data['student_data']  = $this->Alumni_M->Get_AlumniList_Ajax($flag,$status,$batch,$passing_year);
	    //echo"<pre>"; print_r($data['student_data']); die;
		$this->load->view('alumni/alumni_list_ajax', $data);
	}

	public function ViewDetails()
	{
		$student_id = $this->uri->segment(3);
		//$enrollment_no=$this->input->post('enrollment_no');
		$flag=2;

		$data['course_data']  = $this->Student_M->Get_CourseList();
		$data['branch_data']  = $this->Student_M->Get_BranchList();
		$data['state_data']  = $this->Student_M->Get_StateList();
		$data['city_data']  = $this->Student_M->Get_CityList();
		$data['student_data']  = $this->Student_M->Get_StudentDetails($student_id, $enrollment_no = '');
		$data['academic_data']  = $this->Student_M->Get_AcademicDetails($flag,$student_id);
		$data['employment_data']  = $this->Student_M->Get_EmploymentDetails($flag,$student_id);

		//echo"<pre>"; print_r($data['student_data']); die;
		$this->load->view('student/student_details_view', $data);
	}

	public function GetFor_VerifyAlumini()
	{
		$student_id = $this->input->post('student_id');
		//$enrollment_no=$this->input->post('enrollment_no');
		$data['student_data']  = $this->Student_M->Get_StudentDetails($student_id, $enrollment_no = '');
		//echo"<pre>"; print_r($data['student_data']); die;
		$this->load->view('admin/alumni_verification_ajax', $data);
	}



	public function VerifyAlumini()
	{

		$con['student_id'] = $this->input->post("student_id");
		$data['verified'] = $this->input->post("status");
		$data['verified_by'] = $this->session->userdata('user_id');
		$data['verification_date'] = date('Y-m-d');
		//print_r($data);die;
		$n = $this->Dba_model->update("alumini_student_master", $data, $con);
		$recruiters_data  = $this->Dba_model->select_query(" Select student_id,batch,enrollment_no,student_name,email from alumini_student_master where student_id='" . $this->input->post("student_id") . "' ")->result_array();

		//print_r($recruiters_data);die;
		if ($n > 0) {
			/* Email Send */
			foreach ($recruiters_data as $rd) {
				extract($rd);
				//	print_r($data);
				$student_name = $student_name;
				$username = $email;
				$password = mb_substr($student_name,0,5)."@123";
			}
			$data1['student_id'] = $this->input->post("student_id");
			$data1['username'] = $username;
			$data1['password'] = $password;
			$data1['status'] = 1;
			$this->Dba_model->insert("alumni_details", $data1, $con);

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
			$this->email->subject('Alumni Verification');

			$message = "
		<p>Hello $student_name ,</p>
		<p> Your Details has been Verified Successfully. Now you can Login to SSR-GSP Portl. <br>Login Credential is below.</p>
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


	public function VerifyAlumini_Data()
	{

		$con['student_id'] = $this->input->post("student_id");
		$data['verified'] = $this->input->post("std_status");
		$data['verified_by'] = $this->session->userdata('user_id');
		$data['verification_date'] = date('Y-m-d');

		$sendemail=$this->input->post("sendemail");
		//print_r($data);die;
		$n = $this->Dba_model->update("alumini_student_master", $data, $con);

		$recruiters_data  = $this->Dba_model->select_query(" Select student_id,batch,enrollment_no,student_name,email from alumini_student_master where student_id='" . $this->input->post("student_id") . "' ")->result_array();

		//print_r($recruiters_data);die;
		if ($n > 0) {
			/* Email Send */
			foreach ($recruiters_data as $rd) {
				extract($rd);
				//	print_r($data);
				$student_name = $student_name;
				$username = $email;
				$password = mb_substr($student_name, 0, 3) . "@123456";
			}
			$data1['student_id'] = $this->input->post("student_id");
			$data1['username'] = $username;
			$data1['password'] = $password;
			$data1['status'] = $this->input->post("sendemail");
			$this->Dba_model->insert("alumni_details", $data1, $con);

			if($sendemail==1)
			{
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
			$this->email->subject('Alumni Verification');

			$message = "
		<p>Hello $student_name ,</p>
		<p> Welcome to the Alumni Portal of SSR-GSP. Your details have been verified successfully. Now, you can log in to the Alumni Portal and update your profile and other details. </p>
		<p> Login credentials are as follows: </p>
		<p> Portal URL: <a href='https://globalskillspark.in/registration/Alumni/StudentLogin' target='_blank'> Click Here</a> </p>
		<p> Username : $username <br> Password : $password</p>
		<p>Thanks & Regards, <br/>Alumni Administrator </p>";

			$this->email->message($message);
			$this->email->send();
		}
			//print_r($data1);die;

			/* Email Send */
			echo 1;
		} else {
			echo 0;
		}
	}


	public function Verify_NotableAlumini()
	{
		$student_id = $this->input->post('student_id');
		//$enrollment_no=$this->input->post('enrollment_no');
		$data['student_data']  = $this->Student_M->Get_StudentDetails($student_id, $enrollment_no = '');
		//echo"<pre>"; print_r($data['student_data']); die;
		$this->load->view('admin/alumni_notable_ajax', $data);
	}

	public function NotableAlumini()
	{
		$con['student_id'] = $this->input->post("student_id");
		$data['notable_yn'] = $this->input->post("status");
		$data['success_story'] = $this->input->post("success_story");

		$n = $this->Dba_model->update("alumini_student_master", $data, $con);
		if ($n > 0) {
			echo 1;
		} else {
			echo 0;
		}
	}

	/* Verify Testimonials */
	public function Verify_Testimonial()
	{
		$status = $this->input->post('status');
		$student_id = $this->input->post('student_id');
		//$enrollment_no=$this->input->post('enrollment_no');
		$data['student_data']  = $this->Student_M->Get_StudentDetails($student_id, $enrollment_no = '');
		$data['testimoni_data']  = $this->Student_M->Get_TestimoniDetails($student_id);
		//echo"<pre>"; print_r($data['student_data']); die;
		$this->load->view('admin/alumni_testimonial_ajax', $data);
	}

	public function SaveVerify_Testimonial()
	{
		$con['student_id'] = $this->input->post("student_id");
		$data['show_on_front'] = $this->input->post("testimoni_status");
		$data1['tm_verification'] = $this->input->post("testimoni_status");
		$data1['verified_by'] = $this->session->userdata('user_id');
		$data1['verified_date']=date('y-m-d');


		$n = $this->Dba_model->update("alumini_student_master", $data, $con);
		if ($n > 0) {

			$this->Dba_model->update("testimonial_master", $data1, $con);
			echo 1;


		} else {
			echo 0;
		}
	}



	/* Show on Front End */

	public function ViewAlumniTable_List()
	{
		$flag = 3;
		$batch = "";
		$passing_year =  "";
		$branch =  '';
		$data['branch_data']  = $this->Alumni_M->Get_BranchList();
		$data['student_data']  = $this->Alumni_M->Get_AluminiList($flag, $batch, $passing_year, $branch);
		//echo"<pre>"; print_r($data['student_data']); die;
		//$this->load->view('alumni/alumni_list_web', $data);
		$this->load->view('alumni/alumni_list_web_table', $data);
	}

	public function ViewAlumniTable_ListAjax()
	{
		$flag = 3;
		$batch = $this->input->post("batch");
		$passing_year =  $this->input->post("passing_year");
		$branch =  $this->input->post('branch');
		$data['student_data']  = $this->Alumni_M->Get_AluminiList($flag, $batch, $passing_year, $branch);
		//echo"<pre>"; print_r($data['student_data']); die;
		//$this->load->view('alumni/alumni_list_web_ajax', $data);
		$this->load->view('alumni/alumni_list_web_table_ajax', $data);
	}




	public function ViewAlumni_List()
	{
		$flag = 3;
		$batch = "";
		$passing_year =  "";
		$branch =  '';
		$data['branch_data']  = $this->Alumni_M->Get_BranchList();
		$data['student_data']  = $this->Alumni_M->Get_AluminiList($flag, $batch, $passing_year, $branch);
		//echo"<pre>"; print_r($data['student_data']); die;
		$this->load->view('alumni/alumni_list_web', $data);

	}

	public function ViewAlumni_ListAjax()
	{
		$flag = 3;
		$batch = $this->input->post("batch");
		$passing_year =  $this->input->post("passing_year");
		$branch =  $this->input->post('branch');
		$data['student_data']  = $this->Alumni_M->Get_AluminiList($flag, $batch, $passing_year, $branch);
		//echo"<pre>"; print_r($data['student_data']); die;
		$this->load->view('alumni/alumni_list_web_ajax', $data);

	}



}
