<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Events extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Event_M');
		$this->load->model('Dba_model');
		$this->load->helper('string');
		$this->load->library('email');
	}

	public function index()
	{
		$this->ViewList();
	}

	public function AddEvent()
	{
		$this->load->view('event/add_event');
	}

	public function Add_EventSave()
	{

		$data['event_title']=$this->input->post("event_title");
		$data['event_date']=$this->input->post("event_date");
		$data['published_date']=$this->input->post("published_date");
		$data['venue']=$this->input->post("venue");
		$data['event_description']=$this->input->post("event_description");
		$data['created_by']=$this->session->userdata('user_id');
		/* File Upload */
		if(!empty($_FILES['upload_brochure']['name'])) {
			$genratedID = "event" . "_" . date('Ymdhis') . "";
			$ext = pathinfo($_FILES['upload_brochure']['name'], PATHINFO_EXTENSION);
			$uploadpath = strtolower($genratedID . "." . $ext);

			$config['upload_path']   = './assets/events/';
			$config['allowed_types'] = '*';
			$config['max_size']	= '1000000000000000';
			$config['file_name']	= $uploadpath;
			$this->load->library('upload', $config);
			$this->upload->initialize($config);

			if($this->upload->do_upload('upload_brochure')) {
				$upload_data = $this->upload->data();
				$data['upload_brochure'] = $uploadpath;
			} else {
				echo $this->upload->display_errors();
			}
		}
		////////////////////////////////////////////
		if(!empty($_FILES['event_invite']['name'])) {
			$genratedID = "invite" . "_" . date('Ymdhis') . "";
			$ext = pathinfo($_FILES['event_invite']['name'], PATHINFO_EXTENSION);
			$uploadpath = strtolower($genratedID . "." . $ext);

			$config['upload_path']   = './assets/events/';
			$config['allowed_types'] = '*';
			$config['max_size']	= '1000000000000000';
			$config['file_name']	= $uploadpath;
			$this->load->library('upload', $config);
			$this->upload->initialize($config);

			if($this->upload->do_upload('event_invite')) {
				$upload_data = $this->upload->data();
				$data['event_invite'] = $uploadpath;
			} else {
				echo $this->upload->display_errors();
			}
		}

		/* File Upload */
		//echo"<pre>"; print_r($data); die;

		$n=$this->Dba_model->insert("event_master",$data);

		if($n==1)
		{
			echo "<script>alert('Event Successfully Created!');window.location='" . base_url() . "Events" . "';</script>";
		}else{
			echo "<script>alert('Something Wrong!');window.location='" . base_url() . "Events/AddEvent" . "';</script>";
		}

	}

	public function ViewList()
	{
		$flag=1;
		$data['event_data']  = $this->Event_M->Get_EventList($flag);

		//echo"<pre>"; print_r($data['event_data']); die;
		$this->load->view('event/event_list',$data);
	}

	public function View_SingleEvent()
	{
		$event_id=$this->input->post("event_id");
		$data['event_data']  = $this->Event_M->Get_SingleEvent($event_id);

		//echo"<pre>"; print_r($data['event_data']); die;
		$this->load->view('event/event_modification_ajax',$data);
	}

	public function View_Event()
	{
		$event_id=$this->input->post("event_id");
		$data['event_data']  = $this->Event_M->Get_SingleEvent($event_id);

		//echo"<pre>"; print_r($data['event_data']); die;
		$this->load->view('event/event_view_ajax',$data);
	}

	public function ModifyEvent_Save()
	{

		$con['event_id']=$this->input->post("event_id");
		$data['event_title']=$this->input->post("event_title");
		$data['event_date']=$this->input->post("event_date");
		$data['published_date']=$this->input->post("published_date");
		$data['venue']=$this->input->post("venue");
		$data['event_description']=$this->input->post("event_description");
		$data['created_by']=$this->session->userdata('user_id');
		/* File Upload */
		if(!empty($_FILES['upload_brochure']['name'])) {
			$genratedID = "event" . "_" . date('Ymdhis') . "";
			$ext = pathinfo($_FILES['upload_brochure']['name'], PATHINFO_EXTENSION);
			$uploadpath = strtolower($genratedID . "." . $ext);

			$config['upload_path']   = './assets/events/';
			$config['allowed_types'] = '*';
			$config['max_size']	= '1000000000000000';
			$config['file_name']	= $uploadpath;
			$this->load->library('upload', $config);
			$this->upload->initialize($config);

			if($this->upload->do_upload('upload_brochure')) {
				$upload_data = $this->upload->data();
				$data['upload_brochure'] = $uploadpath;
			} else {
				echo $this->upload->display_errors();
			}
		}
		else
		{
			$data['upload_brochure'] = $this->input->post('brochure');
		}

		/////////////////////////////////////////////////
		if(!empty($_FILES['event_invite']['name'])) {
			$genratedID = "invite" . "_" . date('Ymdhis') . "";
			$ext = pathinfo($_FILES['event_invite']['name'], PATHINFO_EXTENSION);
			$uploadpath = strtolower($genratedID . "." . $ext);

			$config['upload_path']   = './assets/events/';
			$config['allowed_types'] = '*';
			$config['max_size']	= '1000000000000000';
			$config['file_name']	= $uploadpath;
			$this->load->library('upload', $config);
			$this->upload->initialize($config);

			if($this->upload->do_upload('event_invite')) {
				$upload_data = $this->upload->data();
				$data['event_invite'] = $uploadpath;
			} else {
				echo $this->upload->display_errors();
			}
		}
		else
		{
			$data['event_invite'] = $this->input->post('invite');
		}


		/* File Upload */
		//echo"<pre>"; print_r($data); die;

		$n=$this->Dba_model->update("event_master",$data,$con);

		if($n==1)
		{
			echo "<script>alert('Event Modified Successfully !');window.location='" . base_url() . "Events" . "';</script>";
		}else{
			echo "<script>alert('No Changes Done!');window.location='" . base_url() . "Events" . "';</script>";
		}

	}


	public function RemoveEvent()
	{
		$con['event_id'] = $this->input->post("event_id");
		$data['flag'] = 0;

		$n = $this->Dba_model->update("event_master", $data, $con);
		if ($n > 0) {
			echo 1;
		} else {
			echo 0;
		}
	}


	//////////////////////Web Show////////

	public function Web_EventList()
	{
		$flag=1;
		$data['event_data']  = $this->Event_M->Get_EventList($flag);

		//echo"<pre>"; print_r($data['event_data']); die;
		$this->load->view('event/event_list_web',$data);
	}





}
