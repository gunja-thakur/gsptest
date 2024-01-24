<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Website extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Event_M');
		$this->load->model('Alumni_M');
		$this->load->model('Dba_model');
		$this->load->helper('string');
		$this->load->library('email');
		$this->load->library("pagination");
	}


	public function index()
	{
		$flag=1;
		$data['event_data']  = $this->Event_M->Get_EventList($flag);
		$data['notable_data']  = $this->Alumni_M->Get_NotableAlumniList($flag);
		$data['testimonial_data']  = $this->Alumni_M->Get_TestimonialiList();
		//echo"<pre>"; print_r($data);die;
		$this->load->view('frontend/index',$data);
	}

	public function Alumni_Directory()
	{
		$config = array();
        $config["base_url"] = base_url() . "index.php/Website/Alumni_Directory";
        $config["total_rows"] = $this->Alumni_M->get_count();
        $config["per_page"] = 10;
        $config["uri_segment"] = 3;
        $this->pagination->initialize($config);
		$page = ($this->uri->segment(3))? $this->uri->segment(3) : 0;
        $data["links"] = $this->pagination->create_links();

		//echo"<pre>"; print_r($page); die;
		/////////////
		$flag = 1;
		$batch = "";
		$passing_year ="";
		$branch =  '';
		$data['branch_data']  = $this->Alumni_M->Get_BranchList();
		$data['student_data']  = $this->Alumni_M->Get_AluminiDirectory($flag, $batch, $passing_year, $branch,$config["per_page"], $page);
		//echo"<pre>"; print_r($data); die;
		$this->load->view('frontend/alumni_directory', $data);
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


	public function Alumni_List()
	{
		$flag = 3;
		$batch = "";
		$passing_year =  "";
		$branch =  '';
		$data['branch_data']  = $this->Alumni_M->Get_BranchList();
		$data['student_data']  = $this->Alumni_M->Get_AluminiList($flag, $batch, $passing_year, $branch);
		//echo"<pre>"; print_r($data['student_data']); die;
		//$this->load->view('alumni/alumni_list_web', $data);
		$this->load->view('frontend/alumni_list', $data);
	}

	public function Alumni_ListAjax()
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

	public function Events()
	{
		$flag=1;
		$data['event_data']  = $this->Event_M->Get_EventList($flag);
		//echo"<pre>"; print_r($data['event_data']); die;
		$this->load->view('frontend/event_list',$data);
	}


	public function Success_Story()
	{
		$flag=1;
		$data['notable_data']  = $this->Alumni_M->Get_NotableAlumniList($flag);

		//echo"<pre>"; print_r($data['notable_data']); die;
		$this->load->view('frontend/success_story',$data);
	}

	public function Get_SuccessStory()
	{
		$student_id=$this->input->post('student_id');
		$data['notable_data']  = $this->Alumni_M->Get_NotableAlumniList($student_id);

		//echo"<pre>"; print_r($data['notable_data']); die;
		$this->load->view('frontend/view_success_story_ajax',$data);
	}


	public function Contact_Us()
	{
		$this->load->view('frontend/contact');
	}





















}
