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
            if (any_name.length >= 100) {
                alert("100 characters allowed!");
				return false;
            }
            return isValid;
        });
    });
</script>
<script type="text/javascript">
    $(function () {
        $(".ValidWeb").keypress(function (e) {
			var weburl = $(this).val();
            //var keyCode = e.keyCode || e.which;
            //Regex for Valid Characters i.e. Numbers.
            var regex = /^((https?|ftp|smtp):\/\/)?(www.)?[a-z0-9]+\.[a-z]+(\/[a-zA-Z0-9#]+\/?)*$/ ;

            if(!regex.test(weburl))
				{
				$("#website").css('border', '2px solid #ec000069');
				$("#website_error").text('Please Enter Valid Website URL!');
				//	return false;
				}
				else{

				$("#website").css('border', '1px solid #cacfe7');
                $("#website_error").text('');
				}

        });
    });
</script>

<script>
    var file_regex = new RegExp(/[^\s]+(.*?).(jpg|png)$/);

    //validation for Resolution Passed File
    $('#company_image').on('change', function() {

      var company_image = $(this).val();
      var file_size = $('#company_image')[0].files[0].size;

      if (file_size > 2097152) {
        $("#company_image").css('border', '2px solid #ec000069');
        $('#company_image_error').text('Not allowed more than 2 MB');
        $(this).replaceWith($(this).val('').clone(true));
      } else if (!file_regex.test(company_image)) {
        $("#company_image").css('border', '2px solid #ec000069');
        $('#company_image_error').text('Only jpg|png File Accepted');
        $(this).replaceWith($(this).val('').clone(true));
      } else {
        $("#company_image").css('border', '1px solid #cacfe7');
        $("#company_image_error").text('');
      }
    });
  </script>

	<script>
		$(document).ready(function() {

			$(".CmnCls").change(function(){
				$(".ErrorMsg").text('');
				$(".CmnCls").css('border', '1px solid #cacfe7');
			});

			/* Input Validation */

			/*$('.NameVelidate').keypress(function(){
			var person_name = $(this).val();
			var validNameChk = /^[A-Za-z _.-]+$/;

			var isValid = validNameChk.test(person_name);

			if (!isValid) {
			alert("Only characters & Whitespace are allowed!");
			return false;
			}

			});*/

			/* $(document).on('change', '#qualification', function() {
				var qualification = $("#qualification").val();
				//alert(qualification);return false;
				$.ajax({
					url: "<?php echo base_url(); ?>Enquiry/GetTrade_ajax",
					type: "POST",
					data: {
						"qualification": qualification
					},
					success: function(res) {
						//alert(res);return false;
						$(".pmajaxshow").html('');
						$(".pmajaxshow").html(res);
						//return false;
					}
				});
				Clear();
				return false;
			});

			function Clear()
			{
				var qualification = $("#qualification").val();
				var degree_diploma_id = $("#degree_diploma_id").val();

				//alert(qualification +"@@"+degree_diploma_id);return false;
				$.ajax({
					url: "<?php echo base_url(); ?>Enquiry/GetCourse_ajax",
					type: "POST",
					data: {
						"qualification": qualification,
						"degree_diploma_id": degree_diploma_id
					},
					success: function(res) {
						//alert(res);return false;
						$(".crajaxshow").html('');
						$(".crajaxshow").html(res);
						//return false;
					}
				});
			}

			$(document).on('change', '#degree_diploma_id', function() {
				var qualification = $("#qualification").val();
				var degree_diploma_id = $("#degree_diploma_id").val();

				//alert(qualification +"@@"+degree_diploma_id);return false;
				$.ajax({
					url: "<?php echo base_url(); ?>Enquiry/GetCourse_ajax",
					type: "POST",
					data: {
						"qualification": qualification,
						"degree_diploma_id": degree_diploma_id
					},
					success: function(res) {
						//alert(res);return false;
						$(".crajaxshow").html('');
						$(".crajaxshow").html(res);
						//return false;
					}
				});
				return false;
			}); */


			$("#name_of_company").focus();
			$("#submit_details").click(function() {
				var name_of_company = $("#name_of_company").val();
				var year_of_inception = $("#year_of_inception").val();
                var website = $("#website").val();
                var type_of_company = $("#type_of_company").val();
                var nature_of_business = $("#nature_of_business").val();
                var gst_tin_number = $("#gst_tin_number").val();
                var company_image = $("#company_image").val();
                var affiliation = $(".affiliation").val();
				var inhouse_hr_name = $("#inhouse_hr_name").val();
				var designation = $("#designation").val();
				var email = $("#email").val();
				var alternate_email = $("#alternate_email").val();
				var mobile = $("#mobile").val();
				var alternate_mobile = $("#alternate_mobile").val();
				var postal_code = $("#postal_code").val();
                var address = $("#address").val();
				var office_iitm = $(".office_iitm").val();
				var rcompany = $(".rcompany").val();
				var acceptance = $(".acceptance").val();
				var diclaration_YN = $("#diclaration_YN").val();
				var captcha_add = $("#captcha_add").val();


				var validName = /^[A-Za-z _.-]+$/;
				var email_valid = /^([\w-\.]+)@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.)|(([\w-]+\.)+))([a-zA-Z]{2,4}|[0-9]{1,3})(\]?)$/;

				var validMobile = /^[0-9]{1,10}$/;
				var validWebsite = /^((https?|ftp|smtp):\/\/)?(www.)?[a-z0-9]+\.[a-z]+(\/[a-zA-Z0-9#]+\/?)*$/ ;


				if (name_of_company == "") {

					$("#name_of_company").focus();
					//alert('Please enter your Name!');
					$("#name_of_company").css('border', '2px solid #ec000069');
					$("#name_of_company_error").text('Please Enter Recruiter/Company Name!');
					return false;
				}

				if(!validName.test(name_of_company))
				{
					//alert('Only characters & Whitespace are allowed!');
					$("#name_of_company").css('border','2px solid #ec000069');
                    $("#name_of_company_error").text('Only characters & Whitespace are allowed!');
					return false;
				}

				$("#name_of_company").css('border', '1px solid #cacfe7');
                $("#name_of_company_error").text('');


                if (year_of_inception == "0") {
				$("#year_of_inception").focus();
				//alert('Please Select Year of Inception!');
				$("#year_of_inception").css('border', '2px solid #ec000069');
				$("#year_of_inception_error").text('Please Select The Year of Inception!');
				return false;
				}
				$("#year_of_inception").css('border', '1px solid #cacfe7');
                $("#year_of_inception_error").text('');

				if (website == "") {
				$("#website").focus();
				//alert('Please enter Website Name!');
				$("#website").css('border', '2px solid #ec000069');
				$("#website_error").text('Please enter The Website URL!');
				return false;
				}
				if(!validWebsite.test(website))
				{
				$("#website").css('border', '2px solid #ec000069');
				$("#website_error").text('Please Enter Valid Website URL!');
					return false;
				}

				$("#website").css('border', '1px solid #cacfe7');
                $("#website_error").text('');


				if (type_of_company == "0") {
				$("#type_of_company").focus();
				//alert('Please Select Type of Company!');
				$("#type_of_company").css('border', '2px solid #ec000069');
				$("#type_of_company_error").text('Please Select The Type of Recruiter/Company!');
				return false;
				}
				$("#type_of_company").css('border', '1px solid #cacfe7');
                $("#type_of_company_error").text('');

                if (nature_of_business == "0") {
				$("#nature_of_business").focus();
				//alert('Please Select Nature of Business!');
				$("#nature_of_business").css('border', '2px solid #ec000069');
				$("#nature_of_business_error").text('Please Select The Nature of Business!');
				return false;
				}
				$("#nature_of_business").css('border', '1px solid #cacfe7');
                $("#nature_of_business_error").text('');

                if (gst_tin_number == "") {
				$("#gst_tin_number").focus();
				//alert('Please enter GST/TIN Number!');
				$("#gst_tin_number").css('border', '2px solid #ec000069');
				$("#gst_tin_number_error").text('Please enter The GST/TIN Number!');
				return false;
				}
				$("#gst_tin_number").css('border', '1px solid #cacfe7');
                $("#gst_tin_number_error").text('');

				if (company_image.length == 0) {
				$("#company_image").focus();
				$('#company_image').css('border', '1px solid #ec000069');
				$('#company_image_error').text('Please Select Company Image!');
				return false;
				}
				$('#company_image').css('border', '1px solid #cacfe7');
				$("#company_image_error").text('');

                if ($('input[name=affiliation]:checked').length <= 0) {
						//alert('Please Select Affiliation!');
						$(".affiliation").css('outline', '1px solid red');
						$("#affiliation_error").text('Please Select The Affiliation!');
						return false;
					} else {
						$(".affiliation").css('outline', '1px solid #ccc');
                        $("#affiliation_error").text('');
				}

                if (inhouse_hr_name == "") {
				$("#inhouse_hr_name").focus();
				//alert('Please enter In-House HR Name!');
				$("#inhouse_hr_name").css('border', '2px solid #ec000069');
				$("#inhouse_hr_name_error").text('Please enter The Name of In-House HR!');
				return false;
				}
				$("#inhouse_hr_name").css('border', '1px solid #cacfe7');
                $("#inhouse_hr_name_error").text('');

                if (designation == "0") {
				$("#designation").focus();
				//alert('Please enter In-House HR Name!');
				$("#designation").css('border', '2px solid #ec000069');
				$("#designation_error").text('Please Select Designation!');
				return false;
				}
				$("#designation").css('border', '1px solid #cacfe7');
                $("#designation_error").text('');

				if (email == "") {

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

				if (postal_code == "") {
				$("#postal_code").focus();
				//alert('Please enter In-House HR Name!');
				$("#postal_code").css('border', '2px solid #ec000069');
				$("#postal_code_error").text('Please Enter The Postal Code!');
				return false;
				}
				$("#postal_code").css('border', '1px solid #cacfe7');
                $("#postal_code_error").text('');

                if (address == "") {
				$("#address").focus();
				//alert('Please enter In-House HR Name!');
				$("#address").css('border', '2px solid #ec000069');
				$("#address_error").text('Please Enter an Address!');
				return false;
				}
				$("#address").css('border', '1px solid #cacfe7');
                $("#address_error").text('');


				if ($('input[name=office_iitm_YN]:checked').length <= 0) {
						//alert('Please Select Gender!');
						$(".office_iitm").css('outline', '1px solid red');
						$("#office_iitm_YN_error").text('This Field is Required!');
						return false;
					} else {
						$(".office_iitm").css('outline', '1px solid #ccc');
                        $("#office_iitm_YN_error").text('');
				}

                if ($('input[name=registerd_company_YN]:checked').length <= 0) {
						//alert('Please Select Gender!');
						$(".rcompany").css('outline', '1px solid red');
						$("#registerd_company_YN_error").text('This Field is Required!');
						return false;
					} else {
						$(".rcompany").css('outline', '1px solid #ccc');
                        $("#registerd_company_YN_error").text('');
				}

               /*  if ($('input[name=acceptance_YN]:checked').length <= 0) {
						//alert('Please Select Gender!');
						$(".acceptance").css('outline', '1px solid red');
						$("#acceptance_YN_error").text('This Field is Required!');
						return false;
					} else {
						$(".acceptance").css('outline', '1px solid #ccc');
                        $("#acceptance_YN_error").text('');
				} */

                if ($('input[name=diclaration_YN]:checked').length <= 0) {

						$("#diclaration_YN").css('outline', '1px solid red');
						$("#diclaration_YN_error").text('This Field is Required!');
						return false;
					} else {
						$("#diclaration_YN").css('outline', '1px solid #ccc');
                        $("#diclaration_YN_error").text('');
				}
                var captcha_code=$("#captcha_code").val();

				if (captcha_add == "") {
					$("#captcha_add").focus();
					$("#captcha_add").css('border', '2px solid #ec000069');
					$("#captcha_add_error").text('Please Provide a Captcha Code!');
					return false;
				}

                if (captcha_add !=captcha_code ) {
					$("#captcha_add").focus();
					$("#captcha_add").css('border', '2px solid #ec000069');
					$("#captcha_add_error").text('You Entered Wrong Captcha Code!');
					return false;
				}

				$("#captcha_add").css('border', '1px solid #cacfe7');
                $("#captcha_add_error").text('');

				if(confirm("Are you sure to be Continued")){
					return true;
				}else{
					return false;
				}

				/*$.ajax({
					url: '<?php echo base_url(); ?>Enquiry/SaveEnquiry',
					method: 'post',
					data: {
						'name_of_company': name_of_company,
						'email': email,
						'mobile': mobile,
						'course_id': course_id,
						'qualification': qualification,
						'degree_diploma_id': degree_diploma_id,
						'captcha_add': captcha_add

					},
					success: function(resp) {
						//alert(resp);return false;
						if (resp == 1) {
							alert("Congratulations! Your registration has been successfully completed. Your Registration No is .");
							location.reload();

						} else {
							alert("Somthing Wrong!");
							location.reload();
						}
					}
				});
				return false;*/
			});
		});
	</script>
