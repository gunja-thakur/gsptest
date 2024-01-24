<!DOCTYPE html>
<html lang="hi">

<head>

<?php include(APPPATH . 'views/frontend/web_include/placement_head.php'); ?>
</head>

<body class="">
	<header class="header_inner">
	<?php include(APPPATH . 'views/frontend/web_include/placement_header.php'); ?>
	</header>

	<section class="page_banner">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<!-- <div class="page_navigation">
         <h1 class="page_title">About GSP </h1>
         <ol class="breadcrumb">
            <li><a href="#"><i class="bi bi-house-door"></i> Home</a></li>
            <li> About SSR-GSP </li>
         </ol>
      </div> -->
				</div>
			</div>
		</div>
	</section>


	<div class="login_section mt-5">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-lg-12 mb-3">
					<div class="registration_form_view">
						<div class="upper_head">
							<h4> Recruiter/Company Registration </h4>
						</div>

						<form action="<?php echo base_url(); ?>Recruiters/SaveRecruiters" method="post" enctype="multipart/form-data">
							<div class="row align-items-center">
								<div class="col-md-4 col-sm-6 mb-3">
									<label for="name_of_company" class="form-label">Recruiter/Company Name <span class="text-danger">*</span></label>
									<input type="text" class="form-control CmnCls NameVelidate" id="name_of_company" name="name_of_company" aria-describedby="name_of_company" maxlength="100"/>
									<span id="name_of_company_error" class="text-danger ErrorMsg"></span>

								</div>

								<div class="col-md-4 col-sm-6 mb-3">
									<label for="ForSelect" class="form-label">Year of Inception<span class="text-danger">*</span></label>
									<select class="form-select CmnCls" aria-label="Default select example" name="year_of_inception" id="year_of_inception">
										<option value="0">Select Year of Inception </option>

										<?php foreach ($year_data as $cd) {
													extract($cd); ?>
											<option value="<?php echo $cd['year_title'] ?>"><?php echo $cd['year_title']; ?></option>
										<?php } ?>

									</select>
									<span id="year_of_inception_error" class="text-danger ErrorMsg"></span>

								</div>
								<div class="col-md-4 col-sm-6 mb-3">
									<label for="website" class="form-label">Website<span class="text-danger">*</span></label>
									<input type="text" class="form-control CmnCls ValidWeb" id="website" name="website" aria-describedby="website" maxlength="100"/><span Class="small text-danger" > <b>Ex :www.example.com</b> </span><br>
									<span id="website_error" class="text-danger ErrorMsg"></span>

								</div>

								<div class="col-md-4 col-sm-6 mb-3">
									<label for="ForSelect" class="form-label">Type of Recruiter/Company<span class="text-danger">*</span></label>
									<select class="form-select CmnCls" aria-label="Default select example" name="type_of_company" id="type_of_company">
										<option value="0">Select Type </option>

										<?php foreach ($company_data as $cd) {
													extract($cd); ?>
											<option value="<?php echo $cd['type_id'] ?>"><?php echo $cd['type_title']; ?></option>
										<?php } ?>

									</select>
									<span id="type_of_company_error" class="text-danger ErrorMsg"></span>

								</div>

								<div class="col-md-4 col-sm-6 mb-3">
									<label for="ForSelect" class="form-label">Nature of Business<span class="text-danger">*</span></label>
									<select class="form-select CmnCls" aria-label="Default select example" name="nature_of_business" id="nature_of_business">
										<option value="0">Select Business </option>

										<?php foreach ($business_data as $cd) {
													extract($cd); ?>
											<option value="<?php echo $cd['b_id'] ?>"><?php echo $cd['business_title']; ?></option>
										<?php } ?>

									</select>
									<span id="nature_of_business_error" class="text-danger ErrorMsg"></span>

								</div>
								<div class="col-md-4 col-sm-6 mb-3">
									<label for="gst_tin_number" class="form-label">GST/TIN <span class="text-danger">*</span></label>
									<input type="text" class="form-control CmnCls" id="gst_tin_number" name="gst_tin_number" aria-describedby="gst_tin_number" onKeyPress="if(this.value.length==15) { alert('Not Allowed more than 15 Numbers!'); return false;}"/>
									<span id="gst_tin_number_error" class="text-danger ErrorMsg"></span>

								</div>

								<div class="col-md-4 col-sm-6 mb-3">
								<label for="" class="form-label">Company Logo</label>
								<input type="file" class="form-control CmnCls " id="company_image" name="company_image" accept=".jpg,.png">
								<span id="company_image_error" class="text-danger ErrorMsg"></span>
								</div>

								<div class="col-md-6 col-sm-6 mb-2">
									<!-- <div class="alert alert-light form_div"> -->
										<label for="affiliation" class="form-label d-block"> Select Your Affiliation<span class="text-danger">*</span></label>
										<div class="form-check form-check-inline">
											<input class="form-check-input affiliation CmnCls" type="radio" name="affiliation" id="InHouse" value="1">
											<label class="form-check-label" for="InHouse">In-House HR</label>
										</div>
										<div class="form-check form-check-inline">
											<input class="form-check-input affiliation CmnCls" type="radio" name="affiliation" id="RPO" value="2">
											<label class="form-check-label" for="RPO">RPO (Recruitment Process Outsourcing) personnel</label>
										</div>
										<br><span id="affiliation_error" class="text-danger ErrorMsg"></span>
									<!-- </div> -->

								</div>

								<div class="col-md-12">

									<h5 class="form_heading"> <span class=""> Recruiter Contact Information </span></h5>

								</div>

								<div class="col-md-4 col-sm-6 mb-3">
									<label for="inhouse_hr_name" class="form-label"> Name of In-House HR<span class="text-danger">*</span></label>
									<input type="text" class="form-control CmnCls NameVelidate" id="inhouse_hr_name" name="inhouse_hr_name" aria-describedby="inhouse_hr_name" maxlength="50"/>
									<span id="inhouse_hr_name_error" class="text-danger ErrorMsg"></span>

								</div>

								<div class="col-md-4 col-sm-6 mb-3">
									<label for="designation" class="form-label">Designation<span class="text-danger">*</span></label>
									<select class="form-select CmnCls" aria-label="Default select example" name="designation" id="designation">
										<option value="0">Select Designation </option>
										<?php foreach ($designation_data as $dd) {
													extract($dd); ?>
											<option value="<?php echo $dd['designation_id'] ?>"><?php echo $dd['designation_name']; ?></option>
										<?php } ?>

									</select>
									<span id="designation_error" class="text-danger ErrorMsg"></span>

								</div>


								<div class="col-md-4 col-sm-6 mb-3">
									<label for="email" class="form-label">Email<span class="text-danger">*</span></label>
									<input type="email" class="form-control CmnCls" id="email" name="email" aria-describedby="email" maxlength="80"/>
									<span id="email_error" class="text-danger ErrorMsg"></span>

								</div>

								<div class="col-md-4 col-sm-6 mb-3">
									<label for="alternate_email" class="form-label">Alternate Email</label>
									<input type="email" class="form-control CmnCls" id="alternate_email" name="alternate_email" aria-describedby="alternate_email" maxlength="80"/>
									<span id="alternate_email_error" class="text-danger ErrorMsg"></span>

								</div>

								<div class="col-md-4 col-sm-6 mb-3">
									<label for="mobile" class="form-label">Mobile<span class="text-danger">*</span></label>
									<input type="number" class="form-control CmnCls" id="mobile" name="mobile" aria-describedby="mobile" min="0" onKeyPress="if(this.value.length==10) return false;"/><span Class="small text-danger" > <b>Ex : 98931XXXXX</b> </span>
									<span id="mobile_error" class="text-danger ErrorMsg"></span>

								</div>

								<div class="col-md-4 col-sm-6 mb-3">
									<label for="alternate_mobile" class="form-label">Alternate Mobile</label>
									<input type="number" class="form-control CmnCls" id="alternate_mobile" name="alternate_mobile" aria-describedby="alternate_mobile" min="0" onKeyPress="if(this.value.length==10) return false;"/><span Class="small text-danger" > <b>Ex : 98931XXXXX</b> </span>
									<span id="alternate_mobile_error" class="text-danger ErrorMsg"></span>

								</div>



								<div class="col-md-4 col-sm-6 mb-3">
									<label for="postal_code" class="form-label">Postal Code<span class="text-danger">*</span></label>
									<input type="number" class="form-control CmnCls" id="postal_code" name="postal_code" aria-describedby="postal_code" min="0" onKeyPress="if(this.value.length==6) return false;"/>
									<span id="postal_code_error" class="text-danger ErrorMsg"></span>

								</div>

								<div class="col-md-8 col-sm-8 mb-3">
									<label for="address" class="form-label">Address<span class="text-danger">*</span></label>
									<textarea type="text" class="form-control CmnCls" id="address" name="address" maxlength="250" rows="1"></textarea>
									<span id="address_error" class="text-danger ErrorMsg"></span>
								</div>

								<!-- <div class="col-md-4 col-sm-6 mb-3">
									<label for="ForSelect" class="form-label">Qualification<span class="text-danger">*</span> </label>
									<select class="form-select CmnCls" aria-label="Default select example" name="qualification" id="qualification">
										<option value="0">Select Qualification </option>
										<option value="1">Diploma</option>
										<option value="2">Degree</option>
										<option value="3">ITI</option>
									</select>
								</div> -->

								<div class="col-md-12">
									<h5 class="form_heading"> Additional Information</h5>
								</div>

								<div class="col-md-6 col-sm-6 mb-3">
									<div class="alert alert-light form_div">
										<label for="office_iitm_YN" class="form-label d-block"> Does your company have an office in MP?<span class="text-danger">*</span> </label>
										<div class="form-check form-check-inline">
											<input class="form-check-input office_iitm CmnCls" type="radio" name="office_iitm_YN" id="office_iitm_Y" value="1">
											<label class="form-check-label" for="office_iitm_Y">Yes</label>
										</div>
										<div class="form-check form-check-inline">
											<input class="form-check-input office_iitm CmnCls" type="radio" name="office_iitm_YN" id="office_iitm_N" value="2">
											<label class="form-check-label" for="office_iitm_N">No</label>
										</div>
										<br><span id="office_iitm_YN_error" class="text-danger ErrorMsg"></span>
									</div>

								</div>
								<div class="col-md-6 col-sm-6 mb-3">
									<div class="alert alert-light form_div">
										<label for="registerd_company_YN" class="form-label d-block"> Are you a registered company in India?<span class="text-danger">*</span> </label>
										<div class="form-check form-check-inline">
											<input class="form-check-input rcompany CmnCls" type="radio" name="registerd_company_YN" id="registerd_company_Y" value="1">
											<label class="form-check-label" for="registerd_company_Y">Yes</label>
										</div>
										<div class="form-check form-check-inline">
											<input class="form-check-input rcompany CmnCls" type="radio" name="registerd_company_YN" id="registerd_company_N" value="2">
											<label class="form-check-label" for="registerd_company_N">No</label>
										</div>
										<br><span id="registerd_company_YN_error" class="text-danger ErrorMsg"></span>

									</div>
								</div>

								<!-- <div class="col-md-12 mb-3">
									<div class="alert alert-info">
										<p class=""> <span> <b>Note </b></span>: Our Recruiters are important stakeholders of our IIT Madras.The ongoing engagements with recruiters are always valued.The information or collaboration will not be used for any purpose that recruiters would prefer us not to. For the purpose of an important global survey of academic/employer opinion,the permission would have been sought on the portal with contact details of the respondent. Viz.,QS intelligence Unit (QSIU) etc.We get the consent of the recruiters as the impartial responses would contribute to the Insight and precision of the survey's Outcomes. </p>
										<hr>
										<div class="text-center">
											<label for="acceptance_YN" class="form-label d-block"> Are You Agree?<span class="text-danger">*</span> </label>
											<div class="form-check form-check-inline">
												<input class="form-check-input acceptance" type="radio" name="acceptance_YN" id="acceptance_Y" value="1">
												<label class="form-check-label" for="acceptance_Y">Yes</label>
											</div>
											<div class="form-check form-check-inline">
												<input class="form-check-input acceptance" type="radio" name="acceptance_YN" id="acceptance_N" value="2">
												<label class="form-check-label" for="acceptance_N">No</label>
											</div>
											<span id="acceptance_YN_error" class="text-danger ErrorMsg"></span>
										</div>
									</div>
								</div> -->

								<div class="col-md-12 mb-3"><div class="alert alert-info">
									<div class="form-check form-check-inline">
										<input class="form-check-input CmnCls" type="radio" name="diclaration_YN" id="diclaration_YN" value="1">
										<label class="form-check-label" for="diclaration_YN"> We hereby declare that we have gone through the Recruiter's Guideline & Policy Document
