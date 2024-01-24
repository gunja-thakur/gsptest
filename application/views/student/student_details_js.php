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
<script>
    $(document).ready(function () {

    $(".myTable").hide();
    $("#save").hide();
    /* ------------ */

    $(".EmpTable").hide();
    $("#Empsave").hide();
    });
</script>
<script>
$(document).ready(function () {
$('#obt_marks').keypress(function(){
  //alert("fljgmkl");return false;
  var total_marks = $('#total_marks').val();
  var obt_marks = $('#obt_marks').val();
  var al_percentage=(obt_marks*100/total_marks);
  //alert(al_percentage);return false;
 //$('#percentage').val(al_percentage);
});
});
</script>
<script>
		$(document).ready(function() {

			$('.btn-addrow').click(function() {
				//$("#save").show();
                var student_id = $("#student_id").val();
				var college_name = $('#college_name').val();
				var highest_qualification = $('#highest_qualification').val();
				var total_marks = $('#total_marks').val();
				var obt_marks = $('#obt_marks').val();
				var percentage = (obt_marks*100/total_marks);

                if(college_name=='')
                {
                alert("Enter Institute Name!");return false;
                }
                if(highest_qualification=='')
                {
                alert("Select Qualification!");return false;
                }
                if(total_marks=='')
                {
                alert("Enter Total Marks!");return false;
                }
                if(obt_marks=='')
                {
                alert("Enter Obtained Marks!");return false;
                }



				//alert(highest_qualification);return false;

				$('.myTable tbody').append
				("<tr><td>" + college_name + "</td><td>" + highest_qualification + "</td> <td>" + total_marks + "</td><td>" + obt_marks + "</td><td>" + percentage + "</td><td><a href='javascript:void(0);' class='btn btn-sm btn-danger remCF'><i <i class='fa fa-trash'></i></i></a></td></tr>");

                $(".myTable").show();
                 $("#save").show();
				$('#highest_qualification').val('0');
				$('#college_name').val('');
				$('#total_marks').val('');
				$('#obt_marks').val('');
				$('#percentage').val('');
			});
		});

		$("#AddQualification").on('click','.remCF',function(){
        $(this).parent().parent().remove();
    });
</script>

<script>
		$(document).on('click', '#save', function() {
			//debugger;

		if(confirm("Are You Sure to be Continuied")){
			$('#AddQualification > tbody  > tr').each(function(index, tr) {

			$.ajax({
				url: "<?php echo base_url(); ?>Student/Save_Qualification",
				type: "POST",
				data: {
					//"project_id":$(this).find("td:first").html(),
					"college_name":$(this).find("td:first").html(),
					"highest_qualification":$(this).find("td").eq(1).html(),
					"total_marks":$(this).find("td").eq(2).html(),
					"obt_marks":$(this).find("td").eq(3).html(),
					"percentage":$(this).find("td").eq(4).html(),
					"student_id":$("#student_id").val(),
					"student_name":$("#student_name").val(),
					"enrollment_no":$("#enrollment_no").val()
				},
				success: function(res) {
                 //alert(res); return false;
				}
			});
			});

			/*alert("Qualification Successfully Added!!!");
			location.reload();*/
			$('#overlay').fadeIn().delay(3000).fadeOut();

			/* Send Email Start */
			$.ajax({
				url: "<?php echo base_url(); ?>Student/SendMail_Qualification",
				type: "POST",
				data: {
					"student_name":$("#student_name").val(),
					"enrollment_no":$("#enrollment_no").val()
				},
				success: function(res) {
					alert("Qualification Successfully Added!!!");
					location.reload();
				}
			});
			/*Send Email End */
		}
		return false;
		});
</script>


