<?php
error_reporting(0);
if($this->session->userdata('user_id'))
{
    $user_id = $this->session->userdata('user_id');
    $user_name = $this->session->userdata('username');
}

else
{
    header("location:".base_url()."Logout");
}
?>

<nav class="sb-topnav navbar navbar-expand navbar-dark">
            <!-- Navbar Brand-->
			<button class="btn btn-link btn-sm order-1 order-lg-0 me-4 me-lg-0" id="sidebarToggle" href="#!"><i class="fa-solid fa-align-right"></i></button>
			<div class="logo_inline">
            <div class="logo_img">
            <img src="<?php echo base_url();?>assets/website/images/Global-Skills-Park.png" class="img-fluid">
        </div>
                                <div class="logo_text">
                                   <a href="<?php echo base_url();?>Home">
								   <h5>SSR-GSP</h5>

									</a>
                                 </div>
                                 </div>
		 <div class="profile_right">
            <ul class="navbar-nav ms-auto ms-md-0 me-3 me-lg-4">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="fa-solid fa-user-tie"></i> <?php echo $this->session->userdata('fullname');?>!</a>
                    <div class="dropdown-menu dropdown-menu-end dropdown-menu-arrow" aria-labelledby="navbarDropdown">
<div class="user_profile_window">
<div class="profile_box">
<div class="profile_pic">
<img src="<?php echo base_url();?>assets/images/admin_icon.png" class="img-fluid">
</div>
<div class="profile_text">
<h5><?php echo $this->session->userdata('fullname');?> </h5>
 <p> <?php echo $this->session->userdata('role_name');?> </p>
</div>
</div>
<div class="button_boxes">
<!-- <a href="#" class="user_guide_btn"> User Guide   </a>
<a href="#" class="password_btn"> Change Password </a> -->

<a href="<?php echo base_url();?>Logout" class="logout_btn"> Logout  </a>


</div>
</div>



                    </div>
                </li>
            </ul>
			</div>
        </nav>