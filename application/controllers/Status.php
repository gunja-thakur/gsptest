<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Status extends CI_Controller {
	public function __construct() {
        parent::__construct();
        $this->load->helper('form');
	$this->load->helper('url');
	$this->load->library('form_validation');
	$this->load->helper('string');
	$this->load->library('session');
		$this->load->model('UserRegister_M');
		$this->load->model('Dba_model');
		date_default_timezone_set("Asia/Calcutta");

    }

	public function index() {
       $status = $this->input->post('status');
      if (empty($status)) {
            redirect('Register/Checkout');
        }

        $firstname = $this->input->post('firstname');
        $amount = $this->input->post('amount');
        $txnid = $this->input->post('txnid'); ////////App_id
        $posted_hash = $this->input->post('hash');
        $key = $this->input->post('key');
        $productinfo = $this->input->post('productinfo'); //////////PG Service ID
        $email = $this->input->post('email');
        $mobile = $this->input->post('phone');
        $mode = $this->input->post('mode');
        $transaction_id = $this->input->post('mihpayid');
        $bank_ref_num = $this->input->post('bank_ref_num');
        $user_id = $this->input->post('udf3');
        $client_id = $this->input->post('udf4');
        $udf2 = $this->input->post('udf2');
        $txn_date = date('Y-m-d h:i:s');



        //$salt = "DwsyAzk9"; //  Your salt
        $MERCHANT_KEY = $this->config->item('merchant_key');
        $salt = $this->config->item('salt');


        $add = $this->input->post('additionalCharges');
        If (isset($add)) {
            $additionalCharges = $this->input->post('additionalCharges');
            $retHashSeq = $additionalCharges . '|' . $salt . '|' . $status . '|||||||||||' . $email . '|' . $firstname . '|' . $productinfo . '|' . $amount . '|' . $txnid . '|' . $key;
        } else {

            $retHashSeq = $salt . '|' . $status . '|||||||||||' . $email . '|' . $firstname . '|' . $productinfo . '|' . $amount . '|' . $txnid . '|' . $key;
        }
         $data['hash'] = hash("sha512", $retHashSeq);
          $data['firstname'] = $firstname;
          $data['email'] = $email;
          $data['mobile'] = $mobile;
          $data['amount'] = $amount;
          $data['app_id'] = $txnid;
          $data['transaction_id'] = $transaction_id;
          $data['posted_hash'] = $posted_hash;
          $data['bank_ref_num'] = $bank_ref_num;
          $data['status'] = $status;
          $data['txn_date']= $txn_date;

        ///////////Insert data into Output log
        $data2 = array(
            'user_id' => $user_id,
            'app_id' => $txnid,
            'pg_service_id' => $productinfo,
            'txn_amount' => $amount,
            //'name' => $user_name,
            'transaction_id' => $transaction_id,
            'status' => $status,
            'payment_mode' => $mode,
            'bank_ref_no' => $bank_ref_num
        );


        if($status == 'success'){

          $this->Dba_model->insert('bank_output_payu_log', $data2);

            $user_data=$this->Dba_model->select_query("Select * from user_master where user_id='".$user_id."' And roll_no='".$udf2."' And app_id='".$txnid."' ")->result_array();

			foreach ($user_data as $tsd) {
                extract($tsd);
            }

			$this->session->set_userdata($tmpdata);

            $tx_amount=$tsd['total_fees'];

           /* if($amount==$tx_amount)
            {
             echo 11111;
            }

            print_r($tx_amount);*/

            if($this->verifyPayment($key,$salt,$txnid,$status)  And $amount==$tx_amount)
            {
            $txn_date=  date('Y-m-d h:i:s');
            $transaction_id = $this->input->post('mihpayid');

           /* $this->Dba_model->update("user_master",array("app_id"=>$txnid,"pg_service_id"=>$productinfo,"transaction_id"=>$transaction_id,"payment_mode_id"=>$mode,"payment_yn"=>1,"active_yn"=>1,"txn_date"=>$txn_date),array("user_id"=>$user_id,"app_id"=>$txnid)); */
           $this->Dba_model->update("nursing_master",array("app_id"=>$txnid,"pg_service_id"=>$productinfo,"transaction_id"=>$transaction_id,"payment_mode_id"=>$mode,"payment_yn"=>1,"active_yn"=>1,"txn_date"=>$txn_date),array("user_id"=>$user_id,"app_id"=>$txnid));

            $this->load->view('payment/payment_reciept', $data);
            }

            else {

                $this->load->view('payment/payment_fail', $data);
            }




         }
         else{


              $this->Dba_model->insert('bank_output_payu_log', $data2);
              $this->load->view('payment/payment_fail', $data);
         }

    }

    function verifyPayment($key,$salt,$txnid,$status)
{
	$command = "verify_payment"; //mandatory parameter

	$hash_str = $key  . '|' . $command . '|' . $txnid . '|' . $salt ;
	$hash = strtolower(hash('sha512', $hash_str)); //generate hash for verify payment request

    $r = array('key' => $key , 'hash' =>$hash , 'var1' => $txnid, 'command' => $command);



    $qs= http_build_query($r);


   // print_r($qs);

	//for production
    //$wsUrl = "https://info.payu.in/merchant/postservice.php?form=2";

	//for test
	$wsUrl = "https://test.payu.in/merchant/postservice.php?form=2";

	try
	{
		$c = curl_init();
		curl_setopt($c, CURLOPT_URL, $wsUrl);
		curl_setopt($c, CURLOPT_POST, 1);
		curl_setopt($c, CURLOPT_POSTFIELDS, $qs);
		curl_setopt($c, CURLOPT_CONNECTTIMEOUT, 30);
		curl_setopt($c, CURLOPT_RETURNTRANSFER, 1);
		curl_setopt($c, CURLOPT_SSLVERSION, 6); //TLS 1.2 mandatory
		curl_setopt($c, CURLOPT_SSL_VERIFYHOST, 0);
		curl_setopt($c, CURLOPT_SSL_VERIFYPEER, 0);
		$o = curl_exec($c);
		if (curl_errno($c)) {
			$sad = curl_error($c);
			throw new Exception($sad);
		}
		curl_close($c);


		$response = json_decode($o,true);




		if(isset($response['status']))
		{
			// response is in Json format. Use the transaction_detailspart for status
			$response = $response['transaction_details'];
			$response = $response[$txnid];

		//	print_r($response); die;

			if($response['status'] == $status) //payment response status and verify status matched
				return true;
			else
				return false;
		}
		else {
			return false;
		}
	}
	catch (Exception $e){
		return false;
	}
    }


   }