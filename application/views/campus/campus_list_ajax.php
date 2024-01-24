<div class="table-responsive">
  <table class="table table-bordered table-sm table-striped" id="datatablesSimple1">
    <thead>
      <tr>
        <th>#</th>
        <th>Company Name</th>
        <th>Title</th>
        <th>Campus Drive Date </th>
        <th>Campus Venue</th>
        <!-- <th>Event Description</th> -->
        <th>Contact Person</th>
        <!-- <th>Email</th>
        <th>Mobile</th> -->
        <th>Attachement</th>
        <th>Status</th>
        <th>Action</th>
      </tr>
    </thead>
    <tbody>
      <?php $i = 1;
      foreach ($campus_data as $sd) {
        extract($sd); ?>
        <tr>
          <td><?= $i ?></td>
          <td><?= ucwords($name_of_company) ?></td>
          <td><?= ucwords($campus_title) ?></td>
          <td><?php if ($sd['campus_date'] != "") echo date("d-m-Y", strtotime($sd['campus_date'])) ?></td>

          <td><?= $campus_details ?></td>
          <!-- <td><textarea class="form-control"><?= $campus_description ?></textarea></td> -->
          <td><?= $contact_person ?></td>
          <!-- <td><?= $email ?></td>
          <td><?= $contact_person_mobile ?></td> -->
          <td><?php if ($sd['campus_attachment'] != '') { ?>
              <a href="<?php echo base_url(); ?>assets/campus/<?php echo $sd['campus_attachment']; ?>" target="_blank"> View Attachement</a>
            <?php } else {
                echo "--";
              } ?>
          </td>
          <td>
            <?php if ($verification_yn == 0) { ?>
              <span class="badge bg-opacity-75 bg-warning bg-text-warning">Pending </span>
            <?php } else if ($verification_yn == 1) { ?>
              <span class="badge bg-opacity-75 bg-success bg-text-success">Verified </span>
            <?php } else if ($verification_yn == 2) { ?>
              <span class="badge bg-opacity-75 bg-danger bg-text-danger">Not Verified </span>
            <?php } ?>
          </td>
          <td>
            <?php if ($this->session->userdata['user_role'] == 7 and  $verification_yn == 0) { ?>
              <a class="btn btn-sm btn-outline-info ModifyCampus" data-id="<?php echo $cm_id; ?>" title="Modify Campus"> <i class="fa fa-edit"></i> </a>

            <?php } ?>
            <a class="btn btn-sm btn-outline-success ViewCampus" data-id="<?php echo $cm_id; ?>" id="<?php echo $rm_id; ?>" title="View Campus Details"> <i class="fa fa-eye"></i> </a>
            <?php if ($verification_yn != 1) { ?>
              <a class="btn btn-sm btn-outline-danger RemoveCampus" data-id="<?php echo $cm_id; ?>" title="Remove Campus"> <i class="fa fa-trash"></i> </a>
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
  });
</script>