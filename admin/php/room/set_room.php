<?php
include 'C:\xampp\htdocs\LNUstudentdorm\admin\includes\conn.php';

require_once 'C:\xampp\htdocs\LNUstudentdorm\admin\includes\config.php';




        $sql = "SELECT * FROM rooms";
		$query = $conn->query($sql);
		while($row = $query->fetch_assoc()){
            $rid = $row['id'];
            $occ = $row['occupants'];
            $sql = "INSERT INTO room_chart (room_id, occ) VALUES ('$rid', '$occ')";
            $conn->query($sql);

}
				

?>
