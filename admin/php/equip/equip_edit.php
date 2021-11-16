<?php
	include '../../includes/session.php';

	if(isset($_POST['edit'])){
		$id = $_POST['id'];

		$title = $_POST['title'];
		$category = $_POST['category'];
		

	$sql = "SELECT * FROM equipments WHERE id = '$id'";
	$query = $conn->query($sql);
	$row = $query->fetch_assoc();
	$title2 = $row['title'];


	// Activity log
	$sql = "SELECT * FROM admin WHERE id = '".$_SESSION['admin']."'";
	$query = $conn->query($sql);
	$row = $query->fetch_assoc();
	$admin = $row['id'];
	
	$sql = "INSERT INTO activity_logs (admin_id, details) VALUES ('$admin', 'Updated ".$title2." into ".$title." in Equipment Record List.')";
	$conn->query($sql);
	// End activity log

		$sql = "UPDATE equipments SET title = '$title', category_id = '$category' WHERE id = '$id'";

		if($conn->query($sql)){
			$_SESSION['success'] = 'Equipment updated successfully';
		}
		else{
			$_SESSION['error'] = $conn->error;
		}
	}
	else{
		$_SESSION['error'] = 'Fill up edit form first';
	}

	header('location:../../pages/equipment.php');

?>