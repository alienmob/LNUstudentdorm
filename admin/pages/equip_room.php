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
<title>LNU Dormitory | Equipment in Rooms</title>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

  <?php include '../includes/navbar.php'; ?>
  <?php include '../includes/menubar.php'; ?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Status of Equipment in Rooms 
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-user"></i> Admin</a></li>
        <li>Monitoring</li>
        <li class="active">Status of Equipment in Rooms </li>
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
                <div class="box-tools pull-right">
                  <form class="form-inline">
                    <div class="form-group">
                      <label>Floor Category: </label>
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
                  </form>
                </div>
              </div>
<br>
            <div class="box-body">
            <div class="table-responsive">
              <table id="example" class="table table-bordered table-striped">
                <thead>
                  <th>Room Name</th>
                  <th>Floor & Room Name</th>
                  <th>View</th>
                </thead>
                <tbody>
                  <?php
                    $sql = "SELECT *, rooms.id AS rid FROM rooms 
                    LEFT JOIN floor_category ON floor_category.id=rooms.floor_category_id 
                    LEFT JOIN room_category ON room_category.id=rooms.room_category_id $where";
                    $query = $conn->query($sql);
                    while($row = $query->fetch_assoc()){
                      
                 echo "
                    <tr>
                        <td>".$row['room']."</td>
                        <td>".$row['floor_name'].' - '.$row['room_name']."</td>
                        <td>
                            <button class='btn btn-info btn-sm view btn-rounded' data-id='" . $row['rid'] . "'><i class='fa fa-eye'></i></button>
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
  <?php include '../components/equip_room_modal.php'; ?>
</div>
<?php include '../includes/scripts.php'; ?>
<script>
    $(function() {

      $('#select_category').change(function() {
        var value = $(this).val();
        if (value == 0) {
          window.location = 'equip_room.php';
        } else {
          window.location = 'equip_room.php?floor_category=' + value;
        }
      });


      $(document).on('click', '.view', function(e) {
        e.preventDefault();
        $('#view').modal('show');
        var id = $(this).data('id');
        getRow(id);
      });


    });

    function getRow(id) {
      $.ajax({
        type: 'POST',
        url: '../php/equip/equip_room_row.php',
        data: {
          id: id
        },
        dataType: 'json',
        success: function(response) {
          console.log(response)
          const floor = response[0] ? response[0].floor_name : ''
          const room = response[0] ? response[0].room_name : ''
          $('.name_id').html(floor +' - '+ room);

          const parentEl = document.getElementById('equiproom')

          //REMOVE CHILD ELEMENTS FIRST 
          //BEFORE APPENDING
          while (parentEl.firstChild) {
            parentEl.removeChild(parentEl.firstChild);
          }

          for(let i = 0; i < response.length; i++){
            const span = document.createElement('span');
            response[i].equipment_name ? span.innerHTML = (response[i].equipment_name) + ' - ' + (response[i].equip_room_quantity) : span.innerHTML = 'No records found';
            parentEl.appendChild(span);
          }

        }
      });
    }
  </script>
</body>
</html>
