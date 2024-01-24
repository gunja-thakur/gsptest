<?php foreach ($recruiters_details as $rd) {
  extract($rd);
} ?>
<div class="table-responsive">
                    <table class="table table-bordered table-sm ">
                    <tr>
                        <th><label class="form-label">Logging Date</label></th>
                        <td><?php if ($rd['genrated_date'] != "") echo date("d-m-Y", strtotime($rd['genrated_date'])) ?></td>

                          <th><label class="form-label">Registration No.</label></th>
                          <td><?php echo $rd['registration_number']; ?></td>
                      </tr>


                      <tr>
                        <th><label class="form-label">Company Name</label></th>
                        <td><?php echo ucwords($rd['name_of_company']); ?></td>

                        <th><label class="form-label">Year of Inception</label></th>
                        <td><?php echo $rd['year_of_inception']; ?></td>
                      </tr>

                      <tr>
                        <th><label class="form-label">Website</label></th>
                        <td><?php echo $rd['website']; ?></td>

                        <th><label class="form-label">Type of Company</label></th>
                        <td><?php echo $rd['type_title']; ?></td>
                      </tr>
                      <tr>
                        <th><label class="form-label">Nature of Business</label></th>
                        <td><?php echo $rd['business_title']; ?></td>

                        <th><label class="form-label">GST/TIN Number</label></th>
                        <td><?php echo $rd['gst_tin_number']; ?></td>
                      </tr>

                      <tr>
                      <th><label class="form-label">Affiliation</label></th>
                          <?php if ($rd['affiliation'] == 1) { ?>
                            <td><?php echo "In-House HR"; ?></td>
                          <?php } else if ($rd['affiliation'] == 0) { ?>
                            <td><?php echo "RPO (Recruitment Process Outsourcing) personnel"; ?></td>
                        <?php } ?>

                        <th><label class="form-label">In-House HR Name</label></th>
                        <td><?php echo $rd['inhouse_hr_name']; ?></td>
                      </tr>
                      <tr>
                        <th><label class="form-label">Mobile</label></th>
                        <td><?php echo $rd['mobile']; ?></td>

                        <th><label class="form-label">Alternate Mobile</label></th>
                        <td><?php echo $rd['alternate_mobile']; ?></td>
                      </tr>
                      <tr>
                        <th><label class="form-label">Email</label></th>
                        <td><?php echo $rd['email']; ?></td>

                        <th><label class="form-label">Alternate Email</label></th>
                        <td><?php echo $rd['alternate_email']; ?></td>
                      </tr>
                      <tr>
                        <th><label class="form-label">Postal Code</label></th>
                        <td><?php echo $rd['postal_code']; ?></td>

                        <th><label class="form-label">Address</label></th>
                        <td><?php echo $rd['address']; ?></td>
                      </tr>

                      <tr>
                          <th><label class="form-label">Does your company have an office at MP?</label></th>
                          <td> <?php if ($rd['office_iitm_YN'] == 1) { ?>
                            <?php echo "Yes"; ?>
                          <?php } else if ($rd['office_iitm_YN'] == 0) { ?>
                           <?php echo "No"; ?>
                        <?php } ?></td>

                          <th><label class="form-label">Are you a registered company in India?</label></th>
                          <td><?php if ($rd['registerd_company_YN'] == 1) { ?>
                            <?php echo "Yes"; ?>
                          <?php } else if ($rd['registerd_company_YN'] == 0) { ?>
                           <?php echo "No"; ?>
                        <?php } ?></td>
                      </tr>

                      <tr>

                          <th><label class="form-label">Declaration</label></th>
                          <?php if ($rd['diclaration_YN'] == 1) { ?>
                            <td><?php echo "Yes"; ?></td>
                          <?php } else if ($rd['diclaration_YN'] == 0) { ?>
                            <td><?php echo "No"; ?></td>
                        <?php } ?>
                      </tr>



                      <?php if($rd['username'] !='') { ?>
                       <tr>
                        <th colspan="4">
                        <h5 class="h5_heading"> Recruiter's Login Credential</h5></th>
                       </tr>

                      <tr>
                        <th> <label class="form-label">Username</label></th>
                        <td><?php echo $rd['username']; ?></td>

                        <th> <label class="form-label">Password</label></th>
                        <td><?php echo $rd['rec_password']; ?></td>
                      </tr>
                      <?php } ?>
                    </table>
                  </div>