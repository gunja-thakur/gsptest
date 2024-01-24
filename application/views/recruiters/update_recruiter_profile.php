<?php foreach ($recruiters_details as $rd) {
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

                    <?php if ($this->session->flashdata('message')) { ?>
                        <div class="alert alert-success flashhide">
                            <?php echo $this->session->flashdata('message') ?>
                        </div>
                    <?php } ?>

                    <!------------------Candidate Registration List ---------------------------------->


                    <div class="card mb-4">
                        <div class="card-header"> Company Profile <a href="<?php echo base_url(); ?>Home" class="btn btn-sm btn-outline-success pull_right"> <i class="fa fa-arrow-left "></i> Back</a>
                        </div>
                        <div class="card-body">
                            <div class="row mb-5">

                            <div class="col-lg-12 mb-3">
                                    <div class="profile_boxed">
                                        <div class="profile_cover">
                                            <div class="profile_intro">
                                                <h3 class="" id=""><?php echo $rd['name_of_company']; ?></h3>
                                                <h5>
                                                    Year of Inception - <?php echo $rd['year_of_inception']; ?>
                                                </h5>
                                            </div>
                                            <!-- <div class="back_btn">
                                                <a href="<?php echo base_url(); ?>Recruiters/Update_CompanyProfile" class="btn btn-sm btn-outline-success "> <i class="fa fa-edit "></i> Update Company Profile</a>
                                            </div> -->
                                        </div>
                                        <div class="profile_tabledetails">
                                            <div class="table-responsive">
                                                <table class="table table-bordered">


                                                    <tr>
                                                        <th><label class="form-label">Website</label></th>
                                                        <td><?php echo $rd['website']; ?></td>

                                                        <th><label class="form-label">Type of Company</label></th>
                                                        <td><?php echo $rd['type_title']; ?></td>
                                                    </tr>
                                                    <tr>
                                                        <th><label class="form-label">Nature of Business</label></th>
                                                        <td><?php echo $rd['business_title']; ?></td>

                                                        <th><label class="form-label">GST/TIN Number</label></th>
                                                        <td><?php echo $rd['gst_tin_number']; ?></td>
                                                    </tr>
                                                    <tr>
                                                        <th><label class="form-label">Affiliation</label></th>
                                                        <?php if ($rd['affiliation'] == 1) { ?>
                                                            <td><?php echo "In-House HR"; ?></td>
                                                        <?php } else if ($rd['affiliation'] == 0) { ?>
                                                            <td><?php echo "RPO (Recruitment Process Outsourcing) personnel"; ?></td>
                                                        <?php } ?>

                                                        <th><label class="form-label">In-House HR Name</label></th>
                                                        <td><?php echo $rd['inhouse_hr_name']; ?></td>
                                                    </tr>
                                                    <tr>
                                                        <th><label class="form-label">Mobile</label></th>
                                                        <td><?php echo $rd['mobile']; ?></td>

                                                        <th><label class="form-label">Alternate Mobile</label></th>
                                                        <td><?php echo $rd['alternate_mobile']; ?></td>
                                                    </tr>
                                                    <tr>
                                                        <th><label class="form-label">Email</label></th>
                                                        <td><?php echo $rd['email']; ?></td>

                                                        <th><label class="form-label">Alternate Email</label></th>
                                                        <td><?php echo $rd['alternate_email']; ?></td>
                                                    </tr>
                                                    <tr>
                                                        <th><label class="form-label">Postal Code</label></th>
                                                        <td><?php echo $rd['postal_code']; ?></td>

                                                        <th><label class="form-label">Declaration</label></th>
                                                        <?php if ($rd['diclaration_YN'] == 1) { ?>
                                                            <td><?php echo "Yes"; ?></td>
                                                        <?php } else if ($rd['diclaration_YN'] == 0) { ?>
                                                            <td><?php echo "No"; ?></td>
                                                        <?php } ?>

                                                    </tr>

                                                    <tr>
                                                        <th><label class="form-label">Does your company have an office at MP?</label></th>
                                                        <td> <?php if ($rd['office_iitm_YN'] == 1) { ?>
                                                                <?php echo "Yes"; ?>
                                                            <?php } else if ($rd['office_iitm_YN'] == 0) { ?>
                                                                <?php echo "No"; ?>
                                                            <?php } ?></td>

                                                        <th><label class="form-label">Are you a registered company in India?</label></th>
                                                        <td><?php if ($rd['registerd_company_YN'] == 1) { ?>
                                                                <?php echo "Yes"; ?>
                                                            <?php } else if ($rd['registerd_company_YN'] == 0) { ?>
                                                                <?php echo "No"; ?>
                                                            <?php } ?></td>
                                                    </tr>

                                                    <tr>
                                                    <th><label class="form-label">Address</label></th>
                                                    <td colspan="3"><?php echo $rd['address']; ?></td>
                                                    </tr>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-12 mb-3">
                                <h3 class="h3style_heading"> Update Recruiter's Contact Information</h3>

                                <form action="<?php echo base_url(); ?>Recruiters/UpdateRecruiter" method="post" class="mt-3">
							<div class="row align-items-center">
                                <input type="hidden" name="rm_id" id="rm_id" value="<?php echo $rd['rm_id'];?>">

								<div class="col-md-4 col-sm-6 mb-3">
									<label for="inhouse_hr_name" class="form-label"> Name of In-House HR<span class="text-danger">*</span></label>
									<input type="text" class="form-control NameVelidate" id="inhouse_hr_name" name="inhouse_hr_name" aria-describedby="inhouse_hr_name" value="<?php echo $rd['inhouse_hr_name'];?>" maxlength="50"/>
									<span id="inhouse_hr_name_error" class="text-danger ErrorMsg"></span>

								</div>

								<div class="col-md-4 col-sm-6 mb-3">
									<label for="designation" class="form-label">Designation<span class="text-danger">*</span></label>
									<select class="form-select" aria-label="Default select example" name="designation" id="designation">

										<?php foreach ($designation_data as $dd) {
										    extract($dd); ?>
											<option value="<?php echo $dd['designation_id'] ?>" <?php if($dd['designation_id']==$rd['designation']){ echo "selected";} ?>><?php echo $dd['designation_name']; ?></option>
										<?php } ?>

									</select>
									<span id="designation_error" class="text-danger ErrorMsg"></span>

								</div>


								<div class="col-md-4 col-sm-6 mb-3">
									<label for="email" class="form-label">Email<span class="text-danger">*</span></label>
									<input type="email" class="form-control " id="email" name="email" aria-describedby="email" value="<?php echo $rd['email'];?>" maxlength="80"/>
									<span id="email_error" class="text-danger ErrorMsg"></span>

								</div>

								<div class="col-md-4 col-sm-6 mb-3">
									<label for="alternate_email" class="form-label">Alternate Email</label>
									<input type="email" class="form-control " id="alternate_email" name="alternate_email" value="<?php echo $rd['alternate_email'];?>" aria-describedby="alternate_email" maxlength="80"/>
									<span id="alternate_email_error" class="text-danger ErrorMsg"></span>

								</div>

								<div class="col-md-4 col-sm-6 mb-3">
									<label for="mobile" class="form-label">Mobile<span class="text-danger">*</span></label>
									<input type="number" class="form-control NumberVelidate" id="mobile" name="mobile" aria-describedby="mobile"  min="0" onKeyPress="if(this.value.length==10) return false;" value="<?php echo $rd['mobile'];?>"/><span Class="small text-danger" > <b>Ex : 98931XXXXX</b> </span>
									<span id="mobile_error" class="text-danger ErrorMsg"></span>

								</div>

								<div class="col-md-4 col-sm-6 mb-3">
									<label for="alternate_mobile" class="form-label">Alternate Mobile</label>
									<input type="number" class="form-control NumberVelidate" id="alternate_mobile" name="alternate_mobile" aria-describedby="alternate_mobile" min="0" onKeyPress="if(this.value.length==10) return false;" value="<?php echo $rd['alternate_mobile'];?>" /><span Class="small text-danger" > <b>Ex : 98931XXXXX</b> </span>
									<span id="alternate_mobile_error" class="text-danger ErrorMsg"></span>

								</div>

								<div class="col-md-4 col-sm-6 mb-3">
									<label for="postal_code" class="form-label">Postal Code<span class="text-danger">*</span></label>
									<input type="number" class="form-control NumberVelidate" id="postal_code" name="postal_code" aria-describedby="postal_code" min="0" onKeyPress="if(this.value.length==6) return false;" value="<?php echo $rd['postal_code'];?>" />
									<span id="postal_code_error" class="text-danger ErrorMsg"></span>

								</div>

								<div class="col-md-8 col-sm-8 mb-3">
									<label for="address" class="form-label">Address<span class="text-danger">*</span></label>
									<textarea type="text" class="form-control" id="address" name="address" maxlength="250"><?php echo $rd['address'];?></textarea>
									<span id="address_error" class="text-danger ErrorMsg"></span>
								</div>



								<div class="col-md-12 mb-3">
									<div class="mb-3 actions">
										<button class="btn btn-sm btn-success" name="update_details" id="update_details" value="1" type="submit">Update Profile</button>
									</div>
								</div>

							</div>
						</form>

                                </div>
                            </div>

                        </div>
                    </div>

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
                                    <h1 class="modal-title fs-5" id="exampleModalLabel">Event Details</h1>
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

    <script type="text/javascript">

            $("#email").keypress(function () {
			var email = $("#email").val();
            //Regex for Valid Characters i.e. Numbers.
            var email_valid = /^([\w-\.]+)@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.)|(([\w-]+\.)+))([a-zA-Z]{2,4}|[0-9]{1,3})(\]?)$/;

        if(!email_valid.test(email))
		{
		$("#email").focus();
		//alert('Please Enter a Valid Email Address!');
		$("#email").css('border','2px solid #ec000069');
		$("#email_error").text('Please Enter Valid Email Address!');

		}
        else{

		$("#email").css('border', '1px solid #cacfe7');
        $("#email_error").text('');
        }
        });

        $("#alternate_email").keypress(function () {
			var alternate_email = $("#alternate_email").val();
            //Regex for Valid Characters i.e. Numbers.
            var email_valid = /^([\w-\.]+)@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.)|(([\w-]+\.)+))([a-zA-Z]{2,4}|[0-9]{1,3})(\]?)$/;

        if(!email_valid.test(alternate_email))
		{
		$("#alternate_email").focus();
		//alert('Please Enter a Valid Email Address!');
		$("#alternate_email").css('border','2px solid #ec000069');
		$("#alternate_email_error").text('Please Enter Valid Email Address!');

		}
        else{

		$("#alternate_email").css('border', '1px solid #cacfe7');
        $("#alternate_email_error").text('');
        }
        });



    /*$("#update_details").click(function() {
        var email = $("#email").val();
		var alternate_email = $("#alternate_email").val();

        var email_valid = /^([\w-\.]+)@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.)|(([\w-]+\.)+))([a-zA-Z]{2,4}|[0-9]{1,3})(\]?)$/;

        if(!email_valid.test(email))
		{

		$("#email").focus();
		//alert('Please Enter a Valid Email Address!');
		$("#email").css('border','2px solid #ec000069');
		$("#email_error").text('Please Enter Valid Email Address!');
		return false;
		}

		$("#email").css('border', '1px solid #cacfe7');
        $("#email_error").text('');

        if(!email_valid.test(alternate_email))
		{

		$("#alternate_email").focus();
		//alert('Please Enter a Valid Email Address!');
		$("#alternate_email").css('border','2px solid #ec000069');
		$("#alternate_email_error").text('Please Enter Valid Email Address!');
		return false;
		}

		$("#alternate_email").css('border', '1px solid #cacfe7');
        $("#alternate_email_error").text('');


    });*/
</script>
</body>

</html>