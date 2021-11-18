<?php include '../includes/session.php'; ?>
<?php
$catid = 0;
$where = '';
if (isset($_GET['category'])) {
  $catid = $_GET['category'];
  $where = 'WHERE equipments.category_id = ' . $catid;
}

?>
<?php include '../includes/header.php'; ?>
<title>LNU Dormitory | Equipment Reports</title>
<body class="hold-transition skin-blue sidebar-mini">
  <div class="wrapper">

    <?php include '../includes/navbar.php'; ?>
    <?php include '../includes/menubar.php'; ?>

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <section class="content-header">
        <h1>
          Equipment Reports
        </h1>
        <ol class="breadcrumb">
          <li><a href="#"><i class="fa fa-user"></i> Admin</a></li>
          <li>Facility</li>
          <li class="active">Reports</li>
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
        <div class="row">
          <div class="col-xs-12">
            <div class="box">
              <!-- <div class="box-header with-border">
                <a href="#addnew" data-toggle="modal" class="btn btn-success btn-sm btn-rounded"><i class="fa fa-plus"></i> New</a>
                <div class="box-tools pull-right">
                  <form class="form-inline">
                    <div class="form-group">
                      <label>Category: </label>
                      <select class="form-control input-sm" id="select_category">
                        <option value="0">ALL</option>
                        <?php
                        // $sql = "SELECT * FROM category";
                        // $query = $conn->query($sql);
                        // while ($catrow = $query->fetch_assoc()) {
                        //   $selected = ($catid == $catrow['id']) ? " selected" : "";
                        //   echo "
                        //     <option value='" . $catrow['id'] . "' " . $selected . ">" . $catrow['name'] . "</option>
                        //   ";
                        // }
                        ?>
                      </select>
                    </div>
                  </form>
                </div>
              </div> -->

              <div class="box-body">
            <div class="table-responsive">
                <table id="example" class="table table-bordered table-striped">
                  <thead>
                    <th>Date</th>  
                    <th>Equipment Name</th>
                    <th>Details</th>
                  </thead>
                  <tbody>
                    <?php
                    $sql = "SELECT *, reports.id AS equipid FROM reports ORDER BY date_reports DESC $where";
                    $query = $conn->query($sql);
                    while ($row = $query->fetch_assoc()) {
                      
                      echo "
                        <tr>
                        <td>" . date('M d, Y | h:ia', strtotime($row['date_reports'])) . "</td>   
                          <td>" . $row['equipment_reports'] . "</td>
                          <td>" . $row['details'] . "</td>
                        </tr>
                      ";
                    }
                    ?>
                  </tbody>
                </table>
              </div>
              </div>
            </div>
          </div>
        </div>
      </section>
    </div>

    <?php include '../includes/footer.php'; ?>

  </div>
  <?php include '../includes/scripts.php'; ?>
  
</body>

</html>