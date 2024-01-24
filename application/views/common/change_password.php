<?php  foreach($student_data as $get_sd) ?>
<!DOCTYPE html>
<html lang="en">

	<!---Head Start--->
    <head>


        <?php include(APPPATH.'views/include/head.php');?>
    </head>
	<!---Head Start--->

    <body class="sb-nav-fixed">
		<!---Navigation Start--->

<?php include(APPPATH.'views/include/header.php');?>
		<!---Navigation End--->

        <div id="layoutSidenav">

		<!---Sidebar Start--->

<?php include(APPPATH.'views/include/sidebar.php');?>
		<!---Sidebar End--->

            <div id="layoutSidenav_content">
              <?php if(!empty($student_data)) { ?>
                <main>
                    <div class="container-fluid px-4">

                        <div class="row">
                        <div class="col-xl-12 col-lg-12">

<?php if($this->session->flashdata('message')){?>
  <div class="alert alert-success flashhide">
<?php echo $this->session->flashdata('message')?>
  </div>
<?php } ?>
<form action="" method="POST" enctype="multipart/form-data" id="changeform">
                        <div class="login_side">
						<h5>Change Your Password</h5>
						<hr>
						<div class="row">

						<div class="col-lg-12 col-md-12 col-sm-12">
						<p class="alert alert-info">Note : Password should contain at least one digit ,one lower case,one upper case And least 8 from the mentioned characters</p>
						</div>
											<!-- <input type="hidden" id="roll_no" name="roll_no" value="<?php echo $this->session->userdata('roll_no'); ?>"> -->
											<input type="hidden" id="user_id" name="user_id" value="<?php echo $this->session->userdata('user_id'); ?>">


											<div class="col-lg-4 col-md-6 col-sm-4">
												<div class="mb-3">
													<label class="form-label">Old Password: <sup class="text-danger">*</sup></label>
													<input class="form-control CmnCls" id="old_password" name="old_password" type="password">
													<div id="old_password_error" class="text-danger ErrorMsg"></div>
												</div>
											</div>

											<div class="col-lg-4 col-md-6 col-sm-4">
												<div class="mb-3">
													<label class="form-label">New Password: <sup class="text-danger">*</sup></label>
													<input class="form-control CmnCls" id="password" name="password" type="password" onkeyup="checkPasswordStrength();" >

													<div id="password_error" class="text-danger ErrorMsg"></div>
												</div>
											</div>

											<div class="col-lg-4 col-md-6 col-sm-4">
												<div class="mb-3">
													<label class="form-label">Confirm Password: <sup class="text-danger">*</sup></label>
													<input class="form-control CmnCls" id="cpassword" name="cpassword" type="password">
													<div id="cpassword_error" class="text-danger ErrorMsg"></div>
												</div>
											</div>




										</div>

<div class="form-group mb-2">
<p class="text-center red lighten-2" id="error" style="color:red"></p>
<button class="btn btn-sm btn-success " name="change" id="change" type="submit">Submit</button>
</div>
<p>Fields marked with <sup class="text-danger">*</sup> (Asterisk) are mandatory...</p>
</div>
</form>



									</div>
									</div>
                    </div>
                </main>


                <?php } ?>



				<!-- Footer -->

				<?php include(APPPATH.'views/include/footer.php');?>
				<!-- Footer -->
            </div>
        </div>

		<!-- back to top start -->

		<!-- Footer Script -->

<?php include(APPPATH.'views/include/footer_script.php');?>
		<!-- Footer Script End -->

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
		$(document).ready(function(){

			$(".CmnCls").change(function(){
				$(".ErrorMsg").text('');
				$(".CmnCls").css('border', '1px solid #cacfe7');
			});

		$("#old_password").focus();
			$("#change").click(function(){
			var old_password=$.trim($("#old_password").val());
			var password=$.trim($("#password").val());
			var cpassword=$.trim($("#cpassword").val());

			var Reg_password=/^.*(?=.{8,})(?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?=.*[@#$%&]).*$/;

				if (old_password == "") {
					$("#old_password").focus();
					$("#old_password").css('border', '2px solid #ec000069').focus();
					$("#old_password_error").text('Please Provide Old Password');
					return false;
				}

				if (old_password.length < 6) {
					$("#old_password").focus();
					$("#old_password").css('border', '2px solid #ec000069').focus();
					$("#old_password_error").text('Should be atleast 6 characters');
					return false;
				}
				$("#old_password").css('border', '1px solid green');

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

				url:"<?=base_url()?>Password/ChangePassword_Save",
				method:"post",
				data:$("#changeform").serialize()+"&change=1",
				success:function(resp)
				{
				if(resp==1)
				{
			alert("Password Changed Successfuly");
			window.location="<?php echo base_url();?>Logout";
				}
				else if(resp==0)
				{
                alert("Old Password is Wrong!!!!!");
				window.location="<?php echo base_url();?>Password/ChangePassword";
				}
				}


				});

			return false;
				});

			});
</script>





    </body>
</html>
