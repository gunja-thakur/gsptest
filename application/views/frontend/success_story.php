<!DOCTYPE html>
<html lang="en">

<head>
<?php include(APPPATH . 'views/frontend/web_include/webhead.php'); ?>
</head>

<body>
  <!-- Header -->
  <?php include(APPPATH . 'views/frontend/web_include/webheader.php'); ?>
  <!-- Header -->

  <!-- Alumni Directory -->



<section class="page_banner">
<div class="container">
<div class="row">
<div class="col-lg-12">
<div class="page_navigation">
         <h1 class="page_title">Success Story </h1>
         <ol class="breadcrumb">
            <li><a href="<?php base_url();?>"><i class="bi bi-house-door"></i> Home</a></li>
            <li> Success Story </li>
         </ol>
      </div>
</div>
</div>
</div>
</section>

<section class="common_inner_section alumni_directory_page">
<div class="container">
<div class="row">
<?php $i=1; foreach($notable_data as $nb) { ?>

        <div class="col-lg-3 col-md-3 col-sm-6 mb-3">

              <div class="alumni_profile_box"><img src="<?php echo base_url(); ?>assets/alumni/batch<?php echo $nb['batch'];?>/<?php echo $nb['student_image'];?>" alt="" class="img-fluid">
                <h4><?php echo $nb['student_name'];?></h4>
                <span class="passing_year">
                  Passing Year - <?php echo $nb['passing_year'];?>
                </span>
                <p><?php echo mb_substr($nb['success_story'], 0, 80);?></p>
                <a class="readmore" data-ia="<?php $nb['student_id'];?>"> Read More </a>
              </div>

            </div>

            <?php  $i++;   } ?>



</div>
</div>
</section>


<!-- Model Start -->
              <!-- Button trigger modal -->
              <button type="hidden" id="click_model" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop" style="display:none;">
                View Details
              </button>

              <!-- Modal -->
              <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-lg">
                  <div class="modal-content">
                    <div class="modal-header">
                    <h5 class="h5style_heading"> Success Story</h5>
                      <button type="button" class="btn_close" data-bs-dismiss="modal" aria-label="Close">
                      <i class="fa-solid fa-xmark"></i>
                      </button>
                    </div>
                    <div class="modal-body datashow">

                    </div>
                    <!-- <div class="modal-footer">

                    </div> -->
                  </div>
                </div>
              </div>
              <!-- Model Start -->


 <!-- Footer Section -->
 <?php include(APPPATH . 'views/frontend/web_include/webfooter.php'); ?>
 <!-- Footer Section -->

 <!-- Footer Script Section -->
 <?php include(APPPATH . 'views/frontend/web_include/webfooter_script.php'); ?>
 <!-- Footer Script Section -->


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
          $(".datashow").html(res);
          $("#click_model").click();

        }
      });
    });
  </script>













</body>

</html>