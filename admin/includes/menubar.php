<aside class="main-sidebar bg-gradient-default">
  <!-- sidebar: style can be found in sidebar.less -->
  <section class="sidebar">
    <!-- Sidebar user panel -->
    <div class="user-panel">
      <div class="pull-left image">
        <img src="<?php echo (!empty($user['photo'])) ? '../../images/'.$user['photo'] : '../../images/profile.jpg'; ?>" class="img-circle" alt="User Image">
      </div>
      <div class="pull-left info">
        <p><?php echo $user['firstname'].' '.$user['lastname']; ?></p>
        <a><i class="fa fa-circle text-success"></i> Dorm Manager</a>
      </div>
    </div>
    <!-- sidebar menu: : style can be found in sidebar.less -->
    <ul class="sidebar-menu" data-widget="tree">
      <li class="header bg-default text-white">REPORTS</li>
      <li class=""><a href="../pages/home.php" class="text-white"><i class="fa fa-dashboard"></i> <span>Dashboard</span></a></li>
      
      <li class="header bg-default text-white">MANAGE</li>
      <li class="treeview">
        <a href="#" class="text-white">
          <i class="fa fa-graduation-cap"></i>
          <span>Students</span>
          <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
          </span>
        </a>
        <ul class="treeview-menu">
          <li><a href="../pages/student.php"><i class="fa fa-circle-o"></i> Student List</a></li>
          <li><a href="../pages/violation.php"><i class="fa fa-circle-o"></i> Violations</a></li>
          <li><a href="../pages/course.php"><i class="fa fa-circle-o"></i> Courses</a></li>
        </ul>
      </li>

      <li class="treeview">
        <a href="#" class="text-white">
          <i class="fa fa-list-alt"></i>
          <span>Student Logs</span>
          <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
          </span>
        </a>
        <ul class="treeview-menu">
          <li><a href="../pages/student_stat.php"><i class="fa fa-circle-o"></i> Status</a></li>
          <li><a href="../pages/log.php"><i class="fa fa-circle-o"></i> Log Book</a></li>
          <li><a href="../pages/timein.php"><i class="fa fa-circle-o"></i> Time In Record</a></li>
          <li><a href="../pages/timeout.php"><i class="fa fa-circle-o"></i> Time Out Record</a></li>
          
          
          <!-- <li><a href="log.php"><i class="fa fa-circle-o"></i> Log Record</a></li> -->
        </ul>
      </li>

      <li class="treeview">
        <a href="#" class="text-white">
          <i class="fa fa-refresh"></i>
          <span>Borrow&Return Records</span>
          <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
          </span>
        </a>
        <ul class="treeview-menu">
        <li><a href="../pages/pending.php"><i class="fa fa-circle-o"></i> Pending Requests</a></li>
          <li><a href="../pages/borrow.php"><i class="fa fa-circle-o"></i> Borrowed Equipment</a></li>
          <li><a href="../pages/return.php"><i class="fa fa-circle-o"></i> Returned Equipment</a></li>
          
        </ul>
      </li>
      <li class="treeview">
        <a href="#" class="text-white">
          <i class="fa fa-table"></i>
          <span>Payment Records</span>
          <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
          </span>
        </a>
        <ul class="treeview-menu">
        <li><a href="../pages/unpaid.php"><i class="fa fa-circle-o"></i> Unpaid Status</a></li>
        <li><a href="../pages/paid.php"><i class="fa fa-circle-o"></i> Paid Status</a></li>
          <!-- <li><a href="promissory.php"><i class="fa fa-circle-o"></i> Promissory Status</a></li> -->
          
        </ul>
      </li>
      <li class="treeview">
        <a href="#" class="text-white">
          <i class="fa fa-newspaper-o"></i>
          <span>Announcements</span>
          <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
          </span>
        </a>
        <ul class="treeview-menu">
          <li><a href="../pages/event.php"><i class="fa fa-circle-o"></i> Event Management</a></li>
          <li><a href="../pages/eventcat.php"><i class="fa fa-circle-o"></i> Category</a></li>
          <li><a href="../pages/event_a.php"><i class="fa fa-circle-o"></i> Attendance Record</a></li>
        </ul>
      </li>


      <li class="treeview">
        <a href="#" class="text-white">
          <i class="fa fa-map-marker"></i>
          <span>Room Management</span>
          <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
          </span>
        </a>
        <ul class="treeview-menu">
          <li><a href="../pages/room.php"><i class="fa fa-circle-o"></i> Rooms</a></li>
          <li><a href="../pages/room_m.php"><i class="fa fa-circle-o"></i> Room Management</a></li>
          <li><a href="../pages/room_reports.php"><i class="fa fa-circle-o"></i> Reports</a></li>
          <li><a href="../pages/floor_category.php"><i class="fa fa-circle-o"></i> Floor Category</a></li>
          <li><a href="../pages/room_category.php"><i class="fa fa-circle-o"></i> Room Category</a></li>
        </ul>
      </li>

      <li class="treeview">
        <a href="#" class="text-white">
          <i class="fa fa-briefcase"></i>
          <span>Equipment Mgmt.</span>
          <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
          </span>
        </a>
        <ul class="treeview-menu">
          <li><a href="../pages/equipment.php"><i class="fa fa-circle-o"></i> Equipment List</a></li>
          
          <li><a href="../pages/equipment_u.php"><i class="fa fa-circle-o"></i> Qty. Management</a></li>
          <li><a href="../pages/equipment_reports.php"><i class="fa fa-circle-o"></i> Reports</a></li>
          <li><a href="../pages/category.php"><i class="fa fa-circle-o"></i> Equipment Category</a></li>
          
        </ul>
      </li>


      <li class="treeview">
        <a href="#" class="text-white">
          <i class="fa fa-users"></i>
          <span>Transient Management</span>
          <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
          </span>
        </a>
        <ul class="treeview-menu">
          <li><a href="../pages/transient.php"><i class="fa fa-circle-o"></i> Transient List</a></li>
          <li><a href="../pages/checkin.php"><i class="fa fa-circle-o"></i> Check In Status</a></li>
          <li><a href="../pages/checkout.php"><i class="fa fa-circle-o"></i> Check Out Status</a></li>
        </ul>
      </li>      


      <li>
        <a href="#setting" class="text-white" data-toggle="modal">
          <i class="fa fa-cogs"></i>
          <span>RFID Settings</span>
        </a>
      </li>    
      
    </ul>
    
    <?php
    $sql = "SELECT * FROM `rfid_setting`";
    $query = $conn->query($sql);
    $row = $query->fetch_assoc();

    $id = $row['setting_id'];
    if($id == 1){
      echo "
      <div class='text-center'>
      <h3><span class='label label-success'>Log Book Mode</span></h3>
      <h5><span class='text-white'>RFID Status</span></h5>
      </div>
      ";
    }
    else {
      echo "
      <div class='text-center'>
      <h3><span class='label label-success'>Attendance Mode</span></h3>
      <h5><span class='text-white'>RFID Status</span></h5>
      </div>
      ";
    }
    ?>

  </section>
  <!-- /.sidebar -->
</aside>


<?php include '../components/setting_modal.php'; ?>



<script>

function getRow(id){
  $.ajax({
    type: 'POST',
    url: '../php/rfid_setting_row.php',
    data: {id:id},
    dataType: 'json',
    success: function(response){
      $('#show_rfid').val(response.setting_id).html(response.function);
    }
  });
}
</script>