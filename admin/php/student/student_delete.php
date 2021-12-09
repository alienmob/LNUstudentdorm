<?php
	include '../../includes/session.php';

	if(isset($_POST['delete'])){
		$id = $_POST['id'];
		$sql = "SELECT *, students.student_id AS stud_id FROM students LEFT JOIN rooms ON rooms.floor_category_id=students.floor_id 
		AND rooms.room_category_id=students.room_id WHERE students.student_id = '$id'";
		$query = $conn->query($sql);
		$row = $query->fetch_assoc();
		$occupants = $row['occupants'];
		$rid = $row['id'];
		$floor_room = $row['actualroom_id'];
		$student_id = $row['student_id'];


		// Activity Log
		$sqlname = "SELECT * FROM students WHERE student_id = '$id'";
		$query1 = $conn->query($sqlname);
		$row1 = $query1->fetch_assoc();
		$firstname = $row1['firstname'];
		$lastname = $row1['lastname'];

		$sql = "SELECT * FROM admin WHERE id = '".$_SESSION['admin']."'";
		$query = $conn->query($sql);
		$row = $query->fetch_assoc();
		$admin = $row['id'];
	
		$sql = "INSERT INTO activity_logs (admin_id, details) VALUES ('$admin', 'Deleted ".$firstname." ".$lastname."`s Student record.')";
		$conn->query($sql);
		// end Activity log

		$sql = "INSERT INTO room_report (room_id, details, reason) VALUES ('$floor_room', 'Removed `".$student_id."` ".$firstname." ".$lastname." from floor&room number','Deleted Student Record')";
		$conn->query($sql);


		$sql = "DELETE FROM students WHERE student_id = '$id'";
		if($conn->query($sql)){

			

			$sql = "UPDATE rooms SET occupants = occupants - 1 WHERE id = '$rid'";
			$conn->query($sql);

			// $sql = "SELECT * FROM rooms WHERE id = '$floor_room'";
			// $query = $conn->query($sql);	
			// $row = $query->fetch_assoc();
			// $occ = $row['occupants'];
			// $sql = "INSERT INTO room_chart (room_id, occ) VALUES ('$floor_room', '$occ')";
			// $conn->query($sql);

			
			$_SESSION['success'] = 'Student deleted successfully';
		}
		else{
			$_SESSION['error'] = $conn->error;
		}
	}
	else{
		$_SESSION['error'] = 'Select item to delete first';
	}

	header('location: ../../pages/student.php');
	
?>