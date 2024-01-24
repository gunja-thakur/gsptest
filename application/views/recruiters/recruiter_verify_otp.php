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

	</header>

	<section class="login_section">
		<div class="container">
			<div class="login_form_view">
				<div class="upper_head">
					<h4> Verify OTP</h4>
				</div>
				<form action="<?php echo base_url(); ?>Recruiters/NewPassword" method="post">
				<div>
					<input type="hidden" class="form-control" id="rm_id" name="rm_id" value="<?php echo $this->session->userdata('reset_user_id');?>">
					<input type="hidden" class="form-control" id="otp" name="otp" value="<?php echo $this->session->userdata('reset_code');?>">

				</div>
				<div class="mb-2">
					<label for="ForEmail" class="form-label">OTP</label>
					<input type="Number" class="form-control" id="reset_code" name="reset_code" aria-describedby="email">

				</div>

				<div class="form-group mb-0 ">
					<p class="text-center red lighten-2" id="error" style="color:red"></p>
					<button type="submit" class="btn btn-success w-100 mb-3" name="verify" id="verify" value="1">Submit</button>


				</div>



				</form>

			</div>
		</div>
		</div>
	</section>


	<?php include(APPPATH . 'views/include/login_footer.php'); ?>


	<script>
		$(document).ready(function() {
			$("#reset_code").focus();
			$("#verify").click(function() {

				var reset_code = $("#reset_code").val();
				reset_code = $.trim(reset_code);

				if (reset_code == "") {

					$("#reset_code").focus();
					$("#reset_code").css('border', '2px solid #ec000069');
					$("#error").text('Please Provide a reset_code');
					return false;
				}

				$("#reset_code").css('border', '1px solid #cacfe7');


				/*$.ajax({


					url: '<?php echo base_url(); ?>Recruiters/CheckOTP',
					method: 'post',
					data: {

						'rm_id': rm_id,
						'otp': otp,
						'reset_code': reset_code,
						'verify': 1
					},
					success: function(resp) {
						alert(resp);return false;
						if(resp == 1) {
							window.location = "<?php echo base_url() . "Home" ?>";
						} else {
							//alertify.error(resp);
							$("#reset_code").css('border', '2px solid #ec000069');
							$("#error").text('Incorrect reset_code');
							$("#error").text(resp);
						}
					}
				});
				return false;*/
			});
		});
	</script>
</body>

</html>