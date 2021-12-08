<?php
	include '../../includes/session.php';

	if(isset($_POST['edit'])){
		$id = $_POST['id'];
		$student_id = $_POST['student_id'];
		$lastname = $_POST['lastname'];
		$firstname = $_POST['firstname'];
		$middlename = $_POST['middlename'];
		$bdate = $_POST['bdate'];
		$privilege = $_POST['privilege'];
		$gender = $_POST['gender'];
		$address = $_POST['address'];
		$contact = $_POST['contact'];
		$email = $_POST['email'];
		$guardian = $_POST['guardian'];
		$guardian_contact = $_POST['guardian_contact'];

		$floor_room = $_POST['floor_room'];
		// $floors = $_POST['floor'];
		// $rooms = $_POST['room'];
		$course = $_POST['course'];

		

		$sql = "SELECT * FROM rooms LEFT JOIN floor_category ON floor_category.id=rooms.floor_category_id 
		LEFT JOIN room_category ON room_category.id=rooms.room_category_id WHERE rooms.id = '$floor_room'";
		$query = $conn->query($sql);
			$brow = $query->fetch_assoc();
			$occupants = $brow['occupants'];
			$occupancy = $brow['occupancy'];
			$status = $brow['status'];

			$floor_name = $brow['floor_name'];
			$room_name = $brow['room_name'];

			$floor_id = $brow['floor_category_id'];
			$room_id = $brow['room_category_id'];


			if ($status == 1) {
				
				$_SESSION['error'] = '"' .$floor_name. '&nbsp;-&nbsp;' .$room_name. '" Is Unavailable';	

				}else 

			if ($occupants == $occupancy) {
		
				$_SESSION['error'] = '"' .$floor_name. '&nbsp;-&nbsp;' .$room_name. '" Is Full';
				

	}else{

		$sql = "SELECT * FROM students 
		LEFT JOIN rooms ON rooms.id=students.actualroom_id WHERE students.student_id = '$id'";
			$query = $conn->query($sql);
			$brow = $query->fetch_assoc();
			$occupants = $brow['occupants'];
			$status = $brow['status'];
			$bid = $brow['id'];

			$sql = "UPDATE rooms SET occupants = '$occupants'- 1 WHERE id = '$bid'";
			$conn->query($sql);

			$sql = "UPDATE rooms SET occupants = occupants + 1 WHERE id = '$floor_room'";
			$conn->query($sql);
		
		
			$sql = "SELECT * FROM rooms WHERE id = '$floor_room'";
			$query = $conn->query($sql);
			$row = $query->fetch_assoc();
			$floors = $row['floor_category_id'];
			$rooms = $row['room_category_id'];


		$sql = "UPDATE students SET student_id = '$student_id', lastname = '$lastname', firstname = '$firstname', middlename = '$middlename', bdate = '$bdate', privilege = '$privilege', 
		gender = '$gender', address = '$address', contact = '$contact', email = '$email', guardian = '$guardian', 
		guardian_contact = '$guardian_contact', floor_id = '$floors', room_id = '$rooms', actualroom_id = '$floor_room', course_id = '$course' 
		WHERE student_id = '$id'";
		if($conn->query($sql)){

			$sql = "INSERT INTO room_report (room_id, details, reason) VALUES ('$floor_room', 'Changed Assignment of floor and room number for `".$student_id."` ".$firstname." ".$lastname."','Updated Student Record')";
			$conn->query($sql);

			// Activity Log
			$sql = "SELECT * FROM admin WHERE id = '".$_SESSION['admin']."'";
			$query = $conn->query($sql);
			$row = $query->fetch_assoc();
			$admin = $row['id'];
		
			$sql = "INSERT INTO activity_logs (admin_id, details) VALUES ('$admin', 'Updated ".$firstname." ".$lastname."`s Student record.')";
			$conn->query($sql);
			// End Activity log

			$_SESSION['success'] = 'Student updated successfully';
		}
		else{
			$sql = "SELECT * FROM students WHERE student_id = '$student_id'";
				$query = $conn->query($sql);
				
				$row = $query->fetch_array();

				$_SESSION['error'] = 'Student ID "' .$row['student_id']. '" Is already in the Database';
		}
	}
	}
	else{
		$_SESSION['error'] = 'Fill up edit form first';
	}

	header('location:../../pages/student.php');

?>