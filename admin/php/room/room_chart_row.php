<?php 
	include '../../includes/session.php';


    $sql = "SELECT * FROM room_chart INNER JOIN rooms ON rooms.id=room_chart.room_id ORDER BY room_chart.id ASC LIMIT 20";
	$query = $conn->query($sql);
	while($row = $query->fetch_assoc()){
		$response[] = $row;
	}

	echo json_encode($response);

?>