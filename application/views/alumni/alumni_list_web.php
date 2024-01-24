<!DOCTYPE html>

<html lang="hi">



<head>



  <?php include(APPPATH . 'views/website/web_head.php'); ?>



  <style>
    .alumni_profile_box {
      border: 1px solid rgba(0, 0, 0, 0.1);

      box-shadow: 0px 0px 13px 0px rgb(0 0 0 / 10%);

      padding: 10px;

      height: 100%;

      box-sizing: border-box;

      position: relative;

      background: #f9f9f9;
      text-align: center;
    }

    .alumni_profile_box img {

      height: 100px;

      width: 100px;

      border-radius: 50%;
      margin: 0 auto;

    }

    .alumni_profile_box h4 {
      font-size: 16px;
      margin-top: 15px;
    }

    .alumni_profile_box p {
      font-size: 15px;
      text-align: justify;
    }

    .alumni_profile_box p b {

      color: #10499d;

      font-weight: 600;

    }



    .overflow_control {
      overflow: hidden;
      position: relative;
      padding: 25px 25px 0;
    }

    .stdajaxshow {
      overflow-x: hidden;
      padding: 0 25px 25px;
    }
  </style>





</head>

<body>







  <!-- Search -->

  <form action="" method="post" enctype="multipart/form-data" class="overflow_control">

    <div class="row form-group">

      <div class="col-md-3 col-sm-6 mb-3 quf">

        <label for="ForSelect" class="form-label">Batch </label>

        <select class="form-select" aria-label="Default select example" name="batch" id="batch">

          <option value="0">Select Batch </option>

          <option value="2">Batch 2</option>

          <option value="3">Batch 3</option>

          <option value="4">Batch 4</option>

          <option value="5">Batch 5</option>

        </select>

        <p id="batch_error" class="text-danger"></p>

      </div>



      <div class="col-md-3 col-sm-6 mb-3 quf">

        <label for="ForSelect" class="form-label">Passing Year </label>

        <select class="form-select" aria-label="Default select example" name="passing_year" id="passing_year">

          <option value="0">Select Passing Year </option>

          <option value="2023">2023</option>

          <option value="2022">2022</option>

          <option value="2021">2021</option>

          <option value="2020">2020</option>

        </select>

        <p id="passing_year_error" class="text-danger"></p>

      </div>



      <div class="col-md-3 col-sm-6 mb-3 quf">

        <label for="ForSelect" class="form-label">Course<!-- <span class="text-danger">*</span> --> </label>

        <select class="form-select" aria-label="Default select example" name="branch" id="branch">

          <option value="0">Select Course </option>

          <?php foreach ($branch_data as $bd) {
            extract($bd);  ?>

            <option value="<?php echo $bd['sort_name']; ?>"> <?php echo $bd['branch_name']; ?> </option>

          <?php } ?>



        </select>

        <p id="branch_error" class="text-danger"></p>

      </div>









      <div class="col-md-3 col-sm-6 srch">

        <label></label>

        <button type="submit" class="btn btn-secondary btn-sm" name="search" id="RecordSearch" style="margin-top:25px;">Search</button>

      </div>



    </div>

  </form>

  <!-- Search -->





  <div class="stdajaxshow">

    <div class="row">

      <?php $i = 1;
      foreach ($student_data as $sd) { ?>

        <div class="col-lg-3 col-md-3 col-sm-6 mb-3">

          <div class="alumni_profile_box"><img src="<?php echo base_url(); ?>assets/alumni/batch<?php echo $sd['batch']; ?>/<?php echo $sd['student_image']; ?>" alt="" class="img-fluid" />

            <h4><?php echo $sd['student_name']; ?></h4>

            <p><b>Enrollment : </b> <?php echo $sd['enrollment_no']; ?>

              <br /><b>Passing Year :</b> <?php echo $sd['passing_year']; ?>

              <br /><b>Course :</b> <?php echo $sd['course']; ?>



            </p>

          </div>

        </div>

      <?php $i++;
      } ?>

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