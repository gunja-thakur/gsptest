<?php foreach ($campus_data as $cd) {
  extract($cd);
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
  <form action="<?php echo base_url(); ?>CampusDrive/Modifycampus_Save" method="post" enctype="multipart/form-data">
                      <div class="row">
                        <input type="hidden" name="cm_id" id="cm_id" value="<?php echo $cd['cm_id'];?>">
                        <input type="hidden" name="rm_id" id="rm_id" value="<?php echo $this->session->userdata['user_id'];?>">

                        <div class="col-md-4 col-sm-4 mb-3">
                          <label for="campus_title" class="form-label ">Title</label>
                          <input type="text" class="form-control NameVelidate" id="campus_title" name="campus_title" aria-describedby="campus_title" maxlength="100" value="<?php echo $cd['campus_title'];?>">
                          <span id="campus_title_error" class="text-danger ErrorMsg"></span>

                        </div>
                        <div class="col-md-4 col-sm-6 mb-3">
                          <label for="campus_date" class="form-label">Campus Drive Date</label>
                          <input type="date" class="form-control" id="campus_date" name="campus_date" value="<?php echo $cd['campus_date'];?>">
                          <span id="campus_date_error" class="text-danger ErrorMsg"></span>
                        </div>

                        <div class="col-md-4 col-sm-6 mb-3">
                          <label for="campus_details" class="form-label">Campus Drive Details<span class="text-danger">*</span></label>
                          <textarea type="text" class="form-control" id="campus_details" name="campus_details" maxlength="250" rows="1"><?php echo $cd['campus_details'];?></textarea>
                          <span id="campus_details_error" class="text-danger ErrorMsg"></span>
                        </div>

                        <div class="col-md-4 col-sm-6 mb-3">
                          <label for="campus_description" class="form-label">Campus Description<span class="text-danger">*</span></label>
                          <textarea type="text" class="form-control" id="campus_description" name="campus_description" maxlength="250" rows="1"><?php echo $cd['campus_description'];?></textarea>
                          <span id="campus_description_error" class="text-danger ErrorMsg"></span>
                        </div>

                        <div class="col-md-4 col-sm-6 mb-3">
                          <label for="contact_person" class="form-label"> Comtact Person Name <span class="text-danger">*</span></label>
                          <input type="text" class="form-control NameVelidate" id="contact_person" name="contact_person" aria-describedby="contact_person" value="<?php echo $cd['contact_person']; ?>" maxlength="80" />
                          <span id="contact_person_error" class="text-danger ErrorMsg"></span>

                        </div>

                        <div class="col-md-4 col-sm-6 mb-3">
                          <label for="email" class="form-label">Email<span class="text-danger">*</span></label>
                          <input type="email" class="form-control " id="email" name="email" aria-describedby="email" value="<?php echo $cd['email']; ?>" maxlength="80" />
                          <span id="email_error" class="text-danger ErrorMsg"></span>

                        </div>

                        <div class="col-md-4 col-sm-6 mb-3">
                          <label for="contact_person_mobile" class="form-label">Mobile Number<span class="text-danger">*</span></label>
                          <input type="number" class="form-control NumberVelidate" id="contact_person_mobile" name="contact_person_mobile" aria-describedby="contact_person_mobile" min="0" onKeyPress="if(this.value.length==10) return false;" value="<?php echo $cd['contact_person_mobile']; ?>" /><span Class="small text-danger"> <b>Ex : 98931XXXXX</b> </span>
                          <span id="contact_person_mobile_error" class="text-danger ErrorMsg"></span>

                        </div>

                        <div class="col-md-4 col-sm-6 mb-3">
                          <label for="" class="form-label">Upload File</label>
                          <input type="file" class="form-control " id="campus_attachment" name="campus_attachment" accept=".jpg,.png,.pdf">

                          <input type="hidden" class="form-control " id="campus_file" name="campus_file" accept=".jpg,.png,.pdf" value="<?php echo $cd['campus_attachment']; ?>">
                          <span id="campus_attachment_error" class="text-danger ErrorMsg"></span>
                        </div>


                        <div class="form-group mb-0 ">

                          <button type="submit" class="btn btn-sm btn-success" name="update_campus" id="update_campus" value="1">Update Details</button>

                        </div>
                      </div>
                    </form>
</div>