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
							<a href="<?php echo base_url();?>">
								<img src="<?php echo base_url() ?>assets/website/images/Global-Skills-Park.png" class="img-fluid" alt="Sant Shironmani Ravidas Global Skills Park (SSR-GSP)">
							</a>
						</div>
						<div class="logo_text">
							<h2 class="hindi_title">Sant Shiromani Ravidas Global Skills Park (SSR-GSP)</h2>
							<!-- <h3>Sant Shironmani Ravidas Global Skills Park (SSR-GSP)</h3> -->
							<!--<h4><span class="">(I.T.I. Govindpura Campus, Bhopal-462023)</span></h4>-->
						</div>


					</div>
				</div>
			</div>
		</div>
		</div>

		<div class="side">
			<a href="#" class="close-side"><i class="bi bi-x-lg"></i></a>
			<!-- <div class="side_menu_list">
    <nav id="accordianMenu" class="primary-menu my-auto">
        <ul>
            <li><a href="#"> Home</a></li>
            <li><a href="#"> Menu 1</a></li>
            <li><a href="#"> Menu 2</a></li>

			</ul>
        </ul>
    </nav>
</div> -->
	</header>

	<section class="login_section">
		<div class="container">
			<div class="login_form_view">
				<div class="upper_head">
					<h4> Login </h4>
				</div>
				<form action="" method="post">
				<div>
					<input type="hidden" class="form-control" id="role" name="role" value="7">
					<!-- <label for="ForSelect" class="form-label">Login as</label>
					<select class="form-select" aria-label="Default select example" name="role" id="role">
					<option value="0">Select your login role</option>
					<option value="1">Administrator</option>
					<option value="2">Student</option>

					</select> -->
				</div>
				<div class="mb-2">
					<label for="ForEmail" class="form-label">Username</label>
					<input type="text" class="form-control" id="username" name="username" aria-describedby="email">

				</div>
				<div class="mb-3">
					<label for="ForPassword" class="form-label">Password</label>
					<input type="password" class="form-control" id="password" name="password">
				</div>
				<div class="" >
					<label for="captcha" class="mb-2" id="captImg"><?php echo $captcha['image']; ?> </label>
					<span > <a href="javascript:void(0);" class="refreshCaptcha"><i class="fa fa-refresh p-2 text-bg-light" ></i> </a></span>

					<div class="mb-2  text-center">
						<input class="form-control" type="text" name="captcha_add" id="captcha_add" placeholder="Add Captcha Code" autocomplete="off">

					</div>
				</div>
				<div class="form-group mb-0 ">
					<p class="text-center red lighten-2" id="error" style="color:red"></p>
					<button type="submit" class="btn btn-success w-100 mb-3" name="login" id="login" value="1">Login</button>

					<a href="<?php echo base_url();?>Recruiters" class="text-warning float-start"  id="RecRegistration"  > Don't have An Account ?</a>

					<a href="<?php echo base_url();?>Recruiters/Forget_Password" class="text-warning float-end" id="ForgetPassword"  > Forget Password?</a>
				</div>



				</form>

			</div>
		</div>
		</div>
	</section>


	<?php include(APPPATH . 'views/include/login_footer.php'); ?>


	<script>

function initialize()
{
     $('#CaptchaRefres').click();
}
		$(document).ready(function() {
			$("#username").focus();
			$("#login").click(function() {
				var role = $("#role").val();
				var username = $("#username").val();
				username = $.trim(username);
				var password = $("#password").val();
				password = $.trim(password);
				var captcha_add = $("#captcha_add").val();
				captcha_add = $.trim(captcha_add);


				//var username_valid = /^([\w-\.]+)@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.)|(([\w-]+\.)+))([a-zA-Z]{2,4}|[0-9]{1,3})(\]?)$/;

				/*/^
				(?=.*\d)          // should contain at least one digit
				(?=.*[a-z])       // should contain at least one lower case
				(?=.*[A-Z])       // should contain at least one upper case
				[a-zA-Z0-9]{8,}   // should contain at least 8 from the mentioned characters
				$/ */

				//var passwork_regex=/^(?=.*\d)(?=.*[a-z])(?=.*[A-Z])[0-9a-zA-Z]{8,}$/;

				if (role == "0") {

					$("#role").focus();
					$("#role").css('border', '2px solid #ec000069');
					$("#error").text('Please Select The Role');
					return false;
				}
				$("#role").css('border', '1px solid #cacfe7');

				if (username == "") {

					$("#username").focus();
					$("#username").css('border', '2px solid #ec000069');
					$("#error").text('Please Provide a Username');
					return false;
				}

				$("#username").css('border', '1px solid #cacfe7');
				if (password.length < 1) {
					$("#password").focus();
					$("#password").css('border', '2px solid #ec000069');
					$("#error").text('Please Provide a Password');
					return false;
				}

				$("#password").css('border', '1px solid #cacfe7');

				if (captcha_add == "") {
					$("#captcha_add").focus();
					$("#captcha_add").css('border', '2px solid #ec000069');
					$("#error").text('Please Provide a Captcha Code');
					return false;
				}
				$("#captcha_add").css('border', '1px solid #cacfe7');

				$.ajax({


					url: '<?php echo base_url(); ?>UserLogin/RecruiterLogin',
					method: 'post',
					data: {
						'role': role,
						'username': username,
						'password': password,
						'captcha_add': captcha_add,
						'login': 1
					},
					success: function(resp) {
						//alert(resp);return false;
						if (resp == 2) {

							$("#username").focus();
							$("#username").css('border', '2px solid #ec000069');
							$("#error").text('Username Not Registered');
						} else if (resp == 3) {

							$("#password").focus();
							$("#password").css('border', '2px solid #ec000069');
							$("#error").text('Credentials Wrong');
						} else if (resp == 1) {
							/*
							alertify.alert("Login Success", function(){
								window.location = "<?= base_url() . "Home" ?>";
							});*/
							window.location = "<?php echo base_url() . "Home" ?>";

						} else {
							//alertify.error(resp);
							$("#username").css('border', '2px solid #ec000069');
							$("#error").text(resp);
						}
					}
				});
				return false;
			});
		});
	</script>

<script>
$(document).ready(function(){
    $('.refreshCaptcha').on('click', function(){
        $.get('<?php echo base_url().'Recruiters/refresh'; ?>', function(data){
            $('#captImg').html(data);
        });
    });
});
</script>

</body>

</html>