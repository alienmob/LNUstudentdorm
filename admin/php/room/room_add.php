<?php
	include '../../includes/session.php';

	if(isset($_POST['add'])){
		$room = $_POST['room'];
		$floor_category = $_POST['floor_category'];
		$room_category = $_POST['room_category'];
		$occupancy = $_POST['occupancy'];
		
		
		
		
		$sql = "SELECT * FROM rooms";
		$query = $conn->query($sql);
		$row = $query->fetch_array();
		$floorcat = $row['floor_category_id'];
		$roomcat = $row['room_category_id'];


				if($floor_category == $floorcat OR $room_category == $roomcat){	


				$sql = "SELECT * FROM floor_category WHERE id = '$floor_category'";
				$floor_query = $conn->query($sql);
				$floor_row = $floor_query->fetch_assoc();

				$sql = "SELECT * FROM room_category WHERE id = '$room_category'";
				$room_query = $conn->query($sql);
				$room_row = $room_query->fetch_assoc();

				$_SESSION['error'] = 'Category "' .$floor_row['floor_name'].' - '.$room_row['room_name'].'" Is already in the Database';
			// $_SESSION['error'] = $conn->error;
		}
		else{
		$sql = "INSERT INTO rooms (room, floor_category_id, room_category_id, occupancy) VALUES ('$room', '$floor_category', '$room_category', '$occupancy')";
		if($conn->query($sql)){
			$_SESSION['success'] = 'Room added successfully';


		}
		}
	

	$sql = "SELECT * FROM floor_category WHERE id = '$floor_category'";
	$query = $conn->query($sql);
	$row = $query->fetch_assoc();
	$floor_name = $row['floor_name'];

	$sql = "SELECT * FROM room_category WHERE id = '$room_category'";
	$query = $conn->query($sql);
	$row = $query->fetch_assoc();
	$room_name = $row['room_name'];

// Activity log
$sql = "SELECT * FROM admin WHERE id = '".$_SESSION['admin']."'";
$query = $conn->query($sql);
$row = $query->fetch_assoc();
$admin = $row['id'];

$sql = "INSERT INTO activity_logs (admin_id, details) VALUES ('$admin', 'Added ".$floor_name." - ".$room_name." in Room Record List.')";
$conn->query($sql);
// End activity log
	
	}	
	else{
		$_SESSION['error'] = 'Fill up add form first';
	}

	header('location: ../../pages/room.php');

?>