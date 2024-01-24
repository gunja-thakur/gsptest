
									<label for="ForSelect" class="form-label">Intrested Course</label>
									<select class="form-select" aria-label="Default select example" name="course_id[]" id="course_id" multiple>
										<!-- <option value="0">Select Course </option> -->
										<?php foreach ($course_data as $cd) {
											extract($cd); ?>
											<option value="<?php echo $cd['course_id'] ?>"><?php echo $cd['course_name']; ?></option>
										<?php } ?>

									</select>
