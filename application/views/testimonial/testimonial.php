<?php foreach($student_data as $sd) { extract($sd);}?>
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
                  Add Testimonial



                  <a href="<?php echo base_url(); ?>Student" class="m-1 btn btn-sm btn-outline-danger pull_right"> <i class="fa fa-arrow-left"></i> Back</a>

                  <!-- <a href="<?php echo base_url(); ?>Events" class="m-1 btn btn-sm btn-outline-success pull_right "> <i class="fa fa-plus"></i> Add Event</a> -->

                </div>
                <div class="card-body">

                    <form action="<?php echo base_url(); ?>Student/Add_TestimonialSave" method="post" enctype="multipart/form-data">
                      <div class="row">

                        <div class="col-md-12 col-sm-12">
                          <input type="hidden" name="student_id" id="student_id" value="<?php echo $this->session->userdata('user_id');?>">
                          <input type="hidden" name="tm_id" id="tm_id" value="<?php echo $tm_id;?>">
                        </div>
                        <!-- <div class="col-md-5 col-sm-5 mb-3">
                          <label for="cr_designation" class="form-label ">Designation</label>
                          <input type="text" class="form-control NameVelidate" id="cr_designation" name="cr_designation" aria-describedby="cr_designation" maxlength="150" value="<?php echo $cr_designation;?>">
                          <span id="cr_designation_error" class="text-danger ErrorMsg"></span>

                        </div> -->

                        <!-- <div class="col-md-7 col-sm-7 mb-3"></div> -->


                        <!-- <div class="col-md-6 col-sm-6 mb-3">
                          <label for="current_location" class="form-label">Current Location<span class="text-danger">*</span></label>
                          <textarea type="text" class="form-control" id="current_location" name="current_location" maxlength="250"><?php echo $current_location;?></textarea>
                          <span id="current_location_error" class="text-danger ErrorMsg"></span>
                        </div> -->

                        <div class="col-md-6 col-sm-6 mb-3">
                          <label for="testimoni_description" class="form-label">Description<span class="text-danger">*</span></label>
                          <textarea type="text" class="form-control" id="testimoni_description" name="testimoni_description" maxlength="250"><?php echo $testimoni_description;?></textarea>
                          <span id="testimoni_description_error" class="text-danger ErrorMsg"></span>
                        </div>


                        <div class="form-group mb-0 ">

                          <button type="submit" class="btn btn-sm btn-success" name="add_event" id="add_event" value="1">Add Testimonial</button>

                        </div>
                      </div>
                    </form>
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
                    <div class="modal-header">
                      <h1 class="modal-title fs-5" id="staticBackdropLabel">Event</h1>
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
  <?php include(APPPATH . 'views/testimonial/testimonial_js.php'); ?>
  <!-- Event JS Script -->





</body>

</html>