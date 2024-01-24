<!DOCTYPE html>
<html lang="en">

<head>
  <?php include(APPPATH . 'views/frontend/web_include/webhead.php'); ?>
</head>

<body>
  <!-- Header -->
  <?php include(APPPATH . 'views/frontend/web_include/webheader.php'); ?>
  <!-- Header -->

  <!-- Banner -->
  <section class="home_banner_section" id="homeview">
    <div class="home_slide owl-carousel owl-theme">
      <div class="item">
        <div class="img_slide">
          <img src="<?php echo base_url(); ?>assets/website/images/alumni_slider_31.jpg" class="img-fluid">
          <div class="slider_caption">
            <h4>To build a <span>GSP alumni network</span> to engage them and keep them connected. </h4>
          </div>
        </div>
      </div>
      <div class="item">
        <div class="img_slide">
          <img src="<?php echo base_url(); ?>assets/website/images/alumni_slider_2.jpg" class="img-fluid">
          <div class="slider_caption">
            <h4>To build a <span>GSP alumni network</span> to engage them and keep them connected. </h4>
          </div>
        </div>
      </div>
      <div class="item">
        <div class="img_slide">
          <img src="<?php echo base_url(); ?>assets/website/images/alumni_slider_1.jpg" class="img-fluid">
          <div class="slider_caption">
            <h4>To build a <span>GSP alumni network</span> to engage them and keep them connected. </h4>
          </div>
        </div>
      </div>
      <div class="item">
        <div class="img_slide">
          <img src="<?php echo base_url(); ?>assets/website/images/alumni_slider_4.jpg" class="img-fluid">
          <div class="slider_caption">
            <h4>To build a <span>GSP alumni network</span> to engage them and keep them connected. </h4>
          </div>
        </div>
      </div>
      <div class="item">
        <div class="img_slide">
          <img src="<?php echo base_url(); ?>assets/website/images/alumni_slider_5.jpg" class="img-fluid">
          <div class="slider_caption">
            <h4>To build a <span>GSP alumni network</span> to engage them and keep them connected. </h4>
          </div>
        </div>
      </div>
      <div class="item">
        <div class="img_slide">
          <img src="<?php echo base_url(); ?>assets/website/images/alumni_slider_6.jpg" class="img-fluid">
          <div class="slider_caption">
            <h4>To build a <span>GSP alumni network</span> to engage them and keep them connected. </h4>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- Banner -->


  <!-- Welcome Section -->
  <section class="first_section">
    <div class="container">
      <div class="row">
        <div class="col-lg-6 mb-3">
          <div class="welcome_note">
            <h1>Welcome to the Alumni Portal</h1>
            <p>"A platform that provides a detailed process flow of various activities involved in the Alumni Management."</p>
          </div>
          <div class="row">
            <div class="col-lg-6 mb-3">
              <div class="highlight_boxes">
                <div class="icon_img">
                  <img src="<?php echo base_url(); ?>assets/website/images/student.png" class="img-fluid">
                </div>
                <h3>Search Alumni</h3>
                <p>Find and share career opportunities within the community</p>
                <div class="absolute_btn"><a href="<?php echo base_url()?>Website/Alumni_List" class="readmore1">Search Now</a></div>
              </div>
            </div>
            <div class="col-lg-6 mb-3">
              <div class="highlight_boxes">
                <div class="icon_img">
                  <img src="<?php echo base_url(); ?>assets/website/images/connection.png" class="img-fluid">
                </div>
                <h3>Giving Back</h3>
                <p>Create &amp; complete your alumni profile and remain connected</p>
                <div class="absolute_btn"><a href="#" class="readmore1">Donate Now </a></div>
              </div>
            </div>
          </div>
        </div>

        <div class="offset-lg-1 col-lg-5 mb-3">
          <div class="highlight_lines">
            <div class="inner_line">
              <h5 class="flex_icon_head"><i class="bi bi-chat-left-quote"></i> Message from the Project Director</h5>
              <div class="img_ontop">
                <img src="<?php echo base_url(); ?>assets/website/images/sheetla_patle.jpg" class="img-fluid">
                <span class="name_description">
                  <h6>Ms. Sheetla Patle (IAS) </h6>
                  <p>Project Director (MPSDP) </p>
                </span>
              </div>
              <p>My Fellow GSP alumni, <br>
                We are a family…
                <br>
                <br>
                At the outset, let me wish you a very successful hiring season. We understand the challenges you face in hiring the right person for the right role from the plethora of options available to you. This certainly is not an enviable task. As a Project Director of India's largest skills development project, I believe in the ability. The economic prosperity of a country depends greatly on the degree of partnerships that exist in the country between the training institutions and the industries in creating a pool of rich human capital.
              </p>
              <!-- <a href="#" class="readmore_line">read more </a> -->
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- Welcome Section -->



  <!-- Welcome Section -->
  <section class="event_section">
    <div class="container">
      <div class="row">
        <div class="col-lg-5">
          <div class="event_listing">
            <h2 class="h2_themehead text-start">Upcoming Events </h2>
            <div class="row">
              <div class="col-lg-12">
              <?php $i=1; foreach($event_data as $ed) { ?>
                <div class="event_flex">
                  <div class="event_img">
                    <img src="<?php echo base_url(); ?>assets/events/<?php echo $ed['event_invite'];?>" alt="" class="img-fluid">
                  </div>
                  <div class="event_content">
                    <h3>
                      <a href="#">
                      <?php echo $ed['event_title'];?> </a>
                    </h3>
                    <span class="publish_date">
                      <i class="icon-calendar"></i> <?php echo $ed['published_date'];?> </span>
                    <p><?php echo mb_substr($ed['event_description'], 0, 50);?></p>
                    <a class="event_btn" data-id="<?php echo $ed['event_id'];?>"> <i class="bi bi-chevron-right"></i> View Details</a>
                  </div>
                </div>
                <?php $i++; if($i>2) break; } ?>




                <div class="text-start">
                  <a class="btn btn-success" href="<?php echo base_url()?>Website/Events"><i class="bi bi-arrow-up-right-circle-fill"></i> View all event </a>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-7">
          <div class="gallery_control">
            <h2 class="h2_themehead">Alumni Gallery </h2>
            <div class="row">
              <div class="col-lg-6 mb-2">
                <div class="photo_box">
                  <img src="<?php echo base_url(); ?>assets/website/images/AlumniGallery_1.jpg" class="img-fluid" alt="">
                  <div class="content">
                    <a href="<?php echo base_url(); ?>assets/website/images/AlumniGallery_1.jpg" data-fancybox="alumni_gallery_group">
                      <h5><i class="bi bi-arrow-up-right-circle-fill text-white"></i> <span class="hoverline"> View Gallery </span> </h5>
                    </a>
                  </div>
                </div>
              </div>
              <div class="col-lg-6">
                <div class="row">
                  <div class="col-lg-6 mb-4">
                    <div class="photo_box">
                      <img src="<?php echo base_url(); ?>assets/website/images/AlumniGallery_2.jpg" class="img-fluid" alt="">
                      <div class="content">
                        <a href="<?php echo base_url(); ?>assets/website/images/AlumniGallery_2.jpg" data-fancybox="alumni_gallery_group">
                          <h5><i class="bi bi-arrow-up-right-circle-fill text-white"></i> <span class="hoverline"> View Gallery </span> </h5>
                        </a>
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-6 mb-4">
                    <div class="photo_box">
                      <img src="<?php echo base_url(); ?>assets/website/images/AlumniGallery_3.jpg" class="img-fluid" alt="">
                      <div class="content">
                        <a href="<?php echo base_url(); ?>assets/website/images/AlumniGallery_3.jpg" data-fancybox="alumni_gallery_group">
                          <h5><i class="bi bi-arrow-up-right-circle-fill text-white"></i> <span class="hoverline"> View Gallery </span> </h5>
                        </a>
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-6 mb-3">
                    <div class="photo_box">
                      <img src="<?php echo base_url(); ?>assets/website/images/AlumniGallery_4.jpg" class="img-fluid" alt="">
                      <div class="content">
                        <a href="<?php echo base_url(); ?>assets/website/images/AlumniGallery_4.jpg" data-fancybox="alumni_gallery_group">
                          <h5><i class="bi bi-arrow-up-right-circle-fill text-white"></i> <span class="hoverline"> View Gallery </span> </h5>
                        </a>
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-6 mb-3">
                    <div class="photo_box">
                      <img src="<?php echo base_url(); ?>assets/website/images/AlumniGallery_5.jpg" class="img-fluid" alt="">
                      <div class="content">
                        <a href="<?php echo base_url(); ?>assets/website/images/AlumniGallery_5.jpg" data-fancybox="alumni_gallery_group">
                          <h5><i class="bi bi-arrow-up-right-circle-fill text-white"></i> <span class="hoverline"> View Gallery </span> </h5>
                        </a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- Welcome Section -->







  <!-- Notable Section -->
  <section class="notable_alumni_section">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <h2 class="h2_themehead">Notable Alumni</h2>
          <div class="alumni_profile_slider owl-carousel owl-theme">
          <?php $i=1; foreach($notable_data as $nb) { ?>
            <div class="item">
              <div class="alumni_profile_box"><img src="<?php echo base_url(); ?>assets/alumni/batch<?php echo $nb['batch'];?>/<?php echo $nb['student_image'];?>" alt="" class="img-fluid">
                <h4><?php echo $nb['student_name'];?></h4>
                <span class="passing_year">
                  Passing Year - <?php echo $nb['passing_year'];?>
                </span>
                <p><?php echo mb_substr($nb['success_story'], 0, 80);?></p>
                <span class="storyread_btn"> <a class="readmore" data-ia="<?php $nb['student_id'];?>"> Read More </a> </span>
              </div>
            </div>
            <?php $i++; } ?>



          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- Notable Section -->


  <!-- Testimonial Section -->
  <section class="testiaward_section">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <h2 class="h2_themehead">Alumni Speaks</h2>
          <div class="alumni_testimonials_slider owl-carousel owl-theme">

          <?php $i=1; foreach($testimonial_data as $td) { ?>
            <div class="item">
              <div class="testimonial_box">
                <div class="testimonial_profile">
                  <div class="testimonial_img"><img src="<?php echo base_url(); ?>assets/alumni/batch<?php echo $td['batch'];?>/<?php echo $td['student_image'];?>" alt="" class="img-fluid"></div>
                  <div class="testimonial_text">
                    <h4><?php echo $td['student_name'];?><br><small> <!-- <span>Er. QC, Omega Renk Bearings, Bhopal</span> --></small></h4>
                    <p><?php echo mb_substr($td['testimoni_description'], 0, 150);?></p>
                  </div>
                </div>
              </div>
            </div>
            <?php $i++; } ?>

          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- Testimonial Section -->


  <section class="directory_section">
    <div class="container">
      <div class="row">
        <div class="col-lg-6">
          <div class="yearbook_connect">
            <h2> Connect with your old friends on alumni directory </h2>
            <h5>Search alumni from the directory </h5>
            <a href="<?php echo base_url();?>Website/Alumni_Directory" class="btn btn-info text-white mt-3"><i class="bi bi-arrow-up-right-circle-fill text-light"></i> Go to Directory </a>
          </div>
        </div>
        <div class="col-lg-8">
          <div class="background-animated-strip-people">

          </div>
        </div>
      </div>
    </div>
  </section>


  <!-- <section class="gov_outer_links">
