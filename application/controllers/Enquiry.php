<?php
	defined('BASEPATH') or exit("No Direct Access");
	/*error_reporting(0);
session_start();*/
	class Enquiry extends CI_controller
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
	$this->load->model('Dba_model');
	$this->load->library('email');
		}


		public function index()
		{
		$random_number = substr(number_format(time() * rand(),0,'',''),0,6);
      // setting up captcha config
      $vals = array(
             'word' => $random_number,
             'img_path' => './captcha_images/',
             'img_url' => base_url().'captcha_images/',
             'img_width' => 140,
             'img_height' => 30,
			 'font_size' => 50,
             'expiration' => 7200,
			 'colors'	=> array(
				'background'	=> array(255,255,255),
				'border'	=> array(153,102,102),
				'text'		=> array(154,63,28),
				'grid'		=> array(255,182,182)
			)
            );
			  $data['captcha'] = create_captcha($vals);
			  $this->session->set_userdata('captchaWord',$data['captcha']['word']);
				//var_dump($data['captcha']['word']);die;
			$data['course_data']  = $this->Student_M->Get_CourseList();
			$data['category_data']  = $this->Student_M->Get_CategoryList();
			//print_r($data['course_data']); die;
			$this->load->view("common/enquiry_form",$data);
		}


		public function SaveEnquiry()
		{

			$data['person_name']=$this->input->post("person_name");
			$data['father_name']=$this->input->post("father_name");
			$data['dob']=$this->input->post("dob");
			$data['mobile']=$this->input->post("mobile");
			$data['email']=$this->input->post("email");
			$data['category']=$this->input->post("category");
			$data['gender']=$this->input->post("gender");
			$data['class']=$this->input->post("class");
			$data['domicile']=$this->input->post("domicile");
			$data['address']=$this->input->post("address");
			$data['qualification']=$this->input->post("qualification");
			$data['degree_diploma_id']=$this->input->post("degree_diploma_id");
			$data['courses']=implode(",",$this->input->post("course_id"));

			$data['reg_date']=date('Y-m-d');


			//print_r($ta);die;

			$n=$this->Dba_model->insert("enquiry_master",$data);

			if($n==1)
			{
				if($this->input->post("qualification")==1)
				{
				$data['reg_no']="Diploma/GSP/2023/".$this->db->insert_id();
				}elseif($this->input->post("qualification")==2){
				$data['reg_no']="Degree/GSP/2023/".$this->db->insert_id();
				}else{
				$data['reg_no']="ITI/GSP/2023/".$this->db->insert_id();
				}

				$courses=$this->input->post("course_id");
				$enquiry_id=$this->db->insert_id();
				foreach($courses as $cr)
				{
					//print_r($cr);die;
				$check = $this->Dba_model->select_where("enquiry_courses_master", array("courses_id" => $cr, "enquiry_id" => $enquiry_id));
					$cn = $check->num_rows();
					if ($cn == 0) {
					$ta = $this->db->insert('enquiry_courses_master', array("enquiry_id" => $enquiry_id, "courses_id" => $cr,"reg_no" => $data['reg_no']));
				}
				}


				/* Email Sending */
				$config = array(
					'protocol'  => 'smtp',
					'smtp_host' => 'smtp.office365.com',
					'smtp_port' => 587,
					'smtp_user' => 'SSRGSP@crispindia.com',
					'smtp_pass' => 'GSP-ssr@123456',
					'mailtype'  => 'html',
					'smtp_crypto' => 'tls',
					'newline'   => '\r\n',
					'charset'   => 'iso-8859-1',
					'wordwrap' => TRUE
				);

				$this->email->initialize($config);
				$this->email->set_crlf("\r\n");
				$this->email->set_newline("\r\n");
				$this->email->set_mailtype("html");
				$this->email->set_header('Content-Type', 'text/html');
				$this->email->from('SSRGSP@crispindia.com', 'SSR-GSP');
				$this->email->to($this->input->post("email"));
				//$this->email->bcc('gunja609@gmail.com');
				$this->email->subject('Registration Successfully');


			  $message = "<p >Dear " . $this->input->post("person_name") . ",</p>
			  <p> Congratulations! Your registration has been successfully completed. Your Registration No is <b>".$data['reg_no']." </b></p>
              <p> <b>Note : </b>After Successful registration it is mandatory for each candidate to appear  in the entrance examination i.e. GSP-SET on the basis of which the merit list will be prepared and admission will be granted in each course.
              .
              </p>
              <p>Thanks & Regards, <br/>SSR-GSP</p>";
				$this->email->message($message);
				$this->email->send();
				/* Email Sending */

			$this->load->view('common/enquiry_success', $data);

			}else{

				redirect('Enquiry');
			}

		}

		public function GetTrade_ajax()
		{

		$qualification_id=$this->input->post('qualification');
		$data['trade_data']  = $this->Student_M->GetTrades($qualification_id);

		//echo"pre";print_r($data);die;
		$this->load->view('common/degree_diploma_dd',$data);

		}

		public function GetCourse_ajax()
		{

		$qualification_id=$this->input->post('qualification');
		$degree_diploma_id=$this->input->post('degree_diploma_id');

		//print_r($qualification_id."@".$degree_diploma_id);die;
		$data['course_data']  = $this->Student_M->GetCourses($qualification_id,$degree_diploma_id);

		//echo"pre";print_r($data);die;
		$this->load->view('common/course_dd',$data);

		}


		/*public function CheckEmail()
		{
		    $config = array(
					'protocol'  => 'smtp',
					'smtp_host' => 'smtp.office365.com',
					'smtp_port' => 587,
					'smtp_user' => 'SSRGSP@crispindia.com',
					'smtp_pass' => 'GSP-ssr@123456',
					'mailtype'  => 'html',
					'smtp_crypto' => 'tls',
					'newline'   => '\r\n',
					'charset'   => 'iso-8859-1',
					'wordwrap' => TRUE
				);

				$this->email->initialize($config);
				$this->email->set_crlf("\r\n");
				$this->email->set_newline("\r\n");
				$this->email->set_mailtype("html");
				$this->email->set_header('Content-Type', 'text/html');
				$this->email->from('SSRGSP@crispindia.com', 'SSR-GSP');
				//$this->email->to($this->input->post("email"));
				$this->email->to('gunja609@gmail.com');
				$this->email->subject('Registration Success');


			  $message = "<p >Dear " . $this->input->post("person_name") . ",</p>
              <p>It is Mandatory for every candidate to appear in the entrance examination i.e. GSP-SET on the basis of whose merit list he/she will be given admission in each course.
              .
              </p>
              <p>Thanks & Regards, <br/>SSR-GSP</p>";
				$this->email->message($message);
				if($this->email->send())
				{
				    echo 1;
				}
				else
				{
				    echo $this->email->print_debugger();
				}
		}*/

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







	}