<?php
	include '../includes/session.php';

	if(isset($_POST['setting'])){

		$rfid = $_POST['rfid'];

        if($rfid == 1){
		$sql = "UPDATE rfid_setting SET setting_id = '$rfid', event_id = NULL, status = 0";
	// Activity Log
	$sql1 = "SELECT * FROM admin WHERE id = '".$_SESSION['admin']."'";
	$query1 = $conn->query($sql1);
	$row1 = $query1->fetch_assoc();
	$admin = $row1['id'];

	$sql1 = "INSERT INTO activity_logs (admin_id, details) VALUES ('$admin', 'Changed RFID Function to ``Log Book Mode``')";
	$conn->query($sql1);
	// end Activity log

        } else {
        $sql = "UPDATE rfid_setting SET setting_id = '$rfid', status = 1";
	// Activity Log
	$sql2 = "SELECT * FROM admin WHERE id = '".$_SESSION['admin']."'";
	$query2 = $conn->query($sql2);
	$row2 = $query2->fetch_assoc();
	$admin = $row2['id'];

	$sql2 = "INSERT INTO activity_logs (admin_id, details) VALUES ('$admin', 'Changed RFID Function to ``Event Attendance Mode``')";
	$conn->query($sql2);
	// end Activity log
        }

		if($conn->query($sql)){

        $sql = "SELECT * FROM setting WHERE id = '$rfid'";
		$query = $conn->query($sql);
		$row = $query->fetch_assoc();
        $function = $row['function'];

			$_SESSION['success'] = 'RFID Function changed to "'.$function.'" mode';
		}
		else{
			$_SESSION['error'] = $conn->error;
		}
	}
	else{
		$_SESSION['error'] = 'Fill up edit form first';
	}

	header('location:../pages/home.php');

?>