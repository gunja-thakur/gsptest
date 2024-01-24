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
                  Event's List



                  <a href="<?php echo base_url(); ?>Events" class="m-1 btn btn-sm btn-outline-danger pull_right"> <i class="fa fa-arrow-left"></i> Back</a>

                  <a href="<?php echo base_url(); ?>Events/AddEvent" class="m-1 btn btn-sm btn-outline-success pull_right "> <i class="fa fa-plus"></i> Add Event</a>

                </div>
                <div class="card-body">

                  <?php if ($this->session->userdata['user_role'] == 1 or $this->session->userdata['user_role'] == 2 or $this->session->userdata['user_role'] == 6) { ?>
                    <div class="stdajaxshow">

                      <div class="table-responsive">
                        <table class="table table-bordered table-sm table-striped" id="datatablesSimple1">
                          <thead>
                            <tr>
                              <th>#</th>
                              <th>Event Image</th>
                              <th>Event Title</th>
                              <th>Event Date </th>
                              <th>Published Date</th>
                              <th>Venue</th>
                              <th>Event Description</th>
                              <th>Brochure</th>
                              <th>Action</th>
                            </tr>
                          </thead>
                          <tbody>
                            <?php $i = 1;
                            foreach ($event_data as $sd) {
                              extract($sd); ?>
                              <tr>
                                <td><?= $i ?></td>
                                <td><img src="<?php echo base_url(); ?>assets/events/<?php echo $sd['event_invite']; ?>" alt="Event Image" style="width:50px" class="img-fluid" /></td>
                                <td><?= ucwords($event_title) ?></td>
                                <td><?php if ($sd['event_date'] != "") echo date("d-m-Y", strtotime($sd['event_date'])) ?></td>
                                <td><?php if ($sd['published_date'] != "") echo date("d-m-Y", strtotime($sd['published_date'])) ?></td>
                                <td><?= $venue ?></td>
                                <td><?= $event_description ?></td>
                                <td><a href="<?php echo base_url(); ?>assets/events/<?php echo $sd['upload_brochure']; ?>" target="_blank"> View Brochure</a></td>


                                <td>
                                  <a class="btn btn-sm btn-outline-success ModifyEvent" data-id="<?php echo $event_id; ?>" title="Modify Event"> <i class="fa fa-edit"></i> </a>

                                  <a class="btn btn-sm btn-outline-danger RemoveEvent" data-id="<?php echo $event_id; ?>" title="Remove Event"> <i class="fa fa-trash"></i> </a>
                                </td>

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
                      <h1 class="modal-title fs-5" id="staticBackdropLabel">Event's Detail</h1>
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

  <!-- Event JS Script -->
  <?php include(APPPATH . 'views/event/event_js.php'); ?>
  <!-- Event JS Script -->

  <script>
    $(document).on('click', '.RemoveEvent', function() {

      if (confirm("Are you sure to Remove This Event?")) {


        var event_id = $(this).attr('data-id');

        //alert(rm_id);return false;
        $.ajax({

          url: "<?php echo base_url(); ?>Events/RemoveEvent",
          method: "POST",
          data: {
            "event_id": event_id
          },
          success: function(res) {
            //alert(res);return false;
            if (res == 1) {
              alert("Event Deleted Successfully!!");
              location.reload();
            } else {
              alert("Try Again!!");
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
    $(document).on('click', '.ModifyEvent', function() {

      var event_id = $(this).attr('data-id');
      //var rm_id = $(this).attr("id");
      //alert(rm_id);return false;
      $.ajax({

        url: "<?php echo base_url(); ?>Events/View_SingleEvent",
        method: "POST",
        data: {
          "event_id": event_id
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
   /*  $(document).on('click', '#recordsearch', function() {

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
    }); */
  </script>





</body>

</html>