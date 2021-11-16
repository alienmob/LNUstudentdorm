<?php
	include '../../includes/session.php';

	if(isset($_POST['edit'])){
		$id = $_POST['id'];
		$firstname = $_POST['firstname'];
		$lastname = $_POST['lastname'];
		$gender = $_POST['gender'];
		$address = $_POST['address'];
		$contact = $_POST['contact'];


		$sql = "UPDATE transient SET firstname = '$firstname', lastname = '$lastname', gender = '$gender', address = '$address', contact = '$contact' WHERE transient_id = '$id'";
		if($conn->query($sql)){

			// Activity Log
			$sql = "SELECT * FROM admin WHERE id = '".$_SESSION['admin']."'";
			$query = $conn->query($sql);
			$row = $query->fetch_assoc();
			$admin = $row['id'];
		
			$sql = "INSERT INTO activity_logs (admin_id, details) VALUES ('$admin', 'Updated ".$firstname." ".$lastname."`s Transient record.')";
			$conn->query($sql);
			// End Activity log

			$_SESSION['success'] = 'Transient updated successfully';
		}
		else{
			$_SESSION['error'] = $conn->error;
		}
	}
	else{
		$_SESSION['error'] = 'Fill up edit form first';
	}

	header('location:../../pages/transient.php');

?>