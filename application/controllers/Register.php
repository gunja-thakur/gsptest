<?php
	defined('BASEPATH') or exit("No Direct Access");
	class Register extends CI_controller
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
			if($this->session->userdata('roll_no'))
			{
				header("location:".base_url()."Register/GetStudentCheck");
			}
			else {
			$data['subject_data'] = $this->UserRegister_M->GetSubject();
			$this->load->view("common/register",$data);
			}
		}

		public function StudentCheck()
		{

		$subject_code = $this->input->post('subject_code');
		$roll_no = $this->input->post('roll_no');
		$date_of_birth = '1990-01-01';
		$data['std_data'] = $this->UserRegister_M->StudentCheck($subject_code,$roll_no, $date_of_birth);
		//$data['fees_data']=$this->Dba_model->select_query('SELECT fm.f_id,fm.reg_fees as total_fees FROM `fees_master` fm  WHERE f_id=1')->result_array();


		//print_r($data['std_data']); die;

		if($data['std_data']!='')
		{
		foreach ($data as $key =>$sd) {
			$stddata = array(
				'user_id'  => $sd['user_id'],
				'user_name'  => $sd['user_name'],
				'subject_name'  => $sd['subject_name'],
				'roll_no'     => $sd['roll_no'],
				'password'     => $sd['password'],
				'dob'     => $sd['date_of_birth'],
				'reg_fees'     => $sd['reg_fees'],
				'total_fees'     => $sd['reg_fees']



			);

			if($sd['password']!="" And $sd['active_yn']==1)
            {
                $this->session->sess_destroy();
                echo "<script>alert('Already Registered!!!');window.location='".base_url()."Login"."';</script>";
            }

		}

	  	$this->session->set_userdata($stddata);

		$this->load->view("common/registration_payment",$data);

		}
		else if($data['std_data']=='')
		{
		$this->session->sess_destroy();
		echo "<script>alert('Information Not Available');window.location='".base_url()."Register"."';</script>";



		}
		}

		public function GetStudentCheck()
		{
			if($this->session->userdata('password')=="")
			{
			$this->load->view("common/registration_payment");
			}
			else
			{
			header("location:".base_url()."Login");
			}
		}

		public function Password_Save()
		{
			if($this->session->userdata('roll_no'))
			{

			$data = $this->UserRegister_M->StudentPassword_Save();
			//$this->session->sess_destroy();
			echo "<script>alert('Password Created Successfully');window.location='".base_url()."Register/Checkout"."';</script>";
			//redirect(base_url().'Login','location');

			}
			else
			{
			//header("location:".base_url()."Register");

			echo "<script>alert('Something Wrong');window.location='".base_url()."Register"."';</script>";

			}


		}



		public function PaymentSession_Save()
		{
			if($this->session->userdata('roll_no'))
			{
			$data['user_id'] = $this->session->userdata('user_id');
			$data['user_name'] = $this->session->userdata('user_name');
			$data['roll_no'] = $this->session->userdata('roll_no');
			$data['mobile'] = $this->input->post('mobile');
			$data['email'] = $this->input->post('email');
			$data['password'] = md5($this->input->post('password'));
			$data['total_fees'] = $this->session->userdata('total_fees');

			$n = $this->Dba_model->insert('temp_student_master',$data);
			if($n==1)
			{
			echo "<script>alert('Password Created Successfully!!!!');window.location='".base_url()."Register/Checkout"."';</script>";
			//redirect(base_url().'Login','location');

			}
			else
			{
			//header("location:".base_url()."Register");

			echo "<script>alert('Something Wrong');window.location='".base_url()."Register"."';</script>";

			}


		}
		}


		public function Checkout_old()
		{
			if($this->session->userdata('roll_no'))
			{

			$user_id=$this->session->userdata('user_id');
			$roll_no=$this->session->userdata('roll_no');
			$data['temp_data']=$this->Dba_model->select_query("Select * from temp_student_master where user_id='".$user_id."' And roll_no='".$roll_no."' ")->result_array();
			$this->load->view("payment/checkout_payment",$data);
			}
			else
			{
			header("location:".base_url());
			}
		}






		function Checkout() {
		    if(!$this->session->userdata('user_id'))
        {
            header("location:".base_url());
        }

			$user_id=$this->session->userdata('user_id');
			$user_name=$this->session->userdata('user_name');
			$roll_no=$this->session->userdata('roll_no');
			$data['temp_data']=$this->Dba_model->select_query("Select * from user_master where user_id='".$user_id."' And roll_no='".$roll_no."' ")->result_array();

			/*foreach ($data as $key =>$tsd) {
				$tmpdata = array(
					   'mobile'  => $tsd['u_mobile'],
					   'email'  => $tsd['u_email'],
					   'app_id'=>'Student Fees'

				   );
				}
			$this->session->set_userdata($tmpdata);*/

			//Loading checkout view
			$this->load->view("payment/checkout_payment",$data);
	}

public function success()
{
    //print_r($_REQUEST);

    $status= $this->input->post('status');

    if($status =='success')
    {
        $txnid = $this->input->post('txnid');
        $amount = $this->input->post('amount');
        $productinfo = $this->input->post('productinfo');
        $firstname = $this->input->post('firstname');
        $hash = $this->input->post('hash');
        $email = $this->input->post('email');
        $udf1 = $this->input->post('udf1');
        $udf2 = $this->input->post('udf2');
        $udf3 = $this->input->post('udf3');
        $udf4 = $this->input->post('udf4');
        $udf5 = $this->input->post('udf5');
        $key = $this->input->post('key');



        $SALT ="Your salt";


        If (isset($_POST["additionalCharges"]))
        {
            $additionalCharges=$_POST["additionalCharges"];
            $retHashSeq = $additionalCharges.'|'.$SALT . '|' . $status . '|||||||||||' . $email . '|' . $firstname . '|' . $productinfo . '|' . $amount . '|' . $txnid . '|' . $key;
        }else{
            $retHashSeq = $SALT . '|' . $status . '|||||||||||' .$udf5.'|'.$udf4.'|'.$udf3.'|'.$udf2.'|'.$udf1.'|'. $email . '|' . $firstname . '|' . $productinfo . '|' . $amount . '|' . $txnid . '|' . $key;

        }

        $rethash = hash("sha512", $retHashSeq);


        if ($rethash != $hash)
        {
            $data['errmsg'] = " Invalid Transaction . Error Occured";
            //echo "Return Hash failed";
           redirect('payu/err',$data);
        }

       // now begin your custome code if a transaction is success

    }




	}
}

