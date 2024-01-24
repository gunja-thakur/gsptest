<select name="panchayat" id="panchayat" class="form-control mandatory" >
                                                    <option value="">Select Panchayat / Nagar Nigam / Nagar Palika </option>
													<?php foreach($panchayat_data as $pdd): extract($pdd); ?>
													<option value="<?=$Panchayat_Id?>"><?=$Panchayat_Name?></option>
													<?php endforeach; ?>

												</select>
