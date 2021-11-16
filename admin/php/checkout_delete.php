<?php
	include '../includes/session.php';

	if(isset($_POST['check_del'])){

		$sql = "DELETE FROM checkout WHERE status = 1";
		if($conn->query($sql)){
			$_SESSION['success'] = 'Cleared All Checked Out Record';

	// Activity Log
	$sql = "SELECT * FROM admin WHERE id = '".$_SESSION['admin']."'";
	$query = $conn->query($sql);
	$row = $query->fetch_assoc();
	$admin = $row['id'];

	$sql = "INSERT INTO activity_logs (admin_id, details) VALUES ('$admin', 'Cleared All Checked-out Transient Record List.')";
	$conn->query($sql);
	// end Activity log

		}
		else{
			$_SESSION['error'] = $conn->error;
		}
	}
	else{
		$_SESSION['error'] = 'Check Status';
	}

	header('location: ../pages/checkout.php');
	
?>