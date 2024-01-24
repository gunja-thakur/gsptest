<?php foreach($temp_data as $td) ?>
<!DOCTYPE html>
<html lang="hi">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1" />
        <title>Registration Checkout - Gandhi Medical College - Bhopal (M.P)</title>
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
<div class="row">
<div class="col-lg-12 mb-2">
<div class="white_layout">
<h3 class="text-center">Checkout Confirmation </h3>
<div class="table-responsive">
 <table class="table table-bordered">
  <thead>
    <tr>
      <th scope="col">Roll No.</th>
      <!--<th scope="col">Common Rank	</th>-->
      <th scope="col">Name</th>
      <!--<th scope="col">Date of Birth	</th>-->
      <th scope="col">Subject</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row"><?php echo $this->session->userdata('roll_no');?>
      </th>
      <!--<td><?php echo $record->common_rank; ?></td>-->
      <td><?php echo $this->session->userdata('user_name'); ?></td>
      <!--<td><?php echo $this->session->userdata('dob'); ?></td>-->
      <td><?php echo $this->session->userdata('subject_name'); ?></td>

    </tr>

  </tbody>
</table>
</div>
</div>
</div>
</div>
<div class="row row_mg0">
 <div class="col-lg-5 col_pd0">
                        <div class="login_img">
                             <img src="<?php echo base_url();?>assets/images/details.webp" class="img-fluid">
                        </div>
                        </div>
                        <div class="col-lg-7 col_pd0">
						<form action="<?php echo base_url();?>Checkout/check" method="POST" enctype="multipart/form-data" >
                        <div class="login_side">
						<h5>Please fill the following information...</h5>
						<hr>
<div class="row">

<input type="hidden" id="user_id" name="user_id" value="<?php echo $this->session->userdata('user_id'); ?>">
<input type="hidden" id="app_id" name="app_id" value="<?php echo $td['app_id']; ?>" readonly>

<div class="col-lg-6 col-md-6 col-sm-6">
<div class="mb-3">
<label class="form-label">Name:  <sup class="red">*</sup></label>
 <input class="form-control" id="user_name" name="user_name" type="text" value="<?php echo $this->session->userdata('user_name'); ?>" readonly>
</div>
</div>
<div class="col-lg-6 col-md-6 col-sm-6">
<div class="mb-3">
<label class="form-label">Roll No.:  <sup class="red">*</sup></label>
 <input class="form-control" id="roll_no" name="roll_no" type="text" value="<?php echo $this->session->userdata('roll_no'); ?>" readonly>
</div>
</div>

<div class="col-lg-6 col-md-6 col-sm-6">
<div class="mb-3">
<label class="form-label">Mobile No.:  <sup class="red">*</sup></label>
<input maxlength="10" class="form-control" id="mobile" name="mobile" type="number" value="<?php echo $td['u_mobile'];?>">
</div>
</div>
<div class="col-lg-6 col-md-6 col-sm-6">
<div class="mb-3">
<label class="form-label">Email ID: <sup class="red">*</sup></label>
<input class="form-control" id="email" name="email" type="email" value="<?php echo $td['u_email'];?>">
</div>
</div>

<div class="col-lg-4 col-md-4 col-sm-4">
<div class="mb-3">
<label class="form-label">Registration Fee + 18% GST:  </label>
 <input class="form-control" id="reg_fee" name="reg_fee" type="text" value="<?php echo $this->session->userdata('reg_fees'); ?>" readonly>
</div>
</div>

<!-- <div class="col-lg-4 col-md-4 col-sm-4">
<div class="mb-3">
<label class="form-label">GST 18% on Registration Fee:  </label>
 <input class="form-control" id="gst" name="gst" type="text" value="<?php echo $this->session->userdata('gst'); ?>" readonly>
</div>
</div> -->

<div class="col-lg-4 col-md-4 col-sm-4">
<div class="mb-3">
<label class="form-label">Total Fee:  </label>
 <input class="form-control" id="total_fee" name="total_fee" type="text" value="<?php echo $this->session->userdata('total_fees'); ?>" readonly>
</div>
</div>

<div class="col-lg-12 col-md-4 col-sm-4">
<div class="mb-3">
<label class="form-label">Address:  </label>
 <input class="form-control" id="address" name="address" type="text" value="<?php echo $td['address'];?>" >
</div>
</div>



</div>

<div class="form-group mb-2">
<p class="text-center red lighten-2" id="error" style="color:red"></p>
<button class="btn btn-sm btn-success " name="submit" id="submit" type="submit" onclick="frmsubmit(); return true;">Confirm & Continue</button>
</div>

</div>
</form>

</div>
</div>
</div>
</section>


<?php include_once"footer_include.php";?>
	<script>
		/*	$(document).ready(function(){
			$("#mobile").focus();
				$("#submit").click(function(){

					var mobile = $("#mobile").val();
					mobile = $.trim(mobile);
					var email = $("#email").val();
					email = $.trim(email);
					var password = $("#password").val();
					password = $.trim(password);
					var cpassword = $("#cpassword").val();
					cpassword = $.trim(cpassword);

          if(mobile=="")
					{
						$("#mobile").focus();
						$("#mobile").css('border','2px solid #ec000069');
						$("#error").text('Provide Mobile Number');
						return false;
					}

					$("#mobile").css('border','1px solid #cacfe7');

          var email_valid = /^([\w-\.]+)@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.)|(([\w-]+\.)+))([a-zA-Z]{2,4}|[0-9]{1,3})(\]?)$/;
					if(email=="")
					{

						$("#email").focus();
						$("#email").css('border','2px solid #ec000069');
						$("#error").text('Please Provide a Email');
						return false;
					}
					if(!email_valid.test(email))
					{

						$("#email").focus();
						$("#email").css('border','2px solid #ec000069');
						$("#error").text('Invalid Email');
						return false;
					}
					$("#email").css('border','1px solid #cacfe7');

          if(password.length<5)
					{
						$("#password").focus();
						$("#password").css('border','2px solid #ec000069');
						$("#error").text('Password Must Be 6 Charachter');
						return false;
					}

					$("#password").css('border','1px solid #cacfe7');


					if(password!=cpassword)
					{
						$("#cpassword").focus();
						$("#password").css('border','2px solid #ec000069');
						$("#cpassword").css('border','2px solid #ec000069');
						$("#error").text('Password And Confirm Password Not Match');
						return false;
					}
					$("#cpassword").css('border','1px solid #cacfe7');
					$("#error").text('');

					/*$.ajax({
						url:'<?php echo base_url();?>Register/StudentCheck',
						method:'post',
						data:{'user_name':user_name,'roll_no':roll_no,'date_of_birth':date_of_birth},
						success:function(resp){
							if(resp==2)
							{
								//alertify.error('user_name Not Registered');
								$("#user_name").focus();
								$("#user_name").css('border','2px solid #ec000069');
								$("#error").text('user_name Not Registered');
							}
							else if(resp==3)
							{
								//alertify.error('Credentials Wrong');
								$("#roll_no").focus();
								$("#roll_no").css('border','2px solid #ec000069');
								$("#error").text('Credentials Wrong');
							}
							else if(resp==1)
							{


								window.location = "<?php echo base_url()."Home"?>";

							}
							else
							{
								//alertify.error(resp);
								$("#user_name").css('border','2px solid #ec000069');
								$("#error").text(resp);
							}
						}
					});*
					return true;
				});
			});*/
		</script>
	</body>
</html>
