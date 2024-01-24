<label for="ForSelect" class="form-label">Name of Stream/Trade </label>
<select name="degree_diploma_id" id="degree_diploma_id" class="form-control">
	<option value="0">Select Degree/Diploma</option>
	<?php foreach ($trade_data as $td) { extract($td); ?>
	<option value="<?php echo $td['td_id'];?>" ><?php echo $td['trade_name'];?> </option>
	<?php } ?>

</select>
