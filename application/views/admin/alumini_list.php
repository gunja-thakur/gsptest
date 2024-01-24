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

          <div class="row">
            <div class="col-xl-12 col-lg-12">

              <?php if ($this->session->flashdata('message')) { ?>
                <div class="alert alert-success flashhide">
                  <?php echo $this->session->flashdata('message') ?>

                </div>
              <?php } ?>
              <div class="card mb-4 mt-2">
                <div class="card-header">
                  <i class="fa-solid fa-grip me-1"></i>
                  Alumni List



                  <a href="<?php echo base_url(); ?>Home" class="btn btn-sm btn-outline-danger pull_right"> <i class="fa fa-arrow-left"></i> Back</a>

                </div>
                <div class="card-body">

                  <?php if ($this->session->userdata['user_role'] == 1 or $this->session->userdata['user_role'] == 2 or $this->session->userdata['user_role'] == 6) { ?>

                    <!-- Search -->
                    <form action="" method="post" enctype="multipart/form-data" class="form-horizontal">

                      <!-- <div class="row form-group">
                        <div class="col-12 col-sm-6 col-md-4 col-lg-12">
                          <div class="radio mt-2">
                            <label><input type="radio" name="tfilter" id="tfilter" value="1"> batch & Date Wise</label>
                            &nbsp;&nbsp;
                            <label><input type="radio" name="tfilter" id="tfilter" value="2"> batch Wise</label>
                            &nbsp;&nbsp;
                            <label><input type="radio" name="tfilter" id="tfilter" value="3"> Date Wise</label>&nbsp;&nbsp;



                          </div>
                        </div>
                      </div>
                      <hr> -->

                      <div class="row form-group">
                        <div class="col-md-3 col-sm-6 mb-3 quf">
                          <label for="ForSelect" class="form-label">Batch<!-- <span class="text-danger">*</span> --> </label>
                          <select class="form-select" aria-label="Default select example" name="batch" id="batch">
                            <option value="0">Select Batch </option>
                            <option value="2">Batch 2</option>
                            <option value="3">Batch 3</option>
                            <option value="4">Batch 4</option>
                            <option value="5">Batch 5</option>
                          </select>
                          <p id="batch_error" class="text-danger"></p>
                        </div>

                        <div class="col-md-3 col-sm-6 mb-3 quf">
                          <label for="ForSelect" class="form-label">Year<!-- <span class="text-danger">*</span> --> </label>
                          <select class="form-select" aria-label="Default select example" name="passing_year" id="passing_year">
                            <option value="0">Select Year </option>
                            <option value="2023">2023</option>
                            <option value="2022">2022</option>
                            <option value="2021">2021</option>
                            <option value="2020">2020</option>
                          </select>
                          <p id="passing_year_error" class="text-danger"></p>
                        </div>

                        <div class="col-md-3 col-sm-6 mb-3 quf">
                          <label for="ForSelect" class="form-label">Course<!-- <span class="text-danger">*</span> --> </label>
                          <select class="form-select" aria-label="Default select example" name="branch" id="branch">
                            <option value="0">Select Course </option>
                            <?php foreach($branch_data as $bd) { extract($bd);  ?>
                              <option value="<?php echo $bd['sort_name']; ?>"> <?php echo $bd['branch_name']; ?> </option>
                            <?php } ?>

                          </select>
                          <p id="branch_error" class="text-danger"></p>
                        </div>

                        <!-- <div class="col-md-3 col-sm-6 mb-3 dtf">
                          <label for="text-input" class=" form-control-label">From Date</label>
                          <input type="date" name="from_date" id="from_date" value="<?php echo set_value('from_date') ?>" class="form-control">
                          <p id="fromdate_error" class="text-danger p-2"></p>
                        </div>

                        <div class="col-md-3 col-sm-6 mb-3 dtf">
                          <label for="text-input" class=" form-control-label">To Date</label>
                          <input type="date" name="to_date" id="to_date" value="<?php echo set_value('to_date') ?>" class="form-control">
                          <p id="todate_error" class="text-danger p-2"></p>
                        </div> -->


                        <div class="col-md-3 col-sm-6 srch">
                          <label></label>
                          <button type="submit" class="btn btn-secondary btn-sm" name="search" id="RecordSearch" style="margin-top:22px;">Search</button>
                        </div>

                      </div>
                    </form>
                    <!-- Search -->

                    <div class="stdajaxshow">

                    <?php include(APPPATH . 'views/admin/alumni_list_ajax.php'); ?>

                    </div>
                  <?php } ?>

                  <!---------------Modal------------------>


                  <!-- Button trigger modal -->
                  <button type="button" class="btn btn-primary" id="click_model" data-bs-toggle="modal" data-bs-target="#staticBackdrop" style="display: none;">  View </button>

                  <!-- Modal -->
                  <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-scrollable modal-lg" role="document" >
                      <div class="modal-content">
                        <div class="bg-info-subtle modal-header p-2">
                          <h1 class="modal-title fs-5" id="exampleModalLabel">Alumni Details</h1>
                          <button type="button" class=" btn btn-outline-secondary btn-sm" data-bs-dismiss="modal" aria-label="Close"> X</button>
                        </div>
                        <div class="modal-body datashow">

                        </div>
                        <div class="modal-footer">

                        </div>
                      </div>
                    </div>
                  </div>

                  <!-- Modal -->



                </div>
              </div>


            </div>
          </div>
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
  <!-- Footer Script End -->

