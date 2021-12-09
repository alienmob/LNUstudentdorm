<?php include '../includes/session.php'; ?>
<?php include '../includes/header.php'; ?>
<title>LNU Dormitory | Summary Room Reports</title>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

  <?php include '../includes/navbar.php'; ?>
  <?php include '../includes/menubar.php'; ?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
      Summary Room Reports
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-user"></i> Admin</a></li>
        <li>Summary Reports</li>
        <li class="active">Summary Room Reports</li>
      </ol>
    </section>

    <div class="row" style="padding: 3rem 1rem;">
      <div class="col-xs-11 col-sm-11 col-md-11 col-lg-11">
        <div class="box-body">
          <div class="chart">
            <div id="legend" class="text-center"></div>
            <canvas id="timeScale" style="height: 660px"></canvas>
          </div>
        </div>
      </div>
    </div>
  </div>
  <?php include '../includes/footer.php'; ?>
</div>

<!-- Chart Data -->

<?php include '../includes/scripts.php'; ?>
<script type="text/javascript" src="../assets/js/chart.min.js"></script>

<!-- End Chart Data -->
<script>
var timeScale = $('#timeScale').get(0).getContext('2d')

const colors = [
  "rgb(255, 153, 0, 0.7)",
  "rgb(32, 18, 95, 0.7)",
  "rgb(0, 0, 0, 0.7)",
  "rgb(68, 124, 134, 0.7)",
  "rgb(99, 22, 22, 0.7)",
  "rgb(63, 15, 15, 0.7)",
  "rgb(89, 103, 168, 0.7)",
  "rgb(26, 83, 69, 0.7)",
  "rgb(185, 183, 23, 0.7)",
  "rgb(248, 8, 0, 0.7)",
]

let chartdata = {
  labels: [],
  datasets: []
}

let flag = false

$.ajax({
    type: 'POST',
    url: '../php/room/room_chart_row.php',
    dataType: 'json',
    success: function(response){
      response.forEach((item, i) => {
        chartdata.labels.push(moment(item.current_date).format('MM-DD-YYYY hh:mm:ss A'))
        if(chartdata.datasets.length == 0){
          chartdata.datasets.push({id: item.id, label: item.room, borderColor: colors[i], backgroundColor: colors[i], data: [{y: item.occupants, x: moment(item.current_date).format('MM-DD-YYYY hh:mm:ss A')}]})
        }
        else {
          flag = false
          chartdata.datasets.forEach((chartData, i) => {
            if(item.id == chartData.id){
              flag = true
              chartdata.datasets[i].data.push({y: item.occupants, x: moment(item.current_date).format('MM-DD-YYYY hh:mm:ss A')})
            }
          })

          if(!flag) {
            chartdata.datasets.push({id: item.id, label: item.room, borderColor: colors[i], backgroundColor: colors[i], data: [{y: item.occupants, x: moment(item.current_date).format('MM-DD-YYYY hh:mm:ss A')}]})
          }
        }
      })
      console.log (chartdata)
      const myChart = new Chart(timeScale, {type: 'line', data: chartdata, options: 
        {
          plugins: {
            title: {
              text: 'Room Records Time Scale',
              display: true
            }
          },
        },
      });
    }
});


</script>

</body>
</html>
