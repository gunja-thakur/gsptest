<?php foreach ($chart_data as $pd) {
  /*  echo '[' . $pd['Totle_VerfiedAlumni'] . ',' . $pd['Totle_PendingAlumni'] . ',' . $pd['Totle_NotableAlumni'] . ',' . $pd['Total_ProfileUpdated'] . '],'; */
}
?>

<!DOCTYPE html>
<html lang="en">

<!---Head Start--->

<head>
  <?php include(APPPATH . 'views/include/head.php'); ?>
</head>

<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>

<script type="text/javascript">
  // Load google charts
  google.charts.load('current', {
    'packages': ['corechart']
  });
  google.charts.setOnLoadCallback(drawChart);

  // Draw the chart and set the chart values
  function drawChart() {
    var data = google.visualization.arrayToDataTable([
      ['Title', 'Total Alumni'],
      ['Verified Alumni', <?php echo $pd['Totle_VerfiedAlumni']; ?>],
      ['Pending for Verification', <?php echo $pd['Totle_PendingAlumni']; ?>],
      ['Notable Alumni', <?php echo $pd['Totle_NotableAlumni']; ?>],
      ['Profile Updated', <?php echo $pd['Total_ProfileUpdated']; ?>]

    ]);

    // Optional; add a title and set the width and height of the chart
    var options = {
      'title': 'Alumni Status',
      'width': 500,
      'height': 300
    };

    // Display the chart inside the <div> element with id="piechart"
    var chart = new google.visualization.PieChart(document.getElementById('piechart'));
    chart.draw(data, options);
  }
</script>
<script type="text/javascript">
  /* google.charts.load('current', {'packages':['corechart']});
           google.charts.setOnLoadCallback(drawChart);
           function drawChart()
           {
                var data = google.visualization.arrayToDataTable([
                          ['Total','Verified Alumni', 'Pending for Verification','Notable Alumni','Profile Updated'],

                          <?php foreach ($chart_data as $pd) {
                            $checkstatus = "Total Alumni";
                            //  echo ' [' . $checkstatus .' ,' . $pd['Totle_VerfiedAlumni'] . ',' . $pd['Totle_PendingAlumni'] . ',' . $pd['Totle_NotableAlumni'] . ',' . $pd['Total_ProfileUpdated'] . '] ,';
                          }  ?>
                     ]);
                var options = {
                      title: 'Total Alumni',
                     // is3D:true,
                      pieHole: 0.4 ,
                      width:500


                     };
                var chart = new google.visualization.PieChart(document.getElementById('piechart'));
                chart.draw(data, options);
           } */
</script>
<!-- -----------------BAR Chart------------------------- -->

<!---Head Start--->

