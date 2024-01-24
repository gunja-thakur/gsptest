<?php
	defined('BASEPATH') or exit("No Direct Access");
	class Password extends CI_controller
	{
		public function __construct()
		{
			parent::__construct();
    $this->load->helper('form');
	$this->load->helper('url');
	$this->load->library('form_validation');
	$this->load->helper('string');
	$this->load->library('session');
    $this->load->model('Home_M');
    $this->load->model('Dba_model');
		}

		public function index()
		{
			$this->ChangePassword();
		}

		public function ChangePassword()
		{
			if(!$this->session->userdata('user_id'))
			{
				header("location:".base_url()."Login");
			}

			$data['student_data']=$this->Dba_model->select_query("Select * from user_master where user_id='".$this->session->userdata('user_id')."'  ")->result_array();

			$this->load->view("common/change_password",$data);
		}

		public function ChangePassword_Save()
		{
			if($this->input->post('change')==1)
			{
				extract($this->input->post());
				$old_password = md5($old_password);
				$password = md5($password);
				$user_id = $this->session->userdata('user_id');
				$query1 = $this->Dba_model->select_where("user_master",array("password"=>$old_password,"user_id"=>$user_id));
				$n1 = $this->db->affected_rows();
				if($n1==1)
				{
					if($this->Dba_model->update("user_master",array("password"=>$password),array("user_id"=>$user_id,"password"=>$old_password))>0)
					echo 1;
					else
					echo 0;
				}

			}
		}


		public function Forget_Password()
	{
		$this->load->view("common/forget_password");
	}

	public function CheckUser()
	{
		if ($this->input->post('forget') == 1) {
			extract($this->input->post());
			$query1 = $this->Dba_model->select_where("user_master", array("email" => $username));
			if ($query1->num_rows()) {
				$res = $query1->result_array();
				foreach ($res as $r) {
					extract($r);
				}
				$reset_code = random_int(100000, 999999);


				if ($this->Dba_model->update("user_master", array("reset_code" => $reset_code), array("user_id" => $user_id))) {
					$this->session->set_userdata('reset_user_id', $user_id);
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
					$this->email->to($email);
					//$this->email->to('gunja609@gmail.com');
					$this->email->subject('Reset Password Code');

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
				header("location:".base_url()."Login");
			}
			else{
				$this->load->view('common/verify_otp');
			}
	}

	public function NewPassword()
	{
		if(!$this->session->userdata('reset_user_id'))
		{
		header("location:".base_url()."Login");
		}
		else
		{
		if ($this->input->post('verify') == 1) {
			extract($this->input->post());


			//print_r($this->input->post());die;
			$user_id=$this->input->post('user_id');
			$otp=$this->input->post('otp');
			$reset_code=$this->input->post('reset_code');


			$query1 = $this->Dba_model->select_where("user_master", array("user_id" => $user_id,"reset_code" => $reset_code));


			if ($query1->num_rows()) {
				$res = $query1->result_array();

				//print_r($res);die;
				$data['user_data'] = $query1->result_array();
				$this->load->view('common/new_password',$data);
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
		if(!$this->session->userdata('reset_user_id'))
		{
		header("location:".base_url()."Login");
		}
		else{
			if($this->input->post('change')==1)
			{
				extract($this->input->post());


				$user_id = $user_id;
				$reset_code = $reset_code;
				$password = md5($password);

				$n=$this->Dba_model->update("user_master",array("password"=>$password,"reset_code"=>''),array("user_id"=>$user_id,"reset_code"=>$reset_code));
				//print_r($n);die;

				if($n>0)
					echo 1;
					else
					echo 0;

			}
		}
	}



	}