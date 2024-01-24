<?php
defined('BASEPATH') or exit('No direct script access allowed');

class UserLogin extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->helper('form');
		$this->load->helper('url');
		$this->load->helper('string');
		$this->load->library('form_validation');
		$this->load->library('session');
		$this->load->model('UserLogin_M');
		$this->load->model('Dba_model');
		date_default_timezone_set("Asia/Calcutta");
	}

	public function index()
	{
		if (!$this->session->userdata('user_id')) {
			header("location:" . base_url() . "Login");
		} else {
			header("location:" . base_url() . "Home");
		}
	}

	public function LoginCheck()
	{


	}

	public function AdminLogin()
	{
		if ($this->input->post('login') == 1) {
			$this->form_validation->set_rules("username", "Username", "trim|required");
			$this->form_validation->set_rules("password", "Password", "trim|required");
			$this->form_validation->set_rules('captcha_add', 'Captcha', 'required');
			//echo $this->input->post('captcha_add').'@'.$this->session->userdata['captchaWord']; die;
			if ($this->input->post('captcha_add') != $this->session->userdata['captchaWord']) {
				echo "Captcha Wrong";
				//break;
			}
			else {
			if ($this->form_validation->run()) {
				$this->db->trans_start(); ////////
				$this->db->trans_strict(FALSE);

				extract($this->input->post());

				//print_r($this->input->post());die;
				$username = $this->input->post('username');
				$password = md5($this->input->post('password'));
				$flag=1;
				$check = $this->db->query("SELECT * FROM user_master  where username='" . $username . "' ");
				if ($check->num_rows() == 1) {
				//$n = $this->UserLogin_M->UserLoginCheck($flag,$username,$password);
				$n = $this->db->query("SELECT um.*,rm.role_name FROM user_master um
				INNER JOIN role_master rm ON rm.role_id=um.user_role
				where username='".$username."' and password = '".$password."' ");

					if ($n->num_rows() == 1) {
						$res = $n->result_array();
						foreach ($res as $data) {
							extract($data);
						}
						switch ($active_yn) {
							case 0:
								echo "Account is Deactivated";
								break;
							case 'deactive':
								echo "Account is Deactivated";
								break;
							case 'delete':
								echo "Your Account was Deleted";
								break;
							case 1:
								$this->session->userdata['user_id'] = $data['user_id'];
								$this->session->userdata['username'] = $data['username'];
								$this->session->userdata['user_role'] = $data['user_role'];
								$this->session->userdata['fullname'] = $data['fullname'];
								$this->session->userdata['role_name'] = $data['role_name'];
								///////////////// Insert in User Log/////////////////////
								$data2['user_id'] = $user_id;
								$data2['user_role'] = $user_role;
								$data2['ll_date'] = date('Y-m-d h:i:s');
								$this->Dba_model->insert("login_log", $data2);
								$this->db->trans_complete();
								echo 1;
								break;
							default:
								echo "Something Wrong";
						}
					} else {
						echo 3;
					}
				} else {
					echo 2;
				}
			} else {
				echo validation_errors();
			}
		}
		}
	}

	/////////////Recruiter Login

	public function RecruiterLogin()
	{
		if ($this->input->post('login') == 1) {
			$this->form_validation->set_rules("username", "Username", "trim|required");
			$this->form_validation->set_rules("password", "Password", "trim|required");
			$this->form_validation->set_rules('captcha_add', 'Captcha', 'required');
			//echo $this->input->post('captcha_add').'@'.$this->session->userdata['captchaWord']; die;
			if ($this->input->post('captcha_add') != $this->session->userdata['captchaWord']) {
				echo "Captcha Wrong";
				//break;
			}
			else {
			if ($this->form_validation->run()) {
				$this->db->trans_start(); ////////
				$this->db->trans_strict(FALSE);

				extract($this->input->post());

				//print_r($this->input->post());die;
				$username = $this->input->post('username');
				$password = $this->input->post('password');
				$flag=1;
				$check = $this->db->query("SELECT a.name_of_company,a.rm_id,b.user_role,b.registration_number,b.username,b.password FROM recruiter_master a
				JOIN recruiter_details b on b.rm_id=a.rm_id  where b.username='" . $username . "' ");
				if ($check->num_rows() == 1) {

				$n = $this->db->query("SELECT a.name_of_company,a.rm_id,a.verification,b.user_role,b.registration_number,b.username,b.password,rm.role_name FROM recruiter_master a
				JOIN recruiter_details b on b.rm_id=a.rm_id
				INNER JOIN role_master rm ON rm.role_id=b.user_role
				where b.username='".$username."' and b.password = '".$password."' ");

					if ($n->num_rows() == 1) {
						$res = $n->result_array();
						foreach ($res as $data) {
							extract($data);
						}
						switch ($verification) {
							case 0:
								echo "Account is Deactivated";
								break;
							case 'deactive':
								echo "Account is Deactivated";
								break;
							case 'delete':
								echo "Your Account was Deleted";
								break;
							case 1:
								$this->session->userdata['user_id'] = $data['rm_id'];
								$this->session->userdata['username'] = $data['username'];
								$this->session->userdata['user_role'] = $data['user_role'];
								$this->session->userdata['fullname'] = $data['name_of_company'];
								$this->session->userdata['role_name'] = $data['role_name'];
								///////////////// Insert in User Log/////////////////////
								$data2['user_id'] = $rm_id;
								$data2['user_role'] = $user_role;
								$data2['ll_date'] = date('Y-m-d h:i:s');
								$this->Dba_model->insert("login_log", $data2);
								$this->db->trans_complete();
								echo 1;
								break;
							default:
								echo "Something Wrong";
						}
					} else {
						echo 3;
					}
				} else {
					echo 2;
				}
			} else {
				echo validation_errors();
			}
		}
		}
	}
	///////////////STUDENT LOGIN////////
	public function StudentLogin()
	{
		if ($this->input->post('login') == 1) {
			$this->form_validation->set_rules("username", "Username", "trim|required");
			$this->form_validation->set_rules("password", "Password", "trim|required");
			$this->form_validation->set_rules('captcha_add', 'Captcha', 'required');
			if ($this->input->post('captcha_add') != $this->session->userdata['captchaWord']) {
				echo "Captcha Wrong";
				//break;
			}
			if ($this->form_validation->run()) {
				$this->db->trans_start(); ////////
				$this->db->trans_strict(FALSE);

				extract($this->input->post());

				//print_r($this->input->post());die;
				$username = $this->input->post('username');
				//$password = md5($this->input->post('password'));
				$password = $this->input->post('password');
				$flag=2;
				$check = $this->db->query("SELECT a.student_id,a.user_role,a.enrollment_no,a.student_name,b.username,b.password FROM `alumini_student_master` a
				JOIN alumni_details b ON b.student_id=a.student_id  where b.username='" . $username . "' ");

				if ($check->num_rows() == 1) {
				//$n = $this->UserLogin_M->UserLoginCheck($flag,$username,$password);
				$n = $this->db->query("SELECT a.student_id,a.user_role,a.enrollment_no,a.student_name,b.username,b.password,a.verified,c.role_name FROM `alumini_student_master` a
				JOIN alumni_details b ON b.student_id=a.student_id
				JOIN role_master c ON c.role_id=a.user_role
				where b.username='".$username."' and b.password = '".$password."' ");
					//print_r($n->result_array());die;
					if ($n->num_rows() == 1) {
						$res = $n->result_array();
						foreach ($res as $data) {
							extract($data);
						}
						switch ($verified) {
							case 0:
								echo "Account is Not Verified";
								break;
							case 'deactive':
								echo "Account is Deactivated";
								break;
							case 'delete':
								echo "Your Account was Deleted";
								break;
							case 1:

							$this->session->set_userdata('user_id',$student_id);
							$this->session->set_userdata('user_role',$user_role);
							$this->session->set_userdata('enrollment_no',$enrollment_no);
							$this->session->set_userdata('username',$username);
							$this->session->set_userdata('fullname',$student_name);
							$this->session->set_userdata('role_name',$role_name);


								$this->db->trans_complete();
								echo 1;
								break;
							default:
								echo "Something Wrong";
						}
					} else {
						echo 3;
					}
				} else {
					echo 2;
				}
			} else {
				echo validation_errors();
			}
		}
	}


}