<div class="container">
<div class="row">
<div class="col-lg-12">
<h2 class="h2_themehead mb-3">Important Links</h2>
<div class="outerlinks_slider owl-carousel owl-theme">
<div class="item">
<div class="outerlinks_box">
<a href="https://www.g20.org/en/" target="_blank">
<img src="<?php echo base_url(); ?>assets/website/images/gov_1.jpg" class="img-fluid">
</a>
</div>
</div>
<div class="item">
<div class="outerlinks_box">
<a href="http://mpsdp.mp.gov.in/" target="_blank">
<img src="<?php echo base_url(); ?>assets/website/images/gov_2.jpg" class="img-fluid">
</a>
</div>
</div>
<div class="item">
<div class="outerlinks_box">
<a href="http://www.mpskills.gov.in/" target="_blank">
<img src="<?php echo base_url(); ?>assets/website/images/gov_3.jpg" class="img-fluid">
</a>
</div>
</div>
<div class="item">
<div class="outerlinks_box">
<a href="https://dsd.mp.gov.in/" target="_blank">
<img src="<?php echo base_url(); ?>assets/website/images/gov_4.jpg" class="img-fluid">
</a>
</div>
</div>
<div class="item">
<div class="outerlinks_box">
<a href="https://amritmahotsav.nic.in/" target="_blank">
<img src="<?php echo base_url(); ?>assets/website/images/gov_5.jpg" class="img-fluid">
</a>
</div>
</div>
</div>
</div>
</div>
</div>
</section> -->


  <!-- Model Start Event -->
              <!-- Button trigger modal -->
              <button type="hidden" id="click_model" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop" style="display:none;">
                View Details
              </button>
              <!-- Modal -->
              <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-lg">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h1 class="modal-title fs-5" id="staticBackdropLabel">Event's Detail</h1>
                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body datashow">

                    </div>
                    <div class="modal-footer">

                    </div>
                  </div>
                </div>
              </div>
   <!-- Model End Event -->

  <!-- Model Start Event -->
              <!-- Button trigger modal -->
              <button type="hidden" id="click_model_sstory" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop_ss" style="display:none;">
                View Details
              </button>
              <!-- Modal -->
              <div class="modal fade" id="staticBackdrop_ss" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel_ss" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-lg">
                  <div class="modal-content">
                    <div class="modal-header">
                    <h1 class="modal-title fs-5" id="staticBackdropLabel">Notable Alumni Details</h1>
                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body datashow_ss">

                    </div>
                    <!-- <div class="modal-footer">

                    </div> -->
                  </div>
                </div>
              </div>
   <!-- Model End Event -->



  <!-- Footer Section -->
  <?php include(APPPATH . 'views/frontend/web_include/webfooter.php'); ?>
  <!-- Footer Section -->

  <!-- Footer Script Section -->
  <?php include(APPPATH . 'views/frontend/web_include/webfooter_script.php'); ?>
  <!-- Footer Script Section -->

  <script>
    $(document).on('click', '.event_btn', function() {

      var event_id = $(this).attr('data-id');
      $.ajax({

        url: "<?php echo base_url(); ?>Events/View_Event",
        method: "POST",
        data: {
          "event_id": event_id
        },
        success: function(res) {
          //alert(res);return false;
          $(".datashow").html(res);
          $("#click_model").click();

        }
      });
    });
  </script>
<script>
    $(document).on('click', '.readmore', function() {

      var student_id = $(this).attr('data-id');
      $.ajax({

        url: "<?php echo base_url(); ?>Website/Get_SuccessStory",
        method: "POST",
        data: {
          "student_id": student_id
        },
        success: function(res) {
          //alert(res);return false;
          $(".datashow_ss").html(res);
          $("#click_model_sstory").click();

        }
      });
    });
  </script>















</body>

</html>