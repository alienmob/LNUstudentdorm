<?php
	include '../../includes/session.php';

	if(isset($_POST['delete'])){
		$id = $_POST['id'];

		$sql = "SELECT * FROM rooms LEFT JOIN floor_category ON floor_category.id=rooms.floor_category_id 
		LEFT JOIN room_category ON room_category.id=rooms.room_category_id WHERE rooms.id = '$id'";
		$query = $conn->query($sql);
		$row = $query->fetch_assoc();
		$floor_name = $row['floor_name'];
		$room_name = $row['room_name'];

	
	// Activity log
	$sql = "SELECT * FROM admin WHERE id = '".$_SESSION['admin']."'";
	$query = $conn->query($sql);
	$row = $query->fetch_assoc();
	$admin = $row['id'];
	
	$sql = "INSERT INTO activity_logs (admin_id, details) VALUES ('$admin', 'Deleted ".$floor_name." - ".$room_name." in Room Record List.')";
	$conn->query($sql);
	// End activity log

		$sql = "DELETE FROM rooms WHERE id = '$id'";
		if($conn->query($sql)){
			$_SESSION['success'] = 'Room deleted successfully';
		}
		else{
			$_SESSION['error'] = $conn->error;
		}

		

	}
	else{
		$_SESSION['error'] = 'Select item to delete first';
	}

	header('location: ../../pages/room.php');
	
?>