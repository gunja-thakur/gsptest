<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Event_M extends CI_Model{


    function Get_EventList($flag){

		$sp = "call usp_GetEventList(?) ";

		$query = $this->db->query($sp,$flag);
        $res = $query->result_array();
        $query->next_result();
		$query->free_result();
       // print_r($res);die;
        return $res;
    }


    function Get_SingleEvent($event_id){

		$sp = "call usp_GetEventByID(?) ";
		$query = $this->db->query($sp,$event_id);
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