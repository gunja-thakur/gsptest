<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Login - Directorate Of Technical Education</title>
        <link rel="shortcut icon" type="image/png" href="<?php echo base_url();?>assets/images/favicon.png" />
        <link rel="preload" href="<?php echo base_url();?>assets/css/style.css" as="style"/>
        <link href="<?php echo base_url();?>assets/css/style.css" rel="stylesheet"/>
    </head>
    <body class="login_view">
        <div id="layoutAuthentication">
            <div id="layoutAuthentication_content">
                <main>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-5">
                            <div class="login_form_box">
                                <div class="card shadow-lg border-0 rounded-lg mt-4">
                                    <div class="card-header bg-white text-center">
								 <div class="logo_inline">
                                <div class="logo_box">
                                     <img src="<?php echo base_url();?>assets/images/mp_logo.png" class="img-fluid" alt="Directorate Of Technical Education">
                                </div>
                                <div class="logo_text">
                                    <h2> Directorate Of Technical Education</h2>
                                        <h4><span>Goverenment of Madhya Pradesh</span></h4>
                                 </div>
                            </div>
							 </div>
                                    <div class="card-body">
									<h3 class="login_head"> Login</h3>
                                        <form>
                                            <div class="form-floating mb-3">
                                                <input class="form-control" id="inputEmail" type="email" placeholder="name@example.com" />
                                                <label for="inputEmail">Email address</label>
                                            </div>
                                            <div class="form-floating mb-3">
                                                <input class="form-control" id="inputPassword" type="password" placeholder="Password" />
                                                <label for="inputPassword">Password</label>
                                            </div>
                                            <div class="form-check mb-3">
                                                <input class="form-check-input" id="inputRememberPassword" type="checkbox" value="" />
                                                <label class="form-check-label" for="inputRememberPassword">Remember Password</label>
                                            </div>
                                            <div class="d-flex align-items-center justify-content-between mt-4 mb-0">
                                                <a class="small" href="password.html">Forgot Password?</a>
                                                <a class="btn btn-success" href="index.html">Login</a>
                                            </div>
                                        </form>
                                    </div>
                                    <!--<div class="card-footer text-center py-3">
                                        <div class="small"><a href="register.html">Need an account? Sign up!</a></div>
                                    </div>-->
                                </div>
                            </div>
                            </div>
                        </div>
                    </div>
                </main>
            </div>
            <div id="layoutAuthentication_footer">
                <footer class="copyright_div mt-auto">
                    <div class="container-fluid px-4">
                        <div class="d-flex align-items-center justify-content-between small">
                            <div class="">Copyright &copy;  Directorate Of Technical Education. <span id="currentYear"></span>.</div>
                            <div>
                                <a href="#">Privacy Policy</a>
                                &middot;
                                Design and Developed by <a href="#"> CRISP</a>
                            </div>
                        </div>
                    </div>
                </footer>
            </div>
        </div>
        <!-- back to top start -->
        <div class="progress-wrap">
            <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
                <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" />
            </svg>
        </div>
		<script type="text/javascript" src="<?php echo base_url();?>assets/js/jquery-3.6.0.min.js"></script>
        <script type="text/javascript" src="<?php echo base_url();?>assets/js/jquery-migrate-3.3.2.min.js"></script>
		<script type="text/javascript" src="<?php echo base_url();?>assets/js/bootstrap.bundle.min.js"></script>
		<script type="text/javascript" src="<?php echo base_url();?>assets/js/SmoothScroll.min.js"></script>
        <script type="text/javascript" src="<?php echo base_url();?>assets/js/backToTop.js"></script>
        <script type="text/javascript" src="<?php echo base_url();?>assets/js/scripts.js"></script>
     </body>
</html>
