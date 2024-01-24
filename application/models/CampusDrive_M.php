<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class CampusDrive_M extends CI_Model{


    function Get_CampusList($flag,$rm_id){

		$sp = "call usp_GetCampusDrive_List(?,?) ";
        $parameters=array($flag,$rm_id);
		$query = $this->db->query($sp,$parameters);
        $res = $query->result_array();
        $query->next_result();
		$query->free_result();
       // print_r($res);die;
        return $res;
    }
    function Get_CampusListAjax($flag,$rm_id,$vr_status,$from_date,$to_date){

		$sp = "call usp_GetCampusDrive_List_Ajax(?,?,?,?,?) ";
        $parameters=array($flag,$rm_id,$vr_status,$from_date,$to_date);
		$query = $this->db->query($sp,$parameters);
        $res = $query->result_array();
        $query->next_result();
		$query->free_result();
       // print_r($res);die;
        return $res;
    }


    function Get_SingleCampus($cm_id,$rm_id){

		$sp = "call usp_GetCampusDrive_Single(?,?) ";
        $parameters=array($cm_id,$rm_id);
		$query = $this->db->query($sp,$parameters);
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