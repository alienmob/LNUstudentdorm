<?php
	include '../../includes/session.php';

	if(isset($_POST['delete'])){
		$id = $_POST['id'];

		$sql = "SELECT * FROM equipments WHERE id = '$id'";
		$query = $conn->query($sql);
		$row = $query->fetch_assoc();
		$title = $row['title'];

	
	// Activity log
	$sql = "SELECT * FROM admin WHERE id = '".$_SESSION['admin']."'";
	$query = $conn->query($sql);
	$row = $query->fetch_assoc();
	$admin = $row['id'];
	
	$sql = "INSERT INTO activity_logs (admin_id, details) VALUES ('$admin', 'Deleted ".$title." in Equipment Record List.')";
	$conn->query($sql);
	// End activity log

		$sql = "DELETE FROM equipments WHERE id = '$id'";
		if($conn->query($sql)){
			$_SESSION['success'] = 'Equipment deleted successfully';
		}
		else{
			$_SESSION['error'] = $conn->error;
		}
	}
	else{
		$_SESSION['error'] = 'Select item to delete first';
	}

	header('location: ../../pages/equipment.php');
	
?>