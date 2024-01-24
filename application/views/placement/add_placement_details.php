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
                  Add Placement Details



                  <a href="<?php echo base_url(); ?>Placement/ViewList" class="m-1 btn btn-sm btn-outline-danger pull_right"> <i class="fa fa-arrow-left"></i> Back</a>



                </div>
                <div class="card-body">

                  <?php if ($this->session->userdata['user_role'] == 1 or $this->session->userdata['user_role'] == 2 or $this->session->userdata['user_role'] == 3) { ?>

                    <!-- <div class="alert alert-info">
                    <p > Note : (1) File Size must be less than 2 MB. (2) Only jpg,png,pdf File type Accepted.</p>
                    </div> -->

                    <form action="<?php echo base_url(); ?>Placement/Add_DetailSave" method="post" enctype="multipart/form-data">
                      <div class="row">


                        <div class="col-md-4 col-sm-6 mb-3">
                          <label for="year" class="form-label">Year<span class="text-danger">*</span></label>
                          <select class="form-select CmnCls" aria-label="Default select example" name="year" id="year">
                          <option value="0"> Select Year</option>
                            <?php foreach ($year_data as $dd) {
                              extract($dd); ?>
                              <option value="<?php echo $dd['year_title'] ?>"><?php echo $dd['year_title']; ?></option>
                            <?php } ?>
                          </select>
                          <span id="year_error" class="text-danger ErrorMsg"></span>
                        </div>

                        <div class="col-md-4 col-sm-6 mb-3">
                          <label for="company" class="form-label">Recruiter/Company Name<span class="text-danger">*</span></label>
                          <select class="form-select CmnCls" aria-label="Default select example" name="company" id="company">
                            <option value="0"> Select Recruiter/Company</option>

                            <?php foreach ($recruiters_data as $dd) {
                              extract($dd); ?>
                              <option value="<?php echo $dd['rm_id'] ?>"><?php echo $dd['name_of_company']; ?></option>
                            <?php } ?>
                          </select>
                          <span id="company_error" class="text-danger ErrorMsg"></span>

                        </div>

                        <div class="col-md-4 col-sm-6 mb-3">
                          <label for="course" class="form-label">Course Name<span class="text-danger">*</span></label>
                          <select class="form-select CmnCls" aria-label="Default select example" name="course" id="course">
                          <option value="0"> Select Course Name</option>

                            <?php foreach ($course_data as $dd) {
                              extract($dd); ?>
                              <option value="<?php echo $dd['course_id'] ?>"><?php echo $dd['course_name']; ?></option>
                            <?php } ?>
                          </select>
                          <span id="course_error" class="text-danger ErrorMsg"></span>

                        </div>

                        <div class="col-md-4 col-sm-6 mb-3">
                          <label for="total_appears" class="form-label">Total Appears<span class="text-danger">*</span></label>
                          <input type="number" class="form-control CmnCls NumberVelidate" id="total_appears" name="total_appears" aria-describedby="total_appears" min="0" onKeyPress="if(this.value.length==10) return false;" value="<?php echo $rd['total_appears']; ?>" />
                          <span id="total_appears_error" class="text-danger ErrorMsg"></span>
                        </div>

                        <div class="col-md-4 col-sm-6 mb-3">
                          <label for="no_of_placed" class="form-label">Number of Placed<span class="text-danger">*</span></label>
                          <input type="number" class="form-control CmnCls NumberVelidate" id="no_of_placed" name="no_of_placed" aria-describedby="no_of_placed" min="0" onKeyPress="if(this.value.length==10) return false;" value="<?php echo $rd['no_of_placed']; ?>" />
                          <span id="no_of_placed_error" class="text-danger ErrorMsg"></span>
                        </div>


                        <div class="form-group mb-0 ">

                          <button type="submit" class="btn btn-sm btn-success" name="add_details" id="add_details" value="1">Add Placement Details</button>

                        </div>
                      </div>
                    </form>

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

  <?php include(APPPATH . 'views/placement/placement_js.php'); ?>

</body>

</html>