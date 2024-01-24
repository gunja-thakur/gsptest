<?php foreach ($recruiter_countdata as $pd) { extract($pd);} ?>

<?php if (!empty($recruiter_countdata)) { ?>
  <div class="row">

    <div class="col-lg-12 mb-3">
      <h4 class="mb-3"><i class="bi bi-columns-gap"></i> Recruiter's Status </h4>
      <div class="row onalign_view">
        <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 mb-3">
          <div class="shower_box">
            <div class="inner_flex">
              <div class="shower_icon"><i class="fa-solid fa-people-group"></i></div>
              <div class="shower_head">
                <h4>Recruiter's Registration</h4>
              </div>
            </div>
            <div class="shower_num ViewRc" id="">
              <h6><span class="odometer "  data-count="<?php echo $total_recruiters; ?>">00 </span></h6>
            </div>
          </div>
        </div>

        <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 mb-3">
          <div class="shower_box">
            <div class="inner_flex">
              <div class="shower_icon"><i class="fa-solid fa-user-check"></i></div>
              <div class="shower_head">
                <h4>Verified Recruiters</h4>
              </div>
            </div>
            <div class="shower_num ViewRc" id="1">
              <h6><span class="odometer" data-count="<?php echo $Totle_VerfiedRecruiter; ?>">00 </span></h6>
            </div>
          </div>
        </div>
        <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 mb-3">
          <div class="shower_box">
            <div class="inner_flex">
              <div class="shower_icon"><i class="fa-solid fa-user-xmark"></i></div>
              <div class="shower_head">
                <h4>Not Verified Recruiters</h4>
              </div>
            </div>
            <div class="shower_num ViewRc" id="2">
              <h6><span class="odometer" data-count="<?php echo $Totle_NotVerifiedRecruiter; ?>">00 </span></h6>
            </div>
          </div>
        </div>
        <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 mb-3">
          <div class="shower_box">
            <div class="inner_flex">
              <div class="shower_icon"><i class="fa-solid fa-hourglass-half"></i></div>
              <div class="shower_head">
                <h4>Pending For Verification</h4>
              </div>
            </div>
            <div class="shower_num ViewRc" id="0">
              <h6><span class="odometer" data-count="<?php echo $Totle_PendingRecruiter ; ?>">00 </span></h6>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="col-md-6 col-lg-6">

      <aside class="profile-nav alt">
        <section class="card">
          <div id="piechart"></div>

        </section>
      </aside>

    </div>

    <?php $i = 1;
    foreach ($recruiter_countdata as $ad) {
      extract($ad); ?>
      <!-- <div class="col-lg-3 mb-1">
        <div class="counter_board ">
          <div class="icon_title">
            <i class="bi bi-collection"></i>Total Counts
          </div>
          <table class="table">
            <tbody>
              <tr>
                <th scope="col">Total Recruiter</th>
                <td> <span class="num_bg num_bg_c1 ViewRc" id=""> <?php echo $total_recruiters; ?> </span> </td>
              </tr>
              <tr>
                <th scope="col">Verified</th>
                <td><span class="num_bg num_bg_c3 ViewRc" id="1"> <?php echo $Totle_VerfiedRecruiter; ?> </span> </td>
              </tr>
              <tr>
                <th scope="col">Pending</th>
                <td><span class="num_bg num_bg_c2 ViewRc" id="0"> <?php echo $Totle_PendingRecruiter; ?> </span> </td>
              </tr>

              <tr>
                <th scope="col"> Not Verified</th>
                <td><span class="num_bg num_bg_c4 ViewRc" id="2"> <?php echo $Totle_NotVerifiedRecruiter; ?> </span> </td>
              </tr>

            </tbody>
          </table>
        </div>
      </div> -->
    <?php $i++;
    } ?>

    <!-- <div class="col-lg-3 mb-5">
              <div class="counter_board ">
                <div class="icon_title">
                  <i class="bi bi-collection"></i> Total Alumni
                </div>
                <div id="donut-chart" class="apex-charts"></div>
              </div>
            </div> -->
  </div>
<?php } else { ?>
  <div class='row'>
    <div class="col-lg-12">
      <h5> Data Not Found!</h5>
    </div>
  </div>
<?php } ?>

