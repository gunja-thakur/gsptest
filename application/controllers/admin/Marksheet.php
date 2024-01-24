<?php
defined('BASEPATH') or exit('No direct script access allowed');

error_reporting(0);
class Marksheet extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->helper('form');
        $this->load->helper('url');
        $this->load->library('form_validation');
        $this->load->helper('string');
        $this->load->library('session');
        $this->load->model('Admission_M');
        $this->load->model('Dba_model');
        $this->load->model('Home_M');
    }

    public function index()
    {

    }


    public function SaveMarks()
		{
			$fill_by=$this->session->userdata("user_id");
			$user_id=$this->input->post("user_id");
			$qus_id=$this->input->post("qus_id");
			$candidate_answere=$this->input->post("candidate_answere");
			$marks=$this->input->post("marks");

			$check = $this->Dba_model->select_where("nursing_master",array("user_id"=>$user_id,"marksheet_status"=>1));
			$cn = $check->num_rows();
			//print_r($cn);die;
					if($cn==0)
					{

			$update_data = [];
			$sum=0;
			foreach ($qus_id as $key => $value) {
				$update_data[] = [
					'qus_id'    => $value,
					/* 'answere' => $candidate_answere[$key], */
					'marks' => $marks[$key],
					'user_id' => $user_id,
					'fill_by' => $fill_by
				];

				$sum+=$marks[$key];

			}
			 //echo $sum;
            //echo "<pre>"; print_r($update_data); die;

			$n=$this->db->insert_batch('marksheet_master', $update_data);

			//var_dump($n);die;

			if($n > 0) {

				$last_update=date('Y-m-d h:i:s');
				$this->Dba_model->update("nursing_master",['marksheet_status'=>'1','marks'=>$sum,'marks_by'=>$fill_by,'last_update'=>$last_update],["user_id"=>$user_id]);

				 echo "<script>alert('Marks Updated Successfully!!');window.location='".base_url()."admin/Nursing_Dashboard/Marksheet/$user_id"."';</script>";
				//echo "yes";

			}
			else {
				echo "<script>alert('Something Wrong!!');window.location='".base_url()."admin/Nursing_Dashboard/Marksheet/$user_id"."';</script>";
				//echo "no";
			}
			}
			else{
				echo "<script>alert('Marks Already Updated!!');window.location='".base_url()."admin/Nursing_Dashboard/Marksheet/$user_id"."';</script>";
			}

		}



		public function MeritList()
		{

			$data['category_data'] = $this->Admission_M->GetCategoryData();

			$data['student_data'] = $this->Dba_model->select_query("SELECT nrm.reg_id,nrm.category,nrm.checklist_verification,nrm.payment_verify,nrm.payment_yn,nm.user_id,nm.user_name,nm.date_of_birth,nm.joining_govt_orgnization,nm.experiance_govt_orgnization,nsm.subject_name,nm.app_id,nm.payment_yn as adm_payment,nm.student_status,nm.student_type,nm.marks,nm.marksheet_status
			FROM `nursing_registration_master` nrm
			JOIN nursing_master nm on nm.user_id=nrm.user_id JOIN nursing_subject_master nsm on nsm.subject_code=nm.subject_code WHERE nm.active_yn=1 and nm.student_status='1' order by nm.marks desc,nm.experiance_govt_orgnization desc ")->result_array();

			//echo"<pre>"; print_r($data['student_data']);die;
			$this->load->view('admin/nursing_merit_list',$data);

		}

		public function MeritList_Ajax()
		{

			$category=$this->input->post('category');
			$student_type=$this->input->post('student_type');

			if($category=='UR')
			{
			$data['student_data'] = $this->Dba_model->select_query("SELECT nrm.reg_id,nrm.category,nrm.checklist_verification,nrm.payment_verify,nrm.payment_yn,nm.user_id,nm.user_name,nm.date_of_birth,nm.joining_govt_orgnization,nm.experiance_govt_orgnization,nsm.subject_name,nm.app_id,nm.payment_yn as adm_payment,nm.student_status,nm.student_type,nm.marks,nm.marksheet_status
			FROM `nursing_registration_master` nrm
			JOIN nursing_master nm on nm.user_id=nrm.user_id JOIN nursing_subject_master nsm on nsm.subject_code=nm.subject_code WHERE nm.active_yn=1 and nm.student_status='1' And nm.categoryid='".$category."' And nm.student_type='".$student_type."' And nm.marks>='50' order by nm.marks desc,nm.experiance_govt_orgnization desc ")->result_array();
			}
			else
			{
			$data['student_data'] = $this->Dba_model->select_query("SELECT nrm.reg_id,nrm.category,nrm.checklist_verification,nrm.payment_verify,nrm.payment_yn,nm.user_id,nm.user_name,nm.date_of_birth,nm.joining_govt_orgnization,nm.experiance_govt_orgnization,nsm.subject_name,nm.app_id,nm.payment_yn as adm_payment,nm.student_status,nm.student_type,nm.marks,nm.marksheet_status
			FROM `nursing_registration_master` nrm
			JOIN nursing_master nm on nm.user_id=nrm.user_id JOIN nursing_subject_master nsm on nsm.subject_code=nm.subject_code WHERE nm.active_yn=1 and nm.student_status='1' And nm.categoryid='".$category."' And nm.student_type='".$student_type."' And nm.marks>='40' order by nm.marks desc,nm.experiance_govt_orgnization desc ")->result_array();
			}


			//echo"<pre>"; print_r($data['student_data']);die;

			$this->load->view('admin/nursing_merit_listajax',$data);

		}



}