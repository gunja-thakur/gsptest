<?php foreach ($chart_data as $pd) ?>

<?php if (!empty($alumnicounter_data)) { ?>
  <div class="row">

    <div class="col-md-6 col-lg-6">

      <aside class="profile-nav alt">
        <section class="card">
          <div id="piechart"></div>

        </section>
      </aside>

    </div>

    <?php $i = 1;
    foreach ($alumnicounter_data as $ad) {
      extract($ad); ?>
      <div class="col-lg-3 mb-1">
        <div class="counter_board ctheme_<?php echo $batch; ?>">
          <div class="icon_title">
            <i class="bi bi-collection"></i> Batch - <?php echo $batch; ?> (<?php echo $passing_year; ?>)
          </div>
          <table class="table">
            <tbody>
              <tr>
                <th scope="col">Total Alumni</th>
                <td> <span class="num_bg num_bg_c1"> <?php echo $total_alumni; ?> </span> </td>
              </tr>
              <tr>
                <th scope="col">Verified</th>
                <td><span class="num_bg num_bg_c3"> <?php echo $Totle_VerfiedAlumni; ?> </span> </td>
              </tr>
              <tr>
                <th scope="col">Pending</th>
                <td><span class="num_bg num_bg_c2"> <?php echo $Totle_PendingAlumni; ?> </span> </td>
              </tr>

              <tr>
                <th scope="col">Profile Updated</th>
                <td><span class="num_bg num_bg_c4"> <?php echo $Total_ProfileUpdated; ?> </span> </td>
              </tr>
              <tr>
                <th scope="col">Notable </th>
                <td><span class="num_bg num_bg_c5"> <?php echo $Totle_NotableAlumni; ?> </span> </td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
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