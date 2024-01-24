<?php if(!empty($student_data)) { ?>

<div class="row">

<?php $i=1; foreach($student_data as $sd) { ?>

 <div class="col-lg-3 col-md-3 col-sm-6 mb-3">

<div class="alumni_profile_box"><img src="<?php echo base_url();?>assets/alumni/batch<?php echo $sd['batch'];?>/<?php echo $sd['student_image'];?>" alt="" class="img-fluid" />

<h4><?php echo $sd['student_name'] ;?></h4>

<p><b>Enrollment : </b> <?php echo $sd['enrollment_no'] ;?>

<br /><b>Passing Year :</b> <?php echo $sd['passing_year'] ;?>

<br /><b>Course :</b> <?php echo $sd['branch_name'] ;?>



</p>

</div>

</div>

<?php $i++; } ?>

</div>

<?php } else { ?>



<div class="row">

<div class="col-lg-12 col-md-12 col-sm-6 mb-3">

  <h5 class="text-left"> Records Not Found!</h5>

</div>

</div>



<?php } ?>