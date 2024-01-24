<?php foreach($candidate_count as $cc)?>
<?php foreach($registration_count as $rc)?>
<?php foreach($medical_count as $mdc)?>
<!DOCTYPE html>
<html lang="en">

	<!---Head Start--->
    <head>


        <?php include(APPPATH.'views/include/head.php');?>
    </head>
	<!---Head Start--->

    <body class="sb-nav-fixed">
		<!---Navigation Start--->

<?php include(APPPATH.'views/include/header.php');?>
		<!---Navigation End--->

        <div id="layoutSidenav">

		<!---Sidebar Start--->

<?php include(APPPATH.'views/include/sidebar.php');?>
		<!---Sidebar End--->

            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid px-4">

<?php if($this->session->flashdata('message')){?>
  <div class="alert alert-success flashhide">
<?php echo $this->session->flashdata('message')?>
</div>
<?php } ?>

<div class="height_control">
<div class="row">
                        <div class="col-xl-12 col-lg-12 mb-4">
						<div class="card">
                                    <div class="card-header">
                                        <i class="fa-solid fa-grip me-1"></i>
                                        Counter Area
                                    </div>
                                    <div class="card-body">
									<div class="row">

                            <div class="col-xl-6 col-md-6 mb-4">
                                <div class="card bg-light">
                                <div class="card-footer d-flex align-items-center justify-content-between">
                                <div class="numbercount font_600">Total Form Submmited   :
<span class="odometer number_span " data-count="<?php echo $rc['total_registration'];?>">00</span>
</div>

                                    </div>
                                <div class="card-body">

<div class="table-responsive">
<table class="table table-sm table-bordered">
<thead>
<tr>
<th> </th>
<th>Confirm  (<?php echo $rc['Confirm_candidate'];?>) </th>
<th>Upgrade  (<?php echo $rc['upgrade_candidate'];?>) </th>
</tr>
</thead>
<tbody>
<tr>
<th>Verified  </th>
<td> <?php echo $rc['conf_verify'];?> </td>
<td> <?php echo $rc['upg_verify'];?> </td>
</tr>
<tr>
<th>Not Verified  </th>
<td> <?php echo $rc['conf_notverify'];?> </td>
<td> <?php echo $rc['upg_notverify'];?> </td>
</tr>

</table>
</div>

                                </div>
                            </div>
                            </div>


<div class="col-xl-6 col-md-6 mb-4">
                                <div class="card bg-light">
                                <div class="card-footer d-flex align-items-center justify-content-between">
                                <div class="numbercount font_600">Total Medical Fitness   :
<span class="odometer number_span " data-count="<?php echo $mdc['total_medical'];?>">00</span>
</div>
                                       <!--  <div class="small text-white"><i class="fas fa-angle-right"></i></div> -->
                                    </div>
                                <div class="card-body">