<script>
		$(document).ready(function() {
			//$("#Empsave").hide();

			$('#current_working_YN').click(function() {
				if (!$(this).is(':checked')) {
					$(".worktill").show();
				}
				else{
					$(".worktill").hide();
				}
			});

			$('.btn-addemprow').click(function() {

				if (!$('#current_working_YN').is(':checked')) {
				 var current_working_YN = 0;
				}
				else{
				var current_working_YN = 1;
				}
                var student_id = $("#student_id").val();
				var designation = $('#designation').val();
                var emp_type = $("#emp_type").val();
				var company_name = $('#company_name').val();
				var location = $('#location').val();
				var location_type = $('#location_type').val();
				var job_description = $('#job_description').val();
				//var current_working_YN = $('#current_working_YN').val();
				var working_month = $('#working_month').val();
				var working_from = $('#working_from').val();
				var working_to = $('#working_to').val();
				//var employer_address = $('#employer_address').val();

                if(designation=='')
                {
                alert("Enter Title !");return false;
                }
                if(emp_type=='0')
                {
                alert("Select Employer Type!");return false;
                }
                if(company_name=='')
                {
                alert("Enter Company Name!");return false;
                }
                if(location=='')
                {
                alert("Enter Location!");return false;
                }
                if(location_type=='0')
                {
                alert("Enter Location Type!");return false;
                }
                if(job_description=='')
                {
                alert("Enter Job Description!");return false;
                }
                if(working_month=='')
                {
                alert("Select Month!");return false;
                }
                if(working_from=='')
                {
                alert("Select Start Date!");return false;
                }
                if(working_to=='')
                {
                alert("Select End Date!");return false;
                }
				//alert(company_name);return false;

				$('.EmpTable tbody').append
				("<tr><td>" + designation + "</td><td>" + emp_type + "</td><td>" + company_name + "</td> <td>" + location + "</td><td>" + location_type + "</td><td>" + job_description + "</td><td>" + current_working_YN + "</td><td>" + working_month + "</td><td>" + working_from + "</td><td>" + working_to + "</td><td><a href='javascript:void(0);' class='btn btn-sm btn-danger EremCF'><i <i class='fa fa-trash'></i></i></a></td></tr>");
                $(".EmpTable").show();
                $("#Empsave").show();
				$('#emp_type').val('0');
				$('#designation').val('');
				$('#company_name').val('');
				$('#location').val('');
				$('#location_type').val('0');
				$('#current_working_YN').val('');
				$('#working_month').val('');
				$('#working_from').val('');
				$('#working_to').val('');
				$('#job_description').val('');
			});
		});

		$("#AddEmployer").on('click','.EremCF',function(){
        $(this).parent().parent().remove();
    });

	</script>

<script>
		$(document).on('click', '#Empsave', function() {
			//debugger;

		if(confirm("Are You Sure to be Continuied")){
			$('#AddEmployer > tbody  > tr').each(function(index, tr) {

			$.ajax({
				url: "<?php echo base_url(); ?>Student/Save_Employement",
				type: "POST",
				data: {
					//"project_id":$(this).find("td:first").html(),
					"designation":$(this).find("td:first").html(),
					"emp_type":$(this).find("td").eq(1).html(),
					"company_name":$(this).find("td").eq(2).html(),
					"location":$(this).find("td").eq(3).html(),
					"location_type":$(this).find("td").eq(4).html(),
					"job_description":$(this).find("td").eq(5).html(),
					"current_working_YN":$(this).find("td").eq(6).html(),
					"working_month":$(this).find("td").eq(7).html(),
					"working_from":$(this).find("td").eq(8).html(),
					"working_to":$(this).find("td").eq(9).html(),
					"student_id":$("#student_id").val(),
					"student_name":$("#student_name").val(),
					"enrollment_no":$("#enrollment_no").val()

				},
				success: function(res) {
                // alert(res); return false;
				}
			});
			});

			/* alert("Employment Successfully Added!!!");
			location.reload(); */

			$('#overlay').fadeIn().delay(3000).fadeOut();


			/* Send Email Start */
			$.ajax({
				url: "<?php echo base_url(); ?>Student/SendMail_Qualification",
				type: "POST",
				data: {
					"student_name":$("#student_name").val(),
					"enrollment_no":$("#enrollment_no").val()
				},
				success: function(res) {
					alert("Employment Successfully Added!!!");
					location.reload();
				}
			});
			/*Send Email End */
		}
		return false;
		});
	</script>
