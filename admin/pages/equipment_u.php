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
<title>LNU Dormitory | Equipment Quantity Management</title>
<body class="hold-transition skin-blue sidebar-mini">
  <div class="wrapper">

    <?php include '../includes/navbar.php'; ?>
    <?php include '../includes/menubar.php'; ?>

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <section class="content-header">
        <h1>
        Equipment Quantity Management
        </h1>
        <ol class="breadcrumb">
          <li><a href="#"><i class="fa fa-user"></i> Admin</a></li>
          <li>Management</li>
          <li class="active">Equipment Quantity Management</li>
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
                <!-- <a href="#addnew" data-toggle="modal" class="btn btn-success btn-sm btn-rounded"><i class="fa fa-plus"></i> New</a> -->
                <div class="box-tools pull-right">
                  <form class="form-inline">
                    <!-- <div class="form-group">
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
                    </div> -->
                  </form>
                </div>
              </div>

              <div class="box-body">
            <div class="table-responsive">
                <table id="example" class="table table-bordered table-striped">
                  <thead>
                    <th>Equipment Name</th>
                    <th>Serviceable</th>
                    <th>Unusable</th>
                    <th>Overall Quantity</th>
                    <th>Actions</th>
                  </thead>
                  <tbody>
                    <?php
                    $sql = "SELECT *, equipments.id AS equipid FROM equipments LEFT JOIN category ON category.id=equipments.category_id $where";
                    $query = $conn->query($sql);
                    while ($row = $query->fetch_assoc()) {
                    //   if ($row['status']) {
                    //     $status = '<span class="label label-warning"></span>';
                    //   } else {
                    //     $status = '<span class="label label-success">Available</span>';
                    //   }
                    //   if ($row['quantity'] == 0) {
                    //     $status = '<span class="label label-danger">Unavailable</span>';
                    //   }
                      echo "
                        <tr>
                          <td>" . $row['title'] . "</td>
                          <td>" . $row['quantity_service'] . "</td>
                          <td>" . $row['quantity_unservice'] . "</td>
                          <td>" . $row['quantity_total'] . "</td>
                          
                          <td>

                          <button class='btn btn-primary btn-sm sub btn-rounded' data-id='" . $row['equipid'] . "'><i class='fa fa-minus'></i></button>
                            <button class='btn btn-success btn-sm add btn-rounded' data-id='" . $row['equipid'] . "'><i class='fa fa-plus'></i></button>
                            
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
    <?php include '../components/equip_modal_u.php'; ?>
  </div>
  <?php include '../includes/scripts.php'; ?>
  <script>
    $(function() {
      $('#select_category').change(function() {
        var value = $(this).val();
        if (value == 0) {
          window.location = 'equipment_u.php';
        } else {
          window.location = 'equipment_u.php?category=' + value;
        }
      });

      $(document).on('click', '.add', function(e) {
        e.preventDefault();
        $('#add').modal('show');
        var id = $(this).data('id');
        getRow(id);
      });

      $(document).on('click', '.sub', function(e) {
        e.preventDefault();
        $('#sub').modal('show');
        var id = $(this).data('id');
        getRow(id);
      });
    });

    function getRow(id) {
      $.ajax({
        type: 'POST',
        url: '../php/equip/equip_row.php',
        data: {
          id: id
        },
        dataType: 'json',
        success: function(response) {
          $('.equipid').val(response.equipid);
          $('#edit_code').val(response.code);
          $('#title').val(response.title).html(response.title);
          $('#title2').val(response.title).html(response.title);
          $('#catselect').val(response.category_id).html(response.name);
          $('#edit_quantity').val(response.quantity);
          $('#del_book').html(response.title);
        }
      });
    }
  </script>
</body>

</html>