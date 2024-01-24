
                        <table class="table table-bordered table-sm table-striped" id="datatablesSimple1">
                          <thead>
                            <tr>
                              <th>#</th>
                              <th>Company Name</th>
                              <th>Year of Inception </th>
                              <th>Website</th>
                              <th>Company Type</th>
                              <th>Mobile</th>
                              <!-- <th>Email</th> -->
                              <th>Status</th>
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
                                <!-- <td><?= $email ?></td> -->
                                <td><?php if($verification==1) { echo"Verified"; }else {echo"Not Verified";}?></td>

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