<!DOCTYPE html>

<html lang="hi">

<head>
  <?php include(APPPATH . 'views/website/web_head.php'); ?>
</head>

<body>
  <div class="row">

    <div class="col-lg-6 col-md-6 col-sm-6 mb-3">
      <div class="mod-articlesnews newsflash">

      <?php $i=1; foreach($event_data as $ed) {extract($ed); ?>

        <div class="mod-articlesnews__item" itemscope="" itemtype="https://schema.org/Article">
          <figure class="newsflash-image">
            <img src="<?php echo base_url(); ?>assets/events/<?php echo $ed['event_invite']; ?>" alt="" width="600" height="400" loading="lazy">
          </figure>
          <h3 class="newsflash-title">
            <a href="#">
            <?= ucwords($event_title) ?> </a>
          </h3>
          <div class="published">
            <i class="icon-calendar"></i> <?php if ($ed['published_date'] != "") echo date("d-m-Y", strtotime($ed['published_date'])) ?>
          </div>
          <p><?= $event_description ?></p>

        </div>
        <?php $i++; } ?>


      </div>
    </div>
  </div>


  <?php include(APPPATH . 'views/website/web_footer_script.php'); ?>



  <script>
    $(document).on('click', '#RecordSearch', function() {
      var batch = $("#batch").val();
      var passing_year = $("#passing_year").val();
      var branch = $("#branch").val();
      /* if (batch == "0") {
          $(batch).focus();
          $("#batch").css('border', '2px solid #ec000069');
          $("#batch_error").text('Please Select Batch!');
          return false;
        }

      $("#batch").css('border', '1px solid #cacfe7');

      $("#batch_error").text('');



      if (passing_year == "0") {

          $(passing_year).focus();

          $("#passing_year").css('border', '2px solid #ec000069');

          $("#passing_year_error").text('Please Select Passing Year!');

          return false;

      }

      $("#passing_year").css('border', '1px solid #cacfe7');

      $("#passing_year_error").text(''); */



      /* if (phase == "") {

          $(phase).focus();

          $("#phase").css('border', '2px solid #ec000069');

          $("#error1").text('Please Select Counselling Phase');

          return false;

      }

      $("#phase").css('border', '1px solid #cacfe7'); */



      $.ajax({

        url: "<?php echo base_url(); ?>Alumni/ViewAlumni_ListAjax",

        type: "POST",

        data: {

          "batch": batch,

          "passing_year": passing_year,

          "branch": branch

        },

        success: function(res) {

          //alert(res);return false;

          $(".stdajaxshow").html('');

          $(".stdajaxshow").html(res);

          //$("#datatablesSimple").html('');

          //return false;

        }

      });

      return false;

    });
  </script>

</body>

</html>