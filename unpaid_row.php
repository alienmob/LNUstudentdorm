
<?php
include 'includes/session.php';

if (isset($_POST['id'])) {

	$id = $_POST['id'];
	$sql = "SELECT *, unpaid.id AS id, unpaid.status AS pstat FROM unpaid LEFT JOIN students ON students.student_id=unpaid.student_id WHERE unpaid.id = '$id' ORDER BY date_from, date_to DESC";
	$query = $conn->query($sql);
	$row = $query->fetch_assoc();

	echo json_encode($row);
}
?>