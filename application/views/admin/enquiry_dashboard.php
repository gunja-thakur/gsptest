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
                  Student Regidtration List

                  <a href="<?php echo base_url(); ?>Home" class="btn btn-sm btn-outline-danger pull_right"> <i class="fa fa-arrow-left"></i> Back</a>

                </div>
                <div class="card-body">

                  <?php if ($this->session->userdata['user_role'] == 1 or $this->session->userdata['user_role'] == 2 or $this->session->userdata['user_role'] == 3 or $this->session->userdata['user_role'] == 4) { ?>
                    <!--  -->
                    <form action="" method="post" enctype="multipart/form-data" class="form-horizontal">

                      <div class="row form-group">
                        <div class="col-12 col-sm-6 col-md-4 col-lg-12">
                          <!-- <label for="text-input" class=" form-control-label">Filter Data</label>
                          <br> -->
                          <div class="radio mt-2">
                            <label><input type="radio" name="tfilter" id="tfilter" value="1"> Qualification & Date Wise</label>
                            &nbsp;&nbsp;
                            <label><input type="radio" name="tfilter" id="tfilter" value="2"> Qualification Wise</label>
                            &nbsp;&nbsp;
                            <label><input type="radio" name="tfilter" id="tfilter" value="3"> Date Wise</label>&nbsp;&nbsp;



                          </div>
                        </div>
                      </div>
                      <hr>

                      <div class="row form-group">
                        <div class="col-md-3 col-sm-6 mb-3 quf">
                          <label for="ForSelect" class="form-label">Qualification<span class="text-danger">*</span> </label>
                          <select class="form-select" aria-label="Default select example" name="qualification" id="qualification">
                            <option value="0">Select Qualification </option>
                            <option value="1">Diploma</option>
                            <option value="2">Degree</option>
                            <option value="3">ITI</option>
                          </select>
                          <p id="qualification_error" class="text-danger p-2"></p>
                        </div>

                        <div class="col-md-3 col-sm-6 mb-3 dtf">
                          <label for="text-input" class=" form-control-label">From Date<span class="text-danger">*</span></label>
                          <input type="date" name="from_date" id="from_date" value="<?php echo set_value('from_date') ?>" class="form-control">
                          <p id="fromdate_error" class="text-danger p-2"></p>


                        </div>

                        <div class="col-md-3 col-sm-6 mb-3 dtf">
                          <label for="text-input" class=" form-control-label">To Date<span class="text-danger">*</span></label>
                          <input type="date" name="to_date" id="to_date" value="<?php echo set_value('to_date') ?>" class="form-control">
                          <p id="todate_error" class="text-danger p-2"></p>


                        </div>

                        <div class="col-md-3 col-sm-6 srch">
                          <label></label>
                          <button type="submit" class="btn btn-secondary btn-sm" name="search" id="search" style="margin-top:22px;">Search</button>
                        </div>

                      </div>
                    </form>

                    <!--  -->
                    <div class="stdajaxshow">

                      <?php include_once(APPPATH . 'views/admin/enquiry_list_ajax.php'); ?>

                    </div>
                  <?php } ?>

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
                          <h1 class="modal-title fs-5" id="exampleModalLabel">Enquiry List</h1>
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
    $(document).ready(function() {

      $(".quf").hide();
      $(".dtf").hide();
      $(".srch").hide();

      $('input[type=radio][name=verify]').change(function() {

        //alert( $(this).val());return false;

        var status = $(this).val();
        var student_id = $(this).attr("data-id");

        alert(status + "-" + student_id);
        return false;


      });

    });
  </script>


  <script>
    $(document).on('click', '.showfront', function() {
      var status = $(this).attr('data-id');
      var student_id = $(this).attr("id");

      //alert(student_id);return false;

      $.ajax({

        url: "<?php echo base_url(); ?>AdminDashboard/ShowAlumini_Front",
        method: "POST",
        data: {
          "status": status,
          "student_id": student_id
        },


        success: function(res) {

          // alert(res);return false;
          if (res == 1) {
            alert("Status Updated Successfully!!");
            location.reload();
          } else {
            alert("Try Again!!");
            location.reload();
          }

        }
      });

    });
  </script>

  <script>
    $('input:radio[name="tfilter"]').change(
    function(){
      $("#qualification").css('border', '1px solid #cacfe7');
      $("#qualification_error").text('');

      $("#from_date").css('border', '1px solid #cacfe7');
      $("#fromdate_error").text('');

      $("#to_date").css('border', '1px solid #cacfe7');
      $("#todate_error").text('');
    });
  </script>




  <script>
    $(document).on('click', '#search', function() {
      var qualification = $("#qualification").val();
      var from_date = $("#from_date").val();
      var to_date = $("#to_date").val();
      var tfilter = $("input[type='radio']:checked").val();


      if (tfilter == '1') {

        if (qualification == "0") {
          $(qualification).focus();
          $("#qualification").css('border', '2px solid #ec000069');
          $("#qualification_error").text('Please Select Qualification');
          return false;
        }
        $("#qualification").css('border', '1px solid #cacfe7');
        $("#qualification_error").text('');

        if (from_date == "") {
          $(from_date).focus();
          $("#from_date").css('border', '2px solid #ec000069');
          $("#fromdate_error").text('Please Select From Date');
          return false;
        }
        $("#from_date").css('border', '1px solid #cacfe7');
        $("#fromdate_error").text('');

        if (to_date == "") {
          $(to_date).focus();
          $("#to_date").css('border', '2px solid #ec000069');
          $("#todate_error").text('Please Select To Date');
          return false;
        }
        $("#to_date").css('border', '1px solid #cacfe7');
        $("#todate_error").text('');

      } else if (tfilter == '2') {

        if (qualification == "0") {
          $(qualification).focus();
          $("#qualification").css('border', '2px solid #ec000069');
          $("#qualification_error").text('Please Select Qualification');
          return false;
        }
        $("#qualification").css('border', '1px solid #cacfe7');
        $("#qualification_error").text('');

      } else if (tfilter == '3') {

        if (from_date == "") {
          $(from_date).focus();
          $("#from_date").css('border', '2px solid #ec000069');
          $("#fromdate_error").text('Please Select From Date');
          return false;
        }
        $("#from_date").css('border', '1px solid #cacfe7');
        $("#fromdate_error").text('');

        if (to_date == "") {
          $(to_date).focus();
          $("#to_date").css('border', '2px solid #ec000069');
          $("#todate_error").text('Please Select To Date');
          return false;
        }
        $("#to_date").css('border', '1px solid #cacfe7');
        $("#todate_error").text('');

      }



      $.ajax({
        url: "<?php echo base_url(); ?>EnquiryDashboard/EnquiryList_Ajax",
        type: "POST",
        data: {
          "qualification": qualification,
          "from_date": from_date,
          "to_date": to_date
        },
        success: function(res) {
          // alert(res);return false;
          $(".stdajaxshow").html('');
          $("#qualification_error").text('');
          $("#fromdate_error").text('');
          $("#todate_error").text('');
          $(".stdajaxshow").html(res);

          //return false;
        }
      });

      return false;
    });
  </script>

  <script>
    $('input:radio[name="tfilter"]').change(
      function() {
        if ($(this).is(':checked') && $(this).val() == '1') {

          $(".stdajaxshow").html('');
          $(".quf").show();
          $(".dtf").show();
          $(".srch").show();
          $("#qualification").val('0');
          $("#from_date").val('');
          $("#to_date").val('');
        } else if ($(this).is(':checked') && $(this).val() == '2') {
          $(".stdajaxshow").html('');
          $(".quf").show();
          $(".dtf").hide();
          $(".srch").show();
          $("#qualification").val('0');
          $("#from_date").val('');
          $("#to_date").val('');

        } else if ($(this).is(':checked') && $(this).val() == '3') {

          $(".stdajaxshow").html('');
          $(".quf").hide();
          $(".dtf").show();
          $(".srch").show();
          $("#qualification").val('');
          $("#from_date").val('');
          $("#to_date").val('');

        }
      });
  </script>





</body>

</html>