<?php
	include '../../includes/session.php';

	if(isset($_POST['cancel_clear'])){
		$status = $_POST['status'];
		$stat = "Cancelled!";
		$sql = "DELETE FROM event WHERE status = '{$stat}'";
		if($conn->query($sql)){
			$_SESSION['success'] = 'Cleared All Cancelled Status';

// Activity log
$sql = "SELECT * FROM admin WHERE id = '".$_SESSION['admin']."'";
$query = $conn->query($sql);
$row = $query->fetch_assoc();
$admin = $row['id'];

$sql = "INSERT INTO activity_logs (admin_id, details) VALUES ('$admin', 'Cleared All Cancelled events in Event Management Record.')";
$conn->query($sql);
// End activity log

		}
		else{
			$_SESSION['error'] = $conn->error;
		}
	}
	else{
		$_SESSION['error'] = 'Check Status';
	}

	header('location: ../../pages/event.php');
	
?>