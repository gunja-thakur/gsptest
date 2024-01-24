<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Recruiters_M extends CI_Model{


    function Get_RecruitersList($flag,$status,$from_date,$to_date){

		$sp = "call usp_GetRecruitersList(?,?,?,?)";
        $parameters=array($flag,$status,$from_date,$to_date);
		$query = $this->db->query($sp,$parameters);
        $res = $query->result_array();
        $query->next_result();
		$query->free_result();


       // print_r($res);die;
        return $res;
    }
    function Get_RecruitersList_Ajax($status){

		$sp = "call usp_GetStatusBy_RecruitersList(?)";
        $parameters=array($status);
		$query = $this->db->query($sp,$parameters);
        $res = $query->result_array();
        $query->next_result();
		$query->free_result();


       // print_r($res);die;
        return $res;
    }

    function Get_RecruiterDetails($rm_id){

		$sp = "call usp_GetRecruiterByID(?)";
        $parameters=array($rm_id);
		$query = $this->db->query($sp,$parameters);
        $res = $query->result_array();
        $query->next_result();
		$query->free_result();
       // print_r($res);die;
        return $res;
    }

    function Get_Designation(){

		$sp = "call usp_GetDesignation()";
        //$parameters=array($rm_id);
		$query = $this->db->query($sp);
        $res = $query->result_array();
        $query->next_result();
		$query->free_result();
       // print_r($res);die;
        return $res;
    }

    function Get_YearList(){

		$sp = "call usp_GetYear_List()";
        //$parameters=array($rm_id);
		$query = $this->db->query($sp);
        $res = $query->result_array();
        $query->next_result();
		$query->free_result();
       // print_r($res);die;
        return $res;
    }

    function Get_BusinessNatureList(){

		$sp = "call usp_GetBusinessNature_List()";
        //$parameters=array($rm_id);
		$query = $this->db->query($sp);
        $res = $query->result_array();
        $query->next_result();
		$query->free_result();
       // print_r($res);die;
        return $res;
    }
    function Get_CompanyTypeList(){

		$sp = "call usp_GetCompanyType_List()";
        //$parameters=array($rm_id);
		$query = $this->db->query($sp);
        $res = $query->result_array();
        $query->next_result();
		$query->free_result();
       // print_r($res);die;
        return $res;
    }



    function Get_RecruiterCount(){

		$sp = "call usp_TPODashboard_Counter()";
        //$parameters=array($rm_id);
		$query = $this->db->query($sp);
        $res = $query->result_array();
        $query->next_result();
		$query->free_result();
       // print_r($res);die;
        return $res;
    }


    function GetUserDataBy_ID($flag,$user_id){

		$sp = "call usp_GetUserDataBy_ID(?,?)";
        $parameters=array($flag,$user_id);
		$query = $this->db->query($sp,$parameters);
        $res = $query->result_array();
        $query->next_result();
		$query->free_result();
       // print_r($res);die;
        return $res;
    }

    function Get_PlacementList($flag,$pd_id){

		$sp = "call usp_GetPlacementList(?,?)";
        $parameters=array($flag,$pd_id);
		$query = $this->db->query($sp,$parameters);
        $res = $query->result_array();
        $query->next_result();
		$query->free_result();
       // print_r($res);die;
        return $res;
    }









}