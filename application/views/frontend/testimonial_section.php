<section class="testiaward_section">
    <div class="container">
      <div class="row">
        <div class="col-lg-8">
          <h2 class="h2_themehead">Alumni Testimonials</h2>
          <div class="alumni_testimonials_slider owl-carousel owl-theme">
          <?php $i=1; foreach($testimonial_data as $td) { ?>
            <div class="item">
              <div class="testimonial_box">
                <div class="testimonial_profile">
                  <div class="testimonial_img"><img src="<?php echo base_url();?>assets/alumni/batch<?php echo $td['batch'];?>/<?php echo $td['student_image'];?>" alt="" class="img-fluid"></div>
                  <div class="testimonial_text">
                    <h4><?php echo $td['student_name'];?> <br><small> <span><?php echo $td['cr_designation'];?>, <?php echo $td['current_location'];?></span></small></h4>
                    <p><?php echo mb_substr($td['testimoni_description'], 0, 300);?></p>
                  </div>
                </div>
              </div>
            </div>
            <?php $i++; } ?>

          </div>
        </div>
        <div class="col-lg-4">
          <h2 class="h2_themehead">Alumni Awards</h2>
          <img src="<?php echo base_url();?>assets/website/images/award_img.jpg" alt="" class="img-fluid rounded">
        </div>
      </div>
    </div>
  </section>