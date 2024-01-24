<?php foreach ($notable_data as $sd) {
  extract($sd);
} ?>
<div class="col-md-12">

<div class="story_modal_box">
                  <div class="event_flex">
                    <div class="event_img">
                      <img src="<?php echo base_url(); ?>assets/alumni/batch<?php echo $sd['batch']; ?>/<?php echo $sd['student_image']; ?>" alt="Profile Photo" class="img-fluid">
                      <!-- <div class="file btn btn-lg btn-primary">
                                Change Photo
                                <input type="file" name="file"/>
                            </div> -->
                    </div>
                    <div class="event_content">
                      <h3 class="" id=""><?php echo $sd['student_name']; ?></h3>
                      <h5>
                       <?php echo $sd['passing_year']; ?>
                      </h5>

                    </div>

                  </div>
                  <div class="story_details mb-3">

                   <p><?php echo $sd['success_story']; ?></p>

                  </div>

                  <!-- Academic Details -->

                  <!-- Employment Details -->

                </div>




<!--
                    <div class="table-responsive">
                      <table class="table table-sm ">

                        <tr>
                          <th><label>Name</label></th>
                          <td></td>

                          <th><label>Passing Year</label></th>
                          <td></td>
                        </tr>

                         <tr>
                         <th><label>Venue</label></th>
                         <td><?php echo $sd['venue']; ?></td>

                         <th><label>Event Date</label></th>
                         <td><?php if ($sd['event_date'] != "") echo date("d-m-Y", strtotime($sd['event_date'])) ?></td>
                        </tr>




                      </table>
                    </div> -->
                  </div>