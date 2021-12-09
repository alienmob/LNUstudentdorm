<?php 
	include '../../includes/session.php';


    $sql = "SELECT * FROM equipment_chart INNER JOIN equipments ON equipments.id=equipment_chart.equipment_id ORDER BY equipment_chart.id DESC LIMIT 20";
	$query = $conn->query($sql);
	while($row = $query->fetch_assoc()){
		$response[] = $row;
	}

	echo json_encode($response);

?>