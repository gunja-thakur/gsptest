<footer>
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
							<p>Designed and Developed by  <a href="https://www.crispindia.com/" target="_blank"> CRISP </a></p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</footer>

    <!-- =============== Scripts Edition =============== -->
	<script type="text/javascript" src="<?php echo base_url() ?>assets/website/js/jquery-latest.min.js"></script>
	<script type="text/javascript" src="<?php echo base_url() ?>assets/website/js/jquery-migrate.min.js"></script>
	<script type="text/javascript" src="<?php echo base_url() ?>assets/website/js/bootstrap.bundle.min.js"></script>
	<script type="text/javascript" src="<?php echo base_url() ?>assets/website/js/function_call.js"></script>
	<script type="text/javascript">
		var sessionTimeoutWarning = "5";
		var sessionTimeout = "4";
		var sTimeout = parseInt(sessionTimeoutWarning) * 60 * 1000;
		setTimeout('SessionWarning()', sTimeout);

		function SessionWarning() {
			/* var message = "Your session is Expired ! ";
			alert(message); */
			location.reload();
		}
	</script>