<?php
	defined('BASEPATH') or exit("No Direct Access");
	class Checkout extends CI_controller
	{
		public function __construct()
		{
		parent::__construct();
		$this->load->helper('form');
	$this->load->helper('url');
	$this->load->library('form_validation');
	$this->load->helper('string');
	$this->load->library('session');
		$this->load->model('UserRegister_M');
		$this->load->model('Dba_model');

		}
		public function index()
		{
            if(!$this->session->userdata('user_id'))
        {
            header("location:".base_url());
        }
		}


		function checkout() {

		 if(!$this->session->userdata('user_id'))
        {
            header("location:".base_url());
        }

			$user_id=$this->session->userdata('user_id');
			$user_name=$this->session->userdata('user_name');
			$roll_no=$this->session->userdata('roll_no');
			$data['temp_data']=$this->Dba_model->select_query("Select * from temp_student_master where user_id='".$user_id."' And roll_no='".$roll_no."' ")->result_array();

			foreach ($data as $key =>$tsd) {
				$tmpdata = array(
					   'mobile'  => $tsd['mobile'],
					   'email'  => $tsd['email'],
					   'productinfo'=>'Student Fees'
					    /*'MERCHANT_KEY'=>54,
					   'SALT'=>354
					   'txnid'=>354 */

				   );
				}
			$this->session->set_userdata($tmpdata);
			$MERCHANT_KEY = "7rnFly";
			$SALT = "pjVQAWpA";
			$txnid = substr(hash('sha256', mt_rand() . microtime()), 0, 20);

			$udf1=1;
			$udf2=$roll_no;
			$udf3=$user_id;
			$udf4=160;
			$udf5='GMC';

			$hashstring = $MERCHANT_KEY . '|' . $txnid . '|' . $this->session->userdata('total_fees') . '|' . $this->session->userdata('productinfo') . '|'. $user_name . '|' . $this->session->userdata('email') .'|'.$udf5.'||||||'. $SALT;

			$hash = strtolower(hash('sha512', $hashstring));
			$data['hash'] = $hash;
			$data['tid'] = $txnid;
			$data['mkey'] = $MERCHANT_KEY;
			$data['salt'] = $SALT;

			//Loading checkout view
			$this->load->view("payment/checkout_payment",$data);
	}



	public function check()
	{

	    if(!$this->session->userdata('user_id'))
        {
            header("location:".base_url());
        }
		$user_id =  $this->session->userdata('user_id');
		$roll_no =  $this->session->userdata('roll_no');
		$amount =  $this->session->userdata('total_fees');
	    $product_info = 1;
	    $user_name = $this->session->userdata('user_name');
	    $email = $this->input->post('email');
	    $mobile = $this->input->post('mobile');
	    $address = $this->input->post('address');
		$app_id= $this->input->post('app_id');

	    	//payumoney details

			/*
	        $MERCHANT_KEY = "biZuh0"; //change  merchant with yours
	        $SALT = "DwsyAzk9";  //change salt with yours*/


	        $MERCHANT_KEY = $this->config->item('merchant_key');
	        $SALT = $this->config->item('salt');



	        //$txnid = substr(hash('sha256', mt_rand() . microtime()), 0, 20);
	        $txnid = $app_id;
	        //optional udf values
	        $udf1 = '1'; /////PG Service ID
	        $udf2 = $roll_no;
	        $udf3 = $user_id;
	        $udf4 = 162; ////////////// Client ID
	        $udf5 = 'GMC'; /////////Client Name

	        $hashstring = $MERCHANT_KEY . '|' . $txnid . '|' . $amount . '|' . $product_info . '|' . $user_name . '|' . $email . '|' . $udf1 . '|' . $udf2 . '|' . $udf3 . '|' . $udf4 . '|' . $udf5 . '||||||' . $SALT;
	        $hash = strtolower(hash('sha512', $hashstring));

	       $success = base_url() . 'Status';
	        $fail = base_url() . 'Status';
	        $cancel = base_url() . 'Status';


	         $data = array(
	            'mkey' => $MERCHANT_KEY,
	            'tid' => $txnid,
	            'hash' => $hash,
	            'amount' => $amount,
	            'name' => $user_name,
	            'productinfo' => $product_info,
	            'mailid' => $email,
	            'phoneno' => $mobile,
	            'address' => $address,
	            'udf1' => $udf1,
	            'udf2' => $udf2,
	            'udf3' => $udf3,
	            'udf4' => $udf4,
	            'udf5' => $udf5,
	            'action' => "https://test.payu.in", //for live change action  https://secure.payu.in
	            //'action' => "https://secure.payu.in", //for live change action  https://secure.payu.in
	            'sucess' => $success,
	            'failure' => $fail,
	            'cancel' => $cancel
	        );

			$data2 = array(
	            'user_id' => $user_id,
	            'app_id' => $app_id,
	            'pg_service_id' => $udf1,
	            'amount' => $amount,
	            //'name' => $user_name,
	            //'transaction_id' => $txnid,
	            'email' => $email,
	            'mobile_no' => $mobile,
	            'address' => $address
	        );

			$this->Dba_model->insert('bank_input_payu_log', $data2);

	        $this->load->view('payment/confirmation', $data);

	}





}

