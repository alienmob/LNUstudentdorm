<?php
	include '../../includes/session.php';

	if(isset($_POST['delete'])){
		$id = $_POST['id'];

		
		$sql = "SELECT * FROM `transient` WHERE transient_id = '$id'";
		$query = $conn->query($sql);
		$row = $query->fetch_assoc();
		$status = $row['status'];

if($status == 1){
	$_SESSION['error'] = 'Selected Transient is currently Checked In';
}
else{

	// Activity Log
	$sqlname = "SELECT * FROM transient WHERE transient_id = '$id'";
	$query1 = $conn->query($sqlname);
	$row1 = $query1->fetch_assoc();
	$firstname = $row1['firstname'];
	$lastname = $row1['lastname'];

	$sql = "SELECT * FROM admin WHERE id = '".$_SESSION['admin']."'";
	$query = $conn->query($sql);
	$row = $query->fetch_assoc();
	$admin = $row['id'];

	$sql = "INSERT INTO activity_logs (admin_id, details) VALUES ('$admin', 'Deleted ".$firstname." ".$lastname."`s Transient record.')";
	$conn->query($sql);
	// end Activity log

	$sql = "DELETE FROM transient WHERE transient_id = '$id' AND `status` = 0";
		$conn->query($sql);
		$_SESSION['success'] = 'Transient deleted successfully';
		}
		
	}
	else{
		$_SESSION['error'] = 'Select item to delete first';
	}

	header('location: ../../pages/transient.php');
	
?>