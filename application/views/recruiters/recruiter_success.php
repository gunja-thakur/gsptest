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
					<div class="login_form_view" style="max-width: 100%;">
						<div class="upper_head">
							<h4> Registration Successfully </h4>
						</div>
						<div class="col-lg-12 mb-2 text-center">

							<h5 class="text-light">Your registration has been successfully completed. We will contact you soon! </h5>

							<!--<h5 class="text-light"> Congratulations! Your registration has been successfully completed.
							Your Registration No is <?php echo $this->session->userdata('registration_number'); ?> </h5>-->




						</div>

									</div>
				</div>
			</div>
		</div>
		</div>



		<?php include(APPPATH . 'views/website/web_footer.php'); ?>
		<!-- =============== Scripts Edition =============== -->



</body>

</html>