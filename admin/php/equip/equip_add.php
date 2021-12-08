<?php
	include '../../includes/session.php';

	if(isset($_POST['add'])){
		$code = $_POST['code'];
		$title = $_POST['title'];
		$category = $_POST['category'];
		$quantity = $_POST['quantity'];
		$quantity_service = $_POST['quantity_service'];
		$quantity_unservice = $_POST['quantity_unservice'];
		$quantity_total = $_POST['quantity_total'];

		//creating code
		$letters = '';
		$numbers = '';
		foreach (range('A', 'Z') as $char) {
		    $letters .= $char;
		}
		for($i = 0; $i < 10; $i++){
			$numbers .= $i;
		}
		$code = substr(str_shuffle($letters), 0, 1).substr(str_shuffle($numbers), 0, 2);
		//

		$sql = "INSERT INTO equipments (code, category_id, title, quantity, quantity_service, quantity_unservice, quantity_total) VALUES ('$code', '$category', '$title', '$quantity_service', '$quantity_service', '$quantity_unservice', '$quantity_service' + '$quantity_unservice')";
		if($conn->query($sql)){
			$sql = "UPDATE equipments SET quantity_total = $quantity_service + $quantity_unservice, status = 0 WHERE id = '$bid'";
			$conn->query($sql);


			$sql = "SELECT * FROM equipments WHERE code = '$code'";
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

			$_SESSION['success'] = 'Equipment added successfully';

	
		// Activity log
		$sql = "SELECT * FROM admin WHERE id = '".$_SESSION['admin']."'";
		$query = $conn->query($sql);
		$row = $query->fetch_assoc();
		$admin = $row['id'];
		
		$sql = "INSERT INTO activity_logs (admin_id, details) VALUES ('$admin', 'Added ``".$code." - ".$title."`` in Equipment Record List.')";
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

	header('location: ../../pages/equipment.php');

?>