<script>
  $(document).ready(function(){
    $(".SendmailCls").hide();
  });

  function handleChange(src) {
   $(".verified_YN").css('outline', '1px solid #ccc');
   $("#verified_YN_error").text('');
  var std_status=src.value;
  if(std_status==1)
  {
  $(".SendmailCls").show();
  }
  else{
    $(".SendmailCls").hide();
  }

  }


</script>

<script>
    $(document).on('click', '.TakeAction', function() {
      var status = $(this).attr('data-id');
      var student_id = $(this).attr("id");
      //if(confirm("Are you sure to Verified The Alumni?")){
      //alert(student_id);return false;

      $.ajax({
        url: "<?php echo base_url(); ?>Alumni/GetFor_VerifyAlumini",
        method: "POST",
        data: {
          "status": status,
          "student_id": student_id
        },
        success: function(res) {
        // alert(res);return false;
        $(".datashow").html(res);
        $("#click_model").click();
        /////////
        var std_status = $("input[name='verified_YN']:checked").val();
        if(std_status!=1) { $(".SendmailCls").hide();  }/////////

        return false;
        }
      });
      //}
    });
  </script>

<!-- Alumni Verification -->
<script>
    $(document).on('click', '#SubmitData', function() {
      var student_id = $("#student_id").val();
      var std_status = $("input[name='verified_YN']:checked").val();

      if ($('input[name=verified_YN]:checked').length <= 0) {
						//alert('Please Select verified_YN!');
						$(".verified_YN").css('outline', '1px solid red');
						$("#verified_YN_error").text('Please Select The Status!');
						return false;
					} else {
						$(".verified_YN").css('outline', '1px solid #ccc');
            $("#verified_YN_error").text('');
				}

      if($("#Sendmail").is(":checked"))
      {
      var sendemail = $("input[type='checkbox']").val();
      }
      else { var sendemail =0; }

      //alert(student_id + "-" + std_status + "-" + sendemail);return false;

      if(confirm("Are you sure you want to verify the Alumni Details ?")){
      $.ajax({
        url: "<?php echo base_url(); ?>Alumni/VerifyAlumini_Data",
        method: "POST",
        data: {

          "student_id": student_id,
          "std_status": std_status,
          "sendemail": sendemail
        },
        success: function(res) {
        // alert(res);return false;
         if(res==1)
         {
          alert("Alumni Successfully Verified!!"); location.reload();
         }
         else
         {
          alert("Try Again!!"); location.reload();
         }
        }
      });
      }
    });
  </script>


  <script>
    $(document).on('click', '.VerifyAlumni', function() {
      var status = $(this).attr('data-id');
      var student_id = $(this).attr("id");
      //alert(student_id);return false;
      if(confirm("Are you sure to Verified The Alumni?")){
      $.ajax({
        url: "<?php echo base_url(); ?>Alumni/VerifyAlumini",
        method: "POST",
        data: {
          "status": status,
          "student_id": student_id
        },
        success: function(res) {
        // alert(res);return false;
         if(res==1)
         {
          alert("Student Successfully Verified!!"); location.reload();
         }
         else
         {
          alert("Try Again!!"); location.reload();
         }
        }
      });
      }
    });
  </script>

  <!-- Verify Notable -->

  <script>
    $(document).on('click', '.VerifyNotable', function() {
      var status = $(this).attr('data-id');
      var student_id = $(this).attr("id");
      //if(confirm("Are you sure to Verified The Alumni?")){
      //alert(student_id);return false;

      $.ajax({
        url: "<?php echo base_url(); ?>Alumni/Verify_NotableAlumini",
        method: "POST",
        data: {
          "status": status,
          "student_id": student_id
        },
        success: function(res) {
        // alert(res);return false;
        $(".datashow").html(res);
        $("#click_model").click();
        /////////


        return false;
        }
      });
      //}
    });
  </script>

  <script>
    $(document).on('click', '#SubmitNotable', function() {
      var student_id = $("#student_id").val();
      var std_status = $("input[name='notable_yn']:checked").val();
	  var success_story = $("#success_story").val();



      if ($('input[name=notable_yn]:checked').length <= 0) {
						$(".notable_yn").css('outline', '1px solid red');
						$("#notable_yn_error").text('Please Select The Status!');
						return false;
					} else {
						$(".notable_yn").css('outline', '1px solid #ccc');
            $("#notable_yn_error").text('');
				}

				if (success_story.length <= 0) {
          $("#success_story").focus();
						$("#success_story").css('outline', '1px solid red');
						$("#success_story_error").text('Please Enter Success Story!');
						return false;
					} else {
						$("#success_story").css('outline', '1px solid #ccc');
            $("#notable_yn_error").text('');
				}
      //alert(student_id + "-" + std_status + "-" + sendemail);return false;

      if(confirm("Are you sure you want to Mark as Notable Alumni?")){
      $.ajax({
        url: "<?php echo base_url(); ?>Alumni/NotableAlumini",
        method: "POST",
        data: {

          "student_id": student_id,
          "status": std_status,
          "success_story": success_story
        },
        success: function(res) {
        // alert(res);return false;
         if(res==1)
         {
          alert("Alumni Successfully Marked as Notable!"); location.reload();
         }
         else
         {
          alert("Try Again!!"); location.reload();
         }
        }
      });
      }
    });
  </script>

