<?php
	include '../../includes/session.php';

	if(isset($_POST['edit'])){
		$id = $_POST['id'];
		$name = $_POST['name'];


	$sql = "SELECT * FROM floor_category WHERE id = '$id'";
	$query = $conn->query($sql);
	$row = $query->fetch_assoc();
	$floor_name = $row['floor_name'];


	// Activity log
	$sql = "SELECT * FROM admin WHERE id = '".$_SESSION['admin']."'";
	$query = $conn->query($sql);
	$row = $query->fetch_assoc();
	$admin = $row['id'];
	
	$sql = "INSERT INTO activity_logs (admin_id, details) VALUES ('$admin', 'Updated ".$floor_name." into ".$name." in Floor Category List.')";
	$conn->query($sql);
	// End activity log

		$sql = "UPDATE floor_category SET floor_name = '$name' WHERE id = '$id'";
		if($conn->query($sql)){
			$_SESSION['success'] = 'Floor Category updated successfully';
		}
		else{
			$_SESSION['error'] = $conn->error;
		}
	}
	else{
		$_SESSION['error'] = 'Fill up edit form first';
	}

	header('location:../../pages/floor_category.php');

?>