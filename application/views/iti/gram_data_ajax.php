<select name="village" id="village" class="form-control mandatory" >
                                                    <option value="">Select Village </option>
													<?php foreach($village_data as $vdd): extract($vdd); ?>
													<option value="<?=$Village_Id?>"><?=$Village_Name?></option>
													<?php endforeach; ?>

												</select>