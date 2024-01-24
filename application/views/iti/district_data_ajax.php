<select name="district" id="district" class="form-control mandatory" >
                                                    <option value="">Select District </option>
													<?php foreach($district_data as $dsd): extract($dsd); ?>
													<option value="<?=$District_Id?>"><?=$District_Name?></option>
													<?php endforeach; ?>

												</select>
