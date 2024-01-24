  <script>
    $(document).ready(function() {
      $("#campus_title").focus();
      //validation for File Uploading

      $(".CmnCls").change(function(){
        $(".ErrorMsg").text('');
        $(".CmnCls").css('border', '1px solid #cacfe7');
      });

      $(document).on('click', '#add_campus', function() {
        var campus_title = $("#campus_title").val();
        var campus_date = $("#campus_date").val();
        var campus_details = $("#campus_details").val();
        var campus_description = $("#campus_description").val();
        var contact_person = $("#contact_person").val();
        var email = $("#email").val();
        var mobile = $("#contact_person_mobile").val();
        var email_valid = /^([\w-\.]+)@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.)|(([\w-]+\.)+))([a-zA-Z]{2,4}|[0-9]{1,3})(\]?)$/;



        if (campus_title == "") {
          $(campus_title).focus();
          $("#campus_title").css('border', '2px solid #ec000069');
          $("#campus_title_error").text('Please Enter Campus Title!');
          return false;
        }
        $("#campus_title").css('border', '1px solid #cacfe7');
        $("#campus_title_error").text('');

        if (campus_date == "") {
          $(campus_date).focus();
          $("#campus_date").css('border', '2px solid #ec000069');
          $("#campus_date_error").text('Please Select Campus Date!');
          return false;
        }
        $("#campus_date").css('border', '1px solid #cacfe7');
        $("#campus_date_error").text('');

        if (campus_details == "") {
          $(campus_details).focus();
          $("#campus_details").css('border', '2px solid #ec000069');
          $("#campus_details_error").text('Please Enter campus_details!');
          return false;
        }
        $("#campus_details").css('border', '1px solid #cacfe7');
        $("#campus_details_error").text('');

        if (campus_description == "") {
          $(campus_description).focus();
          $("#campus_description").css('border', '2px solid #ec000069');
          $("#campus_description_error").text('Please Enter Campus Description');
          return false;
        }
        $("#campus_description").css('border', '1px solid #cacfe7');
        $("#campus_description_error").text('');

        if (contact_person == "") {
          $(contact_person).focus();
          $("#contact_person").css('border', '2px solid #ec000069');
          $("#contact_person_error").text('Please Enter Contact Person Name!');
          return false;
        }
        $("#contact_person").css('border', '1px solid #cacfe7');
        $("#contact_person_error").text('');


      if(email == "") {

      $("#email").focus();
      //alert('Please Enter Email Address!');
      $("#email").css('border', '2px solid #ec000069');
      $("#email_error").text('Please Enter an Email Address');
      return false;
      }

      if(!email_valid.test(email))
      {

      $("#email").focus();
      //alert('Please Enter a Valid Email Address!');
      $("#email").css('border','2px solid #ec000069');
      $("#email_error").text('Please Enter Valid Email Address!');
      return false;
      }

      $("#email").css('border', '1px solid #cacfe7');
      $("#email_error").text('');


      if (mobile == "") {
        $("#mobile").focus();
        //alert('Please enter valid mobile number (10 Digit Only)!');
        $("#mobile").css('border', '2px solid #ec000069');
        $("#mobile_error").text('Please Enter Valid Mobile Number (10 Digit Only)!');
        return false;
        }
        if (mobile.length < 10 || mobile.length > 10) {

        $("#mobile").focus();
        //alert('Please enter valid mobile number (10 Digit Only)!');
        $("#mobile").css('border', '2px solid #ec000069');
        $("#mobile_error").text('Mobile Number Should be 10 Digits.');
        return false;
        }
        if(!validMobile.test(mobile))
        {

        $("#mobile").focus();
        //alert('Please enter valid mobile number (10 Digit Only)!');
        $("#mobile").css('border','2px solid #ec000069');
        $("#mobile_error").text('Invalid Mobile Number');
        return false;
        }

        $("#mobile").css('border', '1px solid #cacfe7');
      $("#mobile_error").text('');


        /////////////////////////////////////////////////////
        /* if (Campus_invite.length == 0) {
          $("#Campus_invite").focus();
          $('#Campus_invite').css('border', '1px solid #ec000069');
          $('#Campus_invite_error').text('No File Selected');
          return false;
        }
          $('#Campus_invite').css('border', '1px solid #cacfe7');
          $("#Campus_invite_error").text(''); */

          return true;
      });
    });
  </script>