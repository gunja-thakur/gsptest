<div class="row">
  <div class="col-lg-12">
    <div class="search_result_table">
      <div class="table-responsive">

        <table class="table table-bordered table-striped" id="datatablesSimple1">
          <thead>
            <tr class="custom_thead_bg">
              <th>#</th>
              <th>Image</th>

              <th>Enrollment No. </th>

              <th>Student Name </th>

              <th>Batch</th>

              <th>Passing Year</th>

              <th>Mobile</th>

              <th>Email</th>

              <th>Course</th>



            </tr>

          </thead>

          <tbody>

            <?php $i = 1;

            foreach ($student_data as $sd) {

              extract($sd); ?>

              <tr>

                <th><?= $i ?></th>

                <td><img src="<?php echo base_url(); ?>assets/alumni/batch<?php echo $sd['batch']; ?>/<?php echo $sd['student_image']; ?>" style="height:80px;width:80px;    border-radius: 5px; border: 1px solid #05bf68;" alt="" class="img-fluid" /></td>

                <td><?= $enrollment_no ?></td>

                <td><?= ucwords($student_name) ?></td>

                <td><?= $batch ?></td>

                <td><?= $passing_year ?></td>

                <td><?= $mobile ?></td>

                <td><?= $email ?></td>

                <td><?= $course ?></td>

                <!-- <td><?php if ($verified == 1) {
                            echo "Verified";
                          } else {
                            echo "Not Verified";
                          } ?></td> -->

              </tr>



            <?php $i++;
            } ?>



          </tbody>



        </table>

      </div>
    </div>
  </div>
</div>
<script>
  $(document).ready(function() {

    const datatablesSimple1 = document.getElementById('datatablesSimple1');

    if (datatablesSimple1) {

      new simpleDatatables.DataTable(datatablesSimple1);

    }

  });
</script>