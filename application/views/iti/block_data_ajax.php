<select name="block" id="block" class="form-control mandatory" >
                                                    <option value="">Select Block </option>
													<?php foreach($block_data as $bdd): extract($bdd); ?>
													<option value="<?=$Block_ID?>"><?=$Block_Name?></option>
													<?php endforeach; ?>

												</select>