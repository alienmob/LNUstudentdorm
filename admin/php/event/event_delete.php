<?php
	include '../../includes/session.php';

	if(isset($_POST['delete'])){
		$id = $_POST['id'];

		$sql = "SELECT * FROM `event` LEFT JOIN event_category ON event_category.id=event.event_category_id WHERE event.id = $id";
		$query = $conn->query($sql);
		$row = $query->fetch_assoc();
		$call = $row['event_name'];
		$date = $row['date'];




		$sql = "DELETE FROM event WHERE id = '$id'";
		if($conn->query($sql)){
			$_SESSION['success'] = 'Event deleted successfully';

		// Activity log
		$sql = "SELECT * FROM admin WHERE id = '".$_SESSION['admin']."'";
		$query = $conn->query($sql);
		$row = $query->fetch_assoc();
		$admin = $row['id'];
		
		$sql = "INSERT INTO activity_logs (admin_id, details) VALUES ('$admin', 'Deleted ``".$call." | ".date('M d, Y', strtotime($date))."`` event in Event Management Record.')";
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

	header('location: ../../pages/event.php');
	
?>