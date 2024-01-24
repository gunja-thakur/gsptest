<?php
defined('BASEPATH') or exit("No Direct Access");
/*error_reporting(0);
session_start();*/
class Recruiters extends CI_controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->helper('form');
		$this->load->helper('url');
		$this->load->library('form_validation');
		$this->load->helper('string');
		$this->load->library('session');
		$this->load->helper('captcha');
		$this->load->model('Student_M');
		$this->load->model('Recruiters_M');
		$this->load->model('Dba_model');
		$this->load->library('email');
	}


	public function index()
	{
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
		$data['designation_data'] = $this->Recruiters_M->Get_Designation();
		$data['year_data'] = $this->Recruiters_M->Get_YearList();
		$data['business_data'] = $this->Recruiters_M->Get_BusinessNatureList();
		$data['company_data'] = $this->Recruiters_M->Get_CompanyTypeList();

		//print_r($data['course_data']); die;
		$this->load->view("recruiters/recruiters_registration", $data);
	}
	public function Login()
	{
		if ($this->session->userdata('user_id')) {
			header("location:" . base_url() . "Home");
		} else {
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
			$data['course_data']  = $this->Student_M->Get_CourseList();
			$data['category_data']  = $this->Student_M->Get_CategoryList();
			//print_r($data['course_data']); die;
			$this->load->view("recruiters/recruiter_login", $data);
		}
	}

	public function refresh(){
		$random_number = substr(number_format(time() * rand(), 0, '', ''), 0, 6);
        // Captcha configuration
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
		$this->session->unset_userdata('captchaWord');
		$this->session->set_userdata('captchaWord', $data['captcha']['word']);

        // Display captcha image
        echo $data['captcha']['image'];
    }

	/* ------------------------------Forget Password-------------------------------- */

	public function ChangePassword()
		{
			if(!$this->session->userdata('user_id'))
			{
				header("location:".base_url()."Recruiters/Login");
			}

		/* $data['student_data']=$this->Dba_model->select_query("Select * from user_master where user_id='".$this->session->userdata('user_id')."'  ")->result_array(); */
		$flag=2;
		$user_id=$this->session->userdata('user_id');
		$data['user_data']  = $this->Recruiters_M->GetUserDataBy_ID($flag,$user_id);
		//print_r($data);die;
		$this->load->view("recruiters/change_password",$data);
		}

		public function ChangePassword_Save()
		{
			if($this->input->post('change')==1)
			{
				extract($this->input->post());
				$old_password = $old_password;
				$password = $password;
				$user_id = $this->session->userdata('user_id');
				$query1 = $this->Dba_model->select_where("recruiter_details",array("password"=>$old_password,"rm_id"=>$user_id));
				$n1 = $this->db->affected_rows();
				if($n1==1)
				{
					if($this->Dba_model->update("recruiter_details",array("password"=>$password),array("rm_id"=>$user_id,"password"=>$old_password))>0)
					echo 1;
					else
					echo 0;
				}

			}
		}
	public function Forget_Password()
	{
		$this->load->view("recruiters/recruiter_forget_password");
	}

	public function CheckUser()
	{
		if ($this->input->post('forget') == 1) {
			extract($this->input->post());
			$query1 = $this->Dba_model->select_where("recruiter_details", array("username" => $username));
			if ($query1->num_rows()) {
				$res = $query1->result_array();
				foreach ($res as $r) {
					extract($r);
				}
				$reset_code = random_int(100000, 999999);


				if ($this->Dba_model->update("recruiter_details", array("reset_code" => $reset_code), array("rm_id" => $rm_id))) {
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
				header("location:".base_url()."Recruiters/Login");
			}
			else{
				$this->load->view('recruiters/recruiter_verify_otp');
			}
	}

	public function NewPassword()
	{
		if(!$this->session->userdata('reset_user_id'))
		{
		header("location:".base_url()."Recruiters/Login");
		}
		else
		{
		if ($this->input->post('verify') == 1) {
			extract($this->input->post());
			$rm_id=$this->input->post('rm_id');
			$otp=$this->input->post('otp');
			$reset_code=$this->input->post('reset_code');


			$query1 = $this->Dba_model->select_where("recruiter_details", array("rm_id" => $rm_id,"reset_code" => $reset_code));

			//print_r($query1);die;
			if ($query1->num_rows()) {
				$res = $query1->result_array();
				$data['recruter_data'] = $query1->result_array();
				$this->load->view('recruiters/recruiter_new_password',$data);
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


				if($this->Dba_model->update("recruiter_details",array("password"=>$password,"reset_code"=>''),array("rm_id"=>$rm_id,"reset_code"=>$reset_code))>0)
					echo 1;
					else
					echo 0;


			}
		}

	public function Resets()
	{
		if ($this->input->post('reset') == 1) {
			extract($this->input->post());
			$password = md5($password);
			if ($this->Dba_model->update("employee_master", array("password" => $password, "resetcode" => ''), array("resetcode" => $resetcode))) {
				$this->session->unset_userdata['reset_code'];
				echo 1;
			} else {
				echo 0;
			}
		}
	}



	/* ------------------------------------------------------------------------------ */


	public function SaveRecruiters()
	{
		if ($this->input->post('captcha_add') != $this->session->userdata['captchaWord']) {
			echo "Captcha Wrong";
			//break;
		} else {

			$data['name_of_company'] = $this->input->post("name_of_company");
			$data['year_of_inception'] = $this->input->post("year_of_inception");
			$data['website'] = $this->input->post("website");
			$data['type_of_company'] = $this->input->post("type_of_company");
			$data['nature_of_business'] = $this->input->post("nature_of_business");
			$data['gst_tin_number'] = $this->input->post("gst_tin_number");
			$data['affiliation'] = $this->input->post("affiliation");
			$data['inhouse_hr_name'] = $this->input->post("inhouse_hr_name");
			$data['designation'] = $this->input->post("designation");
			$data['mobile'] = $this->input->post("mobile");
			$data['alternate_mobile'] = $this->input->post("alternate_mobile");
			$data['email'] = $this->input->post("email");
			$data['alternate_email'] = $this->input->post("alternate_email");
			$data['postal_code'] = $this->input->post("postal_code");
			$data['address'] = $this->input->post("address");
			$data['office_iitm_YN'] = $this->input->post("office_iitm_YN");
			$data['registerd_company_YN'] = $this->input->post("registerd_company_YN");
			//$data['acceptance_YN']=$this->input->post("acceptance_YN");
			$data['diclaration_YN'] = $this->input->post("diclaration_YN");
			$data['genrated_date'] = date('Y-m-d');

			/* File Upload */
			if (!empty($_FILES['company_image']['name'])) {
				$genratedID = "company" . "_" . date('Ymdhis') . "";
				$ext = pathinfo($_FILES['company_image']['name'], PATHINFO_EXTENSION);
				$uploadpath = strtolower($genratedID . "." . $ext);

				$config['upload_path']   = './assets/recruitment/';
				$config['allowed_types'] = '*';
				$config['max_size']	= '1000000000000000';
				$config['file_name']	= $uploadpath;
				$this->load->library('upload', $config);
				$this->upload->initialize($config);

				if ($this->upload->do_upload('company_image')) {
					$upload_data = $this->upload->data();
					$data['company_image'] = $uploadpath;
				} else {
					echo $this->upload->display_errors();
				}
			}
			/* File Upload */


			//print_r($data);die;

			$n = $this->Dba_model->insert("recruiter_master", $data);

			//print_r($n);die;

			if ($n == 1) {
				$rm_id = $this->db->insert_id();
				$registration_number = "GSP/Recruiter/" . $rm_id;

				//print_r($cr);die;
				$check = $this->Dba_model->select_where("recruiter_details", array("rm_id" => $rm_id, "registration_number" => $registration_number));
				$cn = $check->num_rows();
				if ($cn == 0) {
					$ta = $this->db->insert('recruiter_details', array("rm_id" => $rm_id, "registration_number" => $registration_number));
				}

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
				/*$this->email->set_mailtype("html");
				$this->email->set_header('Content-Type', 'text/html');*/
				$this->email->from('info@globalskillspark.in', 'SSR-GSP');
				$this->email->to($this->input->post("email"));
				//$this->email->bcc('gunja609@gmail.com');
				$this->email->subject('Registration Successfully');


				$message = "<p >Hello " . $this->input->post("name_of_company") . ",</p>
			  <p> Your registration has been successfully completed. We will contact you soon.</p>

              <p>Thanks & Regards, <br/>SSR-GSP</p>";
				$this->email->message($message);
				$this->email->send();
				/* Email Sending */

				$this->session->set_userdata('registration_number', $registration_number);
				redirect('Recruiters/RegistrationSuccess');
			} else {

				redirect('Recruiters');
			}
		}
	}

	public function RegistrationSuccess()
	{

		$this->load->view('recruiters/recruiter_success');
	}

	public function GetTrade_ajax()
	{

		$qualification_id = $this->input->post('qualification');
		$data['trade_data']  = $this->Student_M->GetTrades($qualification_id);

		//echo"pre";print_r($data);die;
		$this->load->view('common/degree_diploma_dd', $data);
	}

	public function GetCourse_ajax()
	{

		$qualification_id = $this->input->post('qualification');
		$degree_diploma_id = $this->input->post('degree_diploma_id');

		//print_r($qualification_id."@".$degree_diploma_id);die;
		$data['course_data']  = $this->Student_M->GetCourses($qualification_id, $degree_diploma_id);

		//echo"pre";print_r($data);die;
		$this->load->view('common/course_dd', $data);
	}


	public function CheckEmail()
	{
		/* $config = array(
					'protocol'  => 'smtp',
					'smtp_host' => 'zimbra135.megavelocity.net',
					'smtp_port' => 587,
					'smtp_user' => 'SSRGSP@crispindia.com',
					'smtp_pass' => 'GSP-ssr@123456',
					'mailtype'  => 'html',
					'smtp_crypto' => 'tls',
					'newline'   => '\r\n',
					'charset'   => 'iso-8859-1',
					'wordwrap' => TRUE
				);*/

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
		/*$this->email->set_mailtype("html");
				$this->email->set_header('Content-Type', 'text/html');*/
		$this->email->from('info@globalskillspark.in', 'SSR-GSP');
		//$this->email->to($this->input->post("email"));
		$this->email->to('gunja609@gmail.com');
		$this->email->subject('Registration Successfully');


		$message = "<p >Dear User,</p>
              <p>It is Mandatory for every candidate to appear in the entrance examination i.e. GSP-SET on the basis of whose merit list he/she will be given admission in each course.
              .
              </p>
              <p>Thanks & Regards, <br/>SSR-GSP</p>";
		$this->email->message($message);
		if ($this->email->send()) {
			echo 1;
		} else {
			echo $this->email->print_debugger();
		}
	}

	/*public function SendSms()
		{
		    ///////////////SMS Code//////////////////
			  //$textmess ='A task has been assigned to you on dated: "'.$ad.'". Kindly login into the portal tl.crispindia.com';

				$textmess='Congratulations! Your registration has been successfully completed. Your Registration No is {#var#}. Team SSR-GSP. CRISPB';
				$mobno = $mob;
				//$mobno = '7999637938';
				//$mobno = '7999637938,7987997142';
				$mobno_arr = explode (",", $mobno);
				$stat=array();
				foreach($mobno_arr as $mobvalue)
				{
				$mobvalue=trim($mobvalue);
						if($mobvalue){
				if(is_numeric($mobvalue)){
				$pass='cri$pb97';
				//var_dump($textmess);
				$XMLEncode=urlencode("<?xml version='1.0' encoding='ISO-8859-1'?> <!DOCTYPE MESSAGE SYSTEM 'http://127.0.0.1:80/psms/dtd/messagev12.dtd'> <MESSAGE VER='1.2'> <USER USERNAME='crispb' PASSWORD='".$pass."'/> <SMS  UDH='0' CODING='1' TEXT='".$textmess."' PROPERTY='0' ID='1'> <ADDRESS FROM='CRISPB' TO='".$mobvalue."' SEQ='1' TAG='some clientside random data'/></SMS> </MESSAGE>");
				$SMSData = "https://api.myvfirst.com/psms/servlet/psms.Eservice2?data=".$XMLEncode."&action=send";
				get_headers($SMSData);
				$stat[]='Message Sent Successfully !!';
				}
				else{$stat[]="Mobile number '".$mobvalue."' is incorrect !!";}
				}
				}
				$string='';
				foreach($stat as $items){
				 $string  .= $items."\n";
				}

				 $string;
				//var_dump($string);

			 /////////////////////////////////
		}*/


	public function Dashboard()
	{
		$rm_id = $this->session->userdata('user_id');
		$data['recruiters_details']  = $this->Recruiters_M->Get_RecruiterDetails($rm_id);

		$this->load->view("recruiters/dashboard", $data);
	}

	public function Update_CompanyProfile()
	{
		$rm_id = $this->session->userdata('user_id');
		$data['designation_data'] = $this->Recruiters_M->Get_Designation();
		$data['recruiters_details']  = $this->Recruiters_M->Get_RecruiterDetails($rm_id);

		$this->load->view("recruiters/update_recruiter_profile", $data);
	}

	public function UpdateRecruiter()
	{

		$data['inhouse_hr_name'] = $this->input->post("inhouse_hr_name");
		$data['designation'] = $this->input->post("designation");
		$data['mobile'] = $this->input->post("mobile");
		$data['alternate_mobile'] = $this->input->post("alternate_mobile");
		$data['email'] = $this->input->post("email");
		$data['alternate_email'] = $this->input->post("alternate_email");
		$data['postal_code'] = $this->input->post("postal_code");
		$data['address'] = $this->input->post("address");
		//$data['genrated_date'] = date('Y-m-d');
		$con['rm_id'] = $this->input->post('rm_id');


		//print_r($data);die;

		$n = $this->Dba_model->update("recruiter_master", $data, $con);

		//print_r($n);die;

		if ($n == 1) {
			echo "<script>alert('Details Updated Successfully !');window.location='" . base_url() . "Recruiters/Update_CompanyProfile" . "';</script>";
		} else {
			echo "<script>alert('No Changes Done !');window.location='" . base_url() . "Recruiters/Update_CompanyProfile" . "';</script>";
		}
	}

	public function CampusDrive()
	{

		$this->load->view('campus/add_campus');
	}
}
