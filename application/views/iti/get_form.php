<!DOCTYPE html>
<html lang="hi">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1" />
        <title>Registration - ITI Online Admission</title>
        <link rel="shortcut icon" type="image/icon" href="images/favicon.png" />
        <!-- =============== Css Edition =============== -->
        <link rel="preload" href="<?php echo base_url();?>assets/css/style.css" as="style" />
        <link rel="preload" href="<?php echo base_url();?>assets/css/style1.css" as="style" />
        <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/style1.css" />
		<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    </head>
    <body>
<header id="Home_One">
<div class="middle_header">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-xxl-12 col-xl-12 col-lg-12">
                            <div class="logo_inline">
                                <div class="logo_box">
 <img src="<?php echo base_url(); ?>assets/images/crisp-logo.png" class="img-fluid" alt="">
                                 </div>
                                <div class="logo_text text-center">
                                    <h2><span class="hindi_font"> आईटीआई ऑनलाईन प्रवेश 2023-24 हेतु आवेदन पत्र </span></h2>
                                </div>
                              <div class="rishi_img">
                         <img src="<?php echo base_url(); ?>assets/images/azadi_g20.png" class="img-fluid" alt="">
                    </div>
					</div>
                        </div>
                            </div>
                         </div>
                    </div>
</header>
<section class="mainview_section">
<div class="container">
<div class="row justify-content-center">
<div class="col-lg-12 mb-2 text-center">
<h3>ITI Online Registration </h3>
<form action="<?php echo base_url();?>Registration/ViewForm" method="post" class="row  justify-content-center">
                        <div class="col-lg-4">
                        <div class="login_img">
                             <img src="<?php echo base_url();?>assets/images/search_img.jpg" class="img-fluid">
                        </div>
                        </div>
                        <div class="col-lg-6">
                        <div class="login_side">
						<h4>Search Application </h4>

                        <h5>Please fill the following information...</h5>
						<hr>

<div class="row">
<div class="col-lg-6 col-md-6 col-sm-6">
<div class="mb-3">
<label class="form-label">Roll No.<sup class="red">*</sup>:  </label>
<input class="form-control mandatory" id="roll_no" name="roll_no" type="number" min=0 required>
</div>
</div>

<div class="col-lg-6 col-md-6 col-sm-6">
<label class="form-label">Date of Birth<sup class="red">*</sup> </label>
<input type="date" name="date_of_birth" id="date_of_birth" class="form-control mandatory" required>
</div>
</div>
<div class="form-group mb-2">
<p class="text-center red lighten-2" id="error" style="color:red"></p>

 <button type="submit" title="Search" class="btn btn-success" name="register" id="register"><i class="fa fa-search"></i> Search </button>
</div>

							<p>Fields marked with <sup class="red">*</sup> (Asterisk) are mandatory...</p>
						  </div>
                        </div>
                   </form>

</div>


</div>
</div>
 </section>

 <?php include(APPPATH . 'views/footer_include.php'); ?>

	</body>
</html>
