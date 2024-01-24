<section class="event_section">
			<div class="container">
			<div class="row">
			<div class="col-lg-4">
			            <img src="<?php echo base_url();?>assets/website/images/JobTraining.jpg" alt="" class="img-fluid rounded border">

</div>
<div class="col-lg-8">
<div class="event_listing">
<h2 class="h2_themehead text-white">Latest News and Events </h2>
<div class="row">

<?php $i=1; foreach($event_data as $ed) { ?>
<div class="col-lg-6 mb-2">
<div class="event_flex">
<div class="event_img">
            <img src="<?php echo base_url();?>assets/events/<?php echo $ed['event_invite'];?>" alt="" class="img-fluid">
</div> <div class="event_content">
          <h3>
            <a href="#">
            <?php echo $ed['event_title'];?> </a>
          </h3>
          <span class="publish_date">
          <?php echo$ed['published_date'];?>       </span>
          <p><?php echo mb_substr($ed['event_description'], 0, 50);?></p>
        </div>
		</div>
		</div>
    <?php $i++; if($i>4) break; } ?>


</div>
<div class="text-end">
<a class="btn btn-success" href="#"> View all event </a>
</div>
</div>
</div>
</div>
</div>
</section>