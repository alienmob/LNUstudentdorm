<?php
	include '../../includes/session.php';

	if(isset($_POST['option'])){
		


		$room_option = $_POST['room_option'];
		$status = $_POST['status'];
		$reason = $_POST['reason'];

        $available = 'Marked as Available';
        $unavailable = 'Marked as Unavailable';


		$sql = "SELECT * FROM rooms WHERE id = '$room_option'";
		$query = $conn->query($sql);
		$row = $query->fetch_assoc();
		$occupants = $row['occupants'];

		if($occupants != 0){
			$_SESSION['error'] = 'Selected Room is currently occupied.';
		}
		else{

		if($status == 1){

            $sql = "INSERT INTO room_report (room_id, details, reason) VALUES ('$room_option', '$available', '$reason')";
            $conn->query($sql);
            
			$sql = "UPDATE rooms SET `status` = 0 WHERE id = '$room_option'";
			$conn->query($sql);

			$_SESSION['success'] = 'Room ' . $available . '';

		$sql = "SELECT * FROM rooms LEFT JOIN floor_category ON floor_category.id=rooms.floor_category_id 
		LEFT JOIN room_category ON room_category.id=rooms.room_category_id WHERE rooms.id = '$room_option'";
		$query = $conn->query($sql);
		$row = $query->fetch_assoc();
		$floor_name = $row['floor_name'];
		$room_name = $row['room_name'];

	// Activity log
	$sql = "SELECT * FROM admin WHERE id = '".$_SESSION['admin']."'";
	$query = $conn->query($sql);
	$row = $query->fetch_assoc();
	$admin = $row['id'];
	
	$sql = "INSERT INTO activity_logs (admin_id, details) VALUES ('$admin', 'Modified status for ".$floor_name." - ".$room_name." to Available in Room Management.')";
	$conn->query($sql);
	// End activity log

		}
		else if($status == 2){
			$sql = "INSERT INTO room_report (room_id, details, reason) VALUES ('$room_option', '$unavailable', '$reason')";
            $conn->query($sql);
            
			$sql = "UPDATE rooms SET `status` = 1 WHERE id = '$room_option'";
			$conn->query($sql);

			$_SESSION['success'] = 'Room ' . $unavailable . '';

			$sql = "SELECT * FROM rooms LEFT JOIN floor_category ON floor_category.id=rooms.floor_category_id 
			LEFT JOIN room_category ON room_category.id=rooms.room_category_id WHERE rooms.id = '$room_option'";
			$query = $conn->query($sql);
			$row = $query->fetch_assoc();
			$floor_name = $row['floor_name'];
			$room_name = $row['room_name'];
	
		// Activity log
		$sql = "SELECT * FROM admin WHERE id = '".$_SESSION['admin']."'";
		$query = $conn->query($sql);
		$row = $query->fetch_assoc();
		$admin = $row['id'];
		
		$sql = "INSERT INTO activity_logs (admin_id, details) VALUES ('$admin', 'Modified status for ".$floor_name." - ".$room_name." to Unavailable in Room Management.')";
		$conn->query($sql);
		// End activity log

		}
        else{
            $_SESSION['error'] = $conn->error;
        }
	}
	}	
	else{
		$_SESSION['error'] = 'Fill up add form first';
	}

	header('location: ../../pages/room_m.php');

?>