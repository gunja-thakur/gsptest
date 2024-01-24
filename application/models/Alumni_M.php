<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Alumni_M extends CI_Model{

    function Get_BranchList(){
		$sp = "call usp_GetBranchList() ";
		$query = $this->db->query($sp);
        $res = $query->result_array();
        $query->next_result();
		$query->free_result();
       // print_r($res);die;
        return $res;
    }

    function Get_AlumniCounter_List(){
		$sp = "call usp_DashboardCounter_Alumni() ";
		$query = $this->db->query($sp);
        $res = $query->result_array();
        $query->next_result();
		$query->free_result();
       // print_r($res);die;
        return $res;
    }

    function Get_AlumniCounter_ListAjax($flag,$batch,$year){
		$sp = "call usp_DashboardCounter_AlumniAjax(?,?,?) ";
        $parameters=array($flag,$batch,$year);
		$query = $this->db->query($sp,$parameters);
        $res = $query->result_array();
        $query->next_result();
		$query->free_result();
       // print_r($res);die;
        return $res;
    }
    function Get_Alumni_PieChart($flag,$batch,$year){
		$sp = "call usp_AlumniDashPieChart(?,?,?) ";
        $parameters=array($flag,$batch,$year);
		$query = $this->db->query($sp,$parameters);
        $res = $query->result_array();
        $query->next_result();
		$query->free_result();
       // print_r($res);die;
        return $res;
    }

    /* function Get_Alumni_BarChart($flag,$batch,$year){
		$sp = "call Get_AlumniDash_barChart(?,?,?) ";
        $parameters=array($flag,$batch,$year);
		$query = $this->db->query($sp,$parameters);
        $res = $query->result_array();
        $query->next_result();
		$query->free_result();
       // print_r($res);die;
        return $res;
    } */

    function Get_BatchList(){
		$sp = "call usp_GetBatchList() ";
		$query = $this->db->query($sp);
        $res = $query->result_array();
        $query->next_result();
		$query->free_result();
       // print_r($res);die;
        return $res;
    }



    function Get_AluminiList($flag,$batch,$passing_year,$branch){

		$sp = "call usp_GetStudentList(?,?,?,?)";
        $parameters=array($flag,$batch,$passing_year,$branch);
		$query = $this->db->query($sp,$parameters);
        $res = $query->result_array();
        $query->next_result();
		$query->free_result();
       // print_r($res);die;
        return $res;
    }

    function Get_AlumniList_Ajax($flag,$status,$batch,$passing_year){

		$sp = "call usp_GetStatusBy_AlumniList(?,?,?,?)";
        $parameters=array($flag,$status,$batch,$passing_year);
		$query = $this->db->query($sp,$parameters);
        $res = $query->result_array();
        $query->next_result();
		$query->free_result();
       // print_r($res);die;
        return $res;
    }


    /* function GetReg_CandidateByID($rollno){

		$sp = "call usp_GetReg_Candidates(?) ";

		$query = $this->db->query($sp,$rollno);
        $res = $query->result_array();
        $query->next_result();
		$query->free_result();


       // print_r($res);die;
        return $res;
    } */


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


    /* Frontend */

    function Get_NotableAlumniList($flag){

		$sp = "call usp_GetNotableAlumni_List(?) ";

		$query = $this->db->query($sp,$flag);
        $res = $query->result_array();
        $query->next_result();
		$query->free_result();


       // print_r($res);die;
        return $res;
    }
    function Get_NotableAlumniList_ByID($student_id){

		$sp = "call usp_GetNotableAlumni_ByID(?) ";

		$query = $this->db->query($sp,$student_id);
        $res = $query->result_array();
        $query->next_result();
		$query->free_result();


       // print_r($res);die;
        return $res;
    }

    function Get_TestimonialiList(){

		$sp = "call usp_GetTestimonials_List() ";

		$query = $this->db->query($sp);
        $res = $query->result_array();
        $query->next_result();
		$query->free_result();


       // print_r($res);die;
        return $res;
    }


    function Get_AluminiDirectory($flag,$batch,$passing_year,$branch,$limit,$page){

		$sp = "call usp_AlumniDirectory(?,?,?,?,?,?)";
        $parameters=array($flag,$batch,$passing_year,$branch,$limit,$page);
		$query = $this->db->query($sp,$parameters);
        $res = $query->result_array();
        $query->next_result();
		$query->free_result();
        //print_r($parameters);die;
        return $res;
    }

    public function get_count()
	{
        /* $query = $this->db->query("select count(student_id) from alumini_student_master where verified=1");
        $res = $query->result_array();
        return $res; */

        $res= $this->db->where('verified',1)->from("alumini_student_master")->count_all_results();
        //print_r($res);die;
        return $res;

    }









}