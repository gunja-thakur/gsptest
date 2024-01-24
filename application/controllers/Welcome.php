<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {


	public function index()
	{
		$this->session->sess_destroy();
		$this->load->view('home_main');
	}

	public function TermsAndConditions()
	{
		$this->session->sess_destroy();
		$this->load->view('terms_conditions');
	}

	public function WebHome()
	{
		$this->load->view('website/index');
	}

	public function Test()
	{
		$this->load->view('website/index');
	}























}
