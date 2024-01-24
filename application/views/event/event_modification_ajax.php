<?php foreach ($event_data as $sd) {
  extract($sd);
} ?>
<!-- <div class="col-md-12">
                    <div class="table-responsive">
                      <table class="table table-sm ">
                        <tr>
                          <th><label>Enrollment Number</label></th>
                          <td><?php echo $sd['enrollment_no']; ?></td>

                          <th><label>Passing Year</label></th>
                          <td><?php echo $sd['passing_year']; ?></td>
                        </tr>

                        <tr>
                          <th><label>Date of Birth</label></th>
                          <td><?php if ($sd['date_of_birth'] != "") echo date("d-m-Y", strtotime($sd['date_of_birth'])) ?></td>

                          <th><label>Gender</label></th>
                          <td><?php if ($sd['gender'] == "male") { ?>
                              <?php echo "Male"; ?>
                            <?php } else if ($sd['gender'] == "female") { ?>
                              <?php echo "Female"; ?>
                            <?php } ?></td>
                        </tr>

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
                  </div> -->

<!-- <div class="col-md-12">
  <h5 class="center_head">Modify Event</h5>
</div> -->

<div class="col-md-12 mb-3">
  <p class="text-danger"> Note : (1) File Size must be less than 2 MB. (2) Only jpg,png,pdf File type Accepted.</p>
  <hr>
  <form action="<?php echo base_url();?>Events/ModifyEvent_Save" method="post" enctype="multipart/form-data">
    <div class="row">

      <input type="hidden" name="event_id" id="event_id" value="<?php echo $sd['event_id'] ?>">


      <div class="col-md-4 col-sm-4 mb-3">
        <label for="event_title" class="form-label ">Event Title</label>
        <input type="text" class="form-control NameVelidate" id="event_title" name="event_title" aria-describedby="event_title" maxlength="150" value="<?php echo $sd['event_title'] ?>">
        <span id="event_title_error" class="text-danger ErrorMsg"></span>

      </div>
      <div class="col-md-4 col-sm-6 mb-3">
        <label for="event_date" class="form-label">Event Date</label>
        <input type="date" class="form-control" id="event_date" name="event_date" value="<?php echo $sd['event_date'] ?>">
        <span id="event_date_error" class="text-danger ErrorMsg"></span>
      </div>

      <div class="col-md-4 col-sm-6 mb-3">
        <label for="published_date" class="form-label">Published Date</label>
        <input type="date" class="form-control" id="published_date" name="published_date" value="<?php echo $sd['published_date'] ?>">
        <span id="published_date_error" class="text-danger ErrorMsg"></span>
      </div>



      <div class="col-md-6 col-sm-6 mb-3">
        <label for="venue" class="form-label">Venue<span class="text-danger">*</span></label>
        <textarea type="text" class="form-control" id="venue" name="venue" maxlength="250"><?php echo $sd['venue'] ?></textarea>
        <span id="venue_error" class="text-danger ErrorMsg"></span>
      </div>

      <div class="col-md-6 col-sm-6 mb-3">
        <label for="event_description" class="form-label">Event Description<span class="text-danger">*</span></label>
        <textarea type="text" class="form-control" id="event_description" name="event_description" maxlength="250"><?php echo $sd['event_description'] ?></textarea>
        <span id="event_description_error" class="text-danger ErrorMsg"></span>
      </div>

      <div class="col-md-6 col-sm-6 mb-3">
        <input type="hidden" name="brochure" id="brochure" value="<?php echo $upload_brochure;?>">
        <label for="" class="form-label">Upload Brochure</label>
        <input type="file" class="form-control " id="upload_brochure" name="upload_brochure" accept=".jpg,.png,.pdf">
        <input type="hidden" name="brochure" id="brochure" value="<?php echo $upload_brochure; ?>">
        <span id="upload_brochure_error" class="text-danger ErrorMsg"></span>
      </div>

      <div class="col-md-6 col-sm-6 mb-3">
        <input type="hidden" name="invite" id="invite" value="<?php echo $event_invite;?>">
        <label for="" class="form-label">Upload Event Image</label>
        <input type="file" class="form-control " id="event_invite" name="event_invite" accept=".jpg,.png,.pdf">
        <input type="hidden" class="form-control " id="eventinvite" name="eventinvite" value="<?php echo $event_invite; ?>">
        <span id="event_invite_error" class="text-danger ErrorMsg"></span>
      </div>

      <div class="form-group mb-0 ">

        <button type="submit" class="btn btn-sm btn-success" name="add_event" id="add_event" value="1">Modify Event</button>

      </div>
    </div>
  </form>
</div>