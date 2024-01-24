
<!DOCTYPE html>
<html lang="en">

<head>
<?php include(APPPATH . 'views/frontend/web_include/placement_head.php'); ?>
</head>

<body>
  <!-- Header -->
  <?php include(APPPATH . 'views/frontend/web_include/placement_header.php'); ?>
  <!-- Header -->

  <!-- Alumni Directory -->



<section class="page_banner">
<div class="container">
<div class="row">
<div class="col-lg-12">
<div class="page_navigation">
         <h1 class="page_title">Campus Drive </h1>
         <ol class="breadcrumb">
            <li><a href="<?php echo base_url();?>"><i class="bi bi-house-door"></i> Home</a></li>
            <li> Campus Drive </li>
         </ol>
      </div>
</div>
</div>
</div>
</section>

<section class="common_inner_section alumni_directory_page">
<div class="container">
<div class="row">
<div class="col-lg-12 mb-5">
  <div class="search_result_table">
<div class="table-responsive">
                        <table class="table table-bordered table-sm table-striped" id="datatablesSimple1">
                          <thead>
                          <tr>
                              <th>#</th>
                              <th>Campus Title</th>
                              <th>Venue</th>
                              <th>Campus Description </th>
                              <th>Campus Date</th>
                              <th>Attachement</th>
                            </tr>
                          </thead>
                          <tbody>
                            <?php $i = 1;
                            foreach ($campus_data as $sd) {
                              extract($sd); ?>
                              <tr>
                                <td><?= $i ?></td>
                                <td><?= ucwords($campus_title) ?></td>
                                <td><?= $campus_details ?></td>
                                <td width="25%"><?php echo mb_substr($sd['campus_description'], 0, 80);?></td>

                                <td><?php if ($sd['campus_date'] != "") echo date("d-m-Y", strtotime($sd['campus_date'])) ?></td>

                                <td width="15%"><a href="<?php echo base_url(); ?>assets/campus/<?php echo $sd['campus_attachment']; ?>" target="_blank" class="readmore"> View File</a></td>

                              </tr>

                            <?php $i++;
                            } ?>

                          </tbody>

                        </table>
                      </div>
                      </div>

</div>
</div>
</div>
</section>


 <!-- Footer Section -->
 <?php include(APPPATH . 'views/frontend/web_include/webfooter.php'); ?>
 <!-- Footer Section -->

 <!-- Footer Script Section -->
 <?php include(APPPATH . 'views/frontend/web_include/placement_footer_script.php'); ?>
 <!-- Footer Script Section -->


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

        url: "<?php echo base_url(); ?>Alumni/ViewAlumniTable_ListAjax",

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