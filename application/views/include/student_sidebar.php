<div id="layoutSidenav_nav">
    <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
        <div class="sb-sidenav-menu">
            <div class="logo_box">
                <a href="<?php echo base_url(); ?>Home"><img src="images//ekatm-logo.png" class="img-fluid" alt=""> </a>
            </div>
            <div class="nav">
                <a class="nav-link" href="<?php echo base_url(); ?>Home">
                            <div class="sb-nav-link-icon"><i class="fas fa-dashboard"></i></div> Dashboard
                </a>

                <?php if ($this->session->userdata('user_role') == '1' or $this->session->userdata('user_role') == '2' or $this->session->userdata('user_role') == '3') { ?>

                    <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#PlacementDash" aria-expanded="false" aria-controls="PlacementDash">
                            <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                            Placement
                            <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                        </a>
                        <div class="collapse" id="PlacementDash" aria-labelledby="headingfour" data-bs-parent="#sidenavAccordion">
                            <nav class="sb-sidenav-menu-nested nav">
                            <a class="nav-link" href="<?php echo base_url(); ?>Placement/RecruitersList">
                            <div class="sb-nav-link-icon"><i class="fas fa-list"></i></div> Recruiter's List
                            </a>
                            <a class="nav-link" href="<?php echo base_url(); ?>Placement/AlumniList">
                            <div class="sb-nav-link-icon"><i class="fas fa-list"></i></div> Alumni List
                            </a>
                            </nav>
                        </div>

                <?php } ?>

                <?php if ($this->session->userdata('user_role') == '1' or $this->session->userdata('user_role') == '2' or $this->session->userdata('user_role') == '3' or $this->session->userdata('user_role') == '4') { ?>

                    <a class="nav-link" href="<?php echo base_url(); ?>Password">
                        <div class="sb-nav-link-icon"><i class="fas fa-key"></i></div> Change Password
                    </a>

                    <a class="nav-link" href="<?php echo base_url(); ?>Logout">
                        <div class="sb-nav-link-icon"><i class="fas fa-clock-rotate-left"></i></div> Logout
                    </a>

                <?php }




              /* Student */
                if ($this->session->userdata('user_role') == '5') { ?>

                    <!-- <a class="nav-link" href="<?php echo base_url(); ?>Home">
                        <div class="sb-nav-link-icon"><i class="fas fa-dashboard"></i></div> Dashboard
                    </a> -->
                    <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#DataPorting" aria-expanded="false" aria-controls="DataPorting">
                        <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                        Details
                        <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                    </a>
                    <div class="collapse" id="DataPorting" aria-labelledby="headingthree" data-bs-parent="#sidenavAccordion">
                        <nav class="sb-sidenav-menu-nested nav">
                            <a class="nav-link" href="<?php echo base_url(); ?>Student">Student Details </a>


                        </nav>
                    </div>
                    <a class="nav-link" href="<?php echo base_url(); ?>Logout">
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