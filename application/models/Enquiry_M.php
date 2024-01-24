<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Enquiry_M extends CI_Model{


    function Get_AluminiList($flag){

		$sp = "call usp_GetStudentList(?) ";

		$query = $this->db->query($sp,$flag);
        $res = $query->result_array();
        $query->next_result();
		$query->free_result();
       // print_r($res);die;
        return $res;
    }


    function GetReg_CandidateByID($rollno){

		$sp = "call usp_GetReg_Candidates(?) ";

		$query = $this->db->query($sp,$rollno);
        $res = $query->result_array();
        $query->next_result();
		$query->free_result();


       // print_r($res);die;
        return $res;
    }

    function Get_EnquiryList($flag,$qualification,$from_date,$to_date){

		$sp = "call usp_GetEnquiryList_Filters(?,?,?,?)";
        $parameters=array($flag,$qualification,$from_date,$to_date);
		$query = $this->db->query($sp,$parameters);
        $res = $query->result_array();
        $query->next_result();
		$query->free_result();


       // print_r($res);die;
        return $res;
    }









}