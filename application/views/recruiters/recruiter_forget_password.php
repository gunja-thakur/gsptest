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
					<h4> Forget Password </h4>
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

				<div class="form-group mb-0 ">
					<p class="text-center red lighten-2" id="error" style="color:red"></p>
					<button type="submit" class="btn btn-success w-100 mb-3" name="forget" id="forget" value="1">Submit</button>


				</div>



				</form>

			</div>
		</div>
		</div>
	</section>


	<?php include(APPPATH . 'views/include/login_footer.php'); ?>


	<script>


		$(document).ready(function() {
			$("#username").focus();
			$("#forget").click(function() {

				var username = $("#username").val();
				username = $.trim(username);



				if (username == "") {

					$("#username").focus();
					$("#username").css('border', '2px solid #ec000069');
					$("#error").text('Please Provide a Username');
					return false;
				}

				$("#username").css('border', '1px solid #cacfe7');


				$.ajax({


					url: '<?php echo base_url(); ?>Recruiters/CheckUser',
					method: 'post',
					data: {

						'username': username,
						'forget': 1
					},
					success: function(resp) {
						//alert(resp);return false;
						if(resp == 1) {
							/*
							alertify.alert("Login Success", function(){
								window.location = "<?= base_url() . "Home" ?>";
							});*/
							window.location = "<?php echo base_url() . "Recruiters/Verify_OTP" ?>";

						} else {
							//alertify.error(resp);
							$("#username").css('border', '2px solid #ec000069');
							$("#error").text('Incorrect Username');
							$("#error").text(resp);
						}
					}
				});
				return false;
			});
		});
	</script>
</body>

</html>