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
                  Campus Drive



                  <a href="<?php echo base_url(); ?>CampusDrive" class="m-1 btn btn-sm btn-outline-danger pull_right"> <i class="fa fa-arrow-left"></i> Back</a>

                  <!-- <a href="<?php echo base_url(); ?>Events" class="m-1 btn btn-sm btn-outline-success pull_right "> <i class="fa fa-plus"></i> Add Event</a> -->

                </div>
                <div class="card-body">

                  <?php if ($this->session->userdata['user_role'] == 1 or $this->session->userdata['user_role'] == 2 or $this->session->userdata['user_role'] == 7) { ?>

                    <div class="alert alert-info">
                    <p > Note : (1) File Size must be less than 2 MB. (2) Only jpg,png,pdf File type Accepted.</p>
                    </div>


                    <form action="<?php echo base_url(); ?>CampusDrive/Add_CampusSave" method="post" enctype="multipart/form-data">
                      <div class="row">

                        <div class="col-md-4 col-sm-4 mb-3">
                          <label for="campus_title" class="form-label ">Title<span class="text-danger">*</span></label>
                          <input type="text" class="form-control CmnCls NameVelidate" id="campus_title" name="campus_title" aria-describedby="campus_title" maxlength="100">
                          <span id="campus_title_error" class="text-danger ErrorMsg"></span>

                        </div>
                        <div class="col-md-4 col-sm-6 mb-3">
                          <label for="campus_date" class="form-label">Campus Drive Date<span class="text-danger">*</span></label>
                          <input type="date" class="form-control CmnCls" id="campus_date" name="campus_date">
                          <span id="campus_date_error" class="text-danger ErrorMsg"></span>
                        </div>

                        <div class="col-md-4 col-sm-6 mb-3">
                          <label for="" class="form-label">Upload File</label>
                          <input type="file" class="form-control " id="campus_attachment" name="campus_attachment" accept=".jpg,.png,.pdf">
                          <span id="campus_attachment_error" class="text-danger ErrorMsg"></span>
                        </div>

                        <div class="col-md-6 col-sm-6 mb-3">
                          <label for="campus_details" class="form-label">Venue<span class="text-danger">*</span></label>
                          <textarea type="text" class="form-control CmnCls" id="campus_details" name="campus_details" maxlength="250" rows="3"></textarea>
                          <span id="campus_details_error" class="text-danger ErrorMsg"></span>
                        </div>

                        <div class="col-md-6 col-sm-6 mb-3">
                          <label for="campus_description" class="form-label">Campus Description<span class="text-danger">*</span></label>
                          <textarea type="text" class="form-control CmnCls" id="campus_description" name="campus_description" maxlength="250" rows="3"></textarea>
                          <span id="campus_description_error" class="text-danger ErrorMsg"></span>
                        </div>



                        <div class="col-md-4 col-sm-6 mb-3">
                          <label for="contact_person" class="form-label"> Contact Person Name <span class="text-danger">*</span></label>
                          <input type="text" class="form-control CmnCls NameVelidate" id="contact_person" name="contact_person" aria-describedby="contact_person" value="<?php echo $rd['contact_person']; ?>" maxlength="80" />
                          <span id="contact_person_error" class="text-danger ErrorMsg"></span>

                        </div>

                        <div class="col-md-4 col-sm-6 mb-3">
                          <label for="email" class="form-label">Email<span class="text-danger">*</span></label>
                          <input type="email" class="form-control CmnCls" id="email" name="email" aria-describedby="email" value="<?php echo $rd['email']; ?>" maxlength="80" />
                          <span id="email_error" class="text-danger ErrorMsg"></span>

                        </div>

                        <div class="col-md-4 col-sm-6 mb-3">
                          <label for="contact_person_mobile" class="form-label">Mobile Number<span class="text-danger">*</span></label>
                          <input type="number" class="form-control CmnCls NumberVelidate" id="contact_person_mobile" name="contact_person_mobile" aria-describedby="contact_person_mobile" min="0" onKeyPress="if(this.value.length==10) return false;" value="<?php echo $rd['contact_person_mobile']; ?>" /><span Class="small text-danger"> <b>Ex : 98931XXXXX</b> </span>
                          <span id="mobile_error" class="text-danger ErrorMsg"></span>

                        </div>




                        <div class="form-group mb-0 ">

                          <button type="submit" class="btn btn-sm btn-success" name="add_campus" id="add_campus" value="1">Add Campus Details</button>

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
                      <h1 class="modal-title fs-5" id="staticBackdropLabel">Campus</h1>
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

  <?php include(APPPATH . 'views/campus/campus_js.php'); ?>

  <script>
    var file_regex = new RegExp(/[^\s]+(.*?).(pdf|PDF|jpg|png)$/);

//validation for Resolution Passed File
$('#campus_attachment').on('change', function () {

var campus_attachment = $(this).val();
var file_size = $('#campus_attachment')[0].files[0].size;

	if(file_size>2097152) {
	$("#campus_attachment").css('border','2px solid #ec000069');
	$('#campus_attachment_error').text('Not allowed more than 2 MB');
    $(this).replaceWith($(this).val('').clone(true));
	}
  else  if(!file_regex.test(campus_attachment)){
  $("#campus_attachment").css('border','2px solid #ec000069');
    $('#campus_attachment_error').text('Only pdf|jpg|png File Accepted');
    $(this).replaceWith($(this).val('').clone(true));
   }
else
{
$("#campus_attachment").css('border', '1px solid #cacfe7');
$("#campus_attachment_error").text('');
}
});
  </script>

</body>

</html>