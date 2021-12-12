
<?php
include '../../includes/session.php';

if (isset($_POST['id'])) {

	$id = $_POST['id'];
    $response = array();
	$sql = "SELECT * FROM equip_room LEFT JOIN rooms ON rooms.id=equip_room.room_id LEFT JOIN floor_category ON floor_category.id=rooms.floor_category_id 
	LEFT JOIN room_category ON room_category.id=rooms.room_category_id WHERE equip_room.room_id = '$id'";
	$query = $conn->query($sql);
	while($row = $query->fetch_assoc()){
       $response[] = $row;
    }

	if(empty($response)){
		$sql = "SELECT * FROM rooms WHERE id = '$id'";
		$query = $conn->query($sql);
		while($row = $query->fetch_assoc()){
			$response[] = $row;
		}
	}
	
	echo json_encode($response);
}
?>