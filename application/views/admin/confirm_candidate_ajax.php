<?php foreach($upgarde_candidate_data as $cd)?>


<form action="" class="row g-3">
<input type="hidden" class="form-control" id="user_id" name="user_id" value="<?php echo $cd['user_id'];?>">
<input type="hidden" class="form-control" id="reg_id" name="reg_id" value="<?php echo $cd['reg_id'];?>">
<div class="col-md-4">

<label for="seat_status" class="form-label">Modify Candidate Seat <span class="text-danger">*</span></label>
</div>
<div class="col-md-8">

<input type="radio" id="c_seat_status" name="seat_status" value="1" class="seat_type" <?php if($cd['seat_status']==1){ echo "checked";}?>>
 <label for="c_seat_status">Seat Confirm</label>

 <input type="radio" id="v_seat_status" name="seat_status" value="2" class="seat_type" <?php if($cd['seat_status']==2){ echo "checked";}?>>
<label for="v_seat_status">Seat Upgrade</label>
</div>

<div class="col-md-4">
<label for="seat_status" class="form-label">Modification Date <span class="text-danger">*</span></label>
</div>

<div class="col-md-8">
<input type="date" name="seat_modificationdate" id="seat_modificationdate"  class="form-control w-75" value="<?php echo $cd['seat_modificationdate'];?>">
</div>

<div class="col-md-4">
<label for="seat_status" class="form-label">Remark <span class="text-danger">*</span></label>
</div>

<div class="col-md-8">
<textarea name="seat_remark" id="seat_remark"  class="form-control" ><?php echo $cd['seat_remark'];?> </textarea>
</div>


<div class="col-md-6">
<input type="button" value="Submit" id="submit" class="btn btn-success btn-sm"  style="float: right;">
</div>


</form>
<script type="text/javascript" src="<?php echo base_url();?>assets/js/jquery-3.6.0.min.js"></script>
<script>

$(document).on('click', '#submit', function(){



$("#seat_modificationdate").focus();

var reg_id=$("#reg_id").val();
var user_id=$("#user_id").val();
var seat_status=$("input[type='radio']:checked").val();
var seat_modificationdate=$("#seat_modificationdate").val();
var seat_remark=$("#seat_remark").val();

//alert(seat_status);return false;



if(seat_modificationdate=="")
					{

						$("#seat_modificationdate").focus();
						$("#seat_modificationdate").css('border','2px solid #ec000069');
						$("#error").text('Please Provide Date');
						return false;
					}
					$("#seat_modificationdate").css('border','1px solid #cacfe7');




if (seat_remark.length<2)
{

    $("#seat_remark").focus();
	$("#seat_remark").css('border','2px solid #ec000069');
	$("#error").text('Please Provide Remark');
	return false;
}
$("#seat_remark").css('border','1px solid #cacfe7');


$.ajax({
                url: "<?php echo base_url(); ?>Home/Update_CandidateSeat",
                type: "POST",
                data: {"reg_id":reg_id,"user_id":user_id,"seat_status":seat_status,"seat_modificationdate":seat_modificationdate,"seat_remark":seat_remark},

                success: function (res)
                {
					//alert(res);return false;

					alert("Successfully Updated");
					window.location = "<?php echo base_url();?>Home";
                }
            });
return false;
});

</script>
