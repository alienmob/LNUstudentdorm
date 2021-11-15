<?php
	include '../../includes/session.php';

	if(isset($_POST['edit'])){
		$id = $_POST['id'];
		$name = $_POST['name'];

	$sql = "SELECT * FROM room_category WHERE id = '$id'";
	$query = $conn->query($sql);
	$row = $query->fetch_assoc();
	$room_name = $row['room_name'];


	// Activity log
	$sql = "SELECT * FROM admin WHERE id = '".$_SESSION['admin']."'";
	$query = $conn->query($sql);
	$row = $query->fetch_assoc();
	$admin = $row['id'];
	
	$sql = "INSERT INTO activity_logs (admin_id, details) VALUES ('$admin', 'Updated ".$room_name." into ".$name." in Room Category List.')";
	$conn->query($sql);
	// End activity log

		$sql = "UPDATE room_category SET room_name = '$name' WHERE id = '$id'";
		if($conn->query($sql)){
			$_SESSION['success'] = 'Room Category updated successfully';

			

		}
		else{
			$_SESSION['error'] = $conn->error;
		}
	}
	else{
		$_SESSION['error'] = 'Fill up edit form first';
	}

	header('location:../../pages/room_category.php');

?>