<script type="text/javascript">
    $(function () {
        $(".NameVelidate").keypress(function (e) {
			var any_name = $(this).val();
            var keyCode = e.keyCode || e.which;
            //Regex for Valid Characters i.e. Numbers.
            var regex = /^[A-Za-z .]+$/;

            //Validate TextBox value against the Regex.
            var isValid = regex.test(String.fromCharCode(keyCode));
            if (!isValid) {
                alert("Only characters & Whitespace are allowed!");
				return false;
            }
            if (any_name.length >= 150) {
                alert("150 characters allowed!");
				return false;
            }
            return isValid;
        });
    });
</script>
  <script>
    $(document).ready(function() {
      $("#cr_designation").focus();



      $(document).on('click', '#add_event', function() {
        var cr_designation = $("#cr_designation").val();

        var current_location = $("#current_location").val();
        var testimoni_description = $("#testimoni_description").val();


       /*  if (cr_designation == "") {
          $(cr_designation).focus();
          $("#cr_designation").css('border', '2px solid #ec000069');
          $("#cr_designation_error").text('Please Enter Designation!');
          return false;
        }
        $("#cr_designation").css('border', '1px solid #cacfe7');
        $("#cr_designation_error").text('');


        if (current_location == "") {
          $(current_location).focus();
          $("#current_location").css('border', '2px solid #ec000069');
          $("#current_location_error").text('Please Enter Current Location!');
          return false;
        }
        $("#current_location").css('border', '1px solid #cacfe7');
        $("#current_location_error").text(''); */

        if (testimoni_description == "") {
          $(testimoni_description).focus();
          $("#testimoni_description").css('border', '2px solid #ec000069');
          $("#testimoni_description_error").text('Please Enter Description');
          return false;
        }
        $("#testimoni_description").css('border', '1px solid #cacfe7');
        $("#testimoni_description_error").text('');
          return true;
      });
    });
  </script>