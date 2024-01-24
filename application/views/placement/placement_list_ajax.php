<div class="table-responsive">
  <table class="table table-bordered table-sm table-striped" id="datatablesSimple1">
    <thead>
      <tr>
        <th>#</th>
        <!-- <th>Event Image</th> -->
        <th>Company Name</th>
        <th>Year</th>
        <th>Course Name</th>
        <th>Total Appears</th>
        <th>No. of Placed</th>
        <th>Action</th>
      </tr>
    </thead>
    <tbody>
      <?php $i = 1;
      foreach ($placement_data as $sd) {
        extract($sd); ?>
        <tr>
          <td><?= $i ?></td>
          <td><?= ucwords($name_of_company) ?></td>
          <td><?= $year ?></td>
          <td><?= $course_name ?></td>
          <td><?= $total_appears ?></td>
          <td><?= $no_of_placed ?></td>
          <td>
            <a class="btn btn-sm btn-outline-info ModifyPdetails" data-id="<?php echo $pd_id; ?>" title="Modify Placement Details"> <i class="fa fa-edit"></i> </a>
            <a class="btn btn-sm btn-outline-danger RemovePdetails" data-id="<?php echo $pd_id; ?>" title="Remove Placement Details"> <i class="fa fa-trash"></i> </a>
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
  });
</script>