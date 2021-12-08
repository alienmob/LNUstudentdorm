<?php
	include '../../includes/session.php';

	if(isset($_POST['add'])){
		$id = $_POST['id'];
		$quantity_service = $_POST['quantity_service'];
		$added = "Added ";
		$added2 = " as Serviceable Equipment";
		//creating code
		// $letters = '';
		// $numbers = '';
		// foreach (range('A', 'Z') as $char) {
		//     $letters .= $char;
		// }
		// for($i = 0; $i < 10; $i++){
		// 	$numbers .= $i;
		// }
		// $code = substr(str_shuffle($letters), 0, 1).substr(str_shuffle($numbers), 0, 2);
		//
	$sql = "SELECT * FROM equipments WHERE id = '$id'";
	$query = $conn->query($sql);
	$row = $query->fetch_assoc();
	$title = $row['title'];

		$sql = "INSERT INTO reports (equipment_reports, details) VALUES ('$title', '$added' '$quantity_service' ' ' '$title' '$added2')";
		if($conn->query($sql)){
			$sql = "UPDATE equipments SET quantity = $quantity_service + quantity, quantity_service = $quantity_service + quantity_service, quantity_total = $quantity_service + quantity_total, status = 0 WHERE id = '$id'";
			$conn->query($sql);

			$sql = "SELECT * FROM equipments WHERE id = '$id'";
			$query = $conn->query($sql);
			$row = $query->fetch_assoc();
			$e_id = $row['id'];
			$available = $row['quantity'];
			$being_used = $row['quantity_used'];
			$eservice = $row['quantity_service'];
			$unservice = $row['quantity_unservice'];
			$equipment_total = $row['quantity_total'];

			$sql = "INSERT INTO equipment_chart (equipment_id, available, being_used, eservice, unservice, equipment_total) VALUES ('$e_id', '$available', '$being_used', '$eservice', '$unservice', '$equipment_total')";
			$conn->query($sql);

			$_SESSION['success'] = $quantity_service . ' ' . $title . ' successfully added';


	// Activity log
	$sql = "SELECT * FROM admin WHERE id = '".$_SESSION['admin']."'";
	$query = $conn->query($sql);
	$row = $query->fetch_assoc();
	$admin = $row['id'];
	
	$sql = "INSERT INTO activity_logs (admin_id, details) VALUES ('$admin', 'Added ``".$quantity_service."`` new stock/s for ".$title." in Equipment quantity Management.')";
	$conn->query($sql);
	// End activity log

		}
		else{
			$_SESSION['error'] = $conn->error;
		}
	}	
	else{
		$_SESSION['error'] = 'Fill up add form first';
	}

	header('location: ../../pages/equipment_u.php');

?>