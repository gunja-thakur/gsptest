<div id="layoutSidenav_nav">
    <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
        <div class="sb-sidenav-menu">
            <div class="logo_box">
                <!-- <a href="<?php echo base_url(); ?>Home"><img src="images//ekatm-logo.png" class="img-fluid" alt=""> </a> -->
            </div>
            <div class="nav">
                <a class="nav-link" href="<?php echo base_url(); ?>Home">
                    <div class="sb-nav-link-icon"><i class="fas fa-dashboard"></i></div> Dashboard
                </a>

                <!-- TPO Coordinator Start  -->

                <?php if ($this->session->userdata('user_role') == '1' or $this->session->userdata('user_role') == '2' or $this->session->userdata('user_role') == '3') { ?>

                    <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#PlacementDash" aria-expanded="false" aria-controls="PlacementDash">
                        <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                        Recruiters
                        <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                    </a>
                    <div class="collapse" id="PlacementDash" aria-labelledby="headingfour" data-bs-parent="#sidenavAccordion">
                        <nav class="sb-sidenav-menu-nested nav">
                            <a class="nav-link" href="<?php echo base_url(); ?>Placement/RecruitersList">
                                <div class="sb-nav-link-icon"><i class="fas fa-list"></i></div> Recruiter's List
                            </a>

                            <a class="nav-link" href="<?php echo base_url(); ?>CampusDrive">
                                <div class="sb-nav-link-icon"><i class="fas fa-university"></i></div> Campus List
                            </a>
                            <a class="nav-link" href="<?php echo base_url(); ?>Vacancy">
                                <div class="sb-nav-link-icon"><i class="fas fa-suitcase"></i></div> Vacancy List
                            </a>
                        </nav>
                    </div>

                    <a class="nav-link" href="<?php echo base_url(); ?>Placement/ViewList">
                    <div class="sb-nav-link-icon"><i class="fas fa-building-user"></i></div> Placement Details
                </a>

                <?php } ?>

                <!-- TPO End  -->

                <!-- Alumni Start  -->
                <?php if ($this->session->userdata('user_role') == '1' or $this->session->userdata('user_role') == '2' or $this->session->userdata('user_role') == '6') { ?>

                    <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#AlumniDash" aria-expanded="false" aria-controls="AlumniDash">
                        <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                        Alumni
                        <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                    </a>
                    <div class="collapse" id="AlumniDash" aria-labelledby="headingfour" data-bs-parent="#sidenavAccordion">
                        <nav class="sb-sidenav-menu-nested nav">
                            <a class="nav-link" href="<?php echo base_url(); ?>Alumni/ViewList">
                                <div class="sb-nav-link-icon"><i class="fas fa-list"></i></div> Alumni List
                            </a>
                        </nav>
                    </div>

                    <a class="nav-link" href="<?php echo base_url(); ?>Events">
                        <div class="sb-nav-link-icon"><i class="fa-solid fa-calendar-days"></i></div> Events
                    </a>

                <?php } ?>

                <!-- Alumni End  -->

                <?php if ($this->session->userdata('user_role') != '5' and $this->session->userdata('user_role') != '7') { ?>

                    <a class="nav-link" href="<?php echo base_url(); ?>Password">
                        <div class="sb-nav-link-icon"><i class="fas fa-key"></i></div> Change Password
                    </a>

                    <a class="nav-link" href="<?php echo base_url(); ?>Logout">
                        <div class="sb-nav-link-icon"><i class="fas fa-clock-rotate-left"></i></div> Logout
                    </a>

                <?php } ?>

                <!-- Student -->
                <?php if ($this->session->userdata('user_role') == '5') { ?>

                    <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#DataPorting" aria-expanded="false" aria-controls="DataPorting">
                        <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                        Profile
                        <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                    </a>
                    <div class="collapse" id="DataPorting" aria-labelledby="headingthree" data-bs-parent="#sidenavAccordion">
                        <nav class="sb-sidenav-menu-nested nav">
                            <a class="nav-link" href="<?php echo base_url(); ?>Student/ViewDetails">Update Profile </a>
                        </nav>
                    </div>
                    <a class="nav-link" href="<?php echo base_url(); ?>Student/Testimonial">
                        <div class="sb-nav-link-icon"><i class="fas fa-pencil"></i></div> Testimonial
                    </a>

                    <a class="nav-link" href="<?php echo base_url(); ?>Alumni/ChangePassword">
                        <div class="sb-nav-link-icon"><i class="fas fa-key"></i></div> Change Password
                    </a>

                    <a class="nav-link" href="<?php echo base_url(); ?>Logout/AlumniLogout">
                        <div class="sb-nav-link-icon"><i class="fas fa-clock-rotate-left"></i></div> Logout
                    </a>

                <?php } ?>

                <!-- Recruiters -->
                <?php if ($this->session->userdata('user_role') == '7') { ?>

                    <!--<a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#DataPorting" aria-expanded="false" aria-controls="DataPorting">
                        <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                        Company Profile
                        <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                    </a>
                    <div class="collapse" id="DataPorting" aria-labelledby="headingthree" data-bs-parent="#sidenavAccordion">
                        <nav class="sb-sidenav-menu-nested nav">
                            <a class="nav-link" href="<?php echo base_url(); ?>Recruiters/Update_CompanyProfile">Update Profile </a>
                        </nav>
                    </div>-->
                    <a class="nav-link" href="<?php echo base_url(); ?>CampusDrive">
                        <div class="sb-nav-link-icon"><i class="fas fa-university"></i></div> Campus Drive
                    </a>
                    <a class="nav-link" href="<?php echo base_url(); ?>Vacancy">
                        <div class="sb-nav-link-icon"><i class="fas fa-suitcase"></i></div> Vacancy Posting
                    </a>
                    <a class="nav-link" href="<?php echo base_url(); ?>Recruiters/ChangePassword">
                        <div class="sb-nav-link-icon"><i class="fas fa-key"></i></div> Change Password
                    </a>
                    <a class="nav-link" href="<?php echo base_url(); ?>Logout/RecruiterLogout">
                        <div class="sb-nav-link-icon"><i class="fas fa-clock-rotate-left"></i></div> Logout
                    </a>

                <?php } ?>



            </div>
        </div>
        <div class="sb-sidenav-footer">
            <div class="small">Logged in as:</div>
            <?php echo $this->session->userdata('role_name'); ?>
        </div>
    </nav>
</div>