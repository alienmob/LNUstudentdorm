<?php
	include '../../includes/session.php';

	if(isset($_POST['add'])){
		$student_id = $_POST['student_id'];
		$violation = $_POST['violation'];
		$date = $_POST['date'];
		
	$sql = "SELECT * FROM students WHERE student_id = '$student_id'";
	$query = $conn->query($sql);
	if ($query->num_rows < 1) {
		if (!isset($_SESSION['error'])) {
			$_SESSION['error'] = array();
		}
		$_SESSION['error'] = 'Student Number not found';
	} else {


		$sql = "INSERT INTO violations (student_id, date, violation) VALUES ('$student_id', '$date', '$violation')";
		if($conn->query($sql)){

			// Activity log
		$sqlname = "SELECT * FROM students WHERE student_id = '$student_id'";
		$query1 = $conn->query($sqlname);
		$row1 = $query1->fetch_assoc();
		$firstname = $row1['firstname'];
		$lastname = $row1['lastname'];

		$sql = "SELECT * FROM admin WHERE id = '".$_SESSION['admin']."'";
		$query = $conn->query($sql);
		$row = $query->fetch_assoc();
		$admin = $row['id'];

		$sql = "INSERT INTO activity_logs (admin_id, details) VALUES ('$admin', 'Added Violation Record for ``".$firstname." ".$lastname."``.')";
		$conn->query($sql);
		// End activity log

			$_SESSION['success'] = 'Violation Recorded successfully';
		}
		else{
			$_SESSION['error'] = $conn->error;
		}
	}
	}	
	else{
		$_SESSION['error'] = 'Fill up add form first';
	}

	header('location: ../../pages/violation.php');

?>