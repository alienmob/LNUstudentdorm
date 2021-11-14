<?php
	include '../../includes/session.php';

	if(isset($_POST['delete'])){
		$id = $_POST['id'];

// Activity log
$sqlname = "SELECT * FROM violations LEFT JOIN students ON students.student_id=violations.student_id WHERE violations.id = '$id'";
$query1 = $conn->query($sqlname);
$row1 = $query1->fetch_assoc();
$firstname = $row1['firstname'];
$lastname = $row1['lastname'];

$sql = "SELECT * FROM admin WHERE id = '".$_SESSION['admin']."'";
$query = $conn->query($sql);
$row = $query->fetch_assoc();
$admin = $row['id'];

$sql = "INSERT INTO activity_logs (admin_id, details) VALUES ('$admin', 'Deleted Violation Record of ``".$firstname." ".$lastname."``.')";
$conn->query($sql);
// End activity log

		$sql = "DELETE FROM violations WHERE id = '$id'";
		if($conn->query($sql)){

			

			$_SESSION['success'] = 'Violation deleted successfully';
		}
		else{
			$_SESSION['error'] = $conn->error;
		}
	}
	else{
		$_SESSION['error'] = 'Select item to delete first';
	}

	header('location: ../../pages/violation.php');
	
?>