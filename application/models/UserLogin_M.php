<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class UserLogin_M extends CI_Model{


    public function UserLoginCk($username,$password)
	{

	$this->db->select('*');
	$this->db->from('VW_UserLogin');
	$this->db->where('User_Name', $username);
	$this->db->where('Password', $password);
	$query = $this->db->get()->row_array();
	return $query;
	}


	function GetUserLogin($username,$password)
	{
	$querys = "SELECT * FROM VW_UserLogin  where User_Name='".$username."' and password = '".$password."'";
        $query = $this->db->query($querys);
        $res = $query->result_array();
        /*$query->next_result();
        $query->free_result();*/
        return $res;

	}

    public function UserLoginCheck($flag,$username,$password){

		$sp = "CALL usp_AdministratorLogin(?,?,?)";
        $parameters = array($flag,$username,$password);
        $query = $this->db->query($sp, $parameters);
        $res = $query->result_array();
        $query->next_result();
        $query->free_result();

        //print_r($res);die;
        return $res;


	}




}