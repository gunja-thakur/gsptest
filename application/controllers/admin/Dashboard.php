<?php
defined('BASEPATH') OR exit('No direct script access allowed');

error_reporting(0);
class Dashboard extends CI_Controller {

    public function __construct()
	{
	parent::__construct();
    $this->load->helper('form');
	$this->load->helper('url');
	$this->load->library('form_validation');
	$this->load->helper('string');
	$this->load->library('session');
    $this->load->model('Dba_model');
    $this->load->model('Home_M');
	}

    public function index()
    {

        if(!$this->session->userdata('user_id'))
        {
            header("location:".base_url()."Login");
        }
        else
        {
        if($this->session->userdata['user_role'] == 1 OR $this->session->userdata['user_role'] == 2) {
         $this->load->view('admin/dashboard');
        }
        else
        {
        echo"Something Wrong";
        header("location:".base_url()."Login");

        }

        //print_r($data['student_data']);die;



        }
    }

    public function AjaxCountData()
    {

        if(!$this->session->userdata('user_id'))
        {
            header("location:".base_url()."Login");
        }
        else
        {


        $data['student_data'] = $this->Admission_M->GetStudent_Record();

        $date=$this->input->post('date');
        $candidate_type = $this->input->post('candidate_type');
        $rank_type = $this->input->post('rank_type');
        $phase = $this->input->post('phase');

        $data['candidate_count']=$this->Dba_model->select_query("SELECT COUNT(user_id) AS total_cadidate,
        SUM( CASE WHEN active_yn=1 AND payment_yn=1  THEN 1 ELSE 0 END ) AS active_candidate ,
        SUM( CASE WHEN (active_yn  IS NULL OR active_yn=0 OR active_yn!=1) THEN 1 ELSE 0 END ) AS inactive_candidate FROM `user_master` um  WHERE user_role=4 AND um.student_counselling='".$candidate_type."' And um.rank_type='".$rank_type."' And um.counselling_round='".$phase."' AND categoryid!=1")->result_array();



        $data['registration_count']=$this->Dba_model->select_query("SELECT COUNT(rm.reg_id) AS total_registration,
        SUM( CASE WHEN rm.seat_status=1 THEN 1 ELSE 0 END ) AS Confirm_candidate ,
        SUM( CASE WHEN (rm.seat_status=2) THEN 1 ELSE 0 END ) AS upgrade_candidate,
        SUM( CASE WHEN (rm.seat_status=1 AND checklist_verification=3) THEN 1 ELSE 0 END ) AS conf_verify,
        SUM( CASE WHEN (rm.seat_status=1 AND checklist_verification!=3) THEN 1 ELSE 0 END ) AS conf_notverify,
        SUM( CASE WHEN (rm.seat_status=2 AND checklist_verification=3) THEN 1 ELSE 0 END ) AS upg_verify,
        SUM( CASE WHEN (rm.seat_status=2 AND checklist_verification!=3) THEN 1 ELSE 0 END ) AS upg_notverify,
        SUM( CASE WHEN (rm.payment_yn=1) THEN 1 ELSE 0 END ) AS fee_deposit,
        SUM( CASE WHEN (rm.payment_yn=0 OR rm.payment_yn IS Null) THEN 1 ELSE 0 END ) AS fee_pending,
        SUM( CASE WHEN (rm.payment_yn=1 AND payment_verify=1 AND seat_status=1) THEN 1 ELSE 0 END ) AS fee_verified_conf,
        SUM( CASE WHEN (rm.payment_yn=1 AND payment_verify=1 AND seat_status=2) THEN 1 ELSE 0 END ) AS fee_verified_upgrade,
        SUM( CASE WHEN (rm.payment_yn=1 AND payment_verify!=1) THEN 1 ELSE 0 END ) AS fee_notverified
        FROM `registration_master` rm
        join user_master um on um.user_id=rm.user_id
        WHERE um.student_counselling='".$candidate_type."' And um.rank_type='".$rank_type."' And um.counselling_round='".$phase."' And rm.active_yn=1")->result_array();


        $data['medical_count']=$this->Dba_model->select_query("SELECT fm_id,COUNT(fm_id) as total_medical ,
        SUM( CASE WHEN medicine_dpt_status=0 THEN 1 ELSE 0 END ) AS md_pending ,
        SUM( CASE WHEN medicine_dpt_status=1 THEN 1 ELSE 0 END ) AS md_fit ,
        SUM( CASE WHEN medicine_dpt_status=2 THEN 1 ELSE 0 END ) AS md_unfit,

        SUM( CASE WHEN surgical_dpt_status=0 THEN 1 ELSE 0 END ) AS sd_pending ,
        SUM( CASE WHEN surgical_dpt_status=1 THEN 1 ELSE 0 END ) AS sd_fit ,
        SUM( CASE WHEN surgical_dpt_status=2 THEN 1 ELSE 0 END ) AS sd_unfit,
        SUM( CASE WHEN ophthalmology_dpt_status=0 THEN 1 ELSE 0 END ) AS od_pending ,
        SUM( CASE WHEN ophthalmology_dpt_status=1 THEN 1 ELSE 0 END ) AS od_fit ,
        SUM( CASE WHEN ophthalmology_dpt_status=2 THEN 1 ELSE 0 END ) AS od_unfit,
        SUM( CASE WHEN pathology_dpt_status=0 THEN 1 ELSE 0 END ) AS pd_pending ,
        SUM( CASE WHEN pathology_dpt_status=1 THEN 1 ELSE 0 END ) AS pd_fit ,
        SUM( CASE WHEN pathology_dpt_status=2 THEN 1 ELSE 0 END ) AS pd_unfit,
        SUM( CASE WHEN radiodiagnosis_dpt_status=0 THEN 1 ELSE 0 END ) AS rd_pending ,
        SUM( CASE WHEN radiodiagnosis_dpt_status=1 THEN 1 ELSE 0 END ) AS rd_fit ,
        SUM( CASE WHEN radiodiagnosis_dpt_status=2 THEN 1 ELSE 0 END ) AS rd_unfit
        FROM `fitness_master` fm
        JOIN registration_master rm ON rm.reg_id=fm.reg_id
        join user_master um on um.user_id=rm.user_id
        WHERE um.student_counselling='".$candidate_type."' And um.rank_type='".$rank_type."' And um.counselling_round='".$phase."' AND rm.active_yn=1 AND rm.seat_status=1  ")->result_array();


        /* echo"<pre>"; print_r($data['medical_count']);die;*/


        $this->load->view('admin/ajax_count',$data);
        }
    }


public function View_CandidateData()
{

$candidate_type = $this->input->post('candidate_type');
$rank_type = $this->input->post('rank_type');
$phase = $this->input->post('phase');
/* $seat = $this->input->post('seat');
$date_slot = $this->input->post('date_slot'); */

$data['candidate_data'] = $this->Dba_model->select_query("Select student_counselling,rank_type,counselling_round from user_master um WHERE um.user_role=4 AND um.student_counselling='".$candidate_type."' And um.rank_type='".$rank_type."' And um.counselling_round='".$phase."' Limit 1")->result_array();

$data['student_data'] = $this->Dba_model->select_query("SELECT um.department,um.roll_no,um.user_role,um.rank_type,um.user_name,um.student_counselling,rm.reg_id,rm.user_id,rm.seat_status,rm.checklist_verification,vo.user_name as so_name,rm.payment_verify,rm.payment_verify_date,rm.active_yn,rm.payment_yn,sm.st_name,sbm.subject_name,ckm.* ,ckm.last_update as verification_date,fm.*,fm.user_id AS fuser_id,fm.reg_id as freg_id FROM `user_master` um
JOIN registration_master rm ON rm.user_id=um.user_id
JOIN checklist_master ckm ON ckm.reg_id=rm.reg_id
INNER JOIN subject_master sbm ON sbm.subject_code=um.subject_code
JOIN status_master sm ON sm.st_id=rm.seat_status
JOIN fitness_master fm ON fm.user_id=um.user_id
JOIN user_master vo ON vo.user_id=ckm.verified_by
WHERE um.user_role=4 AND um.student_counselling='".$candidate_type."' And um.rank_type='".$rank_type."' And um.counselling_round='".$phase."' AND  rm.active_yn=1 AND rm.seat_status IN(1,2) group by rm.reg_id ")->result_array();

//$data['student_data'] = $this->Home_M->GetAll_CandidateRecord($candidate_type,$rank_type,$phase);

//echo"<pre>"; print_r($data['student_data']);die;

$this->load->view('admin/candidate_list_ajax',$data);


}







    public function GetStudent($user_id)
    {

    $data['status_data'] = $this->Admission_M->GetStatusData();
    $data['student_data'] = $this->Admission_M->GetStudent_data($user_id);

    //echo"<pre>"; print_r($data['student_data']);die;

    $std_data = $this->Dba_model->select_query("SELECT student_counselling as cours_type FROM user_master where user_id='".$user_id."' ")->result_array();
    foreach($std_data as $std)
			{
			extract($std);
            if($std['cours_type']==1)
            {
            $this->load->view('common/view_single_student',$data);
            }
            else if($std['cours_type']==2)
            {
            $this->load->view('common/view_single_student_ug',$data);
            }


            }


    }

    public function StudentFitness_Form()
    {

        if(!$this->session->userdata('user_id'))
        {
            header("location:".base_url()."Login");
        }
        else
        {

        $data['student_data'] = $this->Dba_model->select_query("Select um.*,fm.*,fm.user_id as fuser_id,fm.reg_id as freg_id from user_master as um left join fitness_master as fm on fm.user_id=um.user_id where um.user_id=8")->result_array();


        $this->load->view('admin/student_fitness_verification',$data);
        }
    }





    public function ModifyStudentStatus()
    {

    $user_id = $this->input->post('user_id');


    $data = $this->Admission_M->ModifyStudentStatus_Save();
    if($data==1)
    {
        /* $data1['reg_id']=$this->input->post('reg_id');
        $data1['user_id']=$this->input->post('user_id');
        $this->Dba_model->insert("transaction_master",$data1); */

        $this->session->set_flashdata('message', 'Updated Sucessfully.');
        header("location:".base_url().'admin/Dashboard');
    }
    else{
    $this->session->set_flashdata('message', 'Something Wrong.');
    header("location:".base_url().'admin/Dashboard/GetStudent/'.$user_id);

    }

    }


    public function Get_BankDetails($user_id)
    {

        if(!$this->session->userdata('user_id'))
        {
            header("location:".base_url()."Login");
        }
       else {

        $data['student_data']=$this->Dba_model->select_query("SELECT um.roll_no,um.user_role,um.rank_type,um.user_name,rm.*,cm.cat_name,qm.quota_name,sm.st_name,im.institute_name,sbm.subject_name,tm.trns_id,fm.* FROM `user_master` um
        JOIN registration_master rm ON rm.user_id=um.user_id
        INNER JOIN subject_master sbm ON sbm.subject_code=um.subject_code
        JOIN status_master sm ON sm.st_id=rm.seat_status
        JOIN category_master cm ON cm.cat_id=rm.category
        JOIN institute_master im on im.institute_code=um.institute_code
        JOIN quota_master qm ON qm.quota_id=rm.quota
        JOIN fees_master fm on fm.st_id=sm.st_id
        JOIN transaction_master tm ON tm.user_id=rm.user_id
        WHERE rm.user_id='".$user_id."'
       ")->result_array();
        $data['transaction_data']=$this->Dba_model->select_query("SELECT * FROM `transaction_master` WHERE user_id='".$user_id."'
        GROUP BY total_amount ")->result_array();

      //print_r($this->session->userdata('rank_type'));die;


        $this->load->view('institute/verify_student_bank_details',$data);

        }
    }


    public function Get_StateBankDetails($user_id)
    {

        if(!$this->session->userdata('user_id'))
        {
            header("location:".base_url()."Login");
        }
       else {

       $data['student_data']=$this->Dba_model->select_query("SELECT um.roll_no,um.user_role,um.rank_type,um.user_name,rm.*,cm.cat_name,qm.quota_name,sm.st_name,im.institute_name,sbm.subject_name,tm.trns_id,fm.* FROM `user_master` um
       JOIN registration_master rm ON rm.user_id=um.user_id
       INNER JOIN subject_master sbm ON sbm.subject_code=um.subject_code
       JOIN status_master sm ON sm.st_id=rm.seat_status
       JOIN category_master cm ON cm.cat_id=rm.category
       JOIN institute_master im on im.institute_code=um.institute_code
       JOIN quota_master qm ON qm.quota_id=rm.quota
       JOIN fees_master fm on fm.st_id=sm.st_id
       JOIN transaction_master tm ON tm.user_id=rm.user_id
       WHERE rm.user_id='".$user_id."'
      ")->result_array();
        $data['transaction_data']=$this->Dba_model->select_query("SELECT * FROM `transaction_master` WHERE user_id='".$user_id."'
        GROUP BY total_amount ")->result_array();

      //print_r($this->session->userdata('rank_type'));die;

            $this->load->view('institute/state_student_bank_details',$data);


        }
    }


    public function Get_UGBankDetails($user_id)
    {

        if(!$this->session->userdata('user_id'))
        {
            header("location:".base_url()."Login");
        }
       else {

       $data['student_data']=$this->Dba_model->select_query("SELECT um.roll_no,um.user_role,um.rank_type,um.user_name,rm.*,cm.cat_name,qm.quota_name,sm.st_name,im.institute_name,sbm.subject_name,tm.trns_id,fm.* FROM `user_master` um
       JOIN registration_master rm ON rm.user_id=um.user_id
       INNER JOIN subject_master sbm ON sbm.subject_code=um.subject_code
       JOIN status_master sm ON sm.st_id=rm.seat_status
       JOIN category_master cm ON cm.cat_id=rm.category
       JOIN institute_master im on im.institute_code=um.institute_code
       JOIN quota_master qm ON qm.quota_id=rm.quota
       JOIN fees_master fm on fm.st_id=sm.st_id
       JOIN transaction_master tm ON tm.user_id=rm.user_id
       WHERE rm.user_id='".$user_id."'
      ")->result_array();
        $data['transaction_data']=$this->Dba_model->select_query("SELECT * FROM `transaction_master` WHERE user_id='".$user_id."'
        GROUP BY total_amount ")->result_array();

      //print_r($this->session->userdata('rank_type'));die;

            $this->load->view('institute/ai_ugstudent_bank_details',$data);


        }
    }


    public function Verify_StudentDocument()
    {

        if(!$this->session->userdata('user_id'))
        {
            header("location:".base_url()."Login");
        }
       else {

        $con['user_id']=$this->input->post('user_id');
        $con['reg_id']=$this->input->post('reg_id');
        $data['cl_neet_admit_card']=$this->input->post('neet_admit_card');
        $data['nac_remark']=$this->input->post('nac_remark');
        $data['cl_neet_score_card']=$this->input->post('neet_score_card');
        $data['nsc_remark']=$this->input->post('nsc_remark');
        $data['cl_high_school_marksheet']=$this->input->post('high_school_marksheet');
        $data['hsm_remark']=$this->input->post('hsm_remark');

        $data['cl_higher_sec_marksheet']=$this->input->post('higher_sec_marksheet');
        $data['hgsm_remark']=$this->input->post('hsecm_remark');

        $data['cl_class11_marksheet']=$this->input->post('class11_marksheet');
        $data['class11_remark']=$this->input->post('class11_remark');

        $data['cl_age_certificate_file']=$this->input->post('age_certificate_file');
        $data['acf_remark']=$this->input->post('acf_remark');


        $data['cl_mbbs_first']=$this->input->post('mbbs_first');
        $data['mf_remark']=$this->input->post('mbbsf_remark');
        $data['cl_mbbs_second']=$this->input->post('mbbs_second');
        $data['ms_remark']=$this->input->post('mbbss_remark');
        $data['cl_mbbs_final_part1']=$this->input->post('mbbs_final');
        $data['mfp_remark']=$this->input->post('mbbsfp_remark');
        $data['cl_mbbs_final_part2']=$this->input->post('mbbs_final_part2');
        $data['mfp2_remark']=$this->input->post('mbbsfs_remark');
        $data['cl_internship_completion']=$this->input->post('internship_completion');
        $data['icc_remark']=$this->input->post('icc_remark');
        $data['cl_medical_council']=$this->input->post('medical_council');
        $data['pmc_remark']=$this->input->post('pmc_remark');
        $data['cl_candidate_photo']=$this->input->post('candidate_photo');
        $data['cp_remark']=$this->input->post('cp_remark');
        $data['cl_id_proof_file']=$this->input->post('id_proof_file');
        $data['ipf_remark']=$this->input->post('ipf_remark');
        $data['cl_ews_certificate']=$this->input->post('ews_certificate');
        $data['ews_remark']=$this->input->post('ews_remark');
        $data['cl_domicile_certificate']=$this->input->post('domicile_certificate');
        $data['dc_remark']=$this->input->post('dc_remark');
        $data['cl_cast_certificate']=$this->input->post('cast_certificate');
        $data['cc_remark']=$this->input->post('cc_remark');
        $data['cl_income_certificate']=$this->input->post('income_certificate');
        $data['ic_remark']=$this->input->post('ic_remark');
        $data['cl_pwd_certificate']=$this->input->post('pwd_certificate');
        $data['pwd_remark']=$this->input->post('pwd_remark');
        $data['cl_migration_tc']=$this->input->post('migration_tc');
        $data['mt_remark']=$this->input->post('mgt_remark');
        $data['cl_affidavit_proforma345']=$this->input->post('affidavit_proforma345');
        $data['ap_remark']=$this->input->post('ap_remark');
        $data['cl_seat_living_bond']=$this->input->post('seat_living_bond');
        $data['slb_remark']=$this->input->post('slb_remark');
        $data['cl_rural_service_bond']=$this->input->post('rural_service_bond');
        $data['rsb_remark']=$this->input->post('rsb_remark');
        $data['cl_imc_regulation_affidavit']=$this->input->post('imc_regulation_affidavit');
        $data['imc_remark']=$this->input->post('imc_remark');
        $data['cl_gap_certificate']=$this->input->post('gap_certificate');
        $data['gc_remark']=$this->input->post('gc_remark');

        $data['cl_mbbs_degree']=$this->input->post('cl_mbbs_degree');
        $data['mbbsdegree_remark']=$this->input->post('mbbsdegree_remark');

        $data['cl_sainik_certificate']=$this->input->post('cl_sainik_certificate');
        $data['snkc_remark']=$this->input->post('snkc_remark');

        $data['cl_freedom_fighter_certificate']=$this->input->post('cl_freedom_fighter_certificate');
        $data['ffc_remark']=$this->input->post('ffc_remark');



        $data['cl_allotment_letter']=$this->input->post('allotment_letter');
        $data['cl_allotment_letter_remark']=$this->input->post('cl_allotment_letter_remark');





        $data['all_remark']=$this->input->post('all_remark');




        $data['cl_status']=$this->input->post('cl_status');
        $data['verified_by']=$this->session->userdata('user_id');



       // echo"<pre>"; print_r($data); die;


       $n= $this->Dba_model->update("checklist_master",$data,$con);


        if($n==1)
        {

            $data['user_id']=$this->input->post('user_id');
            $data['reg_id']=$this->input->post('reg_id');
            $this->Dba_model->insert("checklist_master_log",$data);

            $data1['checklist_verification']=$this->input->post('cl_status');
            $data1['last_update']=date('Y-m-d h:i:s');
            $this->Dba_model->update("registration_master",$data1,$con);
           /* var_dump($data1); var_dump($con);
            var_dump($this->Dba_model->update("registration_master",$data1,$con));die;*/

            $data3['role']=$this->session->userdata('user_role');
            $data3['user_id']=$this->input->post('user_id');
            $data3['reg_id']=$this->input->post('reg_id');
            $data3['clog_status']=2;

            $this->Dba_model->insert("checklist_log",$data3);

            /*$this->session->set_flashdata('message', 'Document Verification Sucessfully Done.');
            header("location:".base_url().'Home');*/
            echo "<script>alert('Document Verification Sucessfully Done');window.location='".base_url()."Home"."';</script>";


        }
        else
        {
           /* $this->session->set_flashdata('message', 'Something Wrong.');
            header("location:".base_url().'institute/Dashboard/GetStudent/'.$con['user_id']);*/
            echo "<script>alert('Something Wrong');window.location='".base_url()."admin/Dashboard/GetStudent/".$con['user_id'].""."';</script>";
        }



        }
    }







}