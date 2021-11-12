<?php
	// session_start();
	// session_destroy();

	// header('location: index.php');
?>


<?php include '../includes/session.php'; 
$admin = $user['id'];
$sql = "INSERT INTO activity_logs (admin_id, details) VALUES ('$admin', 'Signed Out')";
$conn->query($sql);
?>


<?php
session_start();

unset($_SESSION['admin']);
header('location: ../index.php');


?>