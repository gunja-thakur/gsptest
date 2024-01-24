<header class="header-style1 site-header nav-transparent mobile-sider-drawer-menu">
    <div class="sticky-header main-bar-wraper navbar-expand-lg">
      <div class="main-bar">
        <div class="container">
          <div class="flex_header">

            <div class="logo_side">
              <div class="logo_side_img">
                <a href="<?php echo base_url();?>">
                  <img src="<?php echo base_url();?>assets/website/images/Global-Skills-Park.png" alt="Global Skills Park Bhopal - Madhya Pradesh" class="img-fluid" />
                </a>
              </div>
            </div>
            <h2 class="site_title md_d_none">Alumni Portal </h2>

            <!-- MAIN NAVIGATION -->
            <div class="header-nav nav-dark navbar-collapse">
              <h2 class="site_title sm_d_none">Alumni Portal </h2>
              <ul class="nav navbar-nav ">
                <li> <a href="<?php echo base_url();?>"> Overview </a> </li>
                <!-- <li>
                  <a href="javascript:void(0);" class="drop_icon">Connect</a>
                  <ul class="sub-menu">
                    <li><a href="<?php echo base_url();?>Website/Alumni_Directory">Alumni Directory </a></li>
                  </ul>
                </li> -->
                <li><a href="<?php echo base_url();?>Website/Alumni_Directory">Alumni Directory </a></li>
                <li><a href="<?php echo base_url();?>Website/Events">Upcoming Events </a></li>
                <!-- <li>
                  <a href="javascript:void(0);" class="drop_icon">Events</a>
                  <ul class="sub-menu">
                    <li><a href="<?php echo base_url();?>Website/Events">Upcoming Events </a></li>
                  </ul>
                </li> -->
                <!-- <li> <a href="<?php echo base_url();?>Website/Success_Story"> Success Stories </a> </li> -->
                <!-- <li>
                  <a href="javascript:void(0);" class="drop_icon">News</a>
                  <ul class="sub-menu">
                    <li><a href="#">Latest News </a></li>
                    <li><a href="#">News Archive </a></li>
                  </ul>
                </li> -->
                <li> <a href="<?php echo base_url();?>Website/Contact_Us"> Contact Us </a> </li>

              </ul>
            </div>
            <!-- EXTRA NAV -->
            <div class="extra-nav social_hover">
              <ul>
                <li data-bs-toggle="tooltip" data-bs-placement="top" data-bs-original-title="Login Portal"><a href="#" id="dropdownLoginLink" role="button" data-bs-toggle="dropdown" aria-expanded="false" class=" dropdown-toggle"> <i class="bi bi-person-check"></i> Login </a>
                  <div class="dropdown-menu text-start" aria-labelledby="dropdownLoginLink">
                    <a class="" title="Alumni Portal" href="<?php echo base_url()?>Login">Administrator</a>
                    <a class="" title="Student Login" href="<?php echo base_url()?>Alumni/StudentLogin">Alumni</a>
                  </div>
                </li>
                <li class="social_hover_a" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-original-title="Social Connects"><a href="#"><i class="bi bi-share"></i> </a>
                  <ul class="social_list">
                    <li>
                      <a href="https://www.facebook.com/profile.php?id=100090537499351" target="_blank" data-bs-toggle="tooltip" data-bs-placement="left" data-bs-original-title="@OfficialSSRGSP"><i class="bi bi-facebook"></i></a>
                    </li>
                    <li><a href="https://twitter.com/SSRGSPOfficial" target="_blank" data-bs-toggle="tooltip" data-bs-placement="left" data-bs-original-title="@SSRGSPOfficial"><i class="fa-brands fa-x-twitter"></i></a></li>
                    <li><a href="https://www.linkedin.com/company/ssr-global-skills-park/" target="_blank" data-bs-toggle="tooltip" data-bs-placement="left" data-bs-original-title="ssr-global-skills-park"><i class="bi bi-linkedin"></i></a></li>
                    <li><a href="https://www.youtube.com/@SSRGlobalSkillsPark" target="_blank" data-bs-toggle="tooltip" data-bs-placement="left" data-bs-original-title="@ssrgspofficial"><i class="bi bi-youtube"></i></a></li>
                    <li><a href="https://www.instagram.com/ssrgspofficial/" target="_blank" data-bs-toggle="tooltip" data-bs-placement="left" data-bs-original-title="@SSRGlobalSkillsPark"><i class="bi bi-instagram"></i></a></li>
                  </ul>
                </li>


                <li data-bs-toggle="tooltip" data-bs-placement="top" data-bs-original-title="Accessibility Option"> <a href="#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false" class=" dropdown-toggle"> <i class="fa-brands fa-accessible-icon"></i> </a>

                  <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                    <a class="jfontsize-button" id="jfontsize-m" title="Font Reduce" class="">A-</a> <a class="jfontsize-button" id="jfontsize-d" title="Font Default" class="">A</a> <a class="jfontsize-button" id="jfontsize-p" title="Font Increase" class="">A+</a>
                    <br />
                    <a href="javascript:void(0);" onclick="switch_style('stylemono');return false;" class="black_link">A </a>
                    <a href="javascript:void(0);" onclick="switch_style('main-style');return false;" class="white_links">A</a>
                    <br />
                    <a class="sr_bg" href="#" title=""> Screen Reader</a>
                  </div>

                </li>
              </ul>
            </div>

            <!-- NAV Toggle Button -->
            <button id="mobile-side-drawer" data-target=".header-nav" data-toggle="collapse" type="button" class="navbar-toggler collapsed">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar icon-bar-first"></span>
              <span class="icon-bar icon-bar-two"></span>
              <span class="icon-bar icon-bar-three"></span>
            </button>

            <!-- EXTRA Nav -->
          </div>
        </div>
      </div>
    </div>
  </header>