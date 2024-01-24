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
            <h3>Training and Placement Dashboard</h3>

              <div class="card mb-4 mt-2">
                <div class="card-header">

                  <a href="<?php echo base_url(); ?>Home" class="btn btn-sm btn-outline-danger pull_right"> <i class="fa fa-arrow-left"></i> Back</a>

                </div>
                <div class="card-body">
                <?php include(APPPATH . 'views/recruiters/recruiter_dashboard_counter_ajax.php'); ?>
                </div>
              </div>
            </div>
          </div>


          <!---------------Modal------------------>
          <button type="hidden" id="click_model" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop" style="display:none;">
                View Details
              </button>

              <!-- Modal -->
              <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-lg">
                  <div class="modal-content">
                    <div class="modal-header bg-primary-subtle">
                      <h1 class="modal-title fs-5" id="staticBackdropLabel">Recruiters List</h1>
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
    $(document).on('click', '.ViewRc', function() {

        var rc_status=$(this).attr('id');

        //alert(rc_id);return false;

        /*var cntid = $(this)[0].id;
        const myArray = cntid.split("_");
        var vertical = myArray[0];
        var type = myArray[1];*/
        //var sts_count = myArray[2];
        //alert(vertical + "," + type + "," + sts_count);return false;

        $.ajax({
            url: "<?php echo base_url(); ?>Placement/RecruitersList_Ajax",
            method: "POST",
            data: {
                "rc_status": rc_status
            },

            success: function(res) {

                //alert(res);return false;

                $(".datashow").html(res);
                $("#click_model").click();

            }
        });

    });
</script>








</body>

</html>