<script>
    $(document).on('click', '.VerifiedTestimoni', function() {
      var status = $(this).attr('data-id');
      var student_id = $(this).attr("id");
      //if(confirm("Are you sure to Verified The Alumni?")){
      //alert(student_id);return false;

      $.ajax({
        url: "<?php echo base_url(); ?>Alumni/Verify_Testimonial",
        method: "POST",
        data: {
          "status": status,
          "student_id": student_id
        },
        success: function(res) {
        // alert(res);return false;
        $(".datashow").html(res);
        $("#click_model").click();
        /////////


        return false;
        }
      });
      //}
    });
  </script>


<script>
    $(document).on('click', '#SubmitTestimoni', function() {
      var student_id = $("#student_id").val();
      var testimoni_status = $("input[name='show_on_front']:checked").val();



      if ($('input[name=show_on_front]:checked').length <= 0) {
						$(".show_on_front").css('outline', '1px solid red');
						$("#show_on_front_error").text('Please Select The Status!');
						return false;
					} else {
						$(".show_on_front").css('outline', '1px solid #ccc');
            $("#show_on_front_error").text('');
				}

      //alert(student_id + "-" + std_status + "-" + sendemail);return false;

      if(confirm("Are you sure you want to Verify Testimonial?")){
      $.ajax({
        url: "<?php echo base_url(); ?>Alumni/SaveVerify_Testimonial",
        method: "POST",
        data: {

          "student_id": student_id,
          "testimoni_status": testimoni_status

        },
        success: function(res) {
        // alert(res);return false;
         if(res==1)
         {
          alert("Testimonial Successfully Marked as Verified!"); location.reload();
         }
         else
         {
          alert("Try Again!!"); location.reload();
         }
        }
      });
      }
    });
  </script>

  <script>
    $(document).on('click', '.showfront', function() {

      if(confirm("Are you sure to be Continued?")){

      var status = $(this).attr('data-id');
      var student_id = $(this).attr("id");
      //alert(student_id);return false;
      $.ajax({
        url: "<?php echo base_url(); ?>Alumni/NotableAlumini",
        method: "POST",
        data: {
          "status": status,
          "student_id": student_id
        },
        success: function(res) {
        // alert(res);return false;
         if(res==1)
         {
          alert("Status Updated Successfully!!");
          location.reload();
         }
         else
         {
          alert("Try Again!!"); location.reload();
         }
        }
      });

    }
    });
  </script>




  <script>
    $(document).on('click', '#recordsearch', function() {

      var batch = $("#batch").val();
      var passing_year = $("#passing_year").val();
      var phase = $("#phase").val();
      var seat = $("#seat").val();
      var date_slot = $("#date_slot").val();

      if (batch == "") {
        $(batch).focus();
        $("#batch").css('border', '2px solid #ec000069');
        $("#error").text('Please Select Counselling Type');
        return false;
      }
      $("#batch").css('border', '1px solid #cacfe7');

      if (passing_year == "") {
        $(passing_year).focus();
        $("#passing_year").css('border', '2px solid #ec000069');
        $("#error").text('Please Select Quota');
        return false;
      }
      $("#passing_year").css('border', '1px solid #cacfe7');

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

      $.ajax({
        url: "<?php echo base_url(); ?>Home/UpgradeCadidate_ListAjax",
        type: "POST",
        data: {
          "batch": batch,
          "passing_year": passing_year,
          "phase": phase
        },
        success: function(res) {
          // alert(res);return false;
          $(".stdajaxshow").html('');
          $(".stdajaxshow").html(res);

          //return false;
        }
      });

      return false;
    });
  </script>


