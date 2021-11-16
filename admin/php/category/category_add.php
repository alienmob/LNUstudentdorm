<?php
	include '../../includes/session.php';

	if(isset($_POST['add'])){
		$name = $_POST['name'];
		
		$sql = "INSERT INTO category (name) VALUES ('$name')";
		if($conn->query($sql)){
			$_SESSION['success'] = 'Equipment Category added successfully';

		// Activity log
		$sql = "SELECT * FROM admin WHERE id = '".$_SESSION['admin']."'";
		$query = $conn->query($sql);
		$row = $query->fetch_assoc();
		$admin = $row['id'];
		
		$sql = "INSERT INTO activity_logs (admin_id, details) VALUES ('$admin', 'Added ".$name." in Equipment Category List.')";
		$conn->query($sql);
		// End activity log

		}
		else{
			$_SESSION['error'] = $conn->error;
		}
	}	
	else{
		$_SESSION['error'] = 'Fill up add form first';
	}

	header('location: ../../pages/category.php');

?>