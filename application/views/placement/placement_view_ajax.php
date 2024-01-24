<?php foreach ($vacancy_data as $sd) {
  extract($sd);
} ?>
<div class="col-md-12">

<div class="table-responsive">
                      <table class="table table-sm ">
                        <tr>
                          <th><label>Vacancy ID</label></th>
                          <td><?php echo $sd['vacancy_id']; ?></td>

                          <th><label>Vacancy Title</label></th>
                          <td><?php echo $sd['job_title']; ?></td>
                        </tr>


                        <tr>
                          <th><label>No. of Vacancy</label></th>
                          <td><?php echo $sd['total_vacancy']; ?></td>

                          <th><label>Address</label></th>
                          <td><?php echo $sd['address']; ?></td>
                        </tr>

                        <tr>
                          <th><label>Job Description</label></th>
                          <td colspan="3"> <textarea class="form-control"><?php echo $sd['job_description']; ?></textarea> </td>
                        </tr>

                        <tr>
                          <th><label>Benifits</label></th>
                          <td colspan="3"><textarea class="form-control"><?php echo $sd['benifits']; ?></textarea></td>
                        </tr>


                        <tr>
                          <th><label>Job Location</label></th>
                          <td><?php echo $sd['job_location']; ?></td>

                          <th><label>Job Type</label></th>
                          <td><?php echo $sd['jt_title']; ?></td>
                        </tr>
                        <tr>
                          <th><label>Job Schedule</label></th>
                          <td><?php echo $sd['js_title']; ?></td>

                          <th><label>Pay Type</label></th>
                          <td><?php echo $sd['pt_title']; ?></td>
                        </tr>

                        <tr>
                          <th><label>Maximum Pay</label></th>
                          <td><?php echo $sd['pay_range_min']; ?></td>

                          <th><label>Minimum Pay</label></th>
                          <td><?php echo $sd['pay_range_max']; ?></td>
                        </tr>

                        <tr>
                          <th><label>Open Date</label></th>
                          <td><?php if ($sd['open_date'] != "") echo date("d-m-Y", strtotime($sd['open_date'])) ?></td>

                          <th><label>Last Date</label></th>
                          <td><?php if ($sd['last_date'] != "") echo date("d-m-Y", strtotime($sd['last_date'])) ?></td>
                        </tr>

                        <tr>
                        <th><label>Comtact Person Name</label></th>
                        <td><?php echo $sd['contact_person']; ?></td>

                        <th><label>Mobile Number</label></th>
                        <td><?php echo $sd['contact_person_mobile']; ?></td>
                        </tr>

                        <tr>

                          <th><label>Email</label></th>
                          <td><?php echo $sd['email']; ?></td>

                          <th><label>Attachement</label></th>
                          <td><?php if($sd['job_attachment']!='') { ?>
                           <a href="<?php echo base_url(); ?>assets/job/<?php echo $sd['job_attachment']; ?>" target="_blank"> View Attachement</a>
                           <?php } else { echo "--";}?></td>

                        </tr>



                      </table>
                    </div>
                  </div>

                  <?php if($this->session->userdata['user_role'] == 3) { ?>

                  <div class="col-md-12">
                  <h5 class="center_head" >Vacancy Verification</h5>

                  </div>
                  <div class="col-md-12 mb-3">
                  <form action="" method="post">
									<div class="alert alert-info form_div">
										<label for="verification_yn" class="form-label d-block">Are you sure you want to verify the Vacancy?<span class="text-danger">*</span> </label>
										<div class="form-check form-check-inline">
											<input class="form-check-input verification_yn" type="radio" name="verification_yn" id="verified_Y" onchange="handleChange(this);" value="1" <?php if($verification_yn==1){ echo"checked";}?>>
											<label class="form-check-label" for="verified_Y">Yes</label>
										</div>
										<div class="form-check form-check-inline">
											<input class="form-check-input verification_yn" type="radio" name="verification_yn" id="verified_N" onchange="handleChange(this);" value="2" <?php if($verification_yn==2){ echo"checked";}?>>
											<label class="form-check-label" for="verified_N">No</label>
										</div>
										<br><span id="verification_yn_error" class="text-danger ErrorMsg"></span>
                   <br>

									<span id="Sendmail_error" class="text-danger  ErrorMsg"></span>
								</div>
                <input type="hidden" name="vacancy_id" id="vacancy_id" value="<?php echo $vacancy_id;?>">

                <button type="submit" name="submit_data" id="SubmitData" class="btn btn-sm btn-success" >Submit </button>
                </form>
								</div>
                <?php } ?>