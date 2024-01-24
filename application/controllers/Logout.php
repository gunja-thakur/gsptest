<?php

	defined('BASEPATH') or exit();
	class Logout extends CI_controller
	{
		public function index(){
			$this->session->sess_destroy();
			redirect(base_url().'Login','location');
		}

		public function AlumniLogout(){
			$this->session->sess_destroy();
			redirect(base_url().'Alumni/StudentLogin','location');
		}

		public function RecruiterLogout(){
			$this->session->sess_destroy();
			redirect(base_url().'Recruiters/Login','location');
		}
	}