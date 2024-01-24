<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Vacancy_M extends CI_Model{


    function GetJobType_List(){
		$sp = "call usp_GetJobType_List() ";
		$query = $this->db->query($sp);
        $res = $query->result_array();
        $query->next_result();
		$query->free_result();
       // print_r($res);die;
        return $res;
    }

    function GetJobSchedule_List(){
		$sp = "call usp_GetJobSchedule_List() ";
		$query = $this->db->query($sp);
        $res = $query->result_array();
        $query->next_result();
		$query->free_result();
       // print_r($res);die;
        return $res;
    }

    function GetPayType_List(){
		$sp = "call usp_GetPayType_List() ";
		$query = $this->db->query($sp);
        $res = $query->result_array();
        $query->next_result();
		$query->free_result();
       // print_r($res);die;
        return $res;
    }



    function Get_VacancyList($flag,$rm_id){
		$sp = "call usp_GetVacancyList(?,?) ";
        $parameters=array($flag,$rm_id);
		$query = $this->db->query($sp,$parameters);
        $res = $query->result_array();
        $query->next_result();
		$query->free_result();
       // print_r($res);die;
        return $res;
    }

    function Get_VacancyList_Ajax($flag,$rm_id,$vr_status,$from_date,$to_date){
		$sp = "call usp_GetVacancyList_Ajax(?,?,?,?,?) ";
        $parameters=array($flag,$rm_id,$vr_status,$from_date,$to_date);
		$query = $this->db->query($sp,$parameters);
        $res = $query->result_array();
        $query->next_result();
		$query->free_result();
       // print_r($res);die;
        return $res;
    }





    function Get_SingleVacancy($cm_id,$rm_id){

		$sp = "call usp_GetVacancy_Single(?,?) ";
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