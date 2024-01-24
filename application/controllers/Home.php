<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

    public function __construct()
	{
		parent::__construct();
        $this->load->model('UserLogin_M');

        $this->load->model('Dba_model');
        $this->load->model('Home_M');
		$this->load->helper('url');
	$this->load->library('form_validation');
	$this->load->helper('string');
	$this->load->library('session');
	}

    public function index()
    {  if(!$this->session->userdata('user_id'))
		{
			header("location:".base_url()."Login");
		}
		elseif($this->session->userdata['user_role'] == 1 OR $this->session->userdata['user_role'] == 2) {

		//$this->load->view('admin/dashboard');
		header("location:".base_url()."AdminDashboard");


		}elseif($this->session->userdata['user_role'] == 3) { ///////TPO

		header("location:".base_url()."Placement");

		}elseif($this->session->userdata['user_role'] == 4) { ///////Admission

		header("location:".base_url()."EnquiryDashboard/EnquiryList");

		}elseif($this->session->userdata['user_role'] == 6) { ///////Alumni

		header("location:".base_url()."Alumni");

		}elseif($this->session->userdata['user_role'] == 5) { ///////Student

			header("location:".base_url()."Student");
		//$this->load->view('student/dashboard');

		}elseif($this->session->userdata['user_role'] == 7) { ///////Recruiters

			header("location:".base_url()."Recruiters/Dashboard");

		}



    }

}