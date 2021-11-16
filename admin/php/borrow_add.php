<?php
include '../includes/session.php';

if (isset($_POST['add'])) {
	$student = $_POST['student_id'];
	$feedback = $_POST['feedback'];
	

	$sql = "SELECT * FROM students WHERE student_id = '$student'";
	$query = $conn->query($sql);
	if ($query->num_rows < 1) {
		if (!isset($_SESSION['error'])) {
			$_SESSION['error'] = array();
		}
		$_SESSION['error'][] = 'Student not found';
	} else {
		$row = $query->fetch_assoc();
		$student_id = $row['student_id'];
		

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
				
				if ($query->num_rows > 0) {
					$brow = $query->fetch_assoc();
					$quantity = $brow['quantity'];
					$bid = $brow['id'];
					$title1 = $brow['title'];
			

					$sql = "INSERT INTO borrow (student_id, equipment_id) VALUES ('$student_id', '$bid')";
					if ($conn->query($sql)) {
						$added++;
						$sql = "UPDATE equipments SET quantity = $quantity - 1, quantity_used = quantity_used + 1, status = 0 WHERE id = '$bid'";
						$conn->query($sql);
						$sql = "UPDATE pending SET feedback = '$feedback', status = $added WHERE id = '$pid' AND status != 1";
						$conn->query($sql);
						

						$sql = "SELECT * FROM equipments WHERE code = '$code'";
						$query = $conn->query($sql);

						$sql = "DELETE FROM pending WHERE status = 1";
						if ($query->num_rows > 0) {
							$quantity = $brow['quantity'];

							if ($quantity == 0) {
								$sql = "UPDATE equipments SET  status = 1 WHERE id = '$bid'";
								$conn->query($sql);
							}
						}

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

$sql = "INSERT INTO activity_logs (admin_id, details) VALUES ('$admin', 'Approved ".$firstname." ".$lastname."`s borrow request for ".$title1.".')";
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
			$equipments = ($added == 1) ? 'Equipment' : 'Equipments';
			$_SESSION['success'] = $added . ' ' . $equipments . ' successfully borrowed';
		}
	}
} else {
	$_SESSION['error'] = 'Fill up add form first';
}

header('location: ../pages/borrow.php');
