<script>
    var file_regex = new RegExp(/[^\s]+(.*?).(pdf|PDF|jpg|png)$/);

    //validation for Resolution Passed File
    $('#job_attachment').on('change', function() {

      var job_attachment = $(this).val();
      var file_size = $('#job_attachment')[0].files[0].size;

      if (file_size > 2097152) {
        $("#job_attachment").css('border', '2px solid #ec000069');
        $('#job_attachment_error').text('Not allowed more than 2 MB');
        $(this).replaceWith($(this).val('').clone(true));
      } else if (!file_regex.test(job_attachment)) {
        $("#job_attachment").css('border', '2px solid #ec000069');
        $('#job_attachment_error').text('Only pdf|jpg|png File Accepted');
        $(this).replaceWith($(this).val('').clone(true));
      } else {
        $("#job_attachment").css('border', '1px solid #cacfe7');
        $("#job_attachment_error").text('');
      }
    });
  </script>
  <script>
    $(document).ready(function() {
      $("#year").focus();

      $(".CmnCls").change(function(){
        $(".ErrorMsg").text('');
        $(".CmnCls").css('border', '1px solid #cacfe7');
      });

      $(document).on('click', '#add_details', function() {

        var year = $("#year").val();
        var company = $("#company").val();
        var course = $("#course").val();
        var total_appears = $("#total_appears").val();
        var no_of_placed = $("#no_of_placed").val();


        if (year == "0") {
          $(year).focus();
          $("#year").css('border', '2px solid #ec000069');
          $("#year_error").text('Please Select Year!');
          return false;
        }
        $("#year").css('border', '1px solid #cacfe7');
        $("#year_error").text('');

        if (company == "0") {
          $(company).focus();
          $("#company").css('border', '2px solid #ec000069');
          $("#company_error").text('Please Select Recruiter/Company Name!');
          return false;
        }
        $("#company").css('border', '1px solid #cacfe7');
        $("#company_error").text('');

        if (course == "0") {
          $(course).focus();
          $("#course").css('border', '2px solid #ec000069');
          $("#course_error").text('Please Select Course Name!');
          return false;
        }
        $("#course").css('border', '1px solid #cacfe7');
        $("#course_error").text('');

        if (total_appears == "") {
          $(total_appears).focus();
          $("#total_appears").css('border', '2px solid #ec000069');
          $("#total_appears_error").text('Please Enter Total total_appears!');
          return false;
        }
        $("#total_appears").css('border', '1px solid #cacfe7');
        $("#total_appears_error").text('');

        if (no_of_placed == "") {
          $(no_of_placed).focus();
          $("#no_of_placed").css('border', '2px solid #ec000069');
          $("#no_of_placed_error").text('Please Enter Total Number of Placed!');
          return false;
        }
        $("#no_of_placed").css('border', '1px solid #cacfe7');
        $("#no_of_placed_error").text('');

          return true;
      });
    });
  </script>