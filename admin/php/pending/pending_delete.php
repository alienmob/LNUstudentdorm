<?php
	include '../../includes/session.php';

	if(isset($_POST['pend_del'])){
		$status = $_POST['status'];
		$sql = "DELETE FROM pending WHERE status = 1";
		if($conn->query($sql)){
			// Activity log
$sql = "SELECT * FROM admin WHERE id = '".$_SESSION['admin']."'";
$query = $conn->query($sql);
$row = $query->fetch_assoc();
$admin = $row['id'];

$sql = "INSERT INTO activity_logs (admin_id, details) VALUES ('$admin', 'Cleared all Pending records with Approved Status')";
$conn->query($sql);
// End activity log
			$_SESSION['success'] = 'Cleared All Approved Status';
		}
		else{
			$_SESSION['error'] = $conn->error;
		}
	}
	else{
		$_SESSION['error'] = 'Check Status';
	}

	header('location: ../../pages/pending.php');
	
?>