<div class="table-responsive">
                        <table class="table table-bordered table-sm table-striped" id="datatablesSimple1">
                          <thead>
                            <tr>
                              <th>#</th>
                              <th>Company Name</th>
                              <th>Year of Inception </th>
                              <th>Website</th>
                              <th>Company Type</th>
                              <th>Mobile</th>
                              <th>Email</th>
                              <th>Status</th>
                              <th>Verification</th>
                              <th>Action</th>
                            </tr>
                          </thead>
                          <tbody>
                            <?php $i = 1;
                            foreach ($recruiters_data as $sd) {
                              extract($sd); ?>
                              <tr>
                                <td><?= $i ?></td>
                                <td><?= ucwords($name_of_company) ?></td>
                                <td><?= $year_of_inception ?></td>
                                <td><?= $website ?></td>
                                <td><?= $type_title ?></td>
                                <td><?= $mobile ?></td>
                                <td><?= $email ?></td>
                                <td>
                                <?php  if($verification==0) {?>
                                <span class="badge bg-opacity-75 bg-warning bg-text-warning">Pending </span>
                                <?php } else if($verification==1){?>
                                <span class="badge bg-opacity-75 bg-success bg-text-success">Verified </span>
                                <?php } else if($verification==2) {?>
                                <span class="badge bg-opacity-75 bg-danger bg-text-danger">Not Verified </span>
                                <?php } ?>
                                </td>

                                <td>
                                <?php if($verification==1) {  ?>
                                <a  class="btn btn-sm btn-outline-success"><i class="fa fa-user-check"></i> </a>

                                <?php } elseif($verification==0) { ?>
                                <a  class="btn btn-sm btn-outline-danger VerifyRecruiter" data-id="1" id="<?php echo $rm_id;?>"  title="Verify Recruiter"><i class="fa fa-user-xmark"></i> </a>

                                <?php } ?>
                              </td>

                                <td>
                                <a class="btn btn-sm btn-outline-success view_recruiter" data-id="<?php echo $rm_id;?>" title="View Details"> <i class="fa fa-eye"></i> </a>
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