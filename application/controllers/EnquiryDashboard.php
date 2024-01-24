<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class EnquiryDashboard extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Dba_model');
		$this->load->model('Student_M');
		$this->load->model('Enquiry_M');
		$this->load->helper('string');
	}

	public function index()
	{
		$this->AluminiList();
	}


	public function AluminiList()
	{
	$flag=1;
	$data['student_data']  = $this->Enquiry_M->Get_AluminiList($flag);
	//echo"<pre>"; print_r($data['student_data']); die;
	$this->load->view('admin/alumini_list',$data);

	}

	public function EnquiryList()
	{

	$data['student_data']  = $this->Enquiry_M->Get_EnquiryList($flag=1,$qualification='',$from_date='',$to_date='');
	//echo"<pre>"; print_r($data['student_data']); die;
	$this->load->view('admin/enquiry_dashboard',$data);

	}

	public function EnquiryList_Ajax()
	{
	$flag=2;
	$qualification=$this->input->post('qualification');
	if(!empty($this->input->post('from_date'))){
	$from_date=$this->input->post('from_date');
	}else{
	    $from_date='1990-01-01';
	}

	if(!empty($this->input->post('to_date'))){
	$to_date=$this->input->post('to_date');
	}
	else{
	    $to_date='1990-01-01';
	}

    //print_r($qualification."-".$from_date."-".$to_date);die;
	$data['student_data']  = $this->Enquiry_M->Get_EnquiryList($flag,$qualification,$from_date,$to_date);
	//echo"<pre>"; print_r($data['student_data']); die;
	$this->load->view('admin/enquiry_list_ajax',$data);

	}


	public function ShowAlumini_Front()
	{
	$con['student_id']=$this->input->post("student_id");
	$data['show_on_front']=$this->input->post("status");

	$n=$this->Dba_model->update("alumini_student_master",$data,$con);
	if($n>0)
	{
		echo 1;
	}
	else{
		echo 0;
	}

	}









}
