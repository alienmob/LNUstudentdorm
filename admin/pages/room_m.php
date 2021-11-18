<?php include '../includes/session.php'; ?>
<?php
$catid = 0;
$where = '';
if (isset($_GET['floor_category'])) {
  $catid = $_GET['floor_category'];
  $where = 'WHERE rooms.floor_category_id = ' . $catid;
}

?>
<?php include '../includes/header.php'; ?>
<title>LNU Dormitory | Room Management</title>
<body class="hold-transition skin-blue sidebar-mini">
  <div class="wrapper">

    <?php include '../includes/navbar.php'; ?>
    <?php include '../includes/menubar.php'; ?>

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <section class="content-header">
        <h1>
          Room Management
        </h1>
        <ol class="breadcrumb">
          <li><a href="#"><i class="fa fa-user"></i> Admin</a></li>
          <li>Facility</li>
          <li class="active">Room Management</li>
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
              
              <div class="box-header with-border">
                <div class="input-group col-sm-3 pull-right">
					      <span class="input-group-addon">Floor Category:</span>
                    
                      <select class="form-control input-sm" id="select_category">
                        <option value="0">ALL</option>
                        <?php
                        $sql = "SELECT * FROM floor_category";
                        $query = $conn->query($sql);
                        while ($catrow = $query->fetch_assoc()) {
                          $selected = ($catid == $catrow['id']) ? " selected" : "";
                          echo "
                            <option value='" . $catrow['id'] . "' " . $selected . ">" . $catrow['floor_name'] . "</option>
                          ";
                        }
                        ?>
                      </select>
                    </div> 
              </div>

              <div class="box-body">
            <div class="table-responsive">
                <table id="example" class="table table-bordered table-striped">
                  <thead>
                    <th>Rooms</th>
                    <th><center>Maximum Occupancy</center></th>
                    <th>Status</th>
                    <th>Actions</th>
                  </thead>
                  <tbody>
                    <?php
                     $sql = "SELECT *, rooms.id AS id FROM rooms LEFT JOIN floor_category ON floor_category.id=rooms.floor_category_id LEFT JOIN room_category ON room_category.id=rooms.room_category_id $where";
                    $query = $conn->query($sql);
                    while ($row = $query->fetch_assoc()) {
                      if ($row['status'] == 0) {
                        $status = '<span class="label label-success">Available</span>';
                        // by '. $row['occupants'] .' individual/s
                      } else {
                        $status = '<span class="label label-danger">Unavailable</span>';
                      }
                      if ($row['occupants'] == $row['occupancy']) {
                        $status = '<span class="label label-warning">Full</span>';
                      }
                      if ($row['occupancy'] == 0) {
                        $status = '<span class="label label-danger">Unavailable</span>';
                      }
                      $vacant = $row['occupancy'] - $row['occupants'];
                      echo "
                        <tr>
                          <td>" . $row['floor_name'] .'&nbsp;-&nbsp;'. $row['room_name'] . "</td>

                    <td><center>
                    <a href=#minus data-toggle='modal' class='pull-left minus' data-id='".$row['id']."'><span class='fa fa-minus'></span></a>
                    ". $row['occupancy'] ."
                    <a href=#add data-toggle='modal' class='pull-right add' data-id='".$row['id']."'><span class='fa fa-plus'></span></a>
                    </center></td>

                          <td>" . $status . "</td>
                          <td>
                            <button class='btn btn-primary btn-sm option btn-rounded' data-id='" . $row['id'] . "'><i class='fa fa-wrench'></i></button>
                          </td>
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
    <?php include '../components/room_m_modal.php'; ?>
  </div>
  <?php include '../includes/scripts.php'; ?>
  <script>
    $(function() {

      $('#select_category').change(function() {
        var value = $(this).val();
        if (value == 0) {
          window.location = 'room_m.php';
        } else {
          window.location = 'room_m.php?floor_category=' + value;
        }
      });

      $(document).on('click', '.option', function(e) {
        e.preventDefault();
        $('#option').modal('show');
        var id = $(this).data('id');
        getRow(id);
      });


$(document).on('click', '.minus', function(e){
e.preventDefault();
var id = $(this).data('id');
getRow(id);
});
$(document).on('click', '.add', function(e){
e.preventDefault();
var id = $(this).data('id');
getRow(id);
});


    });

    function getRow(id) {
      $.ajax({
        type: 'POST',
        url: '../php/room/room_row.php',
        data: {
          id: id
        },
        dataType: 'json',
        success: function(response) {
          $('.roomid').val(response.id);
          $('#room_select').val(response.id).html(response.floor_name + '&nbsp;-&nbsp;' + response.room_name);
          $('#room_select_m').val(response.id).html(response.floor_name + '&nbsp;-&nbsp;' + response.room_name);
          $('#option_m').val(response.id).html(response.floor_name + '&nbsp;-&nbsp;' + response.room_name);
          $('#stat').val(response.id).html(response.status);
        }
      });
    }
  </script>
</body>

</html>