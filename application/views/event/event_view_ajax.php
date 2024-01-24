<?php foreach ($event_data as $sd) {
  extract($sd);
} ?>
<div class="col-md-12">

<div class="story_modal_box">
                  <div class="event_flex">
                    <div class="event_img">
                      <img src="<?php echo base_url(); ?>assets/events/<?php echo $sd['event_invite']; ?>" alt="Profile Photo" class="img-fluid">

                    </div>
                    <div class="event_content">
                      <h3 class="" id=""><?php echo $sd['event_title']; ?></h3>
                      <h5>
                      Event Published : <?php if ($sd['published_date'] != "") echo date("d-m-Y", strtotime($sd['published_date'])) ?>
                      </h5>

                    </div>

                  </div>

                  <!-- Employment Details -->



                    <div class="table-responsive">
                      <table class="table table-sm ">

                        <!-- <tr>
                          <th><label>Event Title</label></th>
                          <td><?php echo $sd['event_title']; ?></td>

                          <th><label>Event Published</label></th>
                          <td><?php if ($sd['published_date'] != "") echo date("d-m-Y", strtotime($sd['published_date'])) ?></td>
                        </tr> -->

                        <tr>
                         <th><label>Venue</label></th>
                         <td><?php echo $sd['venue']; ?></td>

                         <th><label>Event Date</label></th>
                         <td><?php if ($sd['event_date'] != "") echo date("d-m-Y", strtotime($sd['event_date'])) ?></td>
                        </tr>

                        <tr>
                         <th><label>Broucher</label></th>
                         <td> <a href="<?php echo base_url()?>assets/events/<?php echo $sd['upload_brochure']; ?>" target="_blank" download> View Broucher</a> </td>
                        </tr>

                        <tr>
                          <th><label>Description</label></th>
                          <td colspan="3"><?php echo $sd['event_description']; ?></td>
                        </tr>
                      </table>
                    </div>
                  </div>
                  </div>