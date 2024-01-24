<!DOCTYPE html>
<html lang="hi">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1" />
        <title>Gandhi Medical College - Bhopal (M.P)</title>
        <link rel="shortcut icon" type="image/icon" href="images/favicon.png" />
        <!-- =============== Css Edition =============== -->
        <link rel="preload" href="<?php echo base_url();?>assets/css/style1.css" as="style" />
        <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/style1.css" />
		<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    </head>
    <body>
<header id="Home_One">
    <div class="middle_header">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-xxl-10 col-xl-10 col-lg-10 col-md-8 col-sm-9 col-12">
                    <div class="logo_inline">
                        <div class="logo_box">
                            <a href="<?php echo base_url();?>">
                                <img src="<?php echo base_url();?>assets/images/gmc-logo.png" class="img-fluid" alt="" />
                            </a>
                        </div>
                        <div class="logo_text">
                            <a href="javascript:;">
<h2 class="hindi_title">गाँधी मेडिकल कॉलेज, भोपाल</h2>
<h2>Gandhi Medical College, Bhopal</h2>
<h4><span>(An Autonomous Body Under Department of Medical Education Govt. of M.P)</span></h4>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-xxl-2 col-xl-2 col-lg-2 col-md-3 col-sm-3 col-12">
                    <div class="search_div">
                        <div class="logo_box">
<img src="<?php echo base_url();?>assets/images/mp_logo_new.png" class="img-fluid" alt="Madhya Pradesh">
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
<h3>Payment Confirmation Reciept of Registration </h3>
<h5 class="text-success">Transaction <?php echo ucwords($status);?> </h5>
<a  href="<?php base_url();?>" class="btn btn-sm btn-outline-success pull_right m-1">Go Back</a>

<!-- <div class="table-responsive">
 <table class="table table-bordered">
 <tbody>
    <tr>
      <th scope="col">Name</th>
      <td><?php echo ucwords($firstname); ?></td>

    </tr>

    <tr>
    <th scope="col">Email</th>
    <td><?php echo $email; ?></td>
    </tr>

    <tr>
     <th scope="col">Mobile</th>
     <td><?php echo $mobile; ?></td>
    </tr>
    <tr>
     <th scope="col">App ID</th>
     <td><?php echo $app_id; ?></td>
    </tr>
    <tr>
     <th scope="col">Transaction ID</th>
     <td><?php echo $transaction_id; ?></td>
    </tr>

    <tr>
     <th scope="col">Bank Reference Number</th>
     <td><?php echo $bank_ref_num; ?></td>
    </tr>
    <tr>
     <th scope="col">Amount</th>
     <td><?php echo $amount; ?></td>
    </tr>
    <tr>
     <th scope="col">Transaction Date</th>
     <td><?php echo $txn_date; ?></td>
    </tr>


  </tbody>
</table>
</div>
<button onclick="window.print()" class="btn btn-sm btn-outline-success pull_right m-1">Print</button> -->

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
                        <p>© <span id="currentYear"></span> GMC Bhopal. All rights reserved  </p>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="text_center">
                    <p><span><a href="<?php echo base_url();?>Welcome/TermsAndConditions"> Terms & Conditions </a></span></p>
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
	</body>
</html>
