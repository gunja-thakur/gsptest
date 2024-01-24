<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Vacancy extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Vacancy_M');
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
		$data['jobtype_data']=$this->Vacancy_M->GetJobType_List();
		$data['jobschedule_data']=$this->Vacancy_M->GetJobSchedule_List();
		$data['paytype_data']=$this->Vacancy_M->GetPayType_List();
		$this->load->view('vacancy/add_vacancy',$data);
	}

	public function Add_VacancySave()
	{

		$data['job_title']=$this->input->post("job_title");
		$data['total_vacancy']=$this->input->post("total_vacancy");
		$data['address']=$this->input->post("address");
		$data['job_description']=$this->input->post("job_description");
		$data['benifits']=$this->input->post("benifits");
		$data['job_location']=$this->input->post("job_location");
		$data['job_type']=$this->input->post("job_type");
		$data['job_schedule']=$this->input->post("job_schedule");
		$data['pay_range_type']=$this->input->post("pay_range_type");
		$data['pay_range_max']=$this->input->post("pay_range_max");
		$data['pay_range_min']=$this->input->post("pay_range_min");
		$data['open_date']=$this->input->post("open_date");
		$data['last_date']=$this->input->post("last_date");
		$data['contact_person']=$this->input->post("contact_person");
		$data['email']=$this->input->post("email");
		$data['contact_person_mobile']=$this->input->post("contact_person_mobile");
		$data['rm_id']=$this->session->userdata('user_id');
		/* File Upload */
		if(!empty($_FILES['job_attachment']['name'])) {
			$genratedID = "vacany" . "_" . date('Ymdhis') . "";
			$ext = pathinfo($_FILES['job_attachment']['name'], PATHINFO_EXTENSION);
			$uploadpath = strtolower($genratedID . "." . $ext);

			$config['upload_path']   = './assets/job/';
			$config['allowed_types'] = '*';
			$config['max_size']	= '1000000000000000';
			$config['file_name']	= $uploadpath;
			$this->load->library('upload', $config);
			$this->upload->initialize($config);

			if($this->upload->do_upload('job_attachment')) {
				$upload_data = $this->upload->data();
				$data['job_attachment'] = $uploadpath;
			} else {
				echo $this->upload->display_errors();
			}
		}

		/* File Upload */
		//echo"<pre>"; print_r($data); die;

		$n=$this->Dba_model->insert("vacancy_master",$data);

		if($n==1)
		{
			echo "<script>alert('Vacancy Successfully Added!');window.location='" . base_url() . "Vacancy" . "';</script>";
		}else{
			echo "<script>alert('Something Wrong!');window.location='" . base_url() . "Vacancy/Add" . "';</script>";
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
		$data['vacancy_data']  = $this->Vacancy_M->Get_VacancyList($flag,$rm_id);

		//echo"<pre>"; print_r($data['campus_data']); die;
		$this->load->view('vacancy/vacancy_list',$data);
	}

	public function ViewList_Ajax()
	{

		$flag=1;
		$rm_id=$this->input->post('company_name');
		$vr_status=$this->input->post('vr_status');
		$from_date=$this->input->post('from_date');
		$to_date=$this->input->post('to_date');


		$data['vacancy_data']  = $this->Vacancy_M->Get_VacancyList_Ajax($flag,$rm_id,$vr_status,$from_date,$to_date);

		//echo"<pre>"; print_r($data['vacancy_data']); die;
		$this->load->view('vacancy/vacancy_list_ajax',$data);
	}

	public function View_SingleVacancy()
	{
		$vacancy_id=$this->input->post("vacancy_id");
		$rm_id=$this->session->userdata('user_id');
		$data['jobtype_data']=$this->Vacancy_M->GetJobType_List();
		$data['jobschedule_data']=$this->Vacancy_M->GetJobSchedule_List();
		$data['paytype_data']=$this->Vacancy_M->GetPayType_List();
		$data['vacancy_data']  = $this->Vacancy_M->Get_SingleVacancy($vacancy_id,$rm_id);

		//echo"<pre>"; print_r($data['campus_data']); die;
		$this->load->view('vacancy/vacancy_modification_ajax',$data);
	}

	public function View_Vacancy()
	{
		$vacancy_id=$this->input->post("vacancy_id");
		$rm_id=$this->input->post("rm_id");
		$data['vacancy_data']  = $this->Vacancy_M->Get_SingleVacancy($vacancy_id,$rm_id);

		//echo"<pre>"; print_r($data['campus_data']); die;
		$this->load->view('vacancy/vacancy_view_ajax',$data);
	}

	public function ModifyVacancy_Save()
	{

		$data['job_title']=$this->input->post("job_title");
		$data['total_vacancy']=$this->input->post("total_vacancy");
		$data['address']=$this->input->post("address");
		$data['job_description']=$this->input->post("job_description");
		$data['benifits']=$this->input->post("benifits");
		$data['job_location']=$this->input->post("job_location");
		$data['job_type']=$this->input->post("job_type");
		$data['job_schedule']=$this->input->post("job_schedule");
		$data['pay_range_type']=$this->input->post("pay_range_type");
		$data['pay_range_max']=$this->input->post("pay_range_max");
		$data['pay_range_min']=$this->input->post("pay_range_min");
		$data['open_date']=$this->input->post("open_date");
		$data['last_date']=$this->input->post("last_date");
		$data['contact_person']=$this->input->post("contact_person");
		$data['email']=$this->input->post("email");
		$data['contact_person_mobile']=$this->input->post("contact_person_mobile");
		$con['rm_id']=$this->session->userdata('user_id');
		$con['vacancy_id']=$this->input->post("vacancy_id");
		/* File Upload */
		if(!empty($_FILES['job_attachment']['name'])) {
			$genratedID = "campus" . "_" . date('Ymdhis') . "";
			$ext = pathinfo($_FILES['job_attachment']['name'], PATHINFO_EXTENSION);
			$uploadpath = strtolower($genratedID . "." . $ext);

			$config['upload_path']   = './assets/job/';
			$config['allowed_types'] = '*';
			$config['max_size']	= '1000000000000000';
			$config['file_name']	= $uploadpath;
			$this->load->library('upload', $config);
			$this->upload->initialize($config);

			if($this->upload->do_upload('job_attachment')) {
				$upload_data = $this->upload->data();
				$data['job_attachment'] = $uploadpath;
			} else {
				echo $this->upload->display_errors();
			}
		}
		else
		{
			$data['job_attachment'] = $this->input->post('job_file');
		}
		/* File Upload */
		//echo"<pre>"; print_r($data); die;

		$n=$this->Dba_model->update("vacancy_master",$data,$con);
		if($n==1)
		{
			echo "<script>alert('Vacancy Modified Successfully !');window.location='" . base_url() . "Vacancy" . "';</script>";
		}else{
			echo "<script>alert('No Changes Done!');window.location='" . base_url() . "Vacancy" . "';</script>";
		}

	}

	public function RemoveVacancy()
	{
		$con['vacancy_id'] = $this->input->post("vacancy_id");
		$data['flag'] = 0;

		$n = $this->Dba_model->update("vacancy_master", $data, $con);
		if ($n > 0) {
			echo 1;
		} else {
			echo 0;
		}
	}

	public function VacancyVerification()
	{
		$con['vacancy_id'] = $this->input->post("vacancy_id");

		$data['verification_yn'] = $this->input->post("verification_yn");
		$data['verified_by'] = $this->session->userdata('user_id');
		$data['verification_date']=date('y-m-d h:i:s');


		$n = $this->Dba_model->update("vacancy_master", $data, $con);
		//print_r($n); die;
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
		$data['campus_data']  = $this->Vacancy_M->Get_campusList($flag);

		//echo"<pre>"; print_r($data['campus_data']); die;
		$this->load->view('vacancy/campus_list_web',$data);
	}





}
