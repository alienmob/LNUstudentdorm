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
            <canvas id="timeScale" style="height:350px"></canvas>
          </div>
        </div>
      </div>
    </div>
  </div>
  <?php include '../includes/footer.php'; ?>
</div>
<?php include '../includes/scripts.php'; ?>

<!-- Chart Data -->
<?php
    $logs = array();
    $labels = array();
    $data = array();
    $sql = "SELECT * FROM equipment_chart INNER JOIN equipments ON equipment_chart.equipment_id=equipments.id ORDER BY equipment_chart.id LIMIT 10;";
    $query = $conn->query($sql);
    while($row = $query->fetch_assoc()){
        echo $row;
        // echo $row['current_date'];
        array_push($data, $row['available']);
        array_push($labels, $row['current_date']);
    }
    $logs = json_encode($logs);
?>

<!-- End Chart Data -->
<script>
$(function(){
  var timeScale = $('#timeScale').get(0).getContext('2d')
  var barChart = new Chart(timeScale)
  
  
    const data = {
    labels: <?= $labels ?>,
    datasets: [{
        label: 'My First dataset',
        backgroundColor: Utils.transparentize(Utils.CHART_COLORS.red, 0.5),
        borderColor: Utils.CHART_COLORS.red,
        fill: false,
        data: Utils.numbers(NUMBER_CFG),
    }, {
        label: 'My Second dataset',
        backgroundColor: Utils.transparentize(Utils.CHART_COLORS.blue, 0.5),
        borderColor: Utils.CHART_COLORS.blue,
        fill: false,
        data: Utils.numbers(NUMBER_CFG),
    }, {
        label: 'Dataset with point data',
        backgroundColor: Utils.transparentize(Utils.CHART_COLORS.green, 0.5),
        borderColor: Utils.CHART_COLORS.green,
        fill: false,
        data: [{
        x: Utils.newDateString(0),
        y: Utils.rand(0, 100)
        }, {
        x: Utils.newDateString(5),
        y: Utils.rand(0, 100)
        }, {
        x: Utils.newDateString(7),
        y: Utils.rand(0, 100)
        }, {
        x: Utils.newDateString(15),
        y: Utils.rand(0, 100)
        }],
    }]
    };
});

</script>

</body>
</html>
