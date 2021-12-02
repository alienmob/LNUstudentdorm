<?php
	include '../../includes/session.php';

	if(isset($_POST['sub'])){
		
		$id = $_POST['id'];
		$quantity_unservice = $_POST['quantity_unservice'];
		$added = "Marked ";
		$added2 = " as Unserviceable Equipment";

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
		$title2 = $row['title'];
		$quantity = $row['quantity'];
		$quantity_service = $row['quantity_service'];

		if($quantity <= $quantity_unservice || $quantity_service <= $quantity_unservice){
			$_SESSION['error'] = 'Given Quantity is Invalid';
		}else{


		$sql = "INSERT INTO reports (equipment_reports, details) VALUES ('$title2', '$added' '$quantity_unservice' ' ' '$title2' '$added2')";
		if($conn->query($sql)){
			$sql = "UPDATE equipments SET quantity_unservice = $quantity_unservice + quantity_unservice, quantity = quantity - $quantity_unservice, quantity_service = quantity_service - $quantity_unservice, status = 0 WHERE title = '$title2'";
			$conn->query($sql);

			$_SESSION['success'] = $quantity_unservice . ' ' . $title2 . ' marked as Unserviceable equipment/s';

				// Activity log
	$sql = "SELECT * FROM admin WHERE id = '".$_SESSION['admin']."'";
	$query = $conn->query($sql);
	$row = $query->fetch_assoc();
	$admin = $row['id'];
	
	$sql = "INSERT INTO activity_logs (admin_id, details) VALUES ('$admin', 'Marked ``".$quantity_unservice."`` ".$title2." as for Replacement in Equipment quantity Management.')";
	$conn->query($sql);
	// End activity log

		}
		else{
			$_SESSION['error'] = $conn->error;
		}
	}
	}	
	else{
		$_SESSION['error'] = 'Fill up add form first';
	}

	header('location: ../../pages/equipment_u.php');

?>