for  campus placement of SSR-GSP and will follow the Guidelines and
policies mentioned in the document by letter and spirit.</label>
									</div>
									<span id="diclaration_YN_error" class="text-danger  ErrorMsg"></span>
								</div>
								</div>

								<div class="col-md-4 col-sm-6 mb-3">
									<div class="captcha_control">
										<label for="Percentage" class="form-label">Enter Captcha Code<span class="text-danger">*</span></label>
										<div class="captcha_text">
											<input class="form-control CmnCls" type="text" name="captcha_add" id="captcha_add" placeholder="Type Captcha Code" autocomplete="off">
											<input type="hidden" name="captcha_code" id="captcha_code" value="<?php echo $this->session->userdata['captchaWord']?>">

											<label for="captcha" class="captcha_img"><?php echo $captcha['image']; ?></label>
										</div>
										<span id="captcha_add_error" class="text-danger  ErrorMsg"></span>
									</div>
								</div>

								<div class="col-md-12 mb-3">
									<div class="mb-3 actions">

										<p class="text-center red lighten-2" id="error" style="color:red"></p>
										<button class="btn btn-sm btn-success" name="submit_details" id="submit_details" value="1" type="submit">Register</button>
									</div>
								</div>





							</div>
						</form>

					</div>
				</div>
			</div>
		</div>
	</div>


		<!-- Footer Start  -->

		<?php include(APPPATH . 'views/frontend/web_include/webfooter.php'); ?>
		<!-- Footer End  -->
		<!-- =============== Scripts Edition =============== -->
		<?php include(APPPATH . 'views/frontend/web_include/placement_footer_script.php'); ?>

		<?php include(APPPATH . 'views/recruiters/recruiters_registration_js.php'); ?>

</body>

</html>