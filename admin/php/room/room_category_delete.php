<?php
	include '../../includes/session.php';

	if(isset($_POST['delete'])){
		$id = $_POST['id'];

		$sql = "SELECT * FROM room_category WHERE id = '$id'";
		$query = $conn->query($sql);
		$row = $query->fetch_assoc();
		$room_name = $row['room_name'];

	
	// Activity log
	$sql = "SELECT * FROM admin WHERE id = '".$_SESSION['admin']."'";
	$query = $conn->query($sql);
	$row = $query->fetch_assoc();
	$admin = $row['id'];
	
	$sql = "INSERT INTO activity_logs (admin_id, details) VALUES ('$admin', 'Deleted ".$room_name." in Room Category List.')";
	$conn->query($sql);
	// End activity log

		$sql = "DELETE FROM room_category WHERE id = '$id'";
		if($conn->query($sql)){
			$_SESSION['success'] = 'Room Category deleted successfully';
		}
		else{
			$_SESSION['error'] = $conn->error;
		}
	}
	else{
		$_SESSION['error'] = 'Select item to delete first';
	}

	header('location: ../../pages/room_category.php');
	
?>