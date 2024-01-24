<!DOCTYPE html>
<html lang="hi">

<head>
	<meta charset="utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1" />
	<title>Enquery - Sant Shironmani Ravidas Global Skills Park (SSR-GSP) </title>
	<link rel="shortcut icon" type="image/icon" href="<?php echo base_url() ?>assets/website/images/favicon.png" />
	<!-- =============== Css Edition =============== -->
	<link rel="preload" href="<?php echo base_url() ?>assets/website/css/style.css" as="style" type="text/css" media="print" />
	<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/website/css/style.css" /><style type="text/css">.login_form_view {padding: 40px 25px; max-width: 100%; margin-top: 20px; margin-left: unset;background: #f4f4f4;border: 1px solid #ddd;}.body_bg {background: transparent;}.login_section {padding:0;}.body_bg {    overflow: hidden;}.form-label {color:#202021;font-size: 15px;}.form-control {font-size:13px;}</style>
</head>

<body class="body_bg">
	<!--<header class="main_header">
		<div class="container">
			<div class="row align-items-center">
				<div class="col-lg-12">
					<div class="logo_inline">
						<div class="logo_box">
							<a href="#">
								<img src="<?php echo base_url() ?>assets/website/images/Global-Skills-Park.png" class="img-fluid" alt="Sant Shironmani Ravidas Global Skills Park (SSR-GSP)">
							</a>
						</div>
						<div class="logo_text">
							<h2 class="hindi_title"> Administrator Dashboard</h2>
							<h3>Sant Shironmani Ravidas Global Skills Park (SSR-GSP)</h3>

						</div>


					</div>
				</div>
			</div>
		</div>
		</div>

		<div class="side">
			<a href="#" class="close-side"><i class="bi bi-x-lg"></i></a>
	</header>-->

	<div class="login_section">
			<div class="row justify-content-center">
				<div class="col-lg-12 mb-3">
					<div class="login_form_view">
						<div class="upper_head">
							<h4> Candidate Registration </h4>
						</div>
						<form action="<?php echo base_url(); ?>Enquiry/SaveEnquiry" method="post">
							<div class="row align-items-center">
								<div class="col-md-4 col-sm-6 mb-3">
									<label for="person_name" class="form-label">Name <span class="text-danger">*</span></label>
									<input type="text" class="form-control" id="person_name" name="person_name" aria-describedby="person_name" maxlength="50">

								</div>
								<div class="col-md-4 col-sm-6 mb-3">
									<label for="father_name" class="form-label">Father's Name<span class="text-danger">*</span></label>
									<input type="text" class="form-control" id="father_name" name="father_name" aria-describedby="father_name" maxlength="50">

								</div>
								<div class="col-md-4 col-sm-6 mb-3">
									<label for="dob" class="form-label">Date of Birth<span class="text-danger">*</span></label>
									<input type="date" class="form-control" id="dob" name="dob" aria-describedby="dob">

								</div>
								<div class="col-md-4 col-sm-6 mb-3">
									<label for="email" class="form-label">Email<span class="text-danger">*</span></label>
									<input type="email" class="form-control" id="email" name="email" aria-describedby="email" maxlength="100">

								</div>
								<div class="col-md-4 col-sm-6 mb-3">
									<label for="mobile" class="form-label">Mobile<span class="text-danger">*</span></label>
									<input type="number" class="form-control" id="mobile" name="mobile" aria-describedby="mobile" min="0" onKeyPress="if(this.value.length==10) return false;"/><span Class="small text-danger" > <b>Ex : 98931XXXXX</b> </span>

								</div>

								<div class="col-md-4 col-sm-6 mb-3">
									<label for="ForSelect" class="form-label">Category<span class="text-danger">*</span></label>
									<select class="form-select" aria-label="Default select example" name="category" id="category">
										<option value="0">Select Category </option>
										<?php foreach ($category_data as $cd) {
											extract($cd); ?>
											<option value="<?php echo $cd['cat_name'] ?>"><?php echo $cd['cat_name']; ?></option>
										<?php } ?>

									</select>

								</div>
								<div class="col-md-4 col-sm-6 mb-3">
									<div class="form_div">
										<label for="" class="form-label d-block"> Gender<span class="text-danger">*</span></label>
										<div class="form-check form-check-inline">
											<input class="form-check-input gender" type="radio" name="gender" id="male" value="Male">
											<label class="form-check-label" for="male">Male</label>
										</div>
										<div class="form-check form-check-inline">
											<input class="form-check-input gender" type="radio" name="gender" id="female" value="Female">
											<label class="form-check-label" for="female">Female</label>
										</div>
										<div class="form-check form-check-inline">
											<input class="form-check-input gender" type="radio" name="gender" id="Transgender" value="Transgender">
											<label class="form-check-label" for="Transgender">Transgender</label>
										</div>
									</div>
								</div>



								<div class="col-md-4 col-sm-6 mb-3">
									<div class="form_div">
										<label for="" class="form-label d-block"> Class PWD (Yes/No)<span class="text-danger">*</span></label>
										<div class="form-check form-check-inline">
											<input class="form-check-input class" type="radio" name="class" id="pwd_yes" value="1">
											<label class="form-check-label" for="pwd_yes">Yes</label>
										</div>
										<div class="form-check form-check-inline">
											<input class="form-check-input class" type="radio" name="class" id="pwd_no" value="2">
											<label class="form-check-label" for="pwd_no">No</label>
										</div>

									</div>
								</div>
								<div class="col-md-4 col-sm-6 mb-3">
									<div class="form_div">
										<label for="" class="form-label d-block"> Domicile<span class="text-danger">*</span> </label>
										<div class="form-check form-check-inline">
											<input class="form-check-input domicile" type="radio" name="domicile" id="mp" value="1">
											<label class="form-check-label" for="mp">MP</label>
										</div>
										<div class="form-check form-check-inline">
											<input class="form-check-input domicile" type="radio" name="domicile" id="other_state" value="2">
											<label class="form-check-label" for="other_state">Other State</label>
										</div>

									</div>
								</div>

								<div class="col-md-4 col-sm-6 mb-3">
									<label for="address" class="form-label">Correspondence Address<span class="text-danger">*</span></label>
									<textarea type="text" class="form-control" id="address" name="address" maxlength="250"></textarea>
								</div>


								<div class="col-md-4 col-sm-6 mb-3">
									<label for="ForSelect" class="form-label">Qualification<span class="text-danger">*</span> </label>
									<select class="form-select" aria-label="Default select example" name="qualification" id="qualification">
										<option value="0">Select Qualification </option>
										<option value="1">Diploma</option>
										<option value="2">Degree</option>
										<option value="3">ITI</option>
									</select>
								</div>

								<div class="col-md-4 col-sm-6 mb-3">
									<div class="pmajaxshow">
										<label for="ForSelect" class="form-label">Name of Stream/Trade<span class="text-danger">*</span></label>
										<select class="form-select" aria-label="Default select example" name="degree_diploma_id" id="degree_diploma_id">
											<option value="0">Select Stream/Trade </option>

										</select>
									</div>
								</div>

								<div class="col-md-4 col-sm-6 mb-3">
								<div class="crajaxshow">
									<label for="ForSelect" class="form-label">Intrested Course<span class="text-danger">*</span></label>
									<select class="form-select" aria-label="Default select example" name="course_id" id="course_id" >
										<option value="0">Select Course </option>
										<!-- <?php foreach ($course_data as $cd) {
											extract($cd); ?>
											<option value="<?php echo $cd['course_id'] ?>"><?php echo $cd['course_name']; ?></option>
										<?php } ?> -->

									</select> <span Class="small text-danger">Please use <b>Ctrl+Click</b> to select multiple Courses </span>

								</div>
								</div>


								<div class="col-md-4 col-sm-6 mb-3">
									<div class="captcha_control">
										<label for="Percentage" class="form-label">Type Captcha Code<span class="text-danger">*</span></label>
										<div class="captcha_text">
											<input class="form-control" type="text" name="captcha_add" id="captcha_add" placeholder="Type Captcha Code" autocomplete="off">
											<label for="captcha" class="captcha_img"><?php echo $captcha['image']; ?></label>
										</div>
									</div>
								</div>
								<div class="col-md-12 mb-3">
									<div class="mb-3 actions">
										<input type="hidden" name="age" id="age" value="">
										<p class="text-center red lighten-2" id="error" style="color:red"></p>
										<button class="btn btn-success" name="submit_details" id="submit_details" value="1" type="submit">Submit</button>
									</div>

									<p class="alert alert-info"> <span> <b>Note </b></span>: After Successful registration it is mandatory for each candidate to appear  in the entrance examination i.e. GSP-SET on the basis of which the merit list will be prepared and admission will be granted in each course.</p>
								</div>


							</div>
						</form>

					</div>
				</div>
			</div>
	</section>


	<!--<footer>
		<div class="copywrite_div">
			<div class="container">
				<div class="row align-items-center">
					<div class="col-lg-7">
						<div class="text_left">
							<p>© <span id="currentYear"></span> SSR-GSP, Bhopal M.P . All Rights Reserved </p>
						</div>
					</div>
					<div class="col-lg-5">
						<div class="text_right">
							<p>Design and Developed by <a href="https://www.crispindia.com/" target="_blank"> CRISP </a></p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</footer>-->
	<!-- =============== Scripts Edition =============== -->
	<script type="text/javascript" src="<?php echo base_url() ?>assets/website/js/jquery-latest.min.js"></script>
	<script type="text/javascript" src="<?php echo base_url() ?>assets/website/js/jquery-migrate.min.js"></script>
	<script type="text/javascript" src="<?php echo base_url() ?>assets/website/js/bootstrap.bundle.min.js"></script>
	<script type="text/javascript" src="<?php echo base_url() ?>assets/website/js/function_call.js"></script>

	<script>
		$(document).ready(function() {

			$(document).on('change', '#qualification', function() {

				var qualification = $("#qualification").val();
				//alert(qualification);return false;
				$.ajax({
					url: "<?php echo base_url(); ?>Enquiry/GetTrade_ajax",
					type: "POST",
					data: {
						"qualification": qualification
					},
					success: function(res) {
						//alert(res);return false;
						$(".pmajaxshow").html('');
						$(".pmajaxshow").html(res);
						//return false;
					}
				});
				Clear();
				return false;
			});

			function Clear()
			{
				var qualification = $("#qualification").val();
				var degree_diploma_id = $("#degree_diploma_id").val();

				//alert(qualification +"@@"+degree_diploma_id);return false;
				$.ajax({
					url: "<?php echo base_url(); ?>Enquiry/GetCourse_ajax",
					type: "POST",
					data: {
						"qualification": qualification,
						"degree_diploma_id": degree_diploma_id
					},
					success: function(res) {
						//alert(res);return false;
						$(".crajaxshow").html('');
						$(".crajaxshow").html(res);
						//return false;
					}
				});
			}

			$(document).on('change', '#degree_diploma_id', function() {
				var qualification = $("#qualification").val();
				var degree_diploma_id = $("#degree_diploma_id").val();

				//alert(qualification +"@@"+degree_diploma_id);return false;
				$.ajax({
					url: "<?php echo base_url(); ?>Enquiry/GetCourse_ajax",
					type: "POST",
					data: {
						"qualification": qualification,
						"degree_diploma_id": degree_diploma_id
					},
					success: function(res) {
						//alert(res);return false;
						$(".crajaxshow").html('');
						$(".crajaxshow").html(res);
						//return false;
					}
				});
				return false;
			});

			/* Input Validation */

			$('#person_name').on('input', function () {
			var person_name = $(this).val();
			var validName = /^[A-Za-z _.-]+$/;

			if (person_name.length == "") {
			alert('Please enter your Name!');
			$("#person_name").css('border', '2px solid #ec000069');
			return false;
			}
			else if (person_name.length > 50) {
			alert("Only 50 characters allowed!");
			return false;
			}
			else if(!validName.test(person_name)) {
			alert("Only characters & Whitespace are allowed!");
			return false;
			}

			});


			$("#person_name").focus();
			$("#submit_details").click(function() {
				var person_name = $("#person_name").val();
				var father_name = $("#father_name").val();
				var dob = $("#dob").val();
				var email = $("#email").val();
				var mobile = $("#mobile").val();
				var category = $("#category").val();
				var gender = $("#gender").val();
				var classs = $("#class").val();
				var domicile = $("#domicile").val();
				var address = $("#address").val();
				var qualification = $("#qualification").val();
				var degree_diploma_id = $("#degree_diploma_id").val();
				var course_id = $("#course_id").val();
				//var percentage = $("#percentage").val();
				var captcha_add = $("#captcha_add").val();
				var age = $("#age").val();

				var validName = /^[A-Za-z _.-]+$/;


				var email_valid = /^([\w-\.]+)@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.)|(([\w-]+\.)+))([a-zA-Z]{2,4}|[0-9]{1,3})(\]?)$/;

				var validMobile = /^[0-9]{1,10}$/;


				if (person_name == "") {

					$("#person_name").focus();
					alert('Please enter your Name!');
					$("#person_name").css('border', '2px solid #ec000069');
					//$("#error").text('Please Provide Name');
					return false;
				}

				if(!validName.test(person_name))
				{
					alert('Only characters & Whitespace are allowed!');
					$("#person_name").css('border','2px solid #ec000069');
					return false;
				}

				$("#person_name").css('border', '1px solid #cacfe7');

				if (father_name == "") {
				$("#father_name").focus();
				alert('Please enter your father’s  name!');
				$("#father_name").css('border', '2px solid #ec000069');
				//$("#error").text('Please Provide Name');
				return false;
				}
				if(!validName.test(father_name))
				{
					alert('Only characters & Whitespace are allowed!');
					$("#father_name").css('border','2px solid #ec000069');
					return false;
				}


				$("#father_name").css('border', '1px solid #cacfe7');

				if (dob == "") {
				$("#dob").focus();
				alert('Please enter date of birth!');
				$("#dob").css('border', '2px solid #ec000069');
				//$("#error").text('Please Provide Date of Birth.');
				return false;
				}
				$("#dob").css('border', '1px solid #cacfe7');

				if (email == "") {

					$("#email").focus();
					alert('Please Enter Email Address!');
					$("#email").css('border', '2px solid #ec000069');
					//$("#error").text('Please Provide an Email Address');
					return false;
				}

				if(!email_valid.test(email))
				{

					$("#email").focus();
					alert('Please Enter a Valid Email Address!');
					$("#email").css('border','2px solid #ec000069');
					//$("#error").text('Invalid Email Address');
					return false;
				}

				$("#email").css('border', '1px solid #cacfe7');

				if (mobile == "") {

					$("#mobile").focus();
					alert('Please enter valid mobile number (10 Digit Only)!');
					$("#mobile").css('border', '2px solid #ec000069');
					//$("#error").text('Please Provide Mobile');
					return false;
				}
				if (mobile.length < 10 || mobile.length > 10) {

					$("#mobile").focus();
					alert('Please enter valid mobile number (10 Digit Only)!');
					$("#mobile").css('border', '2px solid #ec000069');
					//$("#error").text('Mobile Number Should be 10 Digits.');
					return false;
				}
				if(!validMobile.test(mobile))
				{

					$("#mobile").focus();
					alert('Please enter valid mobile number (10 Digit Only)!');
					$("#mobile").css('border','2px solid #ec000069');
					//$("#error").text('Invalid Mobile Number');
					return false;
				}

				$("#mobile").css('border', '1px solid #cacfe7');

				if (category == "0") {

				$("#category").focus();
				alert('Please select Category!');
				$("#category").css('border', '2px solid #ec000069');
				//$("#error").text('Please Provide Category');
				return false;
				}

				$("#category").css('border', '1px solid #cacfe7');

				if ($('input[name=gender]:checked').length <= 0) {
						alert('Please Select Gender!');
						$(".gender").css('outline', '1px solid red');
						return false;
					} else {
						$(".gender").css('outline', '1px solid #ccc');
				}

				if ($('input[name=class]:checked').length <= 0) {
						alert('Please Select Class!');
						$(".class").css('outline', '1px solid red');
						return false;
					} else {
						$(".class").css('outline', '1px solid #ccc');
					}

				if ($('input[name=domicile]:checked').length <= 0) {
						alert('Please Select Domicile!');
						$(".domicile").css('outline', '1px solid red');
						return false;
					} else {
						$(".domicile").css('outline', '1px solid #ccc');
					}

					if (address.length < 1) {
					$("#address").focus();
					alert('Please enter your correspondence Address!');
					$("#address").css('border', '2px solid #ec000069');
					//$("#error").text('Please Provide Address');
					return false;
					}
					$("#address").css('border', '1px solid #cacfe7');



				if (qualification == "0") {

					$("#qualification").focus();
					alert('Please select your Qualification!');
					$("#qualification").css('border', '2px solid #ec000069');
					//$("#error").text('Please Provide Qualification');
					return false;
				}

				$("#qualification").css('border', '1px solid #cacfe7');

				if (degree_diploma_id == "0") {

					$("#degree_diploma_id").focus();
					alert('Please select your Stream/Trade!');
					$("#degree_diploma_id").css('border', '2px solid #ec000069');
					//$("#error").text('Please Provide Degree/Diploma Name');
					return false;
				}

				$("#degree_diploma_id").css('border', '1px solid #cacfe7');

				if (course_id == "") {

				$("#course_id").focus();
				alert('Please select at least one course!');
				$("#course_id").css('border', '2px solid #ec000069');
				//$("#error").text('Please Provide Course');
				return false;
				}

				$("#course_id").css('border', '1px solid #cacfe7');

				if (captcha_add == "") {
					$("#captcha_add").focus();
					$("#captcha_add").css('border', '2px solid #ec000069');
					$("#error").text('Please Provide a Captcha Code');
					return false;
				}
				$("#captcha_add").css('border', '1px solid #cacfe7');

				if(age < 15)
				{
				alert('Age Must be Greater Than 15 Years!');
				$("#dob").val('');
				$("#dob").css('border', '2px solid #ec000069');
				return false;
				}
				else
				{
				return true;
				}



				/*$.ajax({
					url: '<?php echo base_url(); ?>Enquiry/SaveEnquiry',
					method: 'post',
					data: {
						'person_name': person_name,
						'email': email,
						'mobile': mobile,
						'course_id': course_id,
						'qualification': qualification,
						'degree_diploma_id': degree_diploma_id,
						'captcha_add': captcha_add

					},
					success: function(resp) {
						//alert(resp);return false;
						if (resp == 1) {
							alert("Congratulations! Your registration has been successfully completed. Your Registration No is .");
							location.reload();

						} else {
							alert("Somthing Wrong!");
							location.reload();
						}
					}
				});
				return false;*/
			});
		});
	</script>
<script>
$('#dob').on('input', function () {
var dob=$('#dob').val();
dob = new Date(dob);
var today = new Date();
var age = Math.floor((today-dob) / (365.25 * 24 * 60 * 60 * 1000));
$("#age").val(age);
if(age < 15)
{
alert('Age Must be Greater Than 15 Years!');
$("#dob").val('');
$("#dob").css('border', '2px solid #ec000069');
return false;
}


});

	</script>
</body>

</html>