<body class="sb-nav-fixed">
  <!---Navigation Start--->

  <?php include(APPPATH . 'views/include/header.php'); ?>
  <!---Navigation End--->

  <div id="layoutSidenav">

    <!---Sidebar Start--->

    <?php include(APPPATH . 'views/include/sidebar.php'); ?>
    <!---Sidebar End--->

    <div id="layoutSidenav_content">
      <main>
        <div class="container-fluid px-4">
          <div class="row mb-5">
            <div class="col-lg-12">
              <h2>Alumni Dashboard</h2>

              <form action="" method="post" enctype="multipart/form-data" class="form-horizontal">

                <div class="row form-group">
                  <div class="col-12 col-sm-6 col-md-4 col-lg-12">

                    <div class="radio mt-2">
                      <label><input type="radio" name="tfilter" id="tfilter" value="2"> Batch Wise</label>
                      &nbsp;&nbsp;
                      <label><input type="radio" name="tfilter" id="tfilter" value="3"> Admission Year</label>

                    </div>
                  </div>
                </div>
                <hr>

                <div class="row form-group">
                  <div class="col-md-3 col-sm-6 mb-3 btch">
                    <label for="ForSelect" class="form-label">Batch<!-- <span class="text-danger">*</span> --> </label>
                    <select class="form-select" aria-label="Default select example" name="batch" id="batch">
                      <option value="0">Select Batch </option>
                      <option value="1">All Batch </option>
                      <?php foreach ($batch_data as $bd) { ?>
                        <option value="<?php echo $bd['batch']; ?>" id="<?php echo $bd['passing_year']; ?>">Batch <?php echo $bd['batch']; ?> - <?php echo $bd['passing_year']; ?></option>
                      <?php } ?>
                    </select>
                    <p id="batch_error" class="text-danger"></p>
                  </div>

                  <div class="col-md-3 col-sm-6 mb-3 yer">
                    <label for="ForSelect" class="form-label">Year<!-- <span class="text-danger">*</span> --> </label>
                    <select class="form-select" aria-label="Default select example" name="passing_year" id="passing_year">
                      <option value="0">Select Year </option>
                      <option value="1">All Years </option>
                      <option value="2023">2023</option>
                      <option value="2022">2022</option>
                      <option value="2021">2021</option>
                      <option value="2020">2020</option>
                    </select>
                    <p id="passing_year_error" class="text-danger"></p>
                  </div>
                  <!-- <div class="col-md-3 col-sm-6 srch">
                    <label></label>
                    <button type="submit" class="btn btn-secondary btn-sm" name="search" id="RecordSearch" style="margin-top:30px;">Search</button>
                  </div> -->

                </div>
              </form>
            </div>




            <div class="stdajaxshow">

              <?php include(APPPATH . 'views/admin/alumni_dashboard_counter_ajax.php'); ?>

            </div>





          </div>

        </div>
      </main>

      <!---------------Modal------------------>
      <button type="hidden" id="click_model" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop" style="display:none;">
                View Details
              </button>

              <!-- Modal -->
              <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-xl">
                  <div class="modal-content">
                    <div class="modal-header bg-primary-subtle">
                      <h1 class="modal-title fs-5" id="staticBackdropLabel">Alumni List</h1>
                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body datashow">

                    </div>
                    <div class="modal-footer">

                    </div>
                  </div>
                </div>
              </div>
              <!-- Model Start -->


      <!-- Footer -->
      <?php include(APPPATH . 'views/include/footer.php'); ?>
      <!-- Footer -->
    </div>
  </div>

  <!-- back to top start -->

  <!-- Footer Script -->

  <?php include(APPPATH . 'views/include/footer_script.php'); ?>
  <!-- Footer Script End -->
  <script src="<?php echo base_url(); ?>assets/js/apexcharts.min.js" type="text/javascript"></script>

  <!-- Alumni Dashboard JS -->
  <?php include(APPPATH . 'views/admin/alumni_dash_js.php'); ?>
  <!-- Alumni Dashboard JS -->
  <script>
    var pdata = '<?php echo $piechart_data; ?>';
    //alert(pdata);

    var cData = JSON.parse(pdata);
    // var obj = jQuery.parseJSON( '<?php echo $piechart_data; ?>' );
    /*
    var options={series:[parseInt(cData[0].Totle_VerfiedAlumni), parseInt(cData[0].Totle_PendingAlumni),parseInt(cData[0].Totle_NotableAlumni),parseInt(cData[0].Total_ProfileUpdated)],labels:["Total Verified","Total Pending","Total Notable Alumni", "Total Profile Updated"],chart:{type:"donut",height:350},plotOptions:{pie:{size:100,offsetX:0,offsetY:0,donut:{size:"77%",labels:{show:!0,name:{show:!0,fontSize:"18px",offsetY:-5},value:{show:!0,fontSize:"24px",color:"#343a40",fontWeight:500,offsetY:10,formatter:function(e){return""+e}},total:{show:!0,fontSize:"16px",label:"Total Value",color:"#9599ad",fontWeight:400,formatter:function(e){return""+e.globals.seriesTotals.reduce(function(e,o){return e+o},0)}}}}}},dataLabels:{enabled:!1},legend:{show:!0,position:"bottom"},yaxis:{labels:{formatter:function(e){return""+e}}},stroke:{lineCap:"round",width:2},colors:["#0c768a","#38c786","#05bf68", "#f36e1a"]};(chart=new ApexCharts(document.querySelector("#donut-chart"),options)).render(); */

    // var options={series:[65,7,24,4],labels:["Total Pending","Total Verified","Total Not Verified", "Total Notable Alumni"],chart:{type:"donut",height:350},plotOptions:{pie:{size:100,offsetX:0,offsetY:0,donut:{size:"77%",labels:{show:!0,name:{show:!0,fontSize:"18px",offsetY:-5},value:{show:!0,fontSize:"24px",color:"#343a40",fontWeight:500,offsetY:10,formatter:function(e){return""+e}},total:{show:!0,fontSize:"16px",label:"Total Value",color:"#9599ad",fontWeight:400,formatter:function(e){return""+e.globals.seriesTotals.reduce(function(e,o){return e+o},0)}}}}}},dataLabels:{enabled:!1},legend:{show:!0,position:"bottom"},yaxis:{labels:{formatter:function(e){return""+e}}},stroke:{lineCap:"round",width:2},colors:["#0c768a","#38c786","#05bf68", "#f36e1a"]};(chart=new ApexCharts(document.querySelector("#donut-chart"),options)).render();
  </script>

<script>
    $(document).on('click', '.ViewRc', function() {

        var rc_status=$(this).attr("data-id");

        //alert(rc_status);return false;

        var cntid = $(this)[0].id;
        const myArray = cntid.split("@");
        var batch = myArray[0];
        var passing_year = myArray[1];
        //var sts_count = myArray[2];
        //alert(rc_status + "," + batch + "," + passing_year);return false;

        $.ajax({
            url: "<?php echo base_url(); ?>Alumni/AlumniCountList_Ajax",
            method: "POST",
            data: {
                "rc_status": rc_status,
                "batch": batch,
                "passing_year": passing_year
            },

            success: function(res) {

                //alert(res);return false;

                $(".datashow").html(res);
                $("#click_model").click();

            }
        });

    });
</script>


</body>

</html>