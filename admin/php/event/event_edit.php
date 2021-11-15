<?php
	include '../../includes/session.php';

	if(isset($_POST['edit'])){
		$id = $_POST['id'];
		$event_category = $_POST['event_category'];
		$description = $_POST['description'];
		$location = $_POST['location'];
		$date = $_POST['date'];
		$time_start = $_POST['time_start'];
		$time_end = $_POST['time_end'];

		$sql = "SELECT * FROM `event_category` WHERE id = $event_category";
		$query = $conn->query($sql);
		$row = $query->fetch_assoc();
		$call = $row['event_name'];

		$sql = "UPDATE event SET event_category_id = '$event_category', description = '$description', location = '$location', date = '$date', time_start = '$time_start', time_end = '$time_end' WHERE id = '$id'";
		if($conn->query($sql)){
			$_SESSION['success'] = 'Event Updated Successfully';

// Activity log
$sql = "SELECT * FROM admin WHERE id = '".$_SESSION['admin']."'";
$query = $conn->query($sql);
$row = $query->fetch_assoc();
$admin = $row['id'];

$sql = "INSERT INTO activity_logs (admin_id, details) VALUES ('$admin', 'Updated ``".$call." | ".date('M d, Y', strtotime($date))."`` event in Event Management Record.')";
$conn->query($sql);
// End activity log

		}
		else{
			$_SESSION['error'] = $conn->error;
		}
	}
	else{
		$_SESSION['error'] = 'Fill up edit form first';
	}

	header('location:../../pages/event.php');

?>