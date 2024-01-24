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

                  <!-- <a href="<?php echo base_url(); ?>Events" class="m-1 btn btn-sm btn-outline-success pull_right "> <i class="fa fa-plus"></i> Add Event</a> -->

                </div>
                <div class="card-body">

                  <?php if ($this->session->userdata['user_role'] == 1 or $this->session->userdata['user_role'] == 2 or $this->session->userdata['user_role'] == 6) { ?>

                    <p class="text-danger"> Note : (1) File Size must be less than 2 MB. (2) Only jpg,png,pdf File type Accepted.</p>
  <hr>

                    <form action="<?php echo base_url(); ?>Events/Add_EventSave" method="post" enctype="multipart/form-data">
                      <div class="row">

                        <div class="col-md-4 col-sm-4 mb-3">
                          <label for="event_title" class="form-label ">Event Title</label>
                          <input type="text" class="form-control NameVelidate" id="event_title" name="event_title" aria-describedby="event_title" maxlength="150">
                          <span id="event_title_error" class="text-danger ErrorMsg"></span>

                        </div>
                        <div class="col-md-4 col-sm-6 mb-3">
                          <label for="event_date" class="form-label">Event Date</label>
                          <input type="date" class="form-control" id="event_date" name="event_date">
                          <span id="event_date_error" class="text-danger ErrorMsg"></span>
                        </div>

                        <div class="col-md-4 col-sm-6 mb-3">
                          <label for="published_date" class="form-label">Published Date</label>
                          <input type="date" class="form-control" id="published_date" name="published_date">
                          <span id="published_date_error" class="text-danger ErrorMsg"></span>
                        </div>



                        <div class="col-md-6 col-sm-6 mb-3">
                          <label for="venue" class="form-label">Venue<span class="text-danger">*</span></label>
                          <textarea type="text" class="form-control" id="venue" name="venue" maxlength="250"></textarea>
                          <span id="venue_error" class="text-danger ErrorMsg"></span>
                        </div>

                        <div class="col-md-6 col-sm-6 mb-3">
                          <label for="event_description" class="form-label">Event Description<span class="text-danger">*</span></label>
                          <textarea type="text" class="form-control" id="event_description" name="event_description" maxlength="250"></textarea>
                          <span id="event_description_error" class="text-danger ErrorMsg"></span>
                        </div>

                        <div class="col-md-6 col-sm-6 mb-3">
                          <label for="" class="form-label">Upload Brochure</label>
                          <input type="file" class="form-control " id="upload_brochure" name="upload_brochure" accept=".jpg,.png,.pdf">
                          <span id="upload_brochure_error" class="text-danger ErrorMsg"></span>
                        </div>
                        <div class="col-md-6 col-sm-6 mb-3">
                          <label for="" class="form-label">Upload Event Image</label>
                          <input type="file" class="form-control " id="event_invite" name="event_invite" accept=".jpg,.png">
                          <span id="event_invite_error" class="text-danger ErrorMsg"></span>
                        </div>

                        <div class="form-group mb-0 ">

                          <button type="submit" class="btn btn-sm btn-success" name="add_event" id="add_event" value="1">Add Event</button>

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

  <!-- Event JS Script -->
  <?php include(APPPATH . 'views/event/event_js.php'); ?>
  <!-- Event JS Script -->





</body>

</html>