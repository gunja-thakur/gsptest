<?php
defined('BASEPATH') OR exit('No direct script access allowed');
error_reporting(0);
class UserRegister_M extends CI_Model{


    public function UserLoginCk($username,$password)
	{

	$this->db->select('*');
	$this->db->from('VW_UserLogin');
	$this->db->where('User_Name', $username);
	$this->db->where('Password', $password);
	$query = $this->db->get()->row_array();
	return $query;
	}


	function GetSubject()
	{
	$querys = "SELECT * FROM subject_master ";
        $query = $this->db->query($querys);
        $res = $query->result_array();
        /*$query->next_result();
        $query->free_result();*/
        return $res;

	}

    /*public function StudentCheck($roll_no,$date_of_birth){



		$sp = "usp_CheckStudent_Record ?,? ";
        $params = array($roll_no,$date_of_birth);
		$query = $this->db->query($sp,$params);
        $res = $query->result_array();

        return $res;


	}*/

	function StudentCheck($subject_code,$roll_no,$date_of_birth)
	{
		$this->db->trans_start();
		$sp = "CALL usp_CheckStudent_Record(?,?,?)";
		$params = array($subject_code,$roll_no,$date_of_birth);
        $query = $this->db->query($sp,$params);

		$this->db->trans_complete();
        $res = $query->result_array()[0];
		$query->next_result();
		$query->free_result();
		//echo"<pre>";		print_r($res);die;
        return $res;
	}

	function StudentPassword_Save()
	{

		$user_id = $this->session->userdata('user_id');
		$roll_no = $this->session->userdata('roll_no');
		$mobile = $this->input->post('mobile');
		$email = $this->input->post('email');
		$password = md5($this->input->post('password'));
		$address = $this->input->post('address');
		$total_fees = $this->session->userdata('total_fees');
		$rnd=mt_rand(10,100);
		$app_id= "GMC_SR_".$roll_no."_".$rnd;

		//print_r($app_id);die;


		$this->db->trans_start();
		$sp = "CALL usp_Update_Student_Password(?,?,?,?,?,?,?,?)";
		$params = array($user_id,$roll_no,$password,$mobile,$email,$address,$total_fees,$app_id);

		$this->db->trans_complete();

        $res = $this->db->query($sp,$params);
        //$res = $query->result_array();
		//print_r($res);die;
        return $res;
	}




}