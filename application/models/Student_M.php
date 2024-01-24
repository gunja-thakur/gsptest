<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Student_M extends CI_Model{


    function Get_CourseList(){

		$sp = "call usp_GetCourseList() ";

		$query = $this->db->query($sp);
        $res = $query->result_array();
        $query->next_result();
		$query->free_result();
       // print_r($res);die;
        return $res;
    }

    function Get_BranchList(){

		$sp = "call usp_GetBranchList() ";

		$query = $this->db->query($sp);
        $res = $query->result_array();
        $query->next_result();
		$query->free_result();
       // print_r($res);die;
        return $res;
    }

    function Get_StateList(){

		$sp = "call usp_GetStateList() ";

		$query = $this->db->query($sp);
        $res = $query->result_array();
        $query->next_result();
		$query->free_result();
       // print_r($res);die;
        return $res;
    }

    function Get_CityList(){

		$sp = "call usp_GetCityList() ";

		$query = $this->db->query($sp);
        $res = $query->result_array();
        $query->next_result();
		$query->free_result();
       // print_r($res);die;
        return $res;
    }

    function Get_YearList(){

		$sp = "call usp_GetYear_List() ";

		$query = $this->db->query($sp);
        $res = $query->result_array();
        $query->next_result();
		$query->free_result();
       // print_r($res);die;
        return $res;
    }

    function Get_MonthList(){

		$sp = "call usp_GetMonthList() ";

		$query = $this->db->query($sp);
        $res = $query->result_array();
        $query->next_result();
		$query->free_result();
       // print_r($res);die;
        return $res;
    }

    function Get_CategoryList(){

		$sp = "call usp_GetCategoryList() ";

		$query = $this->db->query($sp);
        $res = $query->result_array();
        $query->next_result();
		$query->free_result();
       // print_r($res);die;
        return $res;
    }

    function Get_StudentDetails($student_id,$enrollment_no){

		$sp = "call usp_GetStudentDetailsBy_ID(?,?) ";
        $parameter=array($student_id,$enrollment_no);

		$query = $this->db->query($sp,$parameter);
        $res = $query->result_array();
        $query->next_result();
		$query->free_result();
        return $res;
    }



    function GetTrades($qualification_id){

		$sp = "call usp_GetThradeByID(?) ";
        $parameter=array($qualification_id);

		$query = $this->db->query($sp,$parameter);
        $res = $query->result_array();
        $query->next_result();
		$query->free_result();
        return $res;
    }

    function GetCourses($qualification_id,$degree_diploma_id){

		$sp = "call usp_GetCourseById(?,?) ";
        $parameter=array($qualification_id,$degree_diploma_id);

		$query = $this->db->query($sp,$parameter);
        $res = $query->result_array();
        $query->next_result();
		$query->free_result();
        return $res;
    }

    function Get_AcademicDetails($flag,$student_id){

		$sp = "call usp_GetAcademicDetailsByID(?,?) ";
        $parameter=array($flag,$student_id);

		$query = $this->db->query($sp,$parameter);
        $res = $query->result_array();
        $query->next_result();
		$query->free_result();
        return $res;
    }

    function Get_EmploymentDetails($flag,$student_id){

		$sp = "call usp_GetEmploymentDetailByID(?,?) ";
        $parameter=array($flag,$student_id);

		$query = $this->db->query($sp,$parameter);
        $res = $query->result_array();
        $query->next_result();
		$query->free_result();
        return $res;
    }



    /* Testimonials  */

    function Get_TestimoniDetails($student_id){

		$sp = "call usp_GetTestimoniDetails_ByID(?) ";
        $parameter=array($student_id);

		$query = $this->db->query($sp,$parameter);
        $res = $query->result_array();
        $query->next_result();
		$query->free_result();
        return $res;
    }










}