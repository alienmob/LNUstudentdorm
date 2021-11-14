<?php
include '../../includes/session.php';

if (isset($_POST['add'])) {
	$student = $_POST['student'];
	$decline = $_POST['decline'];
	

	$sql = "SELECT * FROM students WHERE student_id = '$student'";
	$query = $conn->query($sql);
	if ($query->num_rows < 1) {
		if (!isset($_SESSION['error'])) {
			$_SESSION['error'] = array();
		}
		$_SESSION['error'] = 'Student not found';
	} else {
		
		$added = 0;
		$pending_id = $_POST['id'];
		$sql = "SELECT * FROM pending WHERE id = $pending_id AND status != 1";
		$query = $conn->query($sql);
		$prow = $query->fetch_assoc();
		$pid = $prow['id'];
		
		foreach ($_POST['code'] as $code) {
			if (!empty($code)) {
				$sql = "SELECT * FROM equipments WHERE code = '$code' AND status != 1";
				$query = $conn->query($sql);
				$row = $query->fetch_assoc();
				$title = $row['title'];

				if ($query->num_rows > 0) {
					
					if ($conn->query($sql)) {
						$added++;
			
						$sql = "UPDATE pending SET decline = '$decline', status = 2 WHERE id = '$pid' AND status != 1";
						$conn->query($sql);
					

// Activity log
$sqlname = "SELECT * FROM students WHERE student_id = '$student'";
$query1 = $conn->query($sqlname);
$row1 = $query1->fetch_assoc();
$firstname = $row1['firstname'];
$lastname = $row1['lastname'];

$sql = "SELECT * FROM admin WHERE id = '".$_SESSION['admin']."'";
$query = $conn->query($sql);
$row = $query->fetch_assoc();
$admin = $row['id'];

$sql = "INSERT INTO activity_logs (admin_id, details) VALUES ('$admin', 'Declined ".$firstname." ".$lastname."`s borrow request for ".$title.".')";
$conn->query($sql);
// End activity log
						
					} else {
						if (!isset($_SESSION['error'])) {
							$_SESSION['error'] = array();
						}
						$_SESSION['error'][] = $conn->error;
					}
				} else {
					if (!isset($_SESSION['error'])) {
						$_SESSION['error'] = array();
					}
					$_SESSION['error'][] = 'Equipment with code - ' . $code . ' unavailable';
				}
			}
		}

		if ($added > 0) {
			$equipments = ($added == 1) ? 'Request' : 'Requests';
			$_SESSION['success'] =   ' ' . $equipments . '  Declined';
		}
	}
} else {
	$_SESSION['error'] = 'Fill up add form first';
}

header('location: ../../pages/pending.php');
