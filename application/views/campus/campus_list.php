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
                  Campus Drive List



                  <a href="<?php echo base_url(); ?>Home" class="m-1 btn btn-sm btn-outline-danger pull_right"> <i class="fa fa-arrow-left"></i> Back</a>
                  <?php if ($this->session->userdata['user_role'] == 7) { ?>
                    <a href="<?php echo base_url(); ?>CampusDrive/Add" class="m-1 btn btn-sm btn-outline-success pull_right "> <i class="fa fa-plus"></i> Add Campus Drive</a>
                  <?php } ?>

                </div>
                <div class="card-body">

                  <?php if ($this->session->userdata['user_role'] == 1 or $this->session->userdata['user_role'] == 2 or $this->session->userdata['user_role'] == 3) { ?>

                    <form action="" method="post" enctype="multipart/form-data" class="form-horizontal">


                      <div class="row form-group">
                        <div class="col-md-3 col-sm-6 mb-1">
                          <label for="ForSelect" class="form-label">Company</label>
                          <select class="form-select" aria-label="Default select example" name="company_name" id="company_name">
                            <option value="">Select Company </option>

                            <?php foreach ($recruiters_data as $rd) { ?>
                              <option value="<?php echo $rd['rm_id']; ?>" id="<?php echo $rd['rm_id']; ?>"><?php echo $rd['name_of_company']; ?></option>
                            <?php } ?>
                          </select>
                          <p id="company_name_error" class="text-danger"></p>
                        </div>

                        <div class="col-md-3 col-sm-6 mb-1">
                          <label for="ForSelect" class="form-label">Status </label>
                          <select class="form-select" aria-label="Default select example" name="vr_status" id="vr_status">
                            <option value="">Select Status </option>
                            <option value=0>Pending</option>
                            <option value="1">Verified</option>
                            <option value="2">Not Verified</option>
                          </select>
                          <p id="vr_status_error" class="text-danger"></p>
                        </div>

                        <div class="col-md-3 col-sm-6 mb-1">
                          <label for="text-input" class=" form-control-label">From Date</label>
                          <input type="date" name="from_date" id="from_date" value="<?php echo set_value('from_date') ?>" class="form-control">
                          <p id="from_date_error" class="text-danger"></p>

                        </div>

                        <div class="col-md-3 col-sm-6 mb-1">
                          <label for="text-input" class=" form-control-label">To Date</label>
                          <input type="date" name="to_date" id="to_date" value="<?php echo set_value('to_date') ?>" class="form-control">
                          <p id="to_date_error" class="text-danger"></p>

                        </div>


                        <div class="col-md-3 col-sm-6 srch">
                          <label></label>
                          <button type="submit" class="btn btn-secondary " name="search" id="RecordSearch" >Search</button>
                        </div>

                      </div>
                    </form>

                    <hr>
                    <?php } ?>


                    <div class="stdajaxshow">

                      <?php include(APPPATH . 'views/campus/campus_list_ajax.php'); ?>

                    </div>

                </div>
              </div>

              <!-- Model Start -->
              <!-- Button trigger modal -->
              <button type="hidden" id="click_model" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop" style="display:none;">
                View Details
              </button>

              <!-- Modal -->
              <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-lg">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h1 class="modal-title fs-5" id="staticBackdropLabel">Campus Detail</h1>
                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body datashow">

                    </div>
                    <div class="modal-footer">

                    </div>
                  </div>
                </div>
              </div>
              <!-- Model Start -->


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
    $(document).on('click', '.RemoveCampus', function() {

      if (confirm("Are you sure to Remove This Campus Drive?")) {


        var cm_id = $(this).attr('data-id');

        //alert(rm_id);return false;
        $.ajax({

          url: "<?php echo base_url(); ?>CampusDrive/RemoveCampus",
          method: "POST",
          data: {
            "cm_id": cm_id
          },
          success: function(res) {
            //alert(res);return false;
            if (res == 1) {
              alert("Campus Drive Removed Successfully!!");
              location.reload();
            } else {
              alert("Somthing Wrong. Try Again!!");
              location.reload();
            }

          }
        });
        return true;
      } else {
        return false;
      }

    });
  </script>
  <script>
    $(document).on('click', '.ModifyCampus', function() {

      var cm_id = $(this).attr('data-id');
      $.ajax({

        url: "<?php echo base_url(); ?>CampusDrive/View_Singlecampus",
        method: "POST",
        data: {
          "cm_id": cm_id
        },
        success: function(res) {
          //alert(res);return false;
          $(".datashow").html(res);
          $("#click_model").click();

        }
      });
    });
  </script>

  <script>
    $(document).on('click', '.ViewCampus', function() {

      var cm_id = $(this).attr('data-id');
      var rm_id = $(this).attr("id");
      //alert(rm_id);return false;
      $.ajax({

        url: "<?php echo base_url(); ?>CampusDrive/View_Campus",
        method: "POST",
        data: {
          "cm_id": cm_id,
          "rm_id": rm_id
        },
        success: function(res) {
          //alert(res);return false;
          $(".datashow").html(res);
          $("#click_model").click();

        }
      });
    });
  </script>

  <script>
    $(document).on('click', '#SubmitData', function(event) {
      event.preventDefault();
      var cm_id = $("#cm_id").val();
      var vr_status = $("input[name='verification_yn']:checked").val();

      if ($('input[name=verification_yn]:checked').length <= 0) {
        //alert('Please Select verification_yn!');
        $(".verification_yn").css('outline', '1px solid red');
        $("#verification_yn_error").text('Please Select The Status!');
        return false;
      } else {
        $(".verification_yn").css('outline', '1px solid #ccc');
        $("#verification_yn_error").text('');
      }

      //alert(cm_id + "-" + std_status + "-" + sendemail);return false;

      if (confirm("Are you sure you want to verify the Campus Details ?")) {
        $.ajax({
          url: "<?php echo base_url(); ?>CampusDrive/CampusVerification",
          method: "POST",
          data: {

            "cm_id": cm_id,
            "vr_status": vr_status
          },
          success: function(res) {
            // alert(res);return false;
            if (res == 1) {
              alert("Campus Successfully Verified!!");
              location.reload();
            } else {
              alert("Try Again!!");
              location.reload();
            }
          }
        });
      }
    });
  </script>