<script src="<?php echo base_url(); ?>assets/js/apexcharts.min.js" type="text/javascript"></script>
<script>
  var pdata = '<?php echo $piechart_data; ?>';
  //alert(pdata);
  var cData = JSON.parse(pdata);

  // var obj = jQuery.parseJSON( '<?php echo $piechart_data; ?>' );

  var options = {
    series: [parseInt(cData[0].Totle_VerfiedAlumni), parseInt(cData[0].Totle_PendingAlumni), parseInt(cData[0].Totle_NotableAlumni), parseInt(cData[0].Total_ProfileUpdated)],
    labels: ["Total Verified", "Total Pending", "Total Notable Alumni", "Total Profile Updated"],
    chart: {
      type: "donut",
      height: 350
    },
    plotOptions: {
      pie: {
        size: 100,
        offsetX: 0,
        offsetY: 0,
        donut: {
          size: "77%",
          labels: {
            show: !0,
            name: {
              show: !0,
              fontSize: "18px",
              offsetY: -5
            },
            value: {
              show: !0,
              fontSize: "24px",
              color: "#343a40",
              fontWeight: 500,
              offsetY: 10,
              formatter: function(e) {
                return "" + e
              }
            },
            total: {
              show: !0,
              fontSize: "16px",
              label: "Total Value",
              color: "#9599ad",
              fontWeight: 400,
              formatter: function(e) {
                return "" + e.globals.seriesTotals.reduce(function(e, o) {
                  return e + o
                }, 0)
              }
            }
          }
        }
      }
    },
    dataLabels: {
      enabled: !1
    },
    legend: {
      show: !0,
      position: "bottom"
    },
    yaxis: {
      labels: {
        formatter: function(e) {
          return "" + e
        }
      }
    },
    stroke: {
      lineCap: "round",
      width: 2
    },
    colors: ["#4db714", "#fcb315", "#f36e1a", "#7788fc"]
  };
  (chart = new ApexCharts(document.querySelector("#donut-chart"), options)).render();

  // var options={series:[65,7,24,4],labels:["Total Pending","Total Verified","Total Not Verified", "Total Notable Alumni"],chart:{type:"donut",height:350},plotOptions:{pie:{size:100,offsetX:0,offsetY:0,donut:{size:"77%",labels:{show:!0,name:{show:!0,fontSize:"18px",offsetY:-5},value:{show:!0,fontSize:"24px",color:"#343a40",fontWeight:500,offsetY:10,formatter:function(e){return""+e}},total:{show:!0,fontSize:"16px",label:"Total Value",color:"#9599ad",fontWeight:400,formatter:function(e){return""+e.globals.seriesTotals.reduce(function(e,o){return e+o},0)}}}}}},dataLabels:{enabled:!1},legend:{show:!0,position:"bottom"},yaxis:{labels:{formatter:function(e){return""+e}}},stroke:{lineCap:"round",width:2},colors:["#0c768a","#38c786","#05bf68", "#f36e1a"]};(chart=new ApexCharts(document.querySelector("#donut-chart"),options)).render();
</script>

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
      ['Title', 'Total Recruiters'],
      ['Verified ', <?php echo $pd['Totle_VerfiedRecruiter']; ?>],
      ['Not Verified', <?php echo $pd['Totle_NotVerifiedRecruiter']; ?>],
      ['Pending for Verification', <?php echo $pd['Totle_PendingRecruiter']; ?>]


    ]);

    // Optional; add a title and set the width and height of the chart
    var options = {
      'title': 'Total Recruiters',
      'width': 500,
      'height': 300
    };

    // Display the chart inside the <div> element with id="piechart"
    var chart = new google.visualization.PieChart(document.getElementById('piechart'));
    chart.draw(data, options);
  }
</script>