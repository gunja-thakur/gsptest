<?php
	defined('BASEPATH') or exit("No Direct Access");
	/*error_reporting(0);
session_start();*/
	class Login extends CI_controller
	{
		public function __construct()
		{
			parent::__construct();
			$this->load->helper('form');
	$this->load->helper('url');
	$this->load->library('form_validation');
	$this->load->helper('string');
	$this->load->library('session');
	$this->load->helper('captcha');
			if($this->session->userdata('user_id'))
			{
				header("location:".base_url()."Home");
			}

		}
	/*	public function index()
		{

			$this->load->view("login");
		}*/

		public function index()
		{
		$random_number = substr(number_format(time() * rand(),0,'',''),0,6);
      // setting up captcha config
      $vals = array(
             'word' => $random_number,
             'img_path' => './captcha_images/',
             'img_url' => base_url().'captcha_images/',
             'img_width' => 140,
             'img_height' => 30,
			 'font_size' => 50,
             'expiration' => 7200,
			 'colors'	=> array(
				'background'	=> array(255,255,255),
				'border'	=> array(153,102,102),
				'text'		=> array(154,63,28),
				'grid'		=> array(255,182,182)
			)
            );
			  $data['captcha'] = create_captcha($vals);
			  $this->session->set_userdata('captchaWord',$data['captcha']['word']);
				//var_dump($data['captcha']['word']);die;
			$this->load->view("common/gsp_login",$data);
		}


		public function refresh(){
			$random_number = substr(number_format(time() * rand(), 0, '', ''), 0, 6);
			// Captcha configuration
			$vals = array(
				'word' => $random_number,
				'img_path' => './captcha_images/',
				'img_url' => base_url() . 'captcha_images/',
				'img_width' => 140,
				'img_height' => 30,
				'font_size' => 50,
				'expiration' => 7200,
				'colors'	=> array(
					'background'	=> array(255, 255, 255),
					'border'	=> array(153, 102, 102),
					'text'		=> array(154, 63, 28),
					'grid'		=> array(255, 182, 182)
				)
			);
			$data['captcha'] = create_captcha($vals);
			$this->session->unset_userdata('captchaWord');
			$this->session->set_userdata('captchaWord', $data['captcha']['word']);

			// Unset previous captcha and set new captcha word



			// Display captcha image
			echo $data['captcha']['image'];
		}


	}


