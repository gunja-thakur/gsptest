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
                  Recruiters List



                  <a href="<?php echo base_url(); ?>Home" class="btn btn-sm btn-outline-danger pull_right"> <i class="fa fa-arrow-left"></i> Back</a>

                </div>
                <div class="card-body">

                  <?php if ($this->session->userdata['user_role'] == 1 or $this->session->userdata['user_role'] == 2 or $this->session->userdata['user_role'] == 3) { ?>
                    <div class="stdajaxshow">

                    <?php include(APPPATH . 'views/recruiters/recruiters_list_ajax.php'); ?>

                    </div>
                  <?php } ?>
                </div>
              </div>

              <!-- Model Start -->
              <!-- Button trigger modal -->
<button type="hidden" id="click_model" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop" style="display:none;">
  View Details
</button>

<!-- Modal -->
<div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-xl">
    <div class="modal-content">
      <div class="modal-header bg-primary-subtle">
        <h1 class="modal-title fs-5" id="staticBackdropLabel">Details</h1>
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
  $(document).ready(function(){

  $('input[type=radio][name=verify]').change(function() {

    //alert( $(this).val());return false;

    var status = $(this).val();
    var rm_id = $(this).attr("data-id");

    alert(status +"-"+ rm_id);return false;


});

  });
</script>


  <script>
    $(document).on('click', '.VerifyRecruiter', function() {

      if(confirm("Are you sure to Verified The Recruiter?")){


      var status = $(this).attr('data-id');
      var rm_id = $(this).attr("id");
      //alert(rm_id);return false;
      $.ajax({

        url: "<?php echo base_url(); ?>Placement/VerifiedRecruiter",
        method: "POST",
        data: {
          "status": status,
          "rm_id": rm_id
        },
        success: function(res) {
         //alert(res);return false;
         if(res==1)
         {
          alert("Recruiter Verified Successfully!!"); location.reload();
         }
         else
         {
          alert("Try Again!!"); location.reload();
         }

        }
      });
      return true;
     }

      else{
          return false;
     }

    });
  </script>
  <script>
    $(document).on('click', '.view_recruiter', function() {

      var rm_id = $(this).attr('data-id');
      //var rm_id = $(this).attr("id");
      //alert(rm_id);return false;
      $.ajax({

        url: "<?php echo base_url(); ?>Placement/Recruiter_Details",
        method: "POST",
        data: {
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
    $(document).on('click', '#recordsearch', function() {

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

      $.ajax({
        url: "<?php echo base_url(); ?>Home/UpgradeCadidate_ListAjax",
        type: "POST",
        data: {
          "candidate_type": candidate_type,
          "rank_type": rank_type,
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





</body>

</html>