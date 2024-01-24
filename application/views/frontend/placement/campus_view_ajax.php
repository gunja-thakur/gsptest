<?php foreach ($campus_data as $sd) {
  extract($sd);
} ?>

<div class="table-responsive">
  <table class="table table-sm ">

    <tr>

      <th>Created By</th>
      <td><?= ucwords($name_of_company) ?></td>

      <th>Title</th>
      <td><?= ucwords($campus_title) ?></td>
      </tr>
      <tr>
      <th>Campus Drive Date </th>
      <td><?php if ($sd['campus_date'] != "") echo date("d-m-Y", strtotime($sd['campus_date'])) ?></td>

      <th>Attachement</th>
      <td><?php if ($sd['campus_attachment'] != '') { ?>
              <a href="<?php echo base_url(); ?>assets/campus/<?php echo $sd['campus_attachment']; ?>" target="_blank"> View Attachement</a>
            <?php } else {
                echo "--";
              } ?>
      </td>
      </tr>

      <tr>
      <th>Campus Drive Details</th>
      <td colspan="3"><textarea class="form-control" rows="1"> <?= $campus_details ?> </textarea></td>
      </tr>
      <tr>
      <th>Event Description</th>
      <td colspan="3"><textarea class="form-control" rows="1"> <?= $campus_description ?> </textarea></td>
      </tr>

      <tr>
      <th>Contact Person</th>
      <td><?= $contact_person ?></td>

      <th>Email</th>
      <td><?= $email ?></td>
      </tr>
      <tr>
      <th>Mobile</th>
      <td><?= $contact_person_mobile ?></td>
      </tr>


    </tr>
  </table>
</div>

