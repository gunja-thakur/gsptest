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
					"student_id":$("#student_id").val()

				},
				success: function(res) {
                 //alert(res); return false;
				}
			});
			});

			alert("Qualification Successfully Added!!!");
			location.reload();
		}



		return false;
		});
	</script>


<script>
		$(document).ready(function() {
			//$("#Empsave").hide();
			$('.btn-addemprow').click(function() {

                var student_id = $("#student_id").val();
                var emp_type = $("#emp_type").val();
				var designation = $('#designation').val();
				var country = $('#country').val();
				var state = $('#state').val();
				var city = $('#city').val();
				var working_from = $('#working_from').val();
				var working_to = $('#working_to').val();
				var employer_address = $('#employer_address').val();


                if(emp_type=='0')
                {
                alert("Select Type!");return false;
                }
                if(designation=='')
                {
                alert("Enter Institute Name!");return false;
                }
                if(country=='')
                {
                alert("Enter Total Marks!");return false;
                }
                if(state=='')
                {
                alert("Enter Obtained Marks!");return false;
                }
                if(city=='')
                {
                alert("Enter Obtained Marks!");return false;
                }
                if(working_from=='')
                {
                alert("Enter Obtained Marks!");return false;
                }
                if(working_to=='')
                {
                alert("Enter Obtained Marks!");return false;
                }
                if(employer_address=='')
                {
                alert("Enter Obtained Marks!");return false;
                }


				//alert(country);return false;

				$('.EmpTable tbody').append
				("<tr><td>" + emp_type + "</td><td>" + designation + "</td><td>" + country + "</td> <td>" + state + "</td><td>" + city + "</td><td>" + working_from + "</td><td>" + working_to + "</td><td>" + employer_address + "</td><td><a href='javascript:void(0);' class='btn btn-sm btn-danger EremCF'><i <i class='fa fa-trash'></i></i></a></td></tr>");


                $(".EmpTable").show();
                $("#Empsave").show();

				$('#emp_type').val('0');
				$('#designation').val('');
				$('#country').val('0');
				$('#state').val('0');
				$('#city').val('0');
				$('#working_from').val('');
				$('#working_to').val('');
				$('#employer_address').val('');

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
					"emp_type":$(this).find("td:first").html(),
					"designation":$(this).find("td").eq(1).html(),
					"country":$(this).find("td").eq(2).html(),
					"state":$(this).find("td").eq(3).html(),
					"city":$(this).find("td").eq(4).html(),
					"working_from":$(this).find("td").eq(5).html(),
					"working_to":$(this).find("td").eq(6).html(),
					"employer_address":$(this).find("td").eq(7).html(),
					"student_id":$("#student_id").val()

				},
				success: function(res) {
                // alert(res); return false;
				}
			});
			});

			alert("Employment Successfully Added!!!");
			location.reload();
		}



		return false;
		});
	</script>