<div class="table-responsive">
<table class="table table-sm table-bordered">
<thead>
<tr>
<th>  </th>
<th> M1 </th>
<th> M2 </th>
<th> M3 </th>
<th> M4 </th>
<th> M5 </th>
</tr>
</thead>
<tbody>
<tr>
<th>Pending  </th>
<td><?php echo $mdc['md_pending'];?>  </td>
<td><?php echo $mdc['sd_pending'];?>  </td>
<td><?php echo $mdc['od_pending'];?>  </td>
<td><?php echo $mdc['pd_pending'];?>  </td>
<td><?php echo $mdc['rd_pending'];?>  </td>
</tr>
<tr>
<th>Verified  </th>
<td><?php echo $mdc['md_fit'];?>  </td>
<td><?php echo $mdc['sd_fit'];?>  </td>
<td><?php echo $mdc['od_fit'];?>  </td>
<td><?php echo $mdc['pd_fit'];?>  </td>
<td><?php echo $mdc['rd_fit'];?>  </td>
</tr>
<tr>
<th> Not Verified  </th>
<td><?php echo $mdc['md_unfit'];?>  </td>
<td><?php echo $mdc['sd_unfit'];?>  </td>
<td><?php echo $mdc['od_unfit'];?>  </td>
<td><?php echo $mdc['pd_unfit'];?>  </td>
<td><?php echo $mdc['rd_unfit'];?>  </td>
</tr>
<!--<tr>
<th>Total  </th>
<td colspan="5"> 10 </td>
</tr>-->
</tbody>
</table>
</div>

                                </div>
                            </div>
                            </div>




							<div class="col-xl-3 col-md-6 mb-4">
                                <div class="card bg-primary text-white">
                                <div class="card-footer d-flex align-items-center justify-content-between">
                                <div class="numbercount">Total Candidate   :
                                <span class="odometer" data-count="<?php echo $cc['total_cadidate'];?>">00</span>
                                </div>
                             <!--  <div class="small text-white"><i class="fas fa-angle-right"></i></div> -->
                            </div>
                            <div class="card-body">

							<div class="numbercount">Active Candidates :
							<span class="odometer" data-count="<?php echo $cc['active_candidate'];?>">00</span>
							</div>
							<div class="numbercount">Pending Candidates :
							<span class="odometer" data-count="<?php echo $cc['inactive_candidate'];?>">00</span>
							</div>


                            </div>

                             </div>
                            </div>

							<div class="col-xl-3 col-md-6 mb-4">
                                <div class="card bg-success text-white">
                                <div class="card-footer d-flex align-items-center justify-content-between">
                                <div class="numbercount">Total Fee Deposit   :
                                <span class="odometer" data-count="<?php echo $rc['fee_deposit'];?>">00</span>
                                </div>
                             <!--  <div class="small text-white"><i class="fas fa-angle-right"></i></div> -->
                            </div>
                            <div class="card-body">

							<div class="numbercount">Verified Candidates :
							<span class="odometer" data-count="<?php echo $rc['fee_verified'];?>">00</span>
							</div>
							<div class="numbercount">Not Verified Candidates :
							<span class="odometer" data-count="<?php echo $rc['fee_notverified'];?>">00</span>
							</div>


                            </div>

                             </div>
                            </div>


                           <!-- <div class="col-xl-3 col-md-6 mb-4">
                                <div class="card bg-success text-white">
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <a class="small text-white stretched-link" href="#">View Details</a>
                                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                    </div>
                                    <div class="card-body">Total Fee Deposit

									<div class="numbercount">
								<span class="odometer" data-count="2000">00</span>
									</div></div>

                                </div>
                            </div>
                            <div class="col-xl-3 col-md-6 mb-4">
                                <div class="card bg-danger text-white">
                                    <div class="card-body">Danger Card
									<div class="numbercount">
								<span class="odometer" data-count="2000">00</span>
									</div></div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <a class="small text-white stretched-link" href="#">Toa</a>

                                    </div>
                                </div>
                            </div>-->
									</div>
									</div>
									</div>
									</div>
									</div>
									</div>

                        <div class="card mb-4">
                            <div class="card-header">
                                <i class="fas fa-table me-1"></i>
                               Candidate Registration List
                            </div>
                            <div class="card-body">
                            <div class="table-responsive">

                            <?php if($this->session->userdata['user_role'] == 2 OR $this->session->userdata['user_role'] == 3   OR $this->session->userdata['user_role'] == 7 OR $this->session->userdata['user_role'] == 6) { ?>
                                <table id="datatablesSimple" class="table table-sm w-100">

                                    <thead >

                                        <tr class="theme_bg_blue text-light">
                                            <th >Roll No.</th>
                                            <th >Candidate Name</th>
                                            <th >Subject </th>
                                            <th >Document Verification </th>
                                            <th >Medical Fitness Status </th>
                                            <th >Seat Status </th>
                                            <th >Fee Status </th>
                                            <!-- <th >Checklist Status </th> -->
                                           <!--  <th >Action </th> -->
                                        </tr>


                                    </thead>

                                    <tbody>
                                    <?php $i=1; foreach($student_data as $sd) { ?>
                                        <tr>
                                            <td><?php echo $sd['roll_no'];?></td>
                                            <td><?php echo $sd['user_name'];?></td>
                                            <td><?php echo $sd['subject_name'];?></td>

                                            <td > <?php if($sd['reg_id']=='' And $this->session->userdata['user_role'] == 2 And $this->session->userdata['user_role'] == 3 ) { ?>
                                             <b>Not Submitted</b>

                                             <?php } else if($sd['checklist_verification']==0) { ?>

                                            <b> Pending</b>

                                            <a href="<?php echo base_url();?>admin/Dashboard/GetStudent/<?php echo $sd['user_id'];?>" class="btn btn-primary btn-sm" title="Verify Document Checklist"> <i class="fa fa-edit"></i> </a>

                                            <?php } else if($sd['checklist_verification']==1) { ?>
                                            <b>Returned</b>
                                            <a href="<?php echo base_url();?>admin/Dashboard/GetStudent/<?php echo $sd['user_id'];?>" class="btn btn-primary btn-sm" title="Verify Document Checklist"> <i class="fa fa-edit"></i></a>

                                            <?php } else if($sd['checklist_verification']==2) { ?>
                                            <b>Re Submitted</b>
                                            <a href="<?php echo base_url();?>admin/Dashboard/GetStudent/<?php echo $sd['user_id'];?>" class="btn btn-primary btn-sm" title="Verify Document Checklist"> <i class="fa fa-edit"></i></a>

                                            <?php } else if($sd['checklist_verification']==3) { ?>
                                            <b class="">Verified</b>
                                            <a href="<?php echo base_url();?>admin/Dashboard/GetStudent/<?php echo $sd['user_id'];?>" class="btn btn-primary btn-sm"> <i class="fa fa-eye"></i></a>
                                            <?php } ?>
                                            </td>
                                    <?php if($sd['seat_status']==1) { ?>
                                        <td width="30%">
                                        <table class="table table-sm table-bordered">
                                        <thead class="bg-info">
                                                <tr>
                                                    <th>Medicine</th>
                                                    <th>Surgery</th>
                                                    <th>Ophtha</th>
                                                    <th>Pathogy</th>
                                                    <th>Radio</th>
                                                </tr>
                                            </thead>
                                            <tr>
                                            <td>
                                             <?php if($sd['medicine_dpt_status']==1) { ?>
                                            <i class="fa-solid fa-circle-check green_icon"></i>
                                            <?php }else if($sd['medicine_dpt_status']==2)  { ?>
                                            <i class="fa-solid fa-circle-xmark red_icon"></i>
                                            <?php } else { ?>
                                            <i class='fas fa-exclamation-circle orange_icon'></i>
                                            <?php } ?>

                                            </td>
                                            <td>
                                             <?php if($sd['surgical_dpt_status']==1) { ?>
                                            <i class="fa-solid fa-circle-check green_icon"></i>
                                            <?php }else if($sd['surgical_dpt_status']==2)  { ?>
                                            <i class="fa-solid fa-circle-xmark red_icon"></i>
                                            <?php } else { ?>
                                            <i class='fas fa-exclamation-circle orange_icon'></i>
                                            <?php } ?>

                                            </td>
                                            <td>
                                             <?php if($sd['ophthalmology_dpt_status']==1) { ?>
                                            <i class="fa-solid fa-circle-check green_icon"></i>
                                            <?php }else if($sd['ophthalmology_dpt_status']==2)  { ?>
                                            <i class="fa-solid fa-circle-xmark red_icon"></i>
                                            <?php } else { ?>
                                            <i class='fas fa-exclamation-circle orange_icon'></i>
                                            <?php } ?>

                                            </td>
                                            <td>
                                             <?php if($sd['pathology_dpt_status']==1) { ?>
                                            <i class="fa-solid fa-circle-check green_icon"></i>
                                            <?php }else if($sd['pathology_dpt_status']==2)  { ?>
                                            <i class="fa-solid fa-circle-xmark red_icon"></i>
                                            <?php } else { ?>
                                            <i class='fas fa-exclamation-circle orange_icon'></i>
                                            <?php } ?>

                                            </td>
                                            <td>
                                             <?php if($sd['radiodiagnosis_dpt_status']==1) { ?>
                                            <i class="fa-solid fa-circle-check green_icon"></i>
                                            <?php }else if($sd['radiodiagnosis_dpt_status']==2)  { ?>
                                            <i class="fa-solid fa-circle-xmark red_icon"></i>
                                            <?php } else { ?>
                                            <i class='fas fa-exclamation-circle orange_icon'></i>
                                            <?php } ?>

                                            </td>

                                            </tr>
                                            <?php if($sd['medicine_dpt_status']!=0 And $sd['surgical_dpt_status']!=0 And $sd['ophthalmology_dpt_status']!=0 And $sd['pathology_dpt_status']!=0 And $sd['radiodiagnosis_dpt_status']!=0) { ?>
                                            <tr>
                                                <td colspan=5><b>Medical Fitness Receipt</b> <a href="<?php echo base_url();?>Fitness/Student_fitnessReceipt/<?php echo $sd['fm_id'];?>"><i class="fa fa-arrow-right"></i> Click Here</a></td>
                                            </tr>
                                            <?php } ?>



                                        </table>
                                        </td>
                                    <?php } else { ?>
                                        <td> -</td>
                                    <?php } ?>

                                        <td> <?php echo $sd['st_name']; ?> </td>

                                        <td> <?php if($sd['payment_yn']==0){ echo "Pending";} else if($sd['payment_yn']==1) { echo "Paid";} if($sd['payment_verify']==1) { echo " (Verified)";} if($sd['payment_verify']!='1') { echo " (Not Verified)";} ?>

                                        <?php if($sd['payment_yn']==1) {?>

                                        <a href="<?php echo base_url();?>admin/Dashboard/Get_BankDetails/<?php echo $sd['user_id'];?>" class="btn btn-primary btn-sm" title="Update Payment Status"> <i class="fa fa-eye"></i></a>
                                        <?php } else {  ?>
                                           <!--  <a href="<?php echo base_url();?>admin/Dashboard/Get_BankDetails/<?php echo $sd['user_id'];?>" class="btn btn-primary btn-sm" title="View Payment Status"> <i class="fa fa-eye"></i></a> -->

                                        <?php } ?>
                                        </td>

                                        <!-- <td>
                                        <?php if($sd['checklist_verification']==0) { ?>
                                        Pending

                                        <a href="<?php echo base_url();?>admin/Dashboard/GetStudent/<?php echo $sd['user_id'];?>" class="btn btn-primary btn-sm" title="Verify Document Checklist"> <i class="fa fa-edit"></i> </a>

                                        <?php } else if($sd['checklist_verification']==1) { ?>
                                        Returned
                                        <a href="<?php echo base_url();?>admin/Dashboard/GetStudent/<?php echo $sd['user_id'];?>" class="btn btn-primary btn-sm" title="Verify Document Checklist"> <i class="fa fa-edit"></i></a>

                                        <?php } else if($sd['checklist_verification']==2) { ?>
                                        Re Submitted
                                        <a href="<?php echo base_url();?>admin/Dashboard/GetStudent/<?php echo $sd['user_id'];?>" class="btn btn-primary btn-sm" title="Verify Document Checklist"> <i class="fa fa-edit"></i></a>

                                        <?php } else if($sd['checklist_verification']==3) { ?>
                                        Verified
                                        <a href="<?php echo base_url();?>admin/Dashboard/GetStudent/<?php echo $sd['user_id'];?>" class="btn btn-primary btn-sm"> <i class="fa fa-eye"></i></a>
                                        <?php } ?>

                                        </td> -->
                                        <!-- <td>
                                        <?php if($sd['status']>0) { ?>
                                        <a href="<?php echo base_url();?>institute/Dashboard/Get_BankDetails/<?php echo $this->session->userdata('user_id');?>" class="btn btn-primary btn-sm"> <i class="fa fa-edit" title="Update Payment Status"></i></a>
                                        <?php } ?>
                                         </td> -->

                                         </tr>

                                        <?php  $i++; } ?>

                                    </tbody>
                                </table>


                                <?php } else if($this->session->userdata('user_role')=='5') { ?>
                                    <table id="datatablesSimple" class="table table-sm w-100">

                                <thead >

                                    <tr class="bg-secondary text-light">
                                        <th >Roll No.</th>
                                        <th >Student Name</th>
                                        <th >Subject </th>
                                        <th >Document Verification </th>
                                        <th >Medical Fitness Status </th>
                                        <th >Seat Status </th>
                                        <th >Fitness Verification </th>
                                        <!-- <th >Checklist Status </th> -->
                                    <!--  <th >Action </th> -->
                                    </tr>


                                </thead>

                                <tbody>
                                <?php $i=1; foreach($student_data as $sd) { ?>
                                    <tr>
                                        <td><?php echo $sd['roll_no'];?></td>
                                        <td><?php echo $sd['user_name'];?></td>
                                        <td><?php echo $sd['subject_name'];?></td>

                                        <td > <?php if($sd['reg_id']=='') { ?>
                                        Not Submitted -
                                        <?php } else if($sd['checklist_verification']==0) { ?>

                                        Pending

                                        <?php } else if($sd['checklist_verification']==1) { ?>
                                        Returned

                                        <?php } else if($sd['checklist_verification']==2) { ?>
                                        Re Submitted


                                        <?php } else if($sd['checklist_verification']==3) { ?>
                                        Verified
                                        <?php } ?>
                                        </td>
                                    <?php if($sd['seat_status']==1) { ?>
                                    <td width="35%">
                                        <table class="table table-sm table-bordered">
                                            <thead class="bg-info">
                                                <tr>
                                                    <th>Medicine</th>
                                                    <th>Surgery</th>
                                                    <th>Ophtha</th>
                                                    <th>Pathogy</th>
                                                    <th>Radio</th>
                                                </tr>
                                            </thead>
                                            <tr>
                                            <td>
                                             <?php if($sd['medicine_dpt_status']==1) { ?>
                                            <i class="fa-solid fa-circle-check green_icon"></i>
                                            <?php }else if($sd['medicine_dpt_status']==2)  { ?>
                                            <i class="fa-solid fa-circle-xmark red_icon"></i>
                                            <?php } else { ?>
                                            <i class='fas fa-exclamation-circle orange_icon'></i>
                                            <?php } ?>

                                            </td>
                                            <td>
                                             <?php if($sd['surgical_dpt_status']==1) { ?>
                                            <i class="fa-solid fa-circle-check green_icon"></i>
                                            <?php }else if($sd['surgical_dpt_status']==2)  { ?>
                                            <i class="fa-solid fa-circle-xmark red_icon"></i>
                                            <?php } else { ?>
                                            <i class='fas fa-exclamation-circle orange_icon'></i>
                                            <?php } ?>

                                            </td>
                                            <td>
                                             <?php if($sd['ophthalmology_dpt_status']==1) { ?>
                                            <i class="fa-solid fa-circle-check green_icon"></i>
                                            <?php }else if($sd['ophthalmology_dpt_status']==2)  { ?>
                                            <i class="fa-solid fa-circle-xmark red_icon"></i>
                                            <?php } else { ?>
                                            <i class='fas fa-exclamation-circle orange_icon'></i>
                                            <?php } ?>

                                            </td>
                                            <td>
                                             <?php if($sd['pathology_dpt_status']==1) { ?>
                                            <i class="fa-solid fa-circle-check green_icon"></i>
                                            <?php }else if($sd['pathology_dpt_status']==2)  { ?>
                                            <i class="fa-solid fa-circle-xmark red_icon"></i>
                                            <?php } else { ?>
                                            <i class='fas fa-exclamation-circle orange_icon'></i>
                                            <?php } ?>

                                            </td>
                                            <td>
                                             <?php if($sd['radiodiagnosis_dpt_status']==1) { ?>
                                            <i class="fa-solid fa-circle-check green_icon"></i>
                                            <?php }else if($sd['radiodiagnosis_dpt_status']==2)  { ?>
                                            <i class="fa-solid fa-circle-xmark red_icon"></i>
                                            <?php } else { ?>
                                            <i class='fas fa-exclamation-circle orange_icon'></i>
                                            <?php } ?>

                                            </td>

                                            </tr>
                                            <?php if($sd['medicine_dpt_status']!=0 And $sd['surgical_dpt_status']!=0 And $sd['ophthalmology_dpt_status']!=0 And $sd['pathology_dpt_status']!=0 And $sd['radiodiagnosis_dpt_status']!=0) { ?>
                                            <tr>
                                                <td colspan=5><b>Medical Fitness Report</b> <a href="<?php echo base_url();?>Fitness/Student_fitnessReceipt/<?php echo $sd['fm_id'];?>"><i class="fa fa-arrow-right"></i> Click Here</a></td>
                                            </tr>
                                            <?php } ?>



                                        </table>
                                    </td>
                                    <?php } else { ?>
                                        <td> -</td>
                                     <?php } ?>

                                    <td> <?php echo $sd['st_name']; ?> </td>
                                    <?php if($sd['seat_status']==1) { ?>
                                    <td>
                                    <a href="<?php echo base_url();?>Fitness/VerifyStudent_fitness/<?php echo $sd['fm_id'];?>" class="btn btn-primary btn-sm" title="Fitness Verification"> <i class="fa fa-edit"></i></a>
                                    </td>
                                    <?php } else {  ?>
                                        <td> -</td>
                                    <?php } ?>

                                    </tr>

                                    <?php  $i++; } ?>

                                </tbody>
                                </table>

                                <?php } ?>
                            </div>
                            </div>
                        </div>
                    </div>
                </main>
				<!-- Footer -->

				<?php include(APPPATH.'views/include/footer.php');?>
				<!-- Footer -->
            </div>
        </div>

		<!-- back to top start -->

		<!-- Footer Script -->

<?php include(APPPATH.'views/include/footer_script.php');?>
		<!-- Footer Script End -->
    </body>
</html>
