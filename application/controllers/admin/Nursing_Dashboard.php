<?php
defined('BASEPATH') or exit('No direct script access allowed');

error_reporting(0);
class Nursing_Dashboard extends CI_Controller
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
        $this->ApplicationList();
    }

    public function ApplicationList()
    {

        $data['student_data'] = $this->Dba_model->select_query("SELECT nrm.reg_id,nrm.category,nrm.checklist_verification,nrm.payment_verify,nrm.payment_yn,nm.user_id,nm.user_name,nm.date_of_birth,nm.joining_govt_orgnization,nm.experiance_govt_orgnization,nsm.subject_name,nm.app_id,nm.payment_yn as adm_payment,nm.student_status,nm.student_type,nm.marks,nm.marksheet_status
        FROM `nursing_registration_master` nrm
        JOIN nursing_master nm on nm.user_id=nrm.user_id JOIN nursing_subject_master nsm on nsm.subject_code=nm.subject_code WHERE nm.active_yn=1 order by nm.marks desc,nm.experiance_govt_orgnization desc ")->result_array();

        $this->load->view('admin/nursing_dashboard', $data);
    }

    public function ViewForm($user_id)
    {

        $data['student_data'] = $this->Dba_model->select_query("SELECT nm.*,nrm.*,ncm.*,nsm.subject_name,nrm.user_id AS userid FROM `nursing_master` nm
        Inner JOIN nursing_registration_master nrm on nrm.user_id=nm.user_id
        JOIN nursing_subject_master nsm on nsm.subject_code=nm.subject_code
        Left Join nursing_checklist_master ncm on ncm.reg_id=nrm.reg_id
        where nm.user_id='" . $user_id . "' and nm.payment_yn=1 ")->result_array();
        //echo"<pre>"; print_r($data['student_data']);die;

        $this->load->view("nursing/view_nursing_student", $data);
    }

    public function Marksheet($user_id)
    {

        $data['student_data'] = $this->Dba_model->select_query("SELECT nm.*,nsm.subject_name FROM `nursing_master` nm
        JOIN nursing_subject_master nsm on nsm.subject_code=nm.subject_code where nm.user_id='" . $user_id . "' and nm.payment_yn=1 ")->result_array();

        $data['qus_ans_data'] = $this->Dba_model->select_query("SELECT * FROM question_answere_master ")->result_array();

        $data['marksheet_data'] = $this->Dba_model->select_query("SELECT a.user_name,a.user_id as userid,b.*,c.question FROM `nursing_master` a
        LEFT JOIN marksheet_master b ON b.user_id=a.user_id
        JOIN question_answere_master c on c.qus_id=b.qus_id
        WHERE a.active_yn=1 AND a.user_id='" . $user_id . "'")->result_array();

        //echo"<pre>"; print_r($data['student_data']);die;

        $this->load->view("nursing/candidate_marksheet", $data);
    }


    public function Candidate_verification()
    {

        $con['user_id'] = $this->input->post('user_id');
        //$con['reg_id'] = $this->input->post('reg_id');
        $data['student_type'] = $this->input->post('student_type');
        $data['student_status'] = $this->input->post('student_status');
        $data['status_action_date'] = $this->input->post('status_action_date');
        $data['status_remark'] = $this->input->post('status_remark');
        $data['last_update'] = date('Y-m-d h:i:s');

        //print_r($data);die;
        $n = $this->Dba_model->update("nursing_master",$data,$con);
        if ($n == 1) {

        echo "<script>alert('Verified Successfully!!!!');window.location='".base_url()."admin/Nursing_Dashboard/ApplicationList"."';</script>";

        } else {

        echo "<script>alert('Something Wrong!!!!');window.location='".base_url()."admin/Nursing_Dashboard/ViewForm/".$con['user_id']."';</script>";

        }
    }


    public function View_CandidateData()
    {

        $candidate_type = $this->input->post('candidate_type');
        $rank_type = $this->input->post('rank_type');
        $phase = $this->input->post('phase');
        /* $seat = $this->input->post('seat');
        $date_slot = $this->input->post('date_slot'); */

        $data['candidate_data'] = $this->Dba_model->select_query("Select student_counselling,rank_type,counselling_round from user_master um WHERE um.user_role=4 AND um.student_counselling='" . $candidate_type . "' And um.rank_type='" . $rank_type . "' And um.counselling_round='" . $phase . "' Limit 1")->result_array();

        $data['student_data'] = $this->Dba_model->select_query("SELECT um.department,um.roll_no,um.user_role,um.rank_type,um.user_name,um.student_counselling,rm.reg_id,rm.user_id,rm.seat_status,rm.checklist_verification,vo.user_name as so_name,rm.payment_verify,rm.payment_verify_date,rm.active_yn,rm.payment_yn,sm.st_name,sbm.subject_name,ckm.* ,ckm.last_update as verification_date,fm.*,fm.user_id AS fuser_id,fm.reg_id as freg_id FROM `user_master` um
        JOIN nursing_master rm ON rm.user_id=um.user_id
        JOIN checklist_master ckm ON ckm.reg_id=rm.reg_id
        INNER JOIN subject_master sbm ON sbm.subject_code=um.subject_code
        JOIN status_master sm ON sm.st_id=rm.seat_status
        JOIN fitness_master fm ON fm.user_id=um.user_id
        JOIN user_master vo ON vo.user_id=ckm.verified_by
        WHERE um.user_role=4 AND um.student_counselling='" . $candidate_type . "' And um.rank_type='" . $rank_type . "' And um.counselling_round='" . $phase . "' AND  rm.active_yn=1 AND rm.seat_status IN(1,2) group by rm.reg_id ")->result_array();

        //$data['student_data'] = $this->Home_M->GetAll_CandidateRecord($candidate_type,$rank_type,$phase);

        //echo"<pre>"; print_r($data['student_data']);die;

        $this->load->view('admin/candidate_list_ajax', $data);
    }







    public function GetStudent($user_id)
    {
        $this->ViewForm($user_id);


    }

    public function Get_BankDetails($user_id)
    {

        if (!$this->session->userdata('user_id')) {
            header("location:" . base_url() . "Login");
        } else {

            $data['student_data'] = $this->Dba_model->select_query("SELECT um.roll_no,um.user_role,um.rank_type,um.user_name,rm.*,cm.cat_name,qm.quota_name,sm.st_name,im.institute_name,sbm.subject_name,tm.trns_id,fm.* FROM `user_master` um
        JOIN nursing_master rm ON rm.user_id=um.user_id
        INNER JOIN subject_master sbm ON sbm.subject_code=um.subject_code
        JOIN status_master sm ON sm.st_id=rm.seat_status
        JOIN category_master cm ON cm.cat_id=rm.category
        JOIN institute_master im on im.institute_code=um.institute_code
        JOIN quota_master qm ON qm.quota_id=rm.quota
        JOIN fees_master fm on fm.st_id=sm.st_id
        JOIN transaction_master tm ON tm.user_id=rm.user_id
        WHERE rm.user_id='" . $user_id . "'
       ")->result_array();
            $data['transaction_data'] = $this->Dba_model->select_query("SELECT * FROM `transaction_master` WHERE user_id='" . $user_id . "'
        GROUP BY total_amount ")->result_array();

            //print_r($this->session->userdata('rank_type'));die;


            $this->load->view('institute/verify_student_bank_details', $data);
        }
    }


    public function Get_StateBankDetails($user_id)
    {

        if (!$this->session->userdata('user_id')) {
            header("location:" . base_url() . "Login");
        } else {

            $data['student_data'] = $this->Dba_model->select_query("SELECT um.roll_no,um.user_role,um.rank_type,um.user_name,rm.*,cm.cat_name,qm.quota_name,sm.st_name,im.institute_name,sbm.subject_name,tm.trns_id,fm.* FROM `user_master` um
       JOIN nursing_master rm ON rm.user_id=um.user_id
       INNER JOIN subject_master sbm ON sbm.subject_code=um.subject_code
       JOIN status_master sm ON sm.st_id=rm.seat_status
       JOIN category_master cm ON cm.cat_id=rm.category
       JOIN institute_master im on im.institute_code=um.institute_code
       JOIN quota_master qm ON qm.quota_id=rm.quota
       JOIN fees_master fm on fm.st_id=sm.st_id
       JOIN transaction_master tm ON tm.user_id=rm.user_id
       WHERE rm.user_id='" . $user_id . "'
      ")->result_array();
            $data['transaction_data'] = $this->Dba_model->select_query("SELECT * FROM `transaction_master` WHERE user_id='" . $user_id . "'
        GROUP BY total_amount ")->result_array();

            //print_r($this->session->userdata('rank_type'));die;

            $this->load->view('institute/state_student_bank_details', $data);
        }
    }


    public function Get_UGBankDetails($user_id)
    {

        if (!$this->session->userdata('user_id')) {
            header("location:" . base_url() . "Login");
        } else {

       $data['student_data'] = $this->Dba_model->select_query("SELECT um.roll_no,um.user_role,um.rank_type,um.user_name,rm.*,cm.cat_name,qm.quota_name,sm.st_name,im.institute_name,sbm.subject_name,tm.trns_id,fm.* FROM `user_master` um
       JOIN nursing_master rm ON rm.user_id=um.user_id
       INNER JOIN subject_master sbm ON sbm.subject_code=um.subject_code
       JOIN status_master sm ON sm.st_id=rm.seat_status
       JOIN category_master cm ON cm.cat_id=rm.category
       JOIN institute_master im on im.institute_code=um.institute_code
       JOIN quota_master qm ON qm.quota_id=rm.quota
       JOIN fees_master fm on fm.st_id=sm.st_id
       JOIN transaction_master tm ON tm.user_id=rm.user_id
       WHERE rm.user_id='" . $user_id . "'
      ")->result_array();
            $data['transaction_data'] = $this->Dba_model->select_query("SELECT * FROM `transaction_master` WHERE user_id='" . $user_id . "'
        GROUP BY total_amount ")->result_array();

            //print_r($this->session->userdata('rank_type'));die;

            $this->load->view('institute/ai_ugstudent_bank_details', $data);
        }
    }


    public function Verify_StudentDocument()
    {

        if (!$this->session->userdata('user_id')) {
            header("location:" . base_url() . "Login");
        } else {

            $con['user_id'] = $this->input->post('user_id');
            $con['reg_id'] = $this->input->post('reg_id');

            $data['cl_registration_mp_nurses_counselling'] = $this->input->post('registration_mp_nurses_counselling');
            $data['rmnc_remark'] = $this->input->post('rmnc_remark');

            $data['cl_high_school_marksheet'] = $this->input->post('high_school_marksheet');
            $data['hsm_remark'] = $this->input->post('hsm_remark');

            $data['cl_higher_sec_marksheet'] = $this->input->post('higher_sec_marksheet');
            $data['hgsm_remark'] = $this->input->post('hsecm_remark');

            $data['cl_bsc_first'] = $this->input->post('bsc_first');
            $data['bf_remark'] = $this->input->post('bf_remark');
            $data['cl_bsc_second'] = $this->input->post('bsc_second');
            $data['bs_remark'] = $this->input->post('bs_remark');
            $data['cl_bsc_third'] = $this->input->post('bsc_third');
            $data['bt_remark'] = $this->input->post('bt_remark');
            $data['cl_bsc_fourth'] = $this->input->post('bsc_fourth');
            $data['bsf_remark'] = $this->input->post('bsf_remark');
            $data['cl_post_bsc_nursing_first'] = $this->input->post('post_bsc_nursing_first');
            $data['pbscf_remark'] = $this->input->post('pbscf_remark');
            $data['cl_post_bsc_nursing_second'] = $this->input->post('post_bsc_nursing_second');
            $data['pbscs_remark'] = $this->input->post('pbscs_remark');
            $data['cl_degree'] = $this->input->post('cl_degree');
            $data['degree_remark'] = $this->input->post('degree_remark');
            $data['cl_candidate_photo'] = $this->input->post('candidate_photo');
            $data['cp_remark'] = $this->input->post('cp_remark');
            $data['cl_id_proof_file'] = $this->input->post('id_proof_file');
            $data['ipf_remark'] = $this->input->post('ipf_remark');
            $data['cl_domicile_certificate'] = $this->input->post('domicile_certificate');
            $data['dc_remark'] = $this->input->post('dc_remark');
            $data['cl_cast_certificate'] = $this->input->post('cast_certificate');
            $data['cc_remark'] = $this->input->post('cc_remark');
            $data['cl_income_certificate'] = $this->input->post('income_certificate');
            $data['ic_remark'] = $this->input->post('ic_remark');
            $data['cl_charcter_certificate'] = $this->input->post('character_certificate');
            $data['char_remark'] = $this->input->post('char_remark');
            $data['cl_tranf_certificate'] = $this->input->post('transfer_certificate');
            $data['tc_remark'] = $this->input->post('tc_remark');
            $data['cl_workexperience_certificate'] = $this->input->post('work_experience_certificate');
            $data['wec_remark'] = $this->input->post('wec_remark');
            $data['cl_office_noc'] = $this->input->post('office_noc');
            $data['noc_remark'] = $this->input->post('noc_remark');

            $data['cl_affidavit_married'] = $this->input->post('affidavit_for_married_applicant');
            $data['affidavit_remark'] = $this->input->post('affidavit_remark');

            $data['cl_affidavit_proforma1'] = $this->input->post('affidavit2');
            $data['ap1_remark'] = $this->input->post('ap1_remark');

            $data['cl_medical_certificate'] = $this->input->post('medical_certificate');
            $data['medical_remark'] = $this->input->post('medical_remark');

            $data['all_remark'] = $this->input->post('all_remark');

            $data['cl_status'] = $this->input->post('cl_status');
            $data['verified_by'] = $this->session->userdata('user_id');





            $n = $this->Dba_model->update("nursing_checklist_master", $data, $con);

            //echo"<pre>"; print_r($n); die;
            if ($n == 1) {

                $data['user_id'] = $this->input->post('user_id');
                $data['reg_id'] = $this->input->post('reg_id');
                $this->Dba_model->insert("nursing_checklist_master_log", $data);

                $data1['checklist_verification'] = $this->input->post('cl_status');
                $data1['last_update'] = date('Y-m-d h:i:s');
                $this->Dba_model->update("nursing_registration_master", $data1, $con);
                /* var_dump($data1); var_dump($con);
            var_dump($this->Dba_model->update("nursing_master",$data1,$con));die;*/

                $data3['role'] = $this->session->userdata('user_role');
                $data3['user_id'] = $this->input->post('user_id');
                $data3['reg_id'] = $this->input->post('reg_id');
                $data3['clog_status'] = $this->input->post('cl_status');

                $this->Dba_model->insert("nursing_checklist_log", $data3);

                echo "<script>alert('Document Verification Sucessfully Done');window.location='" . base_url() . "Home" . "';</script>";
            } else {

                echo "<script>alert('Something Wrong');window.location='" . base_url() . "admin/Nursing_Dashboard/GetStudent/" . $con['user_id'] . "" . "';</script>";
            }
        }
    }
}
