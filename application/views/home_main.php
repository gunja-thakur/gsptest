<!DOCTYPE html>
<html lang="hi">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1" />
        <title>एकात्मता की मूर्ति | Statue of Oneness </title>
        <link rel="shortcut icon" type="image/icon" href="<?php echo base_url();?>assets/images/favicon.png" />
        <!-- =============== Css Edition =============== -->
        <link rel="preload" href="<?php echo base_url();?>assets/css/style_new.css" as="style" />
        <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/style_new.css" />
    </head>
    <body class="body_bg">
<header id="Home_One">
    <div class="middle_header">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-12">
                    <div class="logo_inline">
                        <div class="logo_box">
                            <a href="index.html">
                                <img src="<?php echo base_url();?>assets/images/ekatm-logo.png" class="img-fluid" alt="">
                            </a>
                        </div>
                        <div class="logo_text">
<h2 class="hindi_title">आचार्य शंकर सांस्कृतिक एकता न्यास </h2>
<h2 class="hindi_font">मध्य प्रदेश शासन, संस्कृति विभाग </h2>
<h4><span class="hindi_font">(जनजातीय संचालनालय, श्यामला हिल्स, भोपाल)</span></h4>
</div>


                    <div class="search_div">
                        <div class="logo_box">
<img src="<?php echo base_url();?>assets/images/mp_logo_new.png" class="img-fluid" alt=" ">
</div>
                    </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
<section class="mainview_section">
<div class="container">
<div class="row align-items-center justify-content-center">
<div class="col-lg-2 col-md-3 col-sm-4 col-5 sm_d_none mb-3">
<img src="<?php echo base_url();?>assets/images/shankar.png" class="img-fluid">
</div>
<div class="col-lg-4 col-md-6 col-sm-8 col-12 mb-3">
<form action="" method="post" class="row  justify-content-center">
<div class="login_side">
								<h5>Login Here</h5>



								<div class="mb-3">
									<label for="Username" class="form-label">Username</label>
									<input class="form-control" id="username" name="username" type="text" placeholder="User Name" />
								</div>
								<div class="mb-3">
									<label for="Password" class="form-label">Password</label>
									<input class="form-control" id="password" name="password" type="password" placeholder="Password" />
								</div>

								<div class="">
									<label for="captcha" class="mb-3"><?php echo $captcha['image']; ?></label>
									<div class="mb-3  text-center">

										<input class="form-control" type="text" name="captcha_add" id="captcha_add" placeholder="Add Captcha Code" autocomplete="off">
									</div>
								</div>
								<div class="form-group mb-0 actions">
									<p class="text-center red lighten-2" id="error" style="color:red"></p>
									<button class="btn btn-success" name="login" id="login" value="1" type="submit">Sign in</button>
								</div>



							</div>
</form>
</div>

</div>
</div>
 </section>




<footer>
    <div class="copywrite_div">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-4">
                    <div class="text_left">
                        <p>© <span id="currentYear"></span> Statue of Oneness. All rights reserved  </p>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="text_center">
                        <p><span> Last Updated on 05 Sept. 2023</span></p>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="text_right">
                        <p>Design and Developed by <a href="https://www.crispindia.com/" target="_blank"> CRISP </a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
<!-- =============== Scripts Edition =============== -->
	<script type="text/javascript" src="<?php echo base_url();?>assets/js/jquery-3.6.0.min.js"></script>
	<script type="text/javascript" src="<?php echo base_url();?>assets/js/jquery-migrate-3.3.2.min.js"></script>
	<script type="text/javascript" src="<?php echo base_url();?>assets/js/bootstrap.bundle.min.js"></script>
	<script>
	$("#currentYear").text( (new Date).getFullYear() );
	</script>
    <script>
		$(document).ready(function() {
			$("#username").focus();
			$("#login").click(function() {
				var username = $("#username").val();
				username = $.trim(username);
				var password = $("#password").val();
				password = $.trim(password);
				var captcha_add = $("#captcha_add").val();
				captcha_add = $.trim(captcha_add);


				//var username_valid = /^([\w-\.]+)@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.)|(([\w-]+\.)+))([a-zA-Z]{2,4}|[0-9]{1,3})(\]?)$/;
				if (username == "") {

					$("#username").focus();
					$("#username").css('border', '2px solid #ec000069');
					$("#error").text('Please Provide a Username');
					return false;
				}
				/*if(!username_valid.test(username))
				{

					$("#username").focus();
					$("#username").css('border','2px solid #ec000069');
					$("#error").text('Invalid username');
					return false;
				}*/
				$("#username").css('border', '1px solid #cacfe7');
				if (password.length < 1) {
					//alertify.error('Please Provide a Password');
					$("#password").focus();
					$("#password").css('border', '2px solid #ec000069');
					$("#error").text('Please Provide a Password');
					return false;
				}

				$("#password").css('border', '1px solid #cacfe7');

				if (captcha_add == "") {
					//alertify.error('Please Provide a Captcha');
					$("#captcha_add").focus();
					$("#captcha_add").css('border', '2px solid #ec000069');
					$("#error").text('Please Provide a Captcha Code');
					return false;
				}
				$("#captcha_add").css('border', '1px solid #cacfe7');
				$.ajax({
					url: '<?php echo base_url(); ?>UserLogin/Login',
					method: 'post',
					data: {
						'username': username,
						'password': password,
						'captcha_add': captcha_add,
						'login': 1
					},
					success: function(resp) {
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
	</body>
</html>