<script>
        $(document).on('click', '#RecordSearch', function() {

            var batch = $("#batch").val();
            var passing_year = $("#passing_year").val();
            var branch = $("#branch").val();

            /* if (batch == "0") {
                $(batch).focus();
                $("#batch").css('border', '2px solid #ec000069');
                $("#batch_error").text('Please Select Batch!');
                return false;
            }
            $("#batch").css('border', '1px solid #cacfe7');
            $("#batch_error").text('');

            if (passing_year == "0") {
                $(passing_year).focus();
                $("#passing_year").css('border', '2px solid #ec000069');
                $("#passing_year_error").text('Please Select Passing Year!');
                return false;
            }
            $("#passing_year").css('border', '1px solid #cacfe7');
            $("#passing_year_error").text(''); */

            /* if (phase == "") {
                $(phase).focus();
                $("#phase").css('border', '2px solid #ec000069');
                $("#error1").text('Please Select Counselling Phase');
                return false;
            }
            $("#phase").css('border', '1px solid #cacfe7'); */

            $.ajax({
                url: "<?php echo base_url(); ?>Alumni/ViewList_Ajax",
                type: "POST",
                data: {
                    "batch": batch,
                    "passing_year": passing_year,
                    "branch": branch
                },
                success: function(res) {
                    //alert(res);return false;
                    $(".stdajaxshow").html('');
                    $(".stdajaxshow").html(res);
                    //$("#datatablesSimple").html('');
                    //return false;
                }
            });
            return false;
        });
    </script>




</body>

</html>