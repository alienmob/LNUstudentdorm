<?php
	include '../../includes/session.php';

	if(isset($_POST['delete'])){
		$id = $_POST['id'];

		$sql = "SELECT * FROM floor_category WHERE id = '$id'";
		$query = $conn->query($sql);
		$row = $query->fetch_assoc();
		$floor_name = $row['floor_name'];

	
	// Activity log
	$sql = "SELECT * FROM admin WHERE id = '".$_SESSION['admin']."'";
	$query = $conn->query($sql);
	$row = $query->fetch_assoc();
	$admin = $row['id'];
	
	$sql = "INSERT INTO activity_logs (admin_id, details) VALUES ('$admin', 'Deleted ".$floor_name." in Floor Category List.')";
	$conn->query($sql);
	// End activity log

		$sql = "DELETE FROM floor_category WHERE id = '$id'";
		if($conn->query($sql)){
			$_SESSION['success'] = 'Floor Category deleted successfully';
		}
		else{
			$_SESSION['error'] = $conn->error;
		}
	}
	else{
		$_SESSION['error'] = 'Select item to delete first';
	}

	header('location: ../../pages/floor_category.php');
	
?>