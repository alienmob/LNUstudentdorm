<?php 
	include '../../includes/session.php';

	if(isset($_POST['id'])){
		$id = $_POST['id'];
		$sql = "SELECT *, complaints.id AS studid, complaints.date AS cdate FROM complaints LEFT JOIN students ON students.student_id=complaints.student_id 
        LEFT JOIN floor_category ON floor_category.id=students.floor_id 
        LEFT JOIN room_category ON room_category.id=students.room_id 
        LEFT JOIN course ON course.id=students.course_id 
		WHERE complaints.id = '$id'";
        
		$query = $conn->query($sql);
		$row = $query->fetch_assoc();

		echo json_encode($row);
	}
?>