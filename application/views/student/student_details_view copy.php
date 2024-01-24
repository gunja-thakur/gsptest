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
        <h3><i class="fa-solid fa-user-graduate"></i>
               Student Details</h3>

          <div class="card max_cardview mb-4">

            <div class="card-header">


              <img src="<?php echo base_url();?>assets/alumni/batch<?php echo $sd['batch'];?>/<?php echo $sd['student_image'];?>" alt="" class="img-fluid alumni_image" />
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
                        <a class="nav-link" id="Academic_tab" data-bs-toggle="tab" data-bs-target="#Academic_view" type="button" role="tab" aria-controls="Academic_view" aria-selected="false">Academic</a>
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
                            <label for="student_name" class="form-label">Student Name</label>
                            <input type="text" class="form-control" id="student_name" name="student_name" value="<?php echo $sd['student_name'];?>"  readonly>
                          </div>
                        </div>
                        <div class="col-md-3 col-sm-6 mb-3">
                          <div class="form_div">
                            <label for="" class="form-label">Enrollment Number</label>
                            <input type="text" class="form-control" id="enrollment_no" name="enrollment_no" value="<?php echo $sd['enrollment_no'];?>"   readonly>
                          </div>
                        </div>
                        <div class="col-md-3 col-sm-6 mb-3">
                          <div class="form_div">
                            <label for="" class="form-label">Date of Birth</label>
                            <input type="date" class="form-control" id="date_of_birth" name="date_of_birth" value="<?php echo $sd['date_of_birth'];?>" readonly>
                          </div>
                        </div>
                        <div class="col-md-3 col-sm-6 mb-3">
                          <div class="form_div">
                            <label for="mobile" class="form-label">Mobile Number</label>
                            <input type="number" class="form-control" id="mobile" name="mobile" value="<?php echo $sd['mobile'];?>" readonly>
                          </div>
                        </div>

                        <div class="col-md-3 col-sm-6 mb-3">
                          <div class="form_div">
                            <label for="email" class="form-label">Email</label>
                            <input type="email" class="form-control" id="email" name="email" value="<?php echo $sd['email'];?>" readonly>
                          </div>
                        </div>
                        <div class="col-md-3 col-sm-6 mb-3">
                          <div class="form_div">
                            <label for="father_name" class="form-label">Father Name</label>
                            <input type="text" class="form-control" id="father_name" name="father_name" value="<?php echo $sd['father_name'];?>" readonly>
                          </div>
                        </div>
                        <div class="col-md-3 col-sm-6 mb-3">
                          <div class="form_div">
                            <label for="" class="form-label">Select Course</label>

                          </div>
                        </div>
                        <div class="col-md-3 col-sm-6 mb-3">
                          <div class="form_div">
                            <label for="" class="form-label">Select Branch</label>
                            <select class="form-select" aria-label="Default select example" name="branch" id="branch">
                              <option selected>Choose your Branch</option>
                              <?php foreach($branch_data as $bd){ extract($bd);?>
                              <option value="<?php echo $bd['sort_name']?>" <?php if($bd['sort_name']==$sd['branch']){ echo"Selected";} ?>><?php echo $bd['branch_name'];?></option>
                              <?php } ?>

                            </select>
                          </div>
                        </div>
                        <div class="col-md-3 col-sm-6 mb-3">
                          <div class="form_div">
                            <label for="passing_year" class="form-label">Passing Year</label>
                            <input type="text" class="form-control" id="passing_year" name="passing_year" value="<?php echo $sd['passing_year'];?>"  readonly>
                          </div>
                        </div>

                        <div class="col-md-3 col-sm-6 mb-3">
                          <div class="form_div">
                            <label for="" class="form-label d-block">Select Gender</label>
                            <div class="form-check form-check-inline">
                              <input class="form-check-input" type="radio" name="gender" id="male" value="male" <?php if($sd['gender']=='male'){echo"checked";}?> disabled>
                              <label class="form-check-label" for="male">Male</label>
                            </div>
                            <div class="form-check form-check-inline">
                              <input class="form-check-input" type="radio" name="gender" id="female" value="female" <?php if($sd['gender']=='female'){echo"checked";}?> disabled>
                              <label class="form-check-label" for="female">Female</label>
                            </div>
                          </div>
                        </div>

                        <div class="col-md-12 col-sm-12 mb-3">
                          <div class="form_div">
                            <label for="" class="form-label">Parmanent Address</label>
                            <textarea type="text" class="form-control" id="permanent_address" name="permanent_address"  rows="3" readonly><?php echo $sd['permanent_address'];?> </textarea>
                          </div>
                        </div>

                        <!-- <div class="col-md-12 mb-3 text-end">
                          <button type="submit" name="personal" id="personal" class="btn btn-success btn-sm"> <i class="fa fa-arrow-right"></i> Save & Continue</button>
                        </div> -->



                      </div>


                    </form>
                  </div>
                </div>

                <!-- ----------------------Academic Tabs----------------------------------- -->

                <div class="tab-pane fade" id="Academic_view" role="tabpanel" aria-labelledby="Academic_tab">
                  <div class="tab_inner_control">
                    <form action="<?php echo base_url()?>Student/Update_AcademicDetails" class="GSP_form_view" method="post" enctype="multipart/form-data">
                      <div class="row">
                      <input type="hidden" name="student_id" id="student_id" value="<?php echo $sd['student_id']?>" >
                      <input type="hidden" name="am_id" id="am_id" value="<?php echo $sd['am_id']?>" >
                        <div class="col-md-6 col-sm-6 mb-3">
                          <div class="form_div">
                            <label for="college_name" class="form-label">College Name</label>
                            <input type="text" class="form-control" id="college_name" name="college_name"   value="<?php echo $sd['college_name'];?>" readonly>
                          </div>
                        </div>
                        <div class="col-md-3 col-sm-6 mb-3">
                          <div class="form_div">
                            <label for="highest_qualification" class="form-label">Highest Qualification</label>
                            <select class="form-select" name="highest_qualification" id="highest_qualification" aria-label="Default select example" disabled>
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
                            <input type="number" class="form-control" id="10th_marks" name="10th_marks"  value="<?php echo $sd['10th_marks'];?>" readonly>
                          </div>
                        </div>
                        <div class="col-md-3 col-sm-6 mb-3">
                          <div class="form_div">
                            <label for="12th_marks" class="form-label">Higher Secondary Marks</label>
                            <input type="number" class="form-control" id="12th_marks" name="12th_marks"  value="<?php echo $sd['12th_marks'];?>" readonly>
                          </div>
                        </div>
                        <div class="col-md-3 col-sm-6 mb-3">
                          <div class="form_div">
                            <label for="percentage" class="form-label">Percentage</label>
                            <input type="text" class="form-control" id="percentage" name="percentage"  value="<?php echo round($sd['percentage'],2);?>" readonly>
                          </div>
                        </div>

                        <!-- <div class="col-md-12 mb-3 text-end">
                          <button type="submit" name="academic" id="academic" class="btn btn-success btn-sm"> <i class="fa fa-arrow-right"></i> Save & Continue</button>
                        </div> -->
                      </div>

                    </form>
                  </div>
                </div>

                <!-- ----------------- ---- Employment Tab----------- ------------------ -->

                <div class="tab-pane fade" id="Employment_view" role="tabpanel" aria-labelledby="Employment_tab">
                  <div class="tab_inner_control">
                    <form action="<?php echo base_url()?>Student/Update_EmploymentDetails" class="GSP_form_view" method="post" enctype="multipart/form-data">
                      <div class="row">
                      <input type="hidden" name="student_id" id="student_id" value="<?php echo $sd['student_id']?>" >
                      <input type="hidden" name="em_id" id="em_id" value="<?php echo $sd['em_id']?>" >
                        <div class="col-md-3 col-sm-6 mb-3">
                          <div class="form_div">
                            <label for="designation" class="form-label">Designation</label>
                            <input type="Text" class="form-control" id="designation" name="designation"  value="<?php echo $sd['designation'];?>" readonly>
                          </div>
                        </div>
                        <div class="col-md-5 col-sm-6 mb-3">
                          <div class="form_div">
                            <label for="technology" class="form-label">Technology</label>
                            <input type="Text" class="form-control" id="technology" name="technology"  value="<?php echo $sd['technology'];?>" readonly>
                          </div>
                        </div>
                        <div class="col-md-4 col-sm-6 mb-3">
                          <div class="form_div">
                            <label for="current_employer" class="form-label">Current Employer</label>
                            <input type="text" class="form-control" id="current_employer" name="current_employer"  value="<?php echo $sd['current_employer'];?>" readonly>
                          </div>
                        </div>
                        <div class="col-md-3 col-sm-6 mb-3">
                          <div class="form_div">
                            <label for="country" class="form-label">Country</label>
                            <input type="text" class="form-control" id="country" name="country"  value="<?php echo $sd['country'];?>" readonly>
                          </div>
                        </div>

                        <div class="col-md-3 col-sm-6 mb-3">
                          <div class="form_div">
                            <label for="" class="form-label">Select State</label>
                            <select class="form-select" name="state" id="state" aria-label="Default select example" disabled>
                              <option selected></option>
                              <?php foreach($state_data as $cd){ extract($cd);?>
                              <option value="<?php echo $cd['state_name']?>" <?php if($cd['state_name']==$sd['state']){ echo"Selected";} ?>><?php echo $cd['state_name'];?></option>
                              <?php } ?>

                            </select>
                          </div>
                        </div>
                        <div class="col-md-3 col-sm-6 mb-3">
                          <div class="form_div">
                            <label for="" class="form-label">Select City</label>
                            <select class="form-select" name="city" id="city" aria-label="Default select example" disabled>
                              <option selected></option>
                              <?php foreach($city_data as $bd){ extract($bd);?>
                              <option value="<?php echo $bd['city_name']?>" <?php if($bd['city_name']==$sd['city']){ echo"Selected";} ?>><?php echo $bd['city_name'];?></option>
                              <?php } ?>
                            </select>
                          </div>
                        </div>

                        <div class="col-md-6 col-sm-6 mb-3">
                          <div class="form_div">
                            <label for="achievment" class="form-label">Achievment</label>
                            <textarea type="text" class="form-control" id="achievment" name="achievment"   rows="3" readonly><?php echo $sd['achievment'];?></textarea>
                          </div>
                        </div>
                        <div class="col-md-6 col-sm-12 mb-3">
                          <div class="form_div">
                            <label for="employer_address" class="form-label">Employer Address</label>
                            <textarea type="text" class="form-control" id="employer_address" name="employer_address"  rows="3" readonly><?php echo $sd['employer_address'];?> </textarea>
                          </div>
                        </div>

                        <!-- <div class="col-md-12 mb-3 text-end">
                          <button type="submit" name="employment" id="employment" class="btn btn-success btn-sm"> <i class="fa fa-arrow-right"></i> Save </button>
                        </div> -->







                      </div>


                    </form>
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

  <!-- back to top start -->

  <!-- Footer Script -->

  <?php include(APPPATH . 'views/include/footer_script.php'); ?>
  <script>
    $(document).on('click', '.confirm_seat', function() {
      var reg_id = $(this).attr('data-id');

      //alert(reg_id);return false;

      $.ajax({

        url: "<?php echo base_url(); ?>Home/ConfirmCadidate",
        method: "POST",
        data: {
          "reg_id": reg_id
        },


        success: function(data) {

          //  alert(data);return false;

          $(".datashow").html(data);
          $("#click_model").click();
          return false;

        }
      });

    });
  </script>


  <script>
    $(document).on('click', '#search', function() {

      //var date=$("#date_slot").val();
      var candidate_type = $("#candidate_type").val();
      var rank_type = $("#rank_type").val();
      var phase = $("#phase").val();
      var seat = $("#seat").val();
      var date_slot = $("#date_slot").val();

      if (candidate_type == "") {
        $(candidate_type).focus();
        $("#candidate_type").css('border', '2px solid #ec000069');
        $("#error").text('Please Select Counselling Type');
        return false;
      }
      $("#candidate_type").css('border', '1px solid #cacfe7');

      if (rank_type == "") {
        $(rank_type).focus();
        $("#rank_type").css('border', '2px solid #ec000069');
        $("#error").text('Please Select Quota');
        return false;
      }
      $("#rank_type").css('border', '1px solid #cacfe7');

      if (phase == "") {
        $(phase).focus();
        $("#phase").css('border', '2px solid #ec000069');
        $("#error").text('Please Select Counselling Phase');
        return false;
      }
      $("#phase").css('border', '1px solid #cacfe7');

      /* if(seat=="")
      {
      $(seat).focus();
      $("#seat").css('border','2px solid #ec000069');
      $("#error").text('Please Provide Seat');
      return false;
      }
      $("#seat").css('border','1px solid #cacfe7'); */

      // return flase;

      //if(date=="")


      $.ajax({
        url: "<?php echo base_url(); ?>admin/Dashboard/AjaxCountData",
        type: "POST",
        //data: {"date":date},
        data: {
          "candidate_type": candidate_type,
          "rank_type": rank_type,
          "phase": phase
        },
        success: function(res) {
          $(".pmajaxshow").html('');
          $(".pmajaxshow").html(res);
          $(".allcount").hide();
          //return false;
        }
      });

      return false;
    });
  </script>

  <script>
    $(document).on('click', '.recordsearch', function() {

      var candidate_type = $("#candidate_type1").val();
      var rank_type = $("#rank_type1").val();
      var phase = $("#phase1").val();
      /* var seat=$("#seat").val();
      var date_slot=$("#date_slot").val(); */

      if (candidate_type == "") {
        $(candidate_type).focus();
        $("#candidate_type1").css('border', '2px solid #ec000069');
        $("#error1").text('Please Select Counselling Type');
        return false;
      }
      $("#candidate_type1").css('border', '1px solid #cacfe7');

      if (rank_type == "") {
        $(rank_type).focus();
        $("#rank_type1").css('border', '2px solid #ec000069');
        $("#error1").text('Please Select Quota');
        return false;
      }
      $("#rank_type1").css('border', '1px solid #cacfe7');

      if (phase == "") {
        $(phase).focus();
        $("#phase1").css('border', '2px solid #ec000069');
        $("#error1").text('Please Select Counselling Phase');
        return false;
      }
      $("#phase1").css('border', '1px solid #cacfe7');

      //alert(candidate_type);return false;

      /* if(seat=="")
      {
      $(seat).focus();
      $("#seat").css('border','2px solid #ec000069');
      $("#error").text('Please Provide Seat');
      return false;
      }
      $("#seat").css('border','1px solid #cacfe7'); */

      // return flase;

      $.ajax({
        url: "<?php echo base_url(); ?>admin/Dashboard/View_CandidateData",
        type: "POST",
        data: {
          "candidate_type": candidate_type,
          "rank_type": rank_type,
          "phase": phase
        },
        success: function(res) {
          //alert(res);return false;
          $(".stdajaxshow").html('');
          $(".stdajaxshow").html(res);
          $("#datatablesSimple").html('');

          //return false;
        }
      });

      return false;
    });
  </script>









  <!-- Footer Script End -->
</body>

</html>