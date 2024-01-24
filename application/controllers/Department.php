<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Department extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Department_m');
		$this->load->helper('string');
	}

	public function index()
	{
		$this->load->view('other/index2.php');
	}





}
