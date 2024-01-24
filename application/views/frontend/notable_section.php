<section class="notable_alumni_section">
    <div class="container">
      <div class="row">
        <div class="col-lg-12 ">
          <h2 class="h2_themehead">Notable Alumni</h2>
          <div class="alumni_profile_slider owl-carousel owl-theme">

          <?php $i=1; foreach($notable_data as $nb) { ?>
            <div class="item">
              <div class="alumni_profile_box"><img src="<?php echo base_url();?>assets/alumni/batch<?php echo $nb['batch'];?>/<?php echo $nb['student_image'];?>" alt="" class="img-fluid">
                <h4><?php echo $nb['student_name'];?></h4>
                <p><?php echo $nb['passing_year'];?><br><?php echo mb_substr($nb['success_story'], 0, 150);?></p>
              </div>
            </div>
            <?php $i++; } ?>



          </div>
        </div>
      </div>
    </div>
  </section>