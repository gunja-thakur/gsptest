<?php foreach ($student_data as $sd) {
  extract($sd);
} ?>
<!DOCTYPE html>
<html lang="en">

<!---Head Start--->

<head>


  <?php include(APPPATH . 'views/include/head.php'); ?>
</head>
<!---Head Start--->

<body class="sb-nav-fixed">
  <!---Navigation Start--->

  <?php include(APPPATH . 'views/include/header.php'); ?>
  <!---Navigation End--->

  <div id="layoutSidenav">

    <!---Sidebar Start--->

    <?php include(APPPATH . 'views/include/sidebar.php'); ?>
    <!---Sidebar End--->

    <div id="layoutSidenav_content">
      <main>
        <div class="container-fluid px-4">

          <div class="card max_cardview mb-4">
            <div class="card-header">
              <i class="fa-solid fa-user-graduate"></i>
              Alumni Details <a href="<?php echo base_url(); ?>Student" class="btn btn-sm btn-outline-success float-end "> <i class="fa fa-arrow-left "></i> Back</a>
            </div>
            <div class="card-body">
              <div class="nav_tab">
                <nav>
                  <div class="nav nav-tabs" id="nav-tab" role="tablist">
                    <div class="row">
                      <div class="col-md-4 col-sm-4">
                        <a class="nav-link active" id="Personal_tab" data-bs-toggle="tab" data-bs-target="#Personal_view" type="button" role="tab" aria-controls="Personal_view" aria-selected="true">Personal</a>
                      </div>
                      <div class="col-md-4 col-sm-4">
                        <a class="nav-link" id="Academic_tab" data-bs-toggle="tab" data-bs-target="#Academic_view" type="button" role="tab" aria-controls="Academic_view" aria-selected="false">Qualification</a>
                      </div>
                      <div class="col-md-4 col-sm-4">
                        <a class="nav-link" id="Employment_tab" data-bs-toggle="tab" data-bs-target="#Employment_view" type="button" role="tab" aria-controls="Employment_view" aria-selected="false">Employment</a>
                      </div>
                    </div>
                </nav>
              </div>

              <div class="tab-content" id="nav-tabContent">
                <!-- -------------------Personal Tab------------------------------- -->
                <div class="tab-pane fade active show" id="Personal_view" role="tabpanel" aria-labelledby="Personal_tab">
                  <div class="tab_inner_control">
                    <form action="<?php echo base_url()?>Student/Update_PersonalDetails" class="GSP_form_view" method="post" enctype="multipart/form-data">
                      <div class="row">
                        <input type="hidden" name="student_id" id="student_id" value="<?php echo $sd['student_id']?>" >

                        <div class="col-md-3 col-sm-6 mb-3">
                          <div class="form_div">
                            <label for="enrollment_no" class="form-label">Enrollment Number</label>
                            <input type="text" class="form-control" id="enrollment_no" name="enrollment_no" value="<?php echo $sd['enrollment_no'];?>"  aria-describedby=""  readonly>
                          </div>
                        </div>

                        <div class="col-md-3 col-sm-6 mb-3">
                          <div class="form_div">
                            <label for="student_name" class="form-label">Name</label>
                            <input type="text" class="form-control NameVelidate" id="student_name" name="student_name" value="<?php echo $sd['student_name'];?>" aria-describedby="" readonly>
                          </div>
                        </div>

                        <div class="col-md-3 col-sm-6 mb-3">
                          <div class="form_div">
                            <label for="father_name" class="form-label">Father Name</label>
                            <input type="text" class="form-control NameVelidate" id="father_name" name="father_name" value="<?php echo $sd['father_name'];?>" >
                          </div>
                        </div>

                        <div class="col-md-3 col-sm-6 mb-3">
                          <div class="form_div">
                            <label for="date_of_birth" class="form-label">Date of Birth</label>
                            <input type="date" class="form-control" id="date_of_birth" name="date_of_birth" value="<?php echo $sd['date_of_birth'];?>" aria-describedby="">
                          </div>
                        </div>
                        <div class="col-md-3 col-sm-6 mb-3">
                          <div class="form_div">
                            <label for="mobile" class="form-label">Mobile Number</label>
                            <input type="number" class="form-control" id="mobile" name="mobile" value="<?php echo $sd['mobile'];?>" min="0"  onKeyPress="if(this.value.length==10) return false;" aria-describedby="">
                          </div>
                        </div>

                        <div class="col-md-3 col-sm-6 mb-3">
                          <div class="form_div">
                            <label for="email" class="form-label">Email</label>
                            <input type="email" class="form-control" id="email" name="email" value="<?php echo $sd['email'];?>" maxlength="80" aria-describedby="">
                          </div>
                        </div>

                        <!-- <div class="col-md-3 col-sm-6 mb-3">
                          <div class="form_div">
                            <label for="" class="form-label">Select Course</label>
                            <select class="form-select" aria-label="Default select example" name="course" id="course">
                              <option selected>Choose your course</option>
                              <?php foreach($course_data as $cd){ extract($cd);?>
                              <option value="<?php echo $cd['sort_name']?>" <?php if($cd['sort_name']==$sd['course']){ echo"Selected";} ?>><?php echo $cd['course_name'];?></option>
                              <?php } ?>

                            </select>
                          </div>
                        </div> -->
                        <div class="col-md-3 col-sm-6 mb-3">
                          <div class="form_div">
                            <label for="branch" class="form-label">Branch</label>
                            <input type="text" class="form-control" id="branch" name="branch" value="<?php echo $sd['branch_name'];?>" aria-describedby="" readonly>
                          </div>
                        </div>
                        <div class="col-md-3 col-sm-6 mb-3">
                          <div class="form_div">
                            <label for="passing_year" class="form-label">Batch/Passing Year</label>
                            <input type="text" class="form-control" id="passing_year" name="passing_year" value="<?php echo $sd['passing_year'];?>" aria-describedby="" readonly>
                          </div>
                        </div>

                        <div class="col-md-3 col-sm-6 mb-3">
                          <div class="form_div">
                            <label for="" class="form-label d-block">Select Gender</label>
                            <div class="form-check form-check-inline">
                              <input class="form-check-input" type="radio" name="gender" id="male" value="male" <?php if($sd['gender']=='male'){echo"checked";}?>>
                              <label class="form-check-label" for="male">Male</label>
                            </div>
                            <div class="form-check form-check-inline">
                              <input class="form-check-input" type="radio" name="gender" id="female" value="female" <?php if($sd['gender']=='female'){echo"checked";}?>>
                              <label class="form-check-label" for="female">Female</label>
                            </div>
                          </div>
                        </div>
                        <div class="col-md-3 col-sm-6 mb-3">
                          <div class="form_div">
                            <label for="" class="form-label">Upload Latest Profile Photo</label>
                            <input type="file" class="form-control" id="student_image" name="student_image" accept=".jpg,.png">
                            <input type="hidden" class="form-control" id="simage" name="simage" value="<?php echo $student_image; ?>" accept=".jpg,.png">
                            <span id="student_image_error" class="text-danger ErrorMsg"></span>
                          </div>
                        </div>
                        <div class="col-md-6 col-sm-6 mb-3"></div>

                        <div class="col-md-12 col-sm-12 mb-3">
                          <div class="form_div">
                            <label for="" class="form-label"> Address</label>
                            <textarea type="text" class="form-control" id="permanent_address" name="permanent_address" aria-describedby="" rows="3" maxlength="250"><?php echo $sd['permanent_address'];?> </textarea>
                          </div>
                        </div>

                        <div class="col-md-12 col-sm-12 mb-3">
                        <label for="" class="form-label">Declaration </label>
                        <div class="alert alert-info form_div">
                          <label for="show_on_front_YN" class="form-label d-block">Are you sure to display your profile on the Alumni Portal?<span class="text-danger">*</span> </label>
                          <div class="form-check form-check-inline">
                            <input class="form-check-input rcompany" type="radio" name="show_on_front_YN" id="show_on_front_Y" value="1" <?php if($sd['show_on_front']=='1'){echo"checked";}?>>
                            <label class="form-check-label" for="show_on_front_Y">Yes</label>
                          </div>
                          <div class="form-check form-check-inline">
                            <input class="form-check-input rcompany" type="radio" name="show_on_front_YN" id="show_on_front_N" value="2" <?php if($sd['show_on_front']=='2'){echo"checked";}?>>
                            <label class="form-check-label" for="show_on_front_N">No</label>
                          </div>
                          <br><span id="show_on_front_YN_error" class="text-danger ErrorMsg"></span>

                        </div>
                      </div>

                        <div class="col-md-12 mb-3 text-end">
                          <button type="submit" name="personal" id="personal" class="btn btn-success btn-sm"> <i class="fa fa-arrow-right"></i> Save & Continue</button>
                        </div>



                      </div>


                    </form>
                  </div>
                </div>

                <!-- ----------------------Academic Tabs----------------------------------- -->

                <div class="tab-pane fade" id="Academic_view" role="tabpanel" aria-labelledby="Academic_tab">
                  <div class="tab_inner_control">
                    <!-- <form action="<?php echo base_url()?>Student/Update_AcademicDetails" class="GSP_form_view" method="post" enctype="multipart/form-data">
                      <div class="row">
                      <input type="hidden" name="student_id" id="student_id" value="<?php echo $sd['student_id']?>" >
                      <input type="hidden" name="am_id" id="am_id" value="<?php echo $sd['am_id']?>" >
                        <div class="col-md-6 col-sm-6 mb-3">
                          <div class="form_div">
                            <label for="college_name" class="form-label">College Name</label>
                            <input type="text" class="form-control" id="college_name" name="college_name"  aria-describedby="" value="<?php echo $sd['college_name'];?>">
                          </div>
                        </div>
                        <div class="col-md-3 col-sm-6 mb-3">
                          <div class="form_div">
                            <label for="highest_qualification" class="form-label">Highest Qualification</label>
                            <select class="form-select" name="highest_qualification" id="highest_qualification" aria-label="Default select example">
                              <option value="0">Choose your Qualification</option>
                              <option value="Diploma" <?php if($highest_qualification=="Diploma") { echo"selected";}?>>Diploma</option>
                              <option value="UG" <?php if($highest_qualification=="UG") { echo"selected";}?>>UG</option>
                              <option value="PG" <?php if($highest_qualification=="PG") { echo"selected";}?>>PG</option>
                            </select>
                          </div>
                        </div>
                        <div class="col-md-3 col-sm-6 mb-3">
                          <div class="form_div">
                            <label for="10th_marks" class="form-label">High School Marks</label>
                            <input type="number" class="form-control" id="10th_marks" name="10th_marks" aria-describedby="" value="<?php echo $sd['10th_marks'];?>">
                          </div>
                        </div>
                        <div class="col-md-3 col-sm-6 mb-3">
                          <div class="form_div">
                            <label for="12th_marks" class="form-label">Higher Secondary Marks</label>
                            <input type="number" class="form-control" id="12th_marks" name="12th_marks" aria-describedby="" value="<?php echo $sd['12th_marks'];?>">
                          </div>
                        </div>
                        <div class="col-md-3 col-sm-6 mb-3">
                          <div class="form_div">
                            <label for="percentage" class="form-label">Percentage</label>
                            <input type="text" class="form-control" id="percentage" name="percentage" aria-describedby="" value="<?php echo round($sd['percentage'],2);?>">
                          </div>
                        </div>

                        <div class="col-md-12 mb-3 text-end">
                          <button type="submit" name="academic" id="academic" class="btn btn-success btn-sm"> <i class="fa fa-arrow-right"></i> Save & Continue</button>
                        </div>
                      </div>

                    </form> -->

                    <!-- New Block -->
