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
          <form method="post">
            <div class="row mb-5">
              <div class="col-lg-12 mb-3">
                <div class="profile_boxed">
                  <div class="profile_cover">
                    <div class="profile_img">
                      <img src="<?php echo base_url(); ?>assets/alumni/batch<?php echo $sd['batch']; ?>/<?php echo $sd['student_image']; ?>" alt="Profile Photo" class="img-fluid" />
                      <!-- <div class="file btn btn-lg btn-primary">
                                Change Photo
                                <input type="file" name="file"/>
                            </div> -->
                    </div>
                    <div class="profile_intro">
                      <h3 class="" id=""><?php echo $sd['student_name']; ?></h3>
                      <h5>
                      Batch - <?php echo $sd['batch']; ?> (<?php echo $sd['passing_year']; ?>)
                      </h5>

                    </div>
                    <div class="back_btn">
                      <a href="<?php echo base_url(); ?>Alumni/ViewList" class="btn btn-outline-success "> <i class="fa fa-arrow-left "></i> Back</a>
                    </div>
                  </div>
                  <div class="profile_tabledetails mb-3">
                    <div class="table-responsive">
                      <table class="table table-bordered">
                        <tr>
                          <th><label>Enrollment Number</label></th>
                          <td><?php echo $sd['enrollment_no']; ?></td>

                          <th><label>Passing Year</label></th>
                          <td><?php echo $sd['passing_year']; ?></td>
                        </tr>

                        <tr>
                          <th><label>Date of Birth</label></th>
                          <td><?php if ($sd['date_of_birth'] != "") echo date("d-m-Y", strtotime($sd['date_of_birth'])) ?></td>

                          <th><label>Gender</label></th>
                          <td><?php if ($sd['gender'] == "male") { ?>
                              <?php echo "Male"; ?>
                            <?php } else if ($sd['gender'] == "female") { ?>
                              <?php echo "Female"; ?>
                            <?php } ?></td>
                        </tr>

                        <tr>
                          <th><label>Mobile Number</label></th>
                          <td><?php echo $sd['mobile']; ?></td>

                          <th><label>Email</label></th>
                          <td><?php echo $sd['email']; ?></td>

                        </tr>

                        <tr>
                          <th><label>Father Name</label></th>
                          <td><?php echo $sd['father_name']; ?></td>

                          <th><label>Branch</label></th>
                          <td><?php echo $sd['branch']; ?></td>
                        </tr>

                        <tr>
                          <th><label>Permanent Address</label></th>
                          <td colspan="3"><?php echo $sd['permanent_address']; ?></td>
                        </tr>
                      </table>
                    </div>
                  </div>

                  <div class="col-md-12">
                    <h3 class="h3style_heading"> User Credential</h3>
                    </div>
                    <table class="table table-bordered table-sm">
                    <tr>
                        <th> <label class="form-label">Username</label></th>
                        <td><?php echo $username; ?></td>

                        <th> <label class="form-label">Password</label></th>
                        <td><?php echo $password; ?></td>
                      </tr>
                    </table>

                  <!-- Academic Details -->
                  <?php if (!empty($am_id)) { ?>

                    <div class="col-md-12 mb-3">
                  <h3 class="h3style_heading"> Academic Details</h3>
                  <div class="table-responsive">
									<table class="table-sm table mt-2 table-bordered" >
										<thead>
											<tr>
												<th>S.No.</th>
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

                  <!-- Employment Details -->
                  <?php if (!empty($em_id)) { ?>

                    <div class="col-md-12">
                    <h3 class="h3style_heading"> Employer Details</h3>
                    <div class="table-responsive">
                    <table class="table table-sm mt-2 table-bordered">
                            <thead>
                              <tr>
                                <th>S.No.</th>
                                <th>Designation</th>
                                <th>Employer</th>
                                <th>Company Name</th>
                                <th>Location</th>
                                <th>Location Type</th>
                                <th>Job Description</th>
                                <th>Current Employer</th>
                                <th>Month</th>
                                <th>Start Date</th>
                                <th>End Date</th>



                              </tr>
                            </thead>
                            <tbody>
                              <?php $i = 1;
                              foreach ($employment_data as $ed) {
                                extract($ed); ?>
                                <tr>
                                  <td><?php echo $i; ?></td>
                                  <td><?php echo $designation; ?></td>
                                  <td><?php if ($emp_type == 1) {
                                        echo "Full Time";
                                      } else if ($emp_type == 2) {
                                        echo "Part Time";
                                      } ?></td>

                                  <td><?php echo $company_name; ?></td>
                                  <td><?php echo $location; ?></td>
                                  <td><?php if ($location_type == 1) {
                                        echo "On Site";
                                      } else if ($location_type == 2) {
                                        echo "Remote";
                                      } else if ($location_type == 3) {
                                        echo "Hybrid";
                                      } ?></td>
                                  <td><?php echo $job_description; ?></td>
                                  <td><?php if ($current_working_YN == 1) {
                                        echo "Yes";
                                      } else {
                                        echo "No";
                                      } ?></td>
                                  <td><?php echo $working_month; ?></td>
                                  <td><?php echo $working_from; ?></td>
                                  <td><?php echo $working_to; ?></td>


                                </tr>
                              <?php $i++;
                              } ?>
                            </tbody>
                          </table>
								</div>
                    </div>
                  <?php } ?>


                </div>
              </div>
            </div>





            <!-- <div class="col-md-2">
                    <a href="<?php echo base_url(); ?>Alumni/ViewList" class="btn btn-sm btn-outline-info pull_right"> <i class="fa fa-arrow-left"></i> Back</a>
                    </div> -->

          </form>
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