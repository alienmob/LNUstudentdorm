<?php
	include '../../includes/session.php';

	if(isset($_POST['delete'])){
		$id = $_POST['id'];

		$sql = "SELECT * FROM `event_category` WHERE id = $id";
		$query = $conn->query($sql);
		$row = $query->fetch_assoc();
		$name = $row['event_name'];



		$sql = "DELETE FROM event_category WHERE id = '$id'";
		if($conn->query($sql)){
			$_SESSION['success'] = 'Category deleted successfully';


// Activity log
$sql = "SELECT * FROM admin WHERE id = '".$_SESSION['admin']."'";
$query = $conn->query($sql);
$row = $query->fetch_assoc();
$admin = $row['id'];

$sql = "INSERT INTO activity_logs (admin_id, details) VALUES ('$admin', 'Deleted ``".$name."`` event category in Event Category Record.')";
$conn->query($sql);
// End activity log

		}
		else{
			$_SESSION['error'] = $conn->error;
		}
	}
	else{
		$_SESSION['error'] = 'Select item to delete first';
	}

	header('location: ../../pages/eventcat.php');
	
?>