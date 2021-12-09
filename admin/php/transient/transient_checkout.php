<?php
include '../../includes/session.php';

if (isset($_POST['checkout'])) {
	$id = $_POST['id'];

	$sql = "SELECT * FROM checkin WHERE transient_id = '$id'";
	$query = $conn->query($sql);

        $row = $query->fetch_assoc();
		$transient_id = $row['transient_id'];  
		$floor_id = $row['floor_id'];
		$room_id = $row['room_id'];
        $date_in = $row['date_in'];
        $time_in = $row['time_in'];
        $date_out = $row['date_out'];
        $time_out = $row['time_out'];
		$added = 1;
        
        // $sql = "SELECT * FROM transient WHERE transient_id = '$transient'";
	    // $query = $conn->query($sql);
		$sql = "INSERT INTO checkout (transient_id, floor_id, room_id, date_in, time_in, date_out, time_out) VALUES ('$id', '$floor_id', '$room_id', '$date_in', '$time_in', '$date_out', '$time_out')";
			if ($conn->query($sql)) {
			$added--;
			$sql = "UPDATE transient SET status = $added WHERE transient_id = '$id'";
			$conn->query($sql);
            $sql = "DELETE FROM `checkin` WHERE transient_id = '$id'";
			$conn->query($sql);
			$sql = "UPDATE rooms SET occupants = occupants - 1 WHERE floor_category_id = '$floor_id' AND room_category_id = '$room_id'";
			$conn->query($sql);

			$sql = "SELECT *, rooms.id AS rid FROM rooms WHERE floor_category_id = '$floor_id' AND room_category_id = '$room_id'";
			$query = $conn->query($sql);	
			$row = $query->fetch_assoc();
			$rid = $row['rid'];
			$occ = $row['occupants'];
			$sql = "INSERT INTO room_chart (room_id, occupants) VALUES ('$rid', '$occ')";
			$conn->query($sql);

			$sql = "UPDATE checkout SET status = 1 WHERE transient_id = '$id'";
			$conn->query($sql);
			
			$_SESSION['success'] = 'Transient "'.$transient_id.'" Checked Out Successfully';

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

	$sql = "INSERT INTO activity_logs (admin_id, details) VALUES ('$admin', 'Checked-Out ".$firstname." ".$lastname.".')";
	$conn->query($sql);
	// end Activity log

			
				
		
		}
	
} else {
	$_SESSION['error'] = 'Fill up add form first';
	header('location: ../../pages/checkin.php');
}
	
header('location: ../../pages/checkout.php');


