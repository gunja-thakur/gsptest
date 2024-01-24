<script>
    $(document).ready(function() {

      $(".btch").hide();
      $(".yer").hide();
      $(".srch").hide();

      $('input[type=radio][name=verify]').change(function() {

        //alert( $(this).val());return false;

        var status = $(this).val();
        var student_id = $(this).attr("data-id");

        alert(status + "-" + student_id);
        return false;


      });

    });
  </script>


  <script>
    $('input:radio[name="tfilter"]').change(
      function() {
        $("#batch").css('border', '1px solid #cacfe7');
        $("#batch_error").text('');
        $(".stdajaxshow").html('');

        /* $("#from_date").css('border', '1px solid #cacfe7');
        $("#fromdate_error").text('');

        $("#to_date").css('border', '1px solid #cacfe7');
        $("#todate_error").text(''); */
      });
  </script>




  <script>
    $("#batch").on('change',function(){
    var batch=$(this).val();
    var year=$(this).find('option:selected').attr('id');
    var tfilter = $("input[type='radio']:checked").val();
   //alert(batch+"--"+year);return false;
   $.ajax({
        url: "<?php echo base_url(); ?>Alumni/AlumniCounter_Ajax",
        type: "POST",
        data: {
          "tfilter": tfilter,
          "batch": batch,
          "year": year
        },
        success: function(res) {
         //  alert(res);return false;
          //$(".stdajaxshow").html('');
          $("#batch_error").text('');
          $("#passing_year_error").text('');
          $(".stdajaxshow").html(res);

          //return false;
        }
      });
  });
</script>
  <script>
    $("#passing_year").on('change',function(){
    var year=$(this).val();
    //var year=$(this).find('option:selected').attr('id');
    var tfilter = $("input[type='radio']:checked").val();
   //alert(year+"--"+tfilter);return false;
   $.ajax({
        url: "<?php echo base_url(); ?>Alumni/AlumniCounter_Ajax",
        type: "POST",
        data: {
          "tfilter": tfilter,
          "year": year
        },
        success: function(res) {
         //  alert(res);return false;
          //$(".stdajaxshow").html('');
          $("#batch_error").text('');
          $("#passing_year_error").text('');
          $(".stdajaxshow").html(res);

          //return false;
        }
      });
  });
</script>



<script>
    $(document).on('click', '#RecordSearch', function() {
      //var batch = $("#batch").val();

      var passing_year = $("#passing_year").val();
      /* var from_date = $("#from_date").val();
      var to_date = $("#to_date").val(); */
      var tfilter = $("input[type='radio']:checked").val();

      //alert(batch+""+passing_year+""+tfilter);return false


      if (tfilter == '2') {

        if (batch == "0") {
          $(batch).focus();
          $("#batch").css('border', '2px solid #ec000069');
          $("#batch_error").text('Please Select batch');
          return false;
        }
        $("#batch").css('border', '1px solid #cacfe7');
        $("#batch_error").text('');

        /*if (from_date == "") {
          $(from_date).focus();
          $("#from_date").css('border', '2px solid #ec000069');
          $("#fromdate_error").text('Please Select From Date');
          return false;
        }
        $("#from_date").css('border', '1px solid #cacfe7');
        $("#fromdate_error").text('');

        if (to_date == "") {
          $(to_date).focus();
          $("#to_date").css('border', '2px solid #ec000069');
          $("#todate_error").text('Please Select To Date');
          return false;
        }
        $("#to_date").css('border', '1px solid #cacfe7');
        $("#todate_error").text('');*/

      } else if (tfilter == '3') {

        if (passing_year == "0") {
          $(passing_year).focus();
          $("#passing_year").css('border', '2px solid #ec000069');
          $("#passing_year_error").text('Please Select Year');
          return false;
        }
        $("#passing_year").css('border', '1px solid #cacfe7');
        $("#passing_year_error").text('');

      }

      return false;

      $.ajax({
        url: "<?php echo base_url(); ?>Alumni/AlumniCounter_Ajax",
        type: "POST",
        data: {
          "tfilter": tfilter,
          "batch": batch,
          "year": year,
          "passing_year": passing_year

        },
        success: function(res) {
          // alert(res);return false;
          $(".stdajaxshow").html('');
          $("#batch_error").text('');
          $("#passing_year_error").text('');
          $(".stdajaxshow").html(res);

          //return false;
        }
      });

      return false;
    });
  </script>

  <script>
    $('input:radio[name="tfilter"]').change(
      function() {
        if ($(this).is(':checked') && $(this).val() == '2') {

          //$(".stdajaxshow").html('');
          $(".btch").show();
          $(".yer").hide();
          $(".srch").show();
          $("#batch").val('0');

        } else if ($(this).is(':checked') && $(this).val() == '3') {
          //$(".stdajaxshow").html('');
          $(".btch").hide();
          $(".yer").show();
          $(".srch").show();
          $("#yer").val('0');

        }
      });
  </script>

