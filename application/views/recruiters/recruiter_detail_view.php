<?php foreach ($recruiters_data as $rd) {
  extract($rd);
} ?>
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
              <?php if(!empty($recruiters_data)) { ?>
              <div class="card mb-4">
                <div class="card-header">
                  <i class="fa-solid fa-grip me-1"></i>
                  Recruiter's Details

                  <a href="<?php echo base_url(); ?>Placement/RecruitersList" class="btn btn-sm btn-outline-danger pull_right"> <i class="fa fa-arrow-left"></i> Back</a>
                </div>
                <div class="card-body">

                  <div class="table-responsive">
                    <table class="table table-bordered table-sm ">


                      <tr>
                        <th><label class="form-label">Society Name</label></th>
                        <td><?php echo ucwords($rd['Society_Name']); ?></td>

                        <th><label class="form-label">Institute Name</label></th>
                        <td><?php echo $rd['Institute_Name']; ?></td>
                      </tr>

                      <tr>
                        <th><label class="form-label">Institute Short Code</label></th>
                        <td><?php echo ucwords($rd['Short_Code']); ?></td>

                        <th><label class="form-label">Course Name</label></th>
                        <td><?php echo $rd['Course_Name']; ?></td>
                      </tr>

                      <tr>
                        <th><label class="form-label">Request Date</label></th>
                        <td><?php if ($rd['Request_Date'] != "") echo date("d-m-Y", strtotime($rd['Request_Date'])) ?></td>

                          <th><label class="form-label">Institute Status</label></th>
                          <?php if ($rd['Is_Map'] == 1) { ?>
                            <td><?php echo "Accepted"; ?></td>
                          <?php } else if ($rd['Is_Map'] == 0) { ?>
                            <td> <?php if ($this->session->userdata['Office_Type_Id'] == 304) {
                                    echo "Rejected";
                                  } else {
                                    echo "Pending";
                                  } ?> </td>
                        <?php } ?>
                      </tr>

                      <tr>
                        <th> <label class="form-label">Contact Person Name</label></th>
                        <td><?php echo $rd['Contact_Person']; ?></td>

                        <th><label class="form-label">Contact No</label></th>
                        <td><?php echo $rd['Contact_No']; ?></td>
                      </tr>

                      <tr>
                        <th> <label class="form-label">Email Id</label></th>
                        <td><?php echo $rd['Email_Id']; ?></td>
                      </tr>


                      <tr>
                        <th><label class="form-label">Resolution File</label></th>
                        <td>
                          <?php if ($rd['Resolution_File'] != "") { ?>
                            <a href="<?= base_url() ?>./assets/registration/<?= $rd['Resolution_File'] ?>" title="Click Here To Download" target="_blank"> <i class="fa fa-download"></i> Download File</a>
                          <?php } else { ?>
                            --
                          <?php } ?>
                        </td>
                        <th><label class="form-label">Society Registration File</label> </th>

                        <td>
                          <?php if ($rd['Society_Registration_File'] != "") { ?>
                            <a href="<?= base_url() ?>./assets/registration/<?= $rd['Society_Registration_File'] ?>" title="Click Here To Download" target="_blank"> <i class="fa fa-download"></i> Download File</a>
                          <?php } else { ?>
                            --
                          <?php } ?>
                        </td>
                      </tr>


                      <?php if($rd['User_Name'] !='') { ?>
                       <tr>
                        <th colspan="4">
                        <h5 class="h5_heading"> User Details</h5></th>
                       </tr>

                      <tr>
                        <th> <label class="form-label">Username</label></th>
                        <td><?php echo $rd['User_Name']; ?></td>

                        <th> <label class="form-label">Password</label></th>
                        <td><?php echo $rd['Password']; ?></td>
                      </tr>
                      <?php } ?>




                    </table>
                  </div>

                  <?php if ($this->session->userdata('Office_Type_Id') == 303 and $rd['Is_Map'] == '') { ?>

                  <h5 class="h5_heading"> Action</h5>

                  <form class="row g-3" action="<?php echo base_url(); ?>dte/Ins_Registration/Ins_StatusSave" method="POST" enctype="multipart/form-data">
                    <input type="hidden" class="form-control" id="Temp_Request_ID" name="Temp_Request_ID" value="<?php echo $rd['Temp_Request_ID']; ?>">

                    <div class="col-md-3">
                      <label for="inputState" class="form-label"> Status</label>
                    </div>
                    <div class="col-md-9">
                      <select id="Is_Map" name="Is_Map" class="form-select mandatory w-25">
                      <option value="">Select Status </option>
                      <option value="1">Accept </option>
                      <option value="2">Reject </option>
                      </select>

                    </div>


                    <div class="col-md-3">
                      <label for="Total_Fees" class="form-label">Remark</label>
                    </div>
                    <div class="col-md-9">
                      <textarea name="Verification_remark" id="Verification_remark" class="form-control mandatory"></textarea>
                      <div class="Verification_remark_msg"> </div>
                    </div>

                    <div class="col-md-3">
                    </div>

                    <div class="col-md-9">
                      <input type="button" value="Save & Continue" id="btn-disable" class="btn btn-success btn-sm submit2" onclick="saveData(); oneclick();">
                      <input type="submit" style="display:none;" id="submit_main">
                    </div>
                  </form>

                  <?php } ?>






                </div>
              </div>


              <?php } else { ?>
              <p class="text-center pt-2"> Data Not Found</p>
              <?php } ?>


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
		//validation for Verify Remark
		$('#Verification_remark').on('input', function() {

			var Verification_remark = $(this).val();
			var validName = /^[A-Za-z0-9 _.-]+$/;

			if (Verification_remark.length == 0) {

				$('.Verification_remark_msg').empty();
				$(this).addClass('valid-input').removeClass('invalid-input');
				return false;

			} else if (Verification_remark.length > 100) {

				//$("#Verification_remark").prop("disabled", "disabled");
				jQuery('#Verification_remark').bind('keypress', function(e) {
					e.stopPropagation();
				});
				$('.Verification_remark_msg').addClass('invalid-msg').text('Accepted Maximum 100 Characters');
				$(this).addClass('invalid-input').removeClass('valid-input');
				return false;

			} else if (!validName.test(Verification_remark)) {

				$('.Verification_remark_msg').addClass('invalid-msg').text('Only characters & Whitespace are allowed');
				$(this).addClass('invalid-input').removeClass('valid-input');
				return false;

			} else {
				$('.Verification_remark_msg').empty();
				$(this).addClass('valid-input').removeClass('invalid-input');
				return false;
			}
		});

		$(document).ready(function() {
			/* $("#btn-disable").click(function() {
				if (!validName.test(Verification_remark)) {
				$('.Verification_remark_msg').addClass('invalid-msg').text('Only characters & Whitespace are allowed');
				$(this).addClass('invalid-input').removeClass('valid-input');
				return false;

				}
			}); */

			jQuery(document).ready(function() {
				setTimeout(function() {
					$(".flashhide").hide();

					<?php unset($_SESSION["message"]); ?>
				}, 5000);
			});


			$(document).ready(function() {
				$(".messageshow").hide();
				$('#btn-disable').click(function(e) {
					var isValid = true;
					$('.mandatory').each(function() {
						if ($.trim($(this).val()) == '') {
							isValid = false;
							$(this).css({
								"border": "1px solid red",
								"width": "50px !important"
							});


							$(this).nextAll('.messageshow:first').show();
						} else {
							$(this).css({
								"border": "",
								"background": ""
							});
							$(this).nextAll('.messageshow:first').hide();
						}
					});
					if (isValid == false) {
						e.preventDefault();
					} else {

						$("#submit_main").click();
					}

				});
			});



		});
	</script>





</body>

</html>