<script>
    $(document).on('click', '#RecordSearch', function() {
      var company_name = $("#company_name").val();
      var vr_status = $("#vr_status").val();
      var from_date = $("#from_date").val();
      var to_date = $("#to_date").val();
      //var tfilter = $("input[type='radio']:checked").val();

      //alert(company_name+""+vr_status+""+tfilter);return false


      /* if (tfilter == '2') {

        if (company_name == "0") {
          $(company_name).focus();
          $("#company_name").css('border', '2px solid #ec000069');
          $("#company_name_error").text('Please Select company_name');
          return false;
        }
        $("#company_name").css('border', '1px solid #cacfe7');
        $("#company_name_error").text('');

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

      } else if (tfilter == '3') {

        if (vr_status == "0") {
          $(vr_status).focus();
          $("#vr_status").css('border', '2px solid #ec000069');
          $("#vr_status_error").text('Please Select Year');
          return false;
        }
        $("#vr_status").css('border', '1px solid #cacfe7');
        $("#vr_status_error").text('');

      } */



      $.ajax({
        url: "<?php echo base_url(); ?>CampusDrive/ViewList_Ajax",
        type: "POST",
        data: {

          "company_name": company_name,
          "vr_status": vr_status,
          "from_date": from_date,
          "to_date": to_date

        },
        success: function(res) {
           //alert(res);return false;
          $(".stdajaxshow").html(res);

          //return false;
        }
      });

      return false;
    });
  </script>






</body>

</html>