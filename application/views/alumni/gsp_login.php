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
							<h2 class="hindi_title"> Alumni Login</h2>
							<h3>Sant Shironmani Ravidas Global Skills Park (SSR-GSP)</h3>
							<!--<h4><span class="">(I.T.I. Govindpura Campus, Bhopal-462023)</span></h4>-->
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
					<h4> Login </h4>
				</div>
				<form action="" method="post">
				<div>
					<input type="hidden" class="form-control" id="role" name="role" value="1">
				</div>
				<div class="mb-2">
					<label for="ForEmail" class="form-label">Username</label>
					<input type="text" class="form-control" id="username" name="username" aria-describedby="email">

				</div>
				<div class="mb-3">
					<label for="ForPassword" class="form-label">Password</label>
					<input type="password" class="form-control" id="password" name="password">
				</div>
				<div class="">
					<label for="captcha" class="mb-2" id="captImg"><?php echo $captcha['image']; ?></label>
					<span > <a href="javascript:void(0);" class="refreshCaptcha"><i class="fa fa-refresh p-2 text-bg-light" ></i> </a></span>
					<div class="mb-2  text-center">
						<input class="form-control" type="text" name="captcha_add" id="captcha_add" placeholder="Add Captcha Code" autocomplete="off">
					</div>
				</div>
				<div class="form-group mb-0 ">
					<p class="text-center red lighten-2" id="error" style="color:red"></p>
					<button type="submit" class="btn btn-success" name="login" id="login" value="1">Sign in</button>
					<!-- <button type="submit" class="btn btn-success" name="login" id="login" value="1" >Sign in</button> -->
				</div>



				</form>

			</div>
		</div>
		</div>
	</section>


	<?php include(APPPATH . 'views/include/login_footer.php'); ?>

	<script>
		$(document).ready(function() {
			$("#role").focus();
			$("#login").click(function() {
				var role = $("#role").val();
				var username = $("#username").val();
				username = $.trim(username);
				var password = $("#password").val();
				password = $.trim(password);
				var captcha_add = $("#captcha_add").val();
				captcha_add = $.trim(captcha_add);


				//var username_valid = /^([\w-\.]+)@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.)|(([\w-]+\.)+))([a-zA-Z]{2,4}|[0-9]{1,3})(\]?)$/;
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

				//var url1 = '<?php echo base_url(); ?>UserLogin/AdminLogin'
				var url2 = '<?php echo base_url(); ?>UserLogin/StudentLogin'

				//alert(url2); return false;

				$.ajax({


					url: url2,
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
							//alertify.error('username Not Registered');
							$("#username").focus();
							$("#username").css('border', '2px solid #ec000069');
							$("#error").text('Username Not Registered');
						} else if (resp == 3) {
							//alertify.error('Credentials Wrong');
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
        $.get('<?php echo base_url().'Login/refresh'; ?>', function(data){
            $('#captImg').html(data);
        });
    });
});
</script>
</body>

</html>