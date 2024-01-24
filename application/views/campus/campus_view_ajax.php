<?php foreach ($campus_data as $sd) {
  extract($sd);
} ?>

<div class="table-responsive">
  <table class="table table-sm ">

    <tr>

      <th>Created By</th>
      <td><?= ucwords($name_of_company) ?></td>

      <th>Title</th>
      <td><?= ucwords($campus_title) ?></td>
      </tr>
      <tr>
      <th>Campus Drive Date </th>
      <td><?php if ($sd['campus_date'] != "") echo date("d-m-Y", strtotime($sd['campus_date'])) ?></td>

      <th>Attachement</th>
      <td><?php if ($sd['campus_attachment'] != '') { ?>
              <a href="<?php echo base_url(); ?>assets/campus/<?php echo $sd['campus_attachment']; ?>" target="_blank"> View Attachement</a>
            <?php } else {
                echo "--";
              } ?>
      </td>
      </tr>

      <tr>
      <th>Campus Drive Details</th>
      <td colspan="3"><textarea class="form-control" rows="1"> <?= $campus_details ?> </textarea></td>
      </tr>
      <tr>
      <th>Event Description</th>
      <td colspan="3"><textarea class="form-control" rows="1"> <?= $campus_description ?> </textarea></td>
      </tr>

      <tr>
      <th>Contact Person</th>
      <td><?= $contact_person ?></td>

      <th>Email</th>
      <td><?= $email ?></td>
      </tr>
      <tr>
      <th>Mobile</th>
      <td><?= $contact_person_mobile ?></td>
      </tr>


    </tr>
  </table>
</div>

<?php if($this->session->userdata['user_role'] == 3) { ?>

<div class="col-md-12">
                  <h5 class="center_head" >Campus Verification</h5>

                  </div>
                  <div class="col-md-12 mb-3">
                  <form action="" method="post">
									<div class="alert alert-info form_div">
										<label for="verification_yn" class="form-label d-block">Are you sure you want to verify the Campus?<span class="text-danger">*</span> </label>
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
                <input type="hidden" name="cm_id" id="cm_id" value="<?php echo $cm_id;?>">

                <button type="submit" name="submit_data" id="SubmitData" class="btn btn-sm btn-success" >Submit </button>
                </form>
								</div>
                <?php } ?>