<?php
include 'includes/session.php';


if (isset($_POST['add'])) {

	$student_id = $_SESSION['student'];
	$note = $_POST['note'];


		foreach ($_POST['code'] as $code) {
			
			

			if (!empty($code)) {
				
				$sql = "SELECT * FROM equipments WHERE code = '$code'";
				$query = $conn->query($sql);
				
					$brow = $query->fetch_assoc();
					$quantity = $brow['quantity'];
					$title = $brow['title'];
					$bid = $brow['id'];

					$sql = "SELECT * FROM pending WHERE equipment_id = '$bid'";
					$query = $conn->query($sql);
					$row = $query->fetch_assoc();
					$status = $row['status'];

					if ($quantity == 1) {
						$_SESSION['error'] = 'Last Stock for Equipment "' . $title . '" is on Pending';
						header('location: equipments.php');
					}else

					if ($quantity == 0) {
						$_SESSION['error'] = 'Equipment "' . $title . '" Is Unavailable';
						header('location: equipments.php');
					}else{

					$sql = "INSERT INTO pending (student_id, equipment_id, note) VALUES ('$student_id', '$bid', '$note')";
					if($conn->query($sql)){
						$_SESSION['success'] = 'Borrow Request is Pending for Approval';
						header('location: pending.php');
					}
					else{
						$_SESSION['error'] = $conn->error;
						header('location: equipments.php');
					}
					}	
				}	
				else{
					$_SESSION['error'] = 'Fill up add form first';
					header('location: equipments.php');
				}
				}
			}

?>