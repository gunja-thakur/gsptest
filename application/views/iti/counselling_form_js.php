<script>
 $(document).ready(function() {

  $("#samagra_id").keypress(function(e) {
    var length = this.value.length;

    if (length >9 ) {
      e.preventDefault();
      alert("Not allow more than 9 Digits");
      return false;
      //$("#No_Student_Enrolled").val('');

    }
  });

  ////////////////////////////////////////
  $("#roll_no").keypress(function(e) {
    var length = this.value.length;

    if (length >15 ) {
      e.preventDefault();
      alert("Not allow more than 15 Digits");
      return false;
      //$("#No_Student_Enrolled").val('');

    }
  });
  ////////////////////////////////////////

  $("#pincode").keypress(function(e) {
    var length = this.value.length;

    if (length >6 ) {
      e.preventDefault();
      alert("Not allow more than 6 Digits");
      return false;
      //$("#No_Student_Enrolled").val('');

    }
  });
  ////////////////////////////////////////
  $("#pincode_p").keypress(function(e) {
    var length = this.value.length;

    if (length >6 ) {
      e.preventDefault();
      alert("Not allow more than 6 Digits");
      return false;
      //$("#No_Student_Enrolled").val('');

    }
  });
  ////////////////////////////////////////
  $("#mobile").keypress(function(e) {
    var length = this.value.length;

    if (length >10 ) {
      e.preventDefault();
      alert("Not allow more than 6 Digits");
      return false;
      //$("#No_Student_Enrolled").val('');

    }
  });
  ////////////////////////////////////////
  $("#mobile_p").keypress(function(e) {
    var length = this.value.length;

    if (length >10 ) {
      e.preventDefault();
      alert("Not allow more than 6 Digits");
      return false;
      //$("#No_Student_Enrolled").val('');

    }
  });
  ////////////////////////////////////////




	$(".submit2").click(function(e){

		/* if (!$('.dec_chk').is(':checked')) {
        alert("Check the Declaration Checkbox to Submit the Form!!!");
        return false;
        //    e.preventDefault();
        }
        else
        {
          return true;
        } */
	});

jQuery(document).ready(function() {
    setTimeout(function() {
		 $(".flashhide").hide();

		 <?php unset($_SESSION["message"]); ?>
    }, 5000);
});


$(document).ready(function() {
  $(".messageshow").hide();
    $('#btn-disable').click(function(e) {
        var isValid = true;
        $('.mandatory').each(function() {
            if ($.trim($(this).val()) == '') {
                isValid = false;
                $(this).css({
                    "border": "1px solid red",
					"width": "50px !important"
                });


                 $(this).nextAll('.messageshow:first').show();
            }
            else {
                $(this).css({
                    "border": "",
                    "background": ""
                });
				     $(this).nextAll('.messageshow:first').hide();
            }
        });
		if (isValid == false)
		{
            e.preventDefault();
            return false;
		}
    else if (!$('.dec_chk').is(':checked')) {
        alert("Check the Declaration Checkbox to Submit the Form!!!");
        return false;
        //    e.preventDefault();
        }
        else
		{
	     $("#submit_main").click();
		}

    });
});
});
</script>

<script>
    $(document).on('change', '#division', function(){
//alert("jkjd");return false;

$(".blockajaxshow").html('');
	$(".panchayatajaxshow").html('');
	$(".gramajaxshow").html('');

var Division_Id=$(this).val();
$.ajax({
                url: "<?php echo base_url(); ?>Registration/view_district_ajax",
                type: "POST",
                data: {"Division_Id":Division_Id},
                success: function (msg)
                {
					//alert(msg);
                    $(".ajaxshow").html('');
                    $(".ajaxshow").html(msg);
                }
            });

});

$(document).on('change', '#district', function(){
//alert("jkjd");return false;


	$(".panchayatajaxshow").html('');
	$(".gramajaxshow").html('');


var District_ID=$(this).val();
$.ajax({
                url: "<?php echo base_url(); ?>Registration/view_block_ajax",
                type: "POST",
                data: {"District_ID":District_ID},
                success: function (msg)
                {
					//alert(msg);
                    $(".blockajaxshow").html('');
                    $(".blockajaxshow").html(msg);
                }
            });

});

$(document).on('change', '#block', function(){
//alert("jkjd");return false;



	$(".gramajaxshow").html('');

var category=$('input[name=category]:checked').val();
//alert(category); return false;
var Block_Id=$(this).val();
$.ajax({
                url: "<?php echo base_url(); ?>Registration/view_panchayat_ajax",
                type: "POST",
                data: {"category":category,"Block_Id":Block_Id},
                success: function (msg)
                {
					//alert(msg);
                    $(".panchayatajaxshow").html('');
                    $(".panchayatajaxshow").html(msg);
                }
            });

});


$(document).on('change', '#panchayat', function(){
//alert("jkjd");return false;
var Panchayat_Id=$(this).val();
$.ajax({
                url: "<?php echo base_url(); ?>Registration/view_gram_ajax",
                type: "POST",
                data: {"Panchayat_Id":Panchayat_Id},
                success: function (msg)
                {
					//alert(msg);
                    $(".gramajaxshow").html('');
                    $(".gramajaxshow").html(msg);
                }
            });

});

</script>

<script type="text/javascript">
    function valueChanged()
    {
        if($('.coupon_question').is(":checked"))
            $(".chk_permanent_address").hide();
        else
            $(".chk_permanent_address").show();
    }
</script>

<script>
  function validateNum(evt) {
    var theEvent = evt || window.event;

    // Handle paste
    if (theEvent.type === 'paste') {
      key = event.clipboardData.getData('text/plain');
    } else {
      // Handle key press
      var key = theEvent.keyCode || theEvent.which;
      key = String.fromCharCode(key);
    }
    var regex = /[0-9]|\./;
    if (!regex.test(key)) {
      theEvent.returnValue = false;
      if (theEvent.preventDefault) theEvent.preventDefault();
    }
  }

  $(document).ready(function () {
      $('input[type=text]').bind('copy paste', function (e) {
         e.preventDefault();
      });
   });

</script>