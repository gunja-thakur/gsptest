

<table class="table table-bordered table-sm table-striped w-100" id="dynamic-table1" style="width:100%;display:none;">
                          <thead>
                            <tr class="bg-success-subtle">
                              <th>#</th>
                              <th>Registration No. </th>
                              <th>Registration Date </th>
                              <th>Student Name </th>
                               <th>Father's Name</th>
                              <th>Gender </th>
                              <th>DOB </th>
                              <th>Mobile</th>
                              <th>Email</th>
                              <th>Category</th>
                              <th>Class(PWD)</th>
                              <th>Qualification</th>
                              <th>Stream/Trade</th>
                              <th>Courses</th>
                              <th>Address</th>
                              <th>Domicile</th>
                            </tr>
                          </thead>
                          <tbody>
                            <?php $i = 1;
                            foreach ($student_data as $sd) {
                              extract($sd); ?>
                              <tr>
                                <td><?= $i ?></td>
                                <td><?php if ($qualification == 1) {
                                      echo "Diploma";
                                    } elseif ($qualification == 2) {
                                      echo "Degree";
                                    } else {
                                      echo "ITI";
                                    } ?>/GSP/2023/<?php echo $enquiry_id; ?></td>
                                    <td><?php if ($sd['reg_date'] != "") echo date("d-m-Y", strtotime($sd['reg_date'])) ?></td>
                                <td><?= ucwords($person_name) ?></td>
                                 <td><?= ucwords($father_name) ?></td>
                                <td><?= $gender ?></td>
                                <td><?= $dob ?></td>
                                <td><?= $mobile ?></td>
                                <td><?= $email ?></td>
                                <td><?= $category ?></td>
                                <td><?php if($class==1) {echo "Yes";} else {echo"No";} ?></td>
                                 <td><?php if ($qualification == 1) {
                                      echo "Diploma";
                                    } elseif ($qualification == 2) {
                                      echo "Degree";
                                    } else {
                                      echo "ITI";
                                    } ?></td>
                                <td><?= $trade_name ?></td>
                                <td><?= $courses_name ?></td>
                                <td><?= $address ?></td>
                                <td><?php if($class==1) {echo "MP";} else {echo"Other State";} ?></td>
                              </tr>

                            <?php $i++;
                            } ?>

                          </tbody>
                        </table>

<div class="row">
<div class="col-md-12">
<button value="Download Excel" onclick="fnExcelReport()" class="btn btn-success btn-sm mb-3 pull_right"> <i class="fa-solid fa-file-csv"></i> Export List </button><!-- <br>
<p class="pull_right">(Click here to Export the Student List)</p> -->
</div>

<div class="col-md-12">
<div class="table-responsive">
                        <table class="table table-bordered table-sm table-striped w-100" id="datatablesSimple1">
                          <thead>
                            <tr class="bg-success-subtle">
                              <th>#</th>
                              <th>Registration No. </th>
                              <th>Registration Date. </th>
                              <th>Student Name </th>
                              <!-- <th>Father's Name</th>
                              <th>Gender </th>
                              <th>DOB </th> -->
                              <th>Mobile</th>
                              <th>Email</th>
                              <th>Category</th>
                              <!--<th>Class(PWD)</th>-->
                             <!--  <th>Qualification</th> -->
                              <th>Stream/Trade</th>
                              <th>Courses</th>
                              <!-- <th>Action</th> -->
                            </tr>
                          </thead>
                          <tbody>
                            <?php $i = 1;
                            foreach ($student_data as $sd) {
                              extract($sd); ?>
                              <tr>
                                <td><?= $i ?></td>
                                <td><?php if ($qualification == 1) {
                                      echo "Diploma";
                                    } elseif ($qualification == 2) {
                                      echo "Degree";
                                    } else {
                                      echo "ITI";
                                    } ?>/GSP/2023/<?php echo $enquiry_id; ?></td>
                                    <td><?php if ($sd['reg_date'] != "") echo date("d-m-Y", strtotime($sd['reg_date'])) ?></td>
                                <td><?= ucwords($person_name) ?></td>
                                <!-- <td><?= ucwords($father_name) ?></td>
                                <td><?= $gender ?></td>
                                <td><?= $dob ?></td> -->
                                <td><?= $mobile ?></td>
                                <td><?= $email ?></td>
                                <td><?= $category ?></td>
                                <!--<td><?php if($class==1) {echo "Yes";} else {echo"No";} ?></td>-->
                                <!-- <td><?php if ($qualification == 1) {
                                      echo "Diploma";
                                    } elseif ($qualification == 2) {
                                      echo "Degree";
                                    } else {
                                      echo "ITI";
                                    } ?></td> -->
                                <td><?= $trade_name ?></td>
                                <td><?= $courses_name ?></td>
                              </tr>

                            <?php $i++;
                            } ?>

                          </tbody>

                        </table>
                      </div>
                </div>
            </div>

                      <script>
$(document).ready(function() {

    // Simple-DataTables
    // https://github.com/fiduswriter/Simple-DataTables/wiki

    const datatablesSimple1 = document.getElementById('datatablesSimple1');
    if (datatablesSimple1) {
        new simpleDatatables.DataTable(datatablesSimple1);
    }

} );
</script>

<script>
function fnExcelReport() {
  var tab_text = "<table border='1px'><tr bgcolor='#ffffff'>";
  //var cr_id=$("#cr_id").val();
  var textRange;
  var j = 0;
  tab = document.getElementById("dynamic-table1"); // id of table
  if (tab.rows.length > 1) {
    for (j = 0; j < tab.rows.length; j++) {
      if (!tab.rows[j].innerHTML.includes("table-detail")) {
        tab_text = tab_text + tab.rows[j].innerHTML + "</tr>";
      }
    }
    tab_text = tab_text.replace(/<a[^>]*>|<\/a>/g, ""); //remove if u want links in your table
    tab_text = tab_text.replace(/<img[^>]*>/gi, ""); // remove if u want images in your table
    tab_text = tab_text.replace(/<input[^>]*>|<\/input>/gi, ""); // reomves input params
    tab_text = tab_text + "</table>";
    var ua = window.navigator.userAgent;
    var msie = ua.indexOf("MSIE ");

    if (msie > 0 || !!navigator.userAgent.match(/Trident.*rv\:11\./)) {
      // If Internet Explorer
      txtArea1.document.open("txt/html", "replace");
      txtArea1.document.write(tab_text);
      txtArea1.document.close();
      txtArea1.focus();
      sa = txtArea1.document.execCommand("SaveAs", true, "download.xls");
    } //other browser not tested on IE 11
    else
      sa = window.open(
        "data:application/vnd.ms-excel," + encodeURIComponent(tab_text)
      );

    return sa;
  }
}
</script>