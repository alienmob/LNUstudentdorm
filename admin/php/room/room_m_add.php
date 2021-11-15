<?php
	include '../../includes/session.php';

	if(isset($_POST['add'])){
		

        // $sql = "SELECT *, rooms.id AS id FROM rooms LEFT JOIN floor_category ON floor_category.id=rooms.floor_category_id 
        // LEFT JOIN room_category ON room_category.id=rooms.room_category_id";
        // $query = $conn->query($sql);
        // $row = $query->fetch_array();


		$room = $_POST['room'];
		$increase = $_POST['increase'];
		$added = "Occupancy increased by";
		$reason_add = $_POST['reason_add'];

		$sql = "INSERT INTO room_report (room_id, details, reason) VALUES ('$room', '$added' ' ' '$increase','$reason_add')";
		if($conn->query($sql)){
			$sql = "UPDATE rooms SET occupancy = $increase + occupancy WHERE id = '$room'";
			$conn->query($sql);

			$_SESSION['success'] = $added . ' ' . $increase . '';


		$sql = "SELECT * FROM rooms LEFT JOIN floor_category ON floor_category.id=rooms.floor_category_id 
		LEFT JOIN room_category ON room_category.id=rooms.room_category_id WHERE rooms.id = '$room'";
		$query = $conn->query($sql);
		$row = $query->fetch_assoc();
		$floor_name = $row['floor_name'];
		$room_name = $row['room_name'];

	// Activity log
	$sql = "SELECT * FROM admin WHERE id = '".$_SESSION['admin']."'";
	$query = $conn->query($sql);
	$row = $query->fetch_assoc();
	$admin = $row['id'];
	
	$sql = "INSERT INTO activity_logs (admin_id, details) VALUES ('$admin', 'Increased occupancy for ".$floor_name." - ".$room_name." in Room Management.')";
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

	header('location: ../../pages/room_m.php');

?>