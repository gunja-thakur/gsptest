<?php foreach ($recruiters_details as $rd) {
  extract($rd);
} ?>
<!DOCTYPE html>
<html lang="hi">

<head>

<?php include(APPPATH . 'views/website/web_head.php'); ?>
</head>

<body class="">
	<header class="header_inner">
	<?php include(APPPATH . 'views/website/web_header.php'); ?>
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
					<div class="login_form_view">
						<div class="upper_head">
							<h4> Recruiter/Company Profile </h4>
						</div>

						<form action="<?php echo base_url(); ?>Recruiters/SaveRecruiters" method="post">
							<div class="row align-items-center">
								<div class="col-md-4 col-sm-6 mb-3">
									<label for="name_of_company" class="form-label">Recruiter/Company Name <span class="text-danger">*</span></label>
									<input type="text" class="form-control NameVelidate" id="name_of_company" name="name_of_company" aria-describedby="name_of_company" maxlength="100"/>
									<span id="name_of_company_error" class="text-danger ErrorMsg"></span>

								</div>

								<div class="col-md-4 col-sm-6 mb-3">
									<label for="ForSelect" class="form-label">Year of Inception<span class="text-danger">*</span></label>
									<select class="form-select" aria-label="Default select example" name="year_of_inception" id="year_of_inception">
										<option value="0">Select Year of Inception </option>
										<option value="2023">2023</option>
										<!-- <?php foreach ($category_data as $cd) {
													extract($cd); ?>
											<option value="<?php echo $cd['cat_name'] ?>"><?php echo $cd['cat_name']; ?></option>
										<?php } ?> -->

									</select>
									<span id="year_of_inception_error" class="text-danger ErrorMsg"></span>

								</div>
								<div class="col-md-4 col-sm-6 mb-3">
									<label for="website" class="form-label">Website<span class="text-danger">*</span></label>
									<input type="text" class="form-control ValidWeb" id="website" name="website" aria-describedby="website" maxlength="100"/><span Class="small text-danger" > <b>Ex :www.example.com</b> </span><br>
									<span id="website_error" class="text-danger ErrorMsg"></span>

								</div>

								<div class="col-md-4 col-sm-6 mb-3">
									<label for="ForSelect" class="form-label">Type of Recruiter/Company<span class="text-danger">*</span></label>
									<select class="form-select" aria-label="Default select example" name="type_of_company" id="type_of_company">
										<option value="0">Select Type </option>
										<option value="1">MNC </option>
										<!-- <?php foreach ($category_data as $cd) {
													extract($cd); ?>
											<option value="<?php echo $cd['cat_name'] ?>"><?php echo $cd['cat_name']; ?></option>
										<?php } ?> -->

									</select>
									<span id="type_of_company_error" class="text-danger ErrorMsg"></span>

								</div>

								<div class="col-md-4 col-sm-6 mb-3">
									<label for="ForSelect" class="form-label">Nature of Business<span class="text-danger">*</span></label>
									<select class="form-select" aria-label="Default select example" name="nature_of_business" id="nature_of_business">
										<option value="0">Select Business </option>
										<option value="1">DEMO </option>
										<!-- <?php foreach ($category_data as $cd) {
													extract($cd); ?>
											<option value="<?php echo $cd['cat_name'] ?>"><?php echo $cd['cat_name']; ?></option>
										<?php } ?> -->

									</select>
									<span id="nature_of_business_error" class="text-danger ErrorMsg"></span>

								</div>
								<div class="col-md-4 col-sm-6 mb-3">
									<label for="gst_tin_number" class="form-label">GST/TIN Number<span class="text-danger">*</span></label>
									<input type="text" class="form-control" id="gst_tin_number" name="gst_tin_number" aria-describedby="gst_tin_number" onKeyPress="if(this.value.length==15) { alert('Not Allowed more than 15 Numbers!'); return false;}"/>
									<span id="gst_tin_number_error" class="text-danger ErrorMsg"></span>

								</div>

								<div class="col-md-12 col-sm-6 mb-2">
									<div class="alert alert-light form_div">
										<label for="affiliation" class="form-label d-block"> Select Your Affiliation<span class="text-danger">*</span></label>
										<div class="form-check form-check-inline">
											<input class="form-check-input affiliation" type="radio" name="affiliation" id="InHouse" value="1">
											<label class="form-check-label" for="InHouse">In-House HR</label>
										</div>
										<div class="form-check form-check-inline">
											<input class="form-check-input affiliation" type="radio" name="affiliation" id="RPO" value="2">
											<label class="form-check-label" for="RPO">RPO (Recruitment Process Outsourcing) personnel</label>
										</div>
										<br><span id="affiliation_error" class="text-danger ErrorMsg"></span>
									</div>

								</div>

								<div class="col-md-12">

									<h5 class="form_heading"> <span class=""> Recruiter Contact Information </span></h5>

								</div>

								<div class="col-md-4 col-sm-6 mb-3">
									<label for="inhouse_hr_name" class="form-label"> Name of In-House HR<span class="text-danger">*</span></label>
									<input type="text" class="form-control NameVelidate" id="inhouse_hr_name" name="inhouse_hr_name" aria-describedby="inhouse_hr_name" maxlength="50"/>
									<span id="inhouse_hr_name_error" class="text-danger ErrorMsg"></span>

								</div>

								<div class="col-md-4 col-sm-6 mb-3">
									<label for="designation" class="form-label">Designation<span class="text-danger">*</span></label>
									<select class="form-select" aria-label="Default select example" name="designation" id="designation">
										<option value="0">Select Designation </option>
										<option value="1">Manager </option>
										<!-- <?php foreach ($category_data as $cd) {
													extract($cd); ?>
											<option value="<?php echo $cd['cat_name'] ?>"><?php echo $cd['cat_name']; ?></option>
										<?php } ?> -->

									</select>
									<span id="designation_error" class="text-danger ErrorMsg"></span>

								</div>


								<div class="col-md-4 col-sm-6 mb-3">
									<label for="email" class="form-label">Email<span class="text-danger">*</span></label>
									<input type="email" class="form-control" id="email" name="email" aria-describedby="email" maxlength="80"/>
									<span id="email_error" class="text-danger ErrorMsg"></span>

								</div>

								<div class="col-md-4 col-sm-6 mb-3">
									<label for="alternate_email" class="form-label">Alternate Email</label>
									<input type="email" class="form-control" id="alternate_email" name="alternate_email" aria-describedby="alternate_email" maxlength="80"/>
									<span id="alternate_email_error" class="text-danger ErrorMsg"></span>

								</div>

								<div class="col-md-4 col-sm-6 mb-3">
									<label for="mobile" class="form-label">Mobile<span class="text-danger">*</span></label>
									<input type="number" class="form-control" id="mobile" name="mobile" aria-describedby="mobile" min="0" onKeyPress="if(this.value.length==10) return false;"/><span Class="small text-danger" > <b>Ex : 98931XXXXX</b> </span>
									<span id="mobile_error" class="text-danger ErrorMsg"></span>

								</div>

								<div class="col-md-4 col-sm-6 mb-3">
									<label for="alternate_mobile" class="form-label">Alternate Mobile</label>
									<input type="number" class="form-control" id="alternate_mobile" name="alternate_mobile" aria-describedby="alternate_mobile" min="0" onKeyPress="if(this.value.length==10) return false;"/><span Class="small text-danger" > <b>Ex : 98931XXXXX</b> </span>
									<span id="alternate_mobile_error" class="text-danger ErrorMsg"></span>

								</div>



								<div class="col-md-4 col-sm-6 mb-3">
									<label for="postal_code" class="form-label">Postal Code<span class="text-danger">*</span></label>
									<input type="number" class="form-control" id="postal_code" name="postal_code" aria-describedby="postal_code" min="0" onKeyPress="if(this.value.length==6) return false;"/>
									<span id="postal_code_error" class="text-danger ErrorMsg"></span>

								</div>

								<div class="col-md-8 col-sm-8 mb-3">
									<label for="address" class="form-label">Address<span class="text-danger">*</span></label>
									<textarea type="text" class="form-control" id="address" name="address" maxlength="250"></textarea>
									<span id="address_error" class="text-danger ErrorMsg"></span>
								</div>



								<div class="col-md-12 mb-3">
									<div class="mb-3 actions">

										<p class="text-center red lighten-2" id="error" style="color:red"></p>
										<button class="btn btn-sm btn-success" name="submit_details" id="submit_details" value="1" type="submit">Registered</button>
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

		<?php include(APPPATH . 'views/website/web_footer.php'); ?>
		<!-- Footer End  -->
		<!-- =============== Scripts Edition =============== -->

		<?php include(APPPATH . 'views/recruiters/recruiters_registration_js.php'); ?>

</body>

</html>