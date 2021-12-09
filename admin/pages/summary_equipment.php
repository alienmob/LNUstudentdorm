<?php include '../includes/session.php'; ?>
<?php include '../includes/header.php'; ?>
<title>LNU Dormitory | Summary Equipment Reports</title>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

  <?php include '../includes/navbar.php'; ?>
  <?php include '../includes/menubar.php'; ?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
      Summary Equipment Reports
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-user"></i> Admin</a></li>
        <li>Summary Reports</li>
        <li class="active">Summary Equipment Reports</li>
      </ol>
    </section>
    <!-- Main content -->
    <section class="content">
      <?php
        if(isset($_SESSION['error'])){
          echo "<script type='text/javascript'>
                  toastr.error('".$_SESSION['error']."', 'Error!')
                </script>";
          unset($_SESSION['error']);
        }
    
        if(isset($_SESSION['success'])){
          echo "<script type='text/javascript'>
                  toastr.success('".$_SESSION['success']."', 'Success!')
                </script>";
          unset($_SESSION['success']);
        }
      ?>
    </section>   
    <div class="row">
      <div class="col-xs-12 col-sm-12 col-md-12 col-lg-6">
        <div class="box-body">
          <div class="chart">
            <div id="legend" class="text-center"></div>
            <canvas id="timeScale" style="height: 650px"></canvas>
          </div>
        </div>
      </div>
    </div>
  </div>
  <?php include '../includes/footer.php'; ?>
</div>

<!-- Chart Data -->

<?php include '../includes/scripts.php'; ?>
<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/chart.js@3.6.2/dist/chart.min.js"></script>

<!-- End Chart Data -->
<script>
 $.ajax({
    type: 'POST',
    url: '../php/equip/equip_chart_row.php',
    data: {id:id},
    dataType: 'json',
    success: function(response){
    }
});
var timeScale = $('#timeScale').get(0).getContext('2d')
const myChart = new Chart(timeScale, {
  type: 'line',
  data: {
      labels: [<?php foreach($labels as $label) { echo "\"" . $label . '",';} ?>], 
      datasets: [
        {
          label: data,
          data: [12, 19, 3, 5, 2, 3],
          backgroundColor:  'rgba(255, 99, 132, 0.2)',
          borderColor: 'rgba(255, 99, 132, 1)',
          borderWidth: 1
        },
        {
          label: '2nd Data',
          data: [{y: 7, x: '2021-12-08 20:20:36'}, {y: 25, x: '2021-12-08 20:31:43'}],
          backgroundColor:  'rgba(235, 92, 112, 0.2)',
          borderColor: 'rgba(235, 92, 112, 0.7)',
          borderWidth: 1
        },
      ]
  },
  options: {
      scales: {
          y: {
              beginAtZero: true
          }
      }
  }
});
// var myChart = barChart.Bar(data, config)
  

</script>

</body>
</html>
