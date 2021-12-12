<?php include '../includes/session.php'; ?>
<?php 
  include '../includes/timezone.php'; 
  $today = date('Y-m-d');
  $year = date('Y');
  if(isset($_GET['year'])){
    $year = $_GET['year'];
  }
?>

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
      Borrowed & Returned Equipment Report
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-user"></i> Admin</a></li>
        <li>Summary Reports</li>
        <li class="active">Borrowed & Returned Summary Report</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
    <style>
.fc-event-main {
	cursor: pointer !important;
}
</style>
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

      if(isset($_SESSION['login'])){
        echo "<script type='text/javascript'>
                toastr.info('".$_SESSION['login']."', 'Welcome!')
              </script>";
        unset($_SESSION['login']);
      }
  
      ?>



      <div class="row">

        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
          <div class="box">
            <div class="box-header with-border">
              <h3 class="box-title">Borrowed & Returned Monthly Report</h3>
              <div class="box-tools">
                <form class="form-inline">
                  <div class="form-group">
                    <label>Select Year: </label>
                    <select class="form-control input-sm" id="select_year">
                      <?php
                        for($i=2021; $i<=2030; $i++){
                          $selected = ($i==$year)?'selected':'';
                          echo "
                            <option value='".$i."' ".$selected.">".$i."</option>
                          ";
                        }
                      ?>
                    </select>
                  </div>
                </form>
              </div>
            </div>
            <div class="box-body">
              <div class="chart">
                <br>
                <div id="legend" class="text-center"></div>
                <canvas id="barChart" style="height:550px"></canvas>
              </div>
            </div>
          </div>
        </div>

        
      </div>
      


      </section>
      <!-- right col -->
    </div>
  	<?php include '../includes/footer.php'; ?>

</div>
<!-- ./wrapper -->

<!-- Chart Data -->
<?php
  $and = 'AND YEAR(date) = '.$year;
  $months = array();
  $return = array();
  $borrow = array();
  for( $m = 1; $m <= 12; $m++ ) {
    $sql = "SELECT * FROM returns WHERE MONTH(date_return) = '$m' AND YEAR(date_return) = '$year'";
    $rquery = $conn->query($sql);
    array_push($return, $rquery->num_rows);

    $sql = "SELECT * FROM borrow WHERE MONTH(date_borrow) = '$m' AND YEAR(date_borrow) = '$year'";
    $bquery = $conn->query($sql);
    array_push($borrow, $bquery->num_rows);

    $num = str_pad( $m, 2, 0, STR_PAD_LEFT );
    $month =  date('M', mktime(0, 0, 0, $m, 1));
    array_push($months, $month);
  }

  $months = json_encode($months);
  $return = json_encode($return);
  $borrow = json_encode($borrow);

?>
<!-- End Chart Data -->





<?php include '../includes/scripts.php'; ?>
<script>
$(function(){
  var barChartCanvas = $('#barChart').get(0).getContext('2d')
  var barChart = new Chart(barChartCanvas)
  var barChartData = {
    labels  : <?php echo $months; ?>,
    datasets: [
      {
        label               : 'Borrowed',
        fillColor           : 'rgba(34, 34, 133, 1)',
        strokeColor         : 'rgba(34, 34, 133, 1)',
        pointColor          : 'rgba(34, 34, 133, 1)',
        pointStrokeColor    : '#c1c7d1',
        pointHighlightFill  : '#fff',
        pointHighlightStroke: 'rgba(34, 34, 133, 1)',
        data                : <?php echo $borrow; ?>
      },
      {
        label               : 'Returned',
        fillColor           : 'rgba(60,141,188,0.9)',
        strokeColor         : 'rgba(60,141,188,0.8)',
        pointColor          : '#3b8bba',
        pointStrokeColor    : 'rgba(60,141,188,1)',
        pointHighlightFill  : '#fff',
        pointHighlightStroke: 'rgba(60,141,188,1)',
        data                : <?php echo $return; ?>
      }
    ]
  }
  barChartData.datasets[1].fillColor   = '#fbb140'
  barChartData.datasets[1].strokeColor = '#fbb140'
  barChartData.datasets[1].pointColor  = '#fbb140'
  var barChartOptions                  = {
    //Boolean - Whether the scale should start at zero, or an order of magnitude down from the lowest value
    scaleBeginAtZero        : true,
    //Boolean - Whether grid lines are shown across the chart
    scaleShowGridLines      : true,
    //String - Colour of the grid lines
    scaleGridLineColor      : 'rgba(0,0,0,.05)',
    //Number - Width of the grid lines
    scaleGridLineWidth      : 1,
    //Boolean - Whether to show horizontal lines (except X axis)
    scaleShowHorizontalLines: true,
    //Boolean - Whether to show vertical lines (except Y axis)
    scaleShowVerticalLines  : true,
    //Boolean - If there is a stroke on each bar
    barShowStroke           : true,
    //Number - Pixel width of the bar stroke
    barStrokeWidth          : 2,
    //Number - Spacing between each of the X value sets
    barValueSpacing         : 5,
    //Number - Spacing between data sets within X values
    barDatasetSpacing       : 1,
    //String - A legend template
    legendTemplate          : '<ul class="<%=name.toLowerCase()%>-legend"><% for (var i=0; i<datasets.length; i++){%><li><span style="background-color:<%=datasets[i].fillColor%>"></span><%if(datasets[i].label){%><%=datasets[i].label%><%}%></li><%}%></ul>',
    //Boolean - whether to make the chart responsive
    responsive              : true,
    maintainAspectRatio     : true
  }

  barChartOptions.datasetFill = false
  var myChart = barChart.Bar(barChartData, barChartOptions)
  document.getElementById('legend').innerHTML = myChart.generateLegend();
});

</script>
<script>
$(function(){
  $('#select_year').change(function(){
    window.location.href = 'home.php?year='+$(this).val();
  });
});

</script>
</body>
</html>
