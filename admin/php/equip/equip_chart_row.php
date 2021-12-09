<?php 
	include '../../includes/session.php';

	if(isset($_POST['id'])){
		$id = $_POST['id'];
		$sql = "SELECT * FROM equipment_chart LEFT JOIN equipments ON equipments.id=equipment_chart.equipment_id WHERE equipment_chart.id = '$id'";
		$query = $conn->query($sql);
		$row = $query->fetch_assoc();

		echo json_encode($row);
	}
?>