<div class="row">
  <?php if(!empty($academic_data)) { ?>
                  <div class="col-md-12 mb-3">
                  <h3 class="h3style_heading"> Qualification</h3>
                  <div class="table-responsive">
									<table class="table-sm table mt-2 table-bordered" >
										<thead>
											<tr>
												<th>S.no.</th>
												<th>Institute Name</th>
												<th>Qualification</th>
												<th>Total Marks</th>
												<th>Obtained Marks</th>
												<th>Percentage</th>
											</tr>
										</thead>
										<tbody>
                    <?php $i=1; foreach($academic_data as $ad) { extract($ad);?>
                      <tr>
                        <td><?php echo $i ;?></td>
                        <td><?php echo $college_name ;?></td>
                        <td><?php echo $highest_qualification ;?></td>
                        <td><?php echo $total_marks ;?></td>
                        <td><?php echo $obt_marks ;?></td>
                        <td><?php echo round($percentage,2) ;?></td>
                      </tr>
                      <?php $i++; } ?>
										</tbody>

									</table>
								</div>
                  </div>
                  <?php } ?>


                  </div>
                  <form action="" method="post" enctype="multipart/form-data" class="form-horizontal">
                  <input type="hidden" name="student_id" id="student_id" value="<?php echo $sd['student_id']?>" >
                  <div class="row align-items-end">
                  <div class="col-lg-12 mb-2">
                  <h3 class="h3style_heading"> Add Qualification </h3>
                    </div>
                  <div class="col-12 col-sm-6 col-md-3 mb-3">
									<label for="text-input" class=" form-control-label">Institute/College Name</label>
									<input type="text" class="form-control" name="college_name" id="college_name"  required >
									</div>

									<div class="col-12 col-sm-6 col-md-3 mb-3">

									<label for="highest_qualification" class="form-label">Qualification</label>
                            <select class="form-select" name="highest_qualification" id="highest_qualification" aria-label="Default select example">
                              <option value="0">Choose your Qualification</option>
                              <option value="Diploma">Diploma</option>
                              <option value="UG" >UG</option>
                              <option value="PG" >PG</option>
                            </select>
									</div>



                  <div class="col-12 col-sm-6 col-md-2 mb-3">
									<label for="total_marks" class=" form-control-label">Total Marks</label>
									<input type="number" class="form-control" name="total_marks" id="total_marks"  min="0"  onKeyPress="if(this.value.length==5) return false;" >
									</div>

                  <div class="col-12 col-sm-6 col-md-2 mb-3">
									<label for="obt_marks" class=" form-control-label">Obtained Marks</label>
									<input type="number" class="form-control" name="obt_marks" id="obt_marks" min="0"  onKeyPress="if(this.value.length==5) return false;"  >
									</div>


									<div class="col-md-2 col-sm-6 mb-3">
									 <button type="button" class="btn-addrow btn btn-sm btn-warning">  <i class="fa fa-plus"></i>  Add Qualification</button>
									</div>
									</div>
								</form>

                <div class="table-responsive">
									<table class="myTable table mt-2 table-bordered" id="AddQualification">
										<thead>
											<tr>
												<th>Institute Name</th>
												<th>Qualification</th>
												<th>Total Marks</th>
												<th>Obtained Marks</th>
												<th>Percentage</th>
												<th>Delete Row</th>

											</tr>
										</thead>
										<tbody>

										</tbody>
									</table>
								</div>
                <button type="submit" class="btn btn-success btn-sm mt-3 pull-right" name="save" id="save"> <i class="fa fa-arrow-right"></i> Submit</button>
                  </div>
                </div>

                <!-- ----------------- ---- Employment Tab----------- ------------------ -->

                <div class="tab-pane fade" id="Employment_view" role="tabpanel" aria-labelledby="Employment_tab">
                  <div class="tab_inner_control">
                    <!-- <form action="<?php echo base_url()?>Student/Update_EmploymentDetails" class="GSP_form_view" method="post" enctype="multipart/form-data">
                      <div class="row">
                      <input type="hidden" name="student_id" id="student_id" value="<?php echo $sd['student_id']?>" >
                      <input type="hidden" name="em_id" id="em_id" value="<?php echo $sd['em_id']?>" >
                        <div class="col-md-3 col-sm-6 mb-3">
                          <div class="form_div">
                            <label for="designation" class="form-label">Designation</label>
                            <input type="Text" class="form-control" id="designation" name="designation" aria-describedby="" value="<?php echo $sd['designation'];?>">
                          </div>
                        </div>
                        <div class="col-md-5 col-sm-6 mb-3">
                          <div class="form_div">
                            <label for="technology" class="form-label">Technology</label>
                            <input type="Text" class="form-control" id="technology" name="technology" aria-describedby="" value="<?php echo $sd['technology'];?>">
                          </div>
                        </div>
                        <div class="col-md-4 col-sm-6 mb-3">
                          <div class="form_div">
                            <label for="current_employer" class="form-label">Current Employer</label>
                            <input type="text" class="form-control" id="current_employer" name="current_employer" aria-describedby="" value="<?php echo $sd['current_employer'];?>">
                          </div>
                        </div>
                        <div class="col-md-3 col-sm-6 mb-3">
                          <div class="form_div">
                            <label for="country" class="form-label">Country</label>
                            <input type="text" class="form-control" id="country" name="country" aria-describedby="" value="<?php echo $sd['country'];?>">
                          </div>
                        </div>

                        <div class="col-md-3 col-sm-6 mb-3">
                          <div class="form_div">
                            <label for="" class="form-label">Select State</label>
                            <select class="form-select" name="state" id="state" aria-label="Default select example">
                              <option selected>Choose your State</option>
                              <?php foreach($state_data as $cd){ extract($cd);?>
                              <option value="<?php echo $cd['state_name']?>" <?php if($cd['state_name']==$sd['state']){ echo"Selected";} ?>><?php echo $cd['state_name'];?></option>
                              <?php } ?>

                            </select>
                          </div>
                        </div>
                        <div class="col-md-3 col-sm-6 mb-3">
                          <div class="form_div">
                            <label for="" class="form-label">Select City</label>
                            <select class="form-select" name="city" id="city" aria-label="Default select example">
                              <option selected>Choose your City</option>
                              <?php foreach($city_data as $bd){ extract($bd);?>
                              <option value="<?php echo $bd['city_name']?>" <?php if($bd['city_name']==$sd['city']){ echo"Selected";} ?>><?php echo $bd['city_name'];?></option>
                              <?php } ?>
                            </select>
                          </div>
                        </div>

                        <div class="col-md-3 col-sm-6 mb-3">
                          <div class="form_div">
                            <label for="" class="form-label">Working Since</label>
                            <select class="form-select" name="city" id="city" aria-label="Default select example">
                              <option selected>Choose your City</option>
                              <?php foreach($city_data as $bd){ extract($bd);?>
                              <option value="<?php echo $bd['city_name']?>" <?php if($bd['city_name']==$sd['city']){ echo"Selected";} ?>><?php echo $bd['city_name'];?></option>
                              <?php } ?>
                            </select>
                          </div>
                        </div>

                        <div class="col-md-6 col-sm-6 mb-3">
                          <div class="form_div">
                            <label for="achievment" class="form-label">Achievment</label>
                            <textarea type="text" class="form-control" id="achievment" name="achievment" aria-describedby=""  rows="3"><?php echo $sd['achievment'];?></textarea>
                          </div>
                        </div>
                        <div class="col-md-6 col-sm-12 mb-3">
                          <div class="form_div">
                            <label for="employer_address" class="form-label">Employer Address</label>
                            <textarea type="text" class="form-control" id="employer_address" name="employer_address" aria-describedby="" rows="3"><?php echo $sd['employer_address'];?><?php echo $sd['employer_address'];?> </textarea>
                          </div>
                        </div>

                        <div class="col-md-12 mb-3 text-end">
                          <button type="submit" name="employment" id="employment" class="btn btn-success btn-sm"> <i class="fa fa-arrow-right"></i> Save </button>
                        </div>







                      </div>


                    </form> -->

                    <!-- New Employement -->
                    <div class="row">
                    <div class="col-md-12 mb-3">
                    <h3 class="h3style_heading"> Employer Details</h3>
                    <div class="table-responsive">
									<table class="table table-sm mt-2 table-bordered" >
										<thead>
											<tr>
												<th>S.No.</th>
												<th>Employer</th>
												<th>Designation</th>
												<th>Country</th>
												<th>State</th>
												<th>City</th>
												<th>Wroking From</th>
												<th>Wroking Till</th>
												<th>Company Address</th>


											</tr>
										</thead>
										<tbody>
                      <?php $i=1; foreach($employment_data as $ed) { extract($ed);?>
                    <tr>
                      <td><?php echo $i ;?></td>
                      <td><?php if($emp_type==1){ echo "Current";}else if($emp_type==2){ echo"Previous";}?></td>
                      <td><?php echo $designation ;?></td>
                      <td><?php echo $country ;?></td>
                      <td><?php echo $state ;?></td>
                      <td><?php echo $city ;?></td>
                      <td><?php echo $working_from ;?></td>
                      <td><?php echo $working_to ;?></td>
                      <td><?php echo $employer_address ;?></td>

                    </tr>
                    <?php $i++; } ?>
										</tbody>
									</table>
								</div>
                    </div>
                    </div>

                    <form action="" method="post" enctype="multipart/form-data" class="form-horizontal">
                  <input type="hidden" name="student_id" id="student_id" value="<?php echo $sd['student_id']?>" >
                    <div class="row">
                    <div class="col-md-12 mb-3">

                  <h3 class="h3style_heading"> Add Employer Details</h3>

                      </div>

                      <div class="col-sm-6 col-md-3 mb-3">
									<label for="emp_type" class="form-label">Employee Type</label>
                            <select class="form-select" name="emp_type" id="emp_type" aria-label="Default select example">
                              <option value="0">Select Employee Type</option>
                              <option value="1">Current Employee </option>
                              <option value="2">Previous Employee</option>

                            </select>
									</div>
                  <div class="col-sm-6 col-md-3 mb-3">
									<label for="text-input" class=" form-control-label">Designation</label>
									<input type="text" class="form-control" name="designation" id="designation"   >
									</div>

                  <div class="col-md-3 col-sm-6 mb-3">
                          <div class="form_div">
                            <label for="country" class="form-label">Country</label>
                            <input type="text" class="form-control" id="country" name="country" aria-describedby="" >
                          </div>
                        </div>

                        <div class="col-md-3 col-sm-6 mb-3">
                          <div class="form_div">
                            <label for="" class="form-label">Select State</label>
                            <select class="form-select" name="state" id="state" aria-label="Default select example">
                              <option selected>Choose your State</option>
                              <?php foreach($state_data as $cd){ extract($cd);?>
                              <option value="<?php echo $cd['state_name']?>" ><?php echo $cd['state_name'];?></option>
                              <?php } ?>

                            </select>
                          </div>
                        </div>
                        <div class="col-md-3 col-sm-6 mb-3">
                          <div class="form_div">
                            <label for="" class="form-label">Select City</label>
                            <select class="form-select" name="city" id="city" aria-label="Default select example">
                              <option selected>Choose your City</option>
                              <?php foreach($city_data as $bd){ extract($bd);?>
                              <option value="<?php echo $bd['city_name']?>" ><?php echo $bd['city_name'];?></option>
                              <?php } ?>
                            </select>
                          </div>
                        </div>

									<div class="col-sm-6 col-md-3 mb-3">
									<label for="working_from" class="form-label">Working From</label>
                            <select class="form-select" name="working_from" id="working_from" aria-label="Default select example">
                              <option value="0">Select Year</option>
                              <?php foreach($year_data as $yd){ extract($yd);?>
                              <option value="<?php echo $yd['year_title']?>" ><?php echo $yd['year_title'];?></option>
                              <?php } ?>


                            </select>
                 	</div>

									<div class="col-12 col-sm-6 col-md-3 mb-3">
									<label for="working_to" class="form-label">Working Till</label>
                            <select class="form-select" name="working_to" id="working_to" aria-label="Default select example">
                              <option value="0">Select Year</option>
                              <?php foreach($year_data as $yd){ extract($yd);?>
                              <option value="<?php echo $yd['year_title']?>" ><?php echo $yd['year_title'];?></option>
                              <?php } ?>
                            </select>
                 	</div>

                   <div class="col-12 col-sm-6 col-md-3 mb-3">
                          <div class="form_div">
                            <label for="employer_address" class="form-label">Company Address</label>
                            <textarea type="text" class="form-control" id="employer_address" name="employer_address" rows="1" ></textarea>
                          </div>
                        </div>


									<div class="col-md-2 col-sm-6 mb-3">

									<button type="button" class="btn-addemprow btn btn-sm btn-warning"><i class="fa fa-plus"></i> Add Employer</button>
									</div>
									</div>
								</form>

                <div class="table-responsive">
									<table class="EmpTable table mt-2 table-bordered" id="AddEmployer">
										<thead>
											<tr>
												<th>Employer</th>
												<th>Designation</th>
												<th>Country</th>
												<th>State</th>
												<th>City</th>
												<th>Wroking From</th>
												<th>Wroking Till</th>
												<th>Company Address</th>
												<th>Delete Row</th>

											</tr>
										</thead>
										<tbody>

										</tbody>
									</table>
								</div>
                <button type="submit" class="btn btn-success btn-sm mt-3 pull-right" name="Empsave" id="Empsave"><i class="fa fa-arrow-right"></i> Submit</button>
                    <!-- New Employement -->


                  </div>
                </div>



              </div>
            </div>
          </div>













          <!------------------Candidate Registration List ---------------------------------->






          <!---------------Modal------------------>


          <!-- Button trigger modal -->
          <button type="hidden" class="btn btn-primary" id="click_model" data-bs-toggle="modal" data-bs-target="#exampleModal" style="display:none;">
            View
          </button>

          <!-- Modal -->
          <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg" role="document" style="max-width: 600px;">
              <div class="modal-content">
                <div class="modal-header">
                  <h1 class="modal-title fs-5" id="exampleModalLabel">Update Candidate</h1>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body datashow">

                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                  <!--  <button type="button" class="btn btn-primary">Save changes</button> -->
                </div>
              </div>
            </div>
          </div>

          <!-- Modal -->



        </div>
      </main>




      <!-- Footer -->

      <?php include(APPPATH . 'views/include/footer.php'); ?>
      <!-- Footer -->
    </div>
  </div>



  <!-- Footer Script -->

  <?php include(APPPATH . 'views/include/footer_script.php'); ?>

  <!-- Footer Script End -->

  <!-- JS Validation -->
  <?php include(APPPATH . 'views/student/student_details_js.php'); ?>

</body>

</html>