<?php
	include 'includes/session.php';

	if(isset($_POST['add'])){
        $student_id = $_SESSION['student'];
		$note = $_POST['note'];
		
		$sql = "INSERT INTO complaints (student_id, complaint) VALUES ('$student_id', '$note')";
		if($conn->query($sql)){
			$_SESSION['success'] = 'Complaint added successfully';

		}
		else{
			$_SESSION['error'] = $conn->error;
		}
	}	
	else{
		$_SESSION['error'] = 'Fill up add form first';
	}

	header('location: complaint.php');

?>