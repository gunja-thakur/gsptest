<?php foreach($recruter_data as $rd) { extract($rd); } ?>
<!DOCTYPE html>
<html lang="hi">

<?php include(APPPATH . 'views/include/login_head.php'); ?>

<body class="body_bg">
	<header class="main_header">
		<div class="container">
			<div class="row align-items-center">
				<div class="col-lg-12">
					<div class="logo_inline">
						<div class="logo_box">
							<a href="<?php echo base_url(); ?>">
								<img src="<?php echo base_url() ?>assets/website/images/Global-Skills-Park.png" class="img-fluid" alt="Sant Shironmani Ravidas Global Skills Park (SSR-GSP)">
							</a>
						</div>
						<div class="logo_text">
							<h2 class="hindi_title">Sant Shiromani Ravidas Global Skills Park (SSR-GSP)</h2>
						</div>


					</div>
				</div>
			</div>
		</div>
		</div>

		<div class="side">
			<a href="#" class="close-side"><i class="bi bi-x-lg"></i></a>

	</header>

	<section class="login_section">
		<div class="container">
			<div class="login_form_view">
				<div class="upper_head">
					<h4> Create New Password </h4>
				</div>
				<form action="" method="post" id="changeform">
					<div>
					<input type="hidden" class="form-control" id="rm_id" name="rm_id" value="<?php echo $rd['rm_id'];?>">
					<input type="hidden" class="form-control" id="reset_code" name="reset_code" value="<?php echo $rd['reset_code'];?>">
					</div>
					<div class="col-lg-12 col-md-12 col-sm-12">
						<div class="mb-3">
							<label class="form-label">New Password: <sup class="text-danger">*</sup></label>
							<input class="form-control CmnCls" id="password" name="password" type="password" onkeyup="checkPasswordStrength();">

							<div id="password_error" class="text-danger ErrorMsg"></div>
						</div>
					</div>

					<div class="col-lg-12 col-md-12 col-sm-12">
						<div class="mb-3">
							<label class="form-label">Confirm Password: <sup class="text-danger">*</sup></label>
							<input class="form-control CmnCls" id="cpassword" name="cpassword" type="password">
							<div id="cpassword_error" class="text-danger ErrorMsg"></div>
						</div>
					</div>

					<div class="form-group mb-0 ">
						<p class="text-center red lighten-2" id="error" style="color:red"></p>
						<button type="submit" class="btn btn-success w-100 mb-3" name="change" id="change" value="1">Create Password</button>


					</div>



				</form>

			</div>
		</div>
		</div>
	</section>


	<?php include(APPPATH . 'views/include/login_footer.php'); ?>


	<script>
		function checkPasswordStrength() {
	var number = /([0-9])/;
	var alphabets = /([a-zA-Z])/;
	var special_characters = /([~,!,@,#,$,%,^,&,*,-,_,+,=,?,>,<])/;
	var password = $('#password').val().trim();
	if (password.length < 8) {
		$('#password_error').removeClass();
		$('#password_error').addClass('weak-password');
		$('#password_error').html("Weak (should be atleast 8 characters.)");
	} else {
		if (password.match(number) && password.match(alphabets) && password.match(special_characters)) {
			$('#password_error').removeClass();
			$('#password_error').addClass('strong-password');
			$('#password_error').html("Strong");
		}
		else {
			$('#password_error').removeClass();
			$('#password_error').addClass('medium-password');
			$('#password_error').html("Medium (should include alphabets, numbers and special characters.)");
		}
	}
}
	</script>
	<script>
		$(document).ready(function() {

			$(".CmnCls").change(function(){
				$(".ErrorMsg").text('');
				$(".CmnCls").css('border', '1px solid #cacfe7');
			});

			$("#password").focus();
			$("#change").click(function() {

				var password = $.trim($("#password").val());
				var cpassword = $.trim($("#cpassword").val());

				var Reg_password=/^.*(?=.{8,})(?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?=.*[@#$%&]).*$/;

				if(!Reg_password.test(password))
				{
					$("#password").focus();
					//alert('Only characters & Whitespace are allowed!');
					$("#password").css('border','2px solid #ec000069');
                    $("#password_error").text('Password should contain at least one digit ,one lower case,one upper case And least 8 from the mentioned characters');
					return false;
				}
				$("#password").css('border', '1px solid green');
				if (password != cpassword) {
					$("#cpassword").focus();
					$("#cpassword").css('border', '2px solid #ec000069').focus();
					$("#cpassword_error").text('Password And Confirm Password Not Match');
					return false;
				}
				$("#cpassword").css('border', '1px solid green');
				$("#error").text('');



				$.ajax({

					url: "<?= base_url() ?>Recruiters/NewPassword_Save",
					method: "post",
					data: $("#changeform").serialize() + "&change=1",
					success: function(resp) {
						if (resp == 1) {
							alert("New Password Successfully Created");
							window.location = "<?php echo base_url(); ?>Logout/RecruiterLogout";
						} else if (resp == 0) {
							alert("Something Wrong!!!!!");
							window.location = "<?php echo base_url(); ?>Logout/RecruiterLogout";
						}
					}


				});

				return false;
			});

		});
	</script>
</body>

</html>