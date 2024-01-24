<div class="table-responsive">
                        <table class="table table-bordered table-sm table-striped" id="datatablesSimple1">
                          <thead>
                            <tr class="bg-primary-subtle">
                              <th>#</th>
                              <th>Enrollment No. </th>
                              <th>Student Name </th>
                              <!-- <th>Batch</th> -->
                              <th>Passing Year</th>
                              <th>Mobile</th>
                              <th>Email</th>
                              <!-- <th>Course</th> -->
                              <!-- <th>Status</th> -->
                              <!-- <th>Verification</th> -->
                              <th>View Profile</th>
                              <th>Verification</th>
                              <th>Mark as Notable</th>
                              <th>Testimonial</th>

                            </tr>
                          </thead>
                          <tbody>
                            <?php $i = 1;
                            foreach ($student_data as $sd) {
                              extract($sd); ?>
                              <tr>
                                <td><?= $i ?></td>
                                <td><?= $enrollment_no ?></td>
                                <td><?= ucwords($student_name) ?></td>
                                <!-- <td><?= $batch ?></td> -->
                                <td><?= $passing_year ?> (Batch - <?= $batch ?> )</td>
                                <td><?= $mobile ?></td>
                                <td><?= $email ?></td>
                                <!-- <td><?= $course ?></td> -->
                                <!-- <td><?php if($verified==1) { echo"Verified"; }else {echo"Not Verified";}?></td> -->

                                <!-- <td>
                                <?php if($verified==1) {  ?>
                                <a  class="btn btn-sm btn-outline-success" data-id="0" id="<?php echo $student_id;?>" title="Verified"><i class="fa fa-check-circle"></i> </a>
                                <?php } elseif($verified==0) { ?>
                                <a  class="btn btn-sm btn-outline-danger VerifyAlumni" data-id="1" id="<?php echo $student_id;?>"  title="Not Verified"><i class="fa fa-cancel"></i> </a>
                                <?php } ?>
                              </td> -->

                              <td>
                                <a href="<?php echo base_url(); ?>Alumni/ViewDetails/<?php echo $student_id?>" class="btn btn-sm btn-outline-success" title="View Details"> <i class="fa fa-eye"></i> </a>
                              </td>

                              <td>
                              <a  class="btn btn-sm btn-outline-danger TakeAction" data-id="1" id="<?php echo $student_id;?>"  title="Take Action"><i class="fa fa-edit"></i> </a>
                              </td>

                              <!-- <td>
                              <a  class="btn btn-sm btn-outline-danger VerifyNotable" data-id="1" id="<?php echo $student_id;?>"  title="Take Action"><i class="fa fa-cancel"></i> </a>
                              </td> -->

                                <td>
                                <?php if($verified==1) { if($notable_yn==1) {  ?>
                                <a  class="btn btn-sm btn-outline-success VerifyNotable" data-id="0" id="<?php echo $student_id;?>" title="Notable Alumni"><i class="fa fa-user-check"></i> </a>
                                <?php } elseif($notable_yn==0 OR $notable_yn==2) { ?>
                                  <a  class="btn btn-sm btn-outline-danger VerifyNotable" data-id="1" id="<?php echo $student_id;?>"  title="Take Action"><i class="fa fa-user-xmark"></i> </a>
                                <?php } }?>
                              </td>

                              <td>
                              <?php if($verified==1 and $tm_id!='') {  ?>
                              <a  class="btn btn-sm btn-outline-danger VerifiedTestimoni" data-id="1" id="<?php echo $student_id;?>"  title="Testimonial Verification"> <?php if($show_on_front==1) { ?><i class="fa fa-check-circle"> </i> <?php } else {  ?><i class="fa fa-circle-xmark"></i> <?php } ?></a>
                              <?php } ?>
                              </td>





                              </tr>

                            <?php $i++;
                            } ?>

                          </tbody>

                        </table>
                      </div>

                      <script>
$(document).ready(function() {
    const datatablesSimple1 = document.getElementById('datatablesSimple1');
    if (datatablesSimple1) {
        new simpleDatatables.DataTable(datatablesSimple1);
    }
} );
</script>