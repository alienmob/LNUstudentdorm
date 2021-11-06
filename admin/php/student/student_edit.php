<?php
	include '../../includes/session.php';

	if(isset($_POST['edit'])){
		$id = $_POST['id'];
		$student_id = $_POST['student_id'];
		$firstname = $_POST['firstname'];
		$lastname = $_POST['lastname'];
		$privilege = $_POST['privilege'];
		$gender = $_POST['gender'];
		$address = $_POST['address'];
		$contact = $_POST['contact'];
		$email = $_POST['email'];
		$guardian = $_POST['guardian'];
		$guardian_contact = $_POST['guardian_contact'];
		$floors = $_POST['floor'];
		$rooms = $_POST['room'];
		$course = $_POST['course'];


		$sql = "SELECT * FROM rooms WHERE floor_category_id = '$floors' AND room_category_id = '$rooms'";
		$query = $conn->query($sql);
			$brow = $query->fetch_assoc();
			$occupants = $brow['occupants'];
			$occupancy = $brow['occupancy'];
			$status = $brow['status'];

			if ($status == 1) {
				$sql = "SELECT * FROM floor_category WHERE id = '$floors'";
				$floor_query = $conn->query($sql);
				$floor_row = $floor_query->fetch_assoc();

				$sql = "SELECT * FROM room_category WHERE id = '$rooms'";
				$room_query = $conn->query($sql);
				$room_row = $room_query->fetch_assoc();
				$_SESSION['error'] = '"' .$floor_row['floor_name']. '&nbsp;-&nbsp;' .$room_row['room_name']. '" Is Unavailable';	

				}else if ($occupants == $occupancy) {
			
			$sql = "SELECT * FROM floor_category WHERE id = '$floors'";
				$floor_query = $conn->query($sql);
				$floor_row = $floor_query->fetch_assoc();

				$sql = "SELECT * FROM room_category WHERE id = '$rooms'";
				$room_query = $conn->query($sql);
				$room_row = $room_query->fetch_assoc();
    
				$_SESSION['error'] = '"' .$floor_row['floor_name']. '&nbsp;-&nbsp;' .$room_row['room_name']. '" Is Full';


				

	}else{

		$sql = "SELECT *, students.student_id AS stud_id FROM students LEFT JOIN rooms ON rooms.floor_category_id=students.floor_id 
		AND rooms.room_category_id=students.room_id WHERE students.student_id = '$id'";
			$query = $conn->query($sql);
			$brow = $query->fetch_assoc();
			$occupants = $brow['occupants'];
			$status = $brow['status'];
			$bid = $brow['id'];

			$sql = "UPDATE rooms SET occupants = '$occupants'- 1 WHERE id = '$bid'";
			$conn->query($sql);

			$sql = "UPDATE rooms SET occupants = occupants + 1 WHERE floor_category_id = '$floors' AND room_category_id = '$rooms'";
			$conn->query($sql);
		
		
			$sql = "SELECT *, rooms.id AS ID FROM rooms LEFT JOIN floor_category ON floor_category.id=rooms.floor_category_id 
			LEFT JOIN room_category ON room_category.id=rooms.room_category_id 
			WHERE floor_category_id = '$floors' AND room_category_id = '$rooms'";
			$query = $conn->query($sql);
			$row = $query->fetch_assoc();
			$room_id = $row['ID'];


		$sql = "UPDATE students SET student_id = '$student_id', firstname = '$firstname', lastname = '$lastname', privilege = '$privilege', gender = '$gender', address = '$address', contact = '$contact', email = '$email', guardian = '$guardian', 
		guardian_contact = '$guardian_contact', floor_id = '$floors', room_id = '$rooms', actualroom_id = '$room_id', course_id = '$course' 
		WHERE student_id = '$id'";
		if($conn->query($sql)){



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