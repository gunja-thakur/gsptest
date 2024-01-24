<?php
 foreach ($student_data as $sd) {  extract($sd);}
 foreach ($testimoni_data as $td) {  extract($td);}
?>
<div class="col-md-12">
                    <div class="table-responsive">
                      <table class="table table-sm ">
                        <tr>
                          <th><label>Enrollment Number</label></th>
                          <td><?php echo $sd['enrollment_no']; ?></td>

                          <th><label>Passing Year</label></th>
                          <td><?php echo $sd['passing_year']; ?></td>
                        </tr>

                        <!-- <tr>
                          <th><label>Date of Birth</label></th>
                          <td><?php if ($sd['date_of_birth'] != "") echo date("d-m-Y", strtotime($sd['date_of_birth'])) ?></td>

                          <th><label>Gender</label></th>
                          <td><?php if ($sd['gender'] == "male") { ?>
                              <?php echo "Male"; ?>
                            <?php } else if ($sd['gender'] == "female") { ?>
                              <?php echo "Female"; ?>
                            <?php } ?></td>
                        </tr> -->

                        <tr>
                        <th><label>Mobile Number</label></th>
                          <td><?php echo $sd['mobile']; ?></td>
                          <th><label>Email</label></th>
                          <td><?php echo $sd['email']; ?></td>
                        </tr>

                        <tr>
                        <th><label>Father Name</label></th>
                        <td><?php echo $sd['father_name']; ?></td>
                        <th><label>Branch</label></th>
                        <td><?php echo $sd['branch']; ?></td>
                        </tr>
                        <tr>
                          <th><label>Parmanent Address</label></th>
                          <td colspan="3"><?php echo $sd['permanent_address']; ?></td>
                        </tr>
                        <!-- <tr>
                          <th><label>Testimoni Description</label></th>
                          <td colspan="3"><?php echo $td['testimoni_description']; ?></td>
                        </tr> -->
                      </table>
                    </div>
                  </div>

                  <div class="col-md-12">
                  <h5 class="center_head" >Testimonial Verification</h5>

                  </div>
                  <div class="col-md-12 mb-3">
                  <form action="" method="post">
                    <div class="row">
                    <div class="col-md-12 mb-3">
                <input type="hidden" name="student_id" id="student_id" value="<?php echo $student_id;?>">
                <label for="testimoni_description" class="form-label d-block">Testimonial Description<span class="text-danger">*</span> </label>
                <textarea name="testimoni_description" id="testimoni_description" class="form-control"><?php echo $testimoni_description;?></textarea>
                <br><span id="testimoni_description_error" class="text-danger ErrorMsg"></span>
                </div>
                    <div class="col-md-12 ">
									<div class="alert alert-info form_div">
										<label for="show_on_front" class="form-label d-block">Are you sure you want to Mark as a Verified to Testimonial ?<span class="text-danger">*</span> </label>
										<div class="form-check form-check-inline">
											<input class="form-check-input show_on_front" type="radio" name="show_on_front" id="show_on_front_Y" onchange="handleChange(this);" value="1" <?php if($show_on_front==1){ echo"checked";}?>>
											<label class="form-check-label" for="show_on_front_Y">Yes</label>
										</div>
										<div class="form-check form-check-inline">
											<input class="form-check-input show_on_front" type="radio" name="show_on_front" id="show_on_front_N" onchange="handleChange(this);" value="2" <?php if($show_on_front==2){ echo"checked";}?>>
											<label class="form-check-label" for="show_on_front_N">No</label>
										</div>
										<br><span id="show_on_front_error" class="text-danger ErrorMsg"></span>
								</div>
								</div>


                <button type="submit" name="submit_data" id="SubmitTestimoni" class="btn btn-sm btn-success" >Submit </button>
                </form>
                </div>
								</div>