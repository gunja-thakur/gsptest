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
      $("#event_title").focus();
      //validation for File Uploading
      var file_regex = new RegExp(/[^\s]+(.*?).(pdf|PDF|jpg|png)$/);
      $('#upload_brochure').on('change', function() {
        var upload_brochure = $(this).val();
        var file_size = $('#upload_brochure')[0].files[0].size;


        if (upload_brochure.length == 0) {
          $("#upload_brochure").focus();
          $('#upload_brochure').css('border', '1px solid #ec000069');
          $('#upload_brochure_error').text('No File Selected');

        } else if (file_size > 2097152) {
          $("#upload_brochure").focus();
          $('#upload_brochure').css('border', '1px solid #ec000069');
          $('#upload_brochure_error').text('Not allowed more than 2 MB');
          $(this).replaceWith($(this).val('').clone(true));
        } else if (!file_regex.test(upload_brochure)) {
          $("#upload_brochure").focus();
          $('#upload_brochure').css('border', '1px solid #ec000069');
          $('#upload_brochure_error').text('Only PDF|jpg|png File Accepted');
          $(this).replaceWith($(this).val('').clone(true));
        } else {
          $("#upload_brochure").css('border', '1px solid #cacfe7');
          $("#upload_brochure_error").text('');
        }
      });
      ///////////////////////////////////////
      $('#event_invite').on('change', function() {
        var event_invite = $(this).val();
        var file_size = $('#event_invite')[0].files[0].size;


        if (event_invite.length == 0) {
          $("#event_invite").focus();
          $('#event_invite').css('border', '1px solid #ec000069');
          $('#event_invite_error').text('No File Selected');

        } else if (file_size > 2097152) {
          $("#event_invite").focus();
          $('#event_invite').css('border', '1px solid #ec000069');
          $('#event_invite_error').text('Not allowed more than 2 MB');
          $(this).replaceWith($(this).val('').clone(true));
        } else if (!file_regex.test(event_invite)) {
          $("#event_invite").focus();
          $('#event_invite').css('border', '1px solid #ec000069');
          $('#event_invite_error').text('Only png|jpg File Accepted');
          $(this).replaceWith($(this).val('').clone(true));
        } else {
          $("#event_invite").css('border', '1px solid #cacfe7');
          $("#event_invite_error").text('');
        }
      });


      $(document).on('click', '#add_event', function() {
        var event_title = $("#event_title").val();
        var event_date = $("#event_date").val();
        var published_date = $("#published_date").val();
        var venue = $("#venue").val();
        var event_description = $("#event_description").val();
        var upload_brochure = $("#upload_brochure").val();
        var event_invite = $("#event_invite").val();


        if (event_title == "") {
          $(event_title).focus();
          $("#event_title").css('border', '2px solid #ec000069');
          $("#event_title_error").text('Please Enter Event Title!');
          return false;
        }
        $("#event_title").css('border', '1px solid #cacfe7');
        $("#event_title_error").text('');

        if (event_date == "") {
          $(event_date).focus();
          $("#event_date").css('border', '2px solid #ec000069');
          $("#event_date_error").text('Please Select Event Date!');
          return false;
        }
        $("#event_date").css('border', '1px solid #cacfe7');
        $("#event_date_error").text('');

        if (published_date == "") {
          $(published_date).focus();
          $("#published_date").css('border', '2px solid #ec000069');
          $("#published_date_error").text('Please Select Published Date');
          return false;
        }
        $("#published_date").css('border', '1px solid #cacfe7');
        $("#published_date_error").text('');

        if (venue == "") {
          $(venue).focus();
          $("#venue").css('border', '2px solid #ec000069');
          $("#venue_error").text('Please Enter Venue!');
          return false;
        }
        $("#venue").css('border', '1px solid #cacfe7');
        $("#venue_error").text('');

        if (event_description == "") {
          $(event_description).focus();
          $("#event_description").css('border', '2px solid #ec000069');
          $("#event_description_error").text('Please Enter Event Description');
          return false;
        }
        $("#event_description").css('border', '1px solid #cacfe7');
        $("#event_description_error").text('');


        /////////////////////////////////////////////////////
        /* if (event_invite.length == 0) {
          $("#event_invite").focus();
          $('#event_invite').css('border', '1px solid #ec000069');
          $('#event_invite_error').text('No File Selected');
          return false;
        }
          $('#event_invite').css('border', '1px solid #cacfe7');
          $("#event_invite_error").text(''); */

          return true;
      });
    });
  </script>