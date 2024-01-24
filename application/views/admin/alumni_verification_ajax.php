<?php foreach ($student_data as $sd) {
  extract($sd);
} ?>
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
                      </table>
                    </div>
                  </div>

                  <div class="col-md-12">
                  <h5 class="center_head" >Alumni Verification</h5>

                  </div>
                  <div class="col-md-12 mb-3">
                  <form action="" method="post">
									<div class="alert alert-info form_div">
										<label for="verified_YN" class="form-label d-block">Are you sure you want to verify this alumni details and display it in the Alumni Directory?<span class="text-danger">*</span> </label>
										<div class="form-check form-check-inline">
											<input class="form-check-input verified_YN" type="radio" name="verified_YN" id="verified_Y" onchange="handleChange(this);" value="1" <?php if($verified==1){ echo"checked";}?>>
											<label class="form-check-label" for="verified_Y">Yes</label>
										</div>
										<div class="form-check form-check-inline">
											<input class="form-check-input verified_YN" type="radio" name="verified_YN" id="verified_N" onchange="handleChange(this);" value="2" <?php if($verified==2){ echo"checked";}?>>
											<label class="form-check-label" for="verified_N">No</label>
										</div>
										<br><span id="verified_YN_error" class="text-danger ErrorMsg"></span>
                   <br>

                  <div class="form-check form-check-inline SendmailCls">
										<input class="form-check-input " type="checkbox" name="Sendmail" id="Sendmail" value="1" <?php if($ad_id!=""){ echo "checked"; } ?> >
										<label class="form-check-label" for="Sendmail"> Are you sure you want to send portal user credentials to this alumni?</label>
									</div>

									<span id="Sendmail_error" class="text-danger  ErrorMsg"></span>
								</div>
                <input type="hidden" name="student_id" id="student_id" value="<?php echo $student_id;?>">

                <button type="submit" name="submit_data" id="SubmitData" class="btn btn-sm btn-success" >Submit </button>
                </form>
								</div>