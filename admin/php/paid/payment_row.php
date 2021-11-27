
<?php
include '../../includes/session.php';

if (isset($_POST['id'])) {

	$id = $_POST['id'];
    $response = array();
	$sql = "SELECT * FROM unpaid LEFT JOIN students ON students.student_id=unpaid.student_id WHERE unpaid.student_id = '$id'";
	$query = $conn->query($sql);
	while($row = $query->fetch_assoc()){
       $response[] = $row;
    }

	if(empty($response)){
		$sql = "SELECT * FROM students WHERE student_id = '$id'";
		$query = $conn->query($sql);
		while($row = $query->fetch_assoc()){
			$response[] = $row;
		}
	}
	
	echo json_encode($response);
}
?>