<?php
	include '.../includes/session.php';

	if(isset($_POST['delete'])){
		$id = $_POST['id'];
		$sql = "DELETE FROM floor_category WHERE id = '$id'";
		if($conn->query($sql)){
			$_SESSION['success'] = 'Floor Category deleted successfully';
		}
		else{
			$_SESSION['error'] = $conn->error;
		}
	}
	else{
		$_SESSION['error'] = 'Select item to delete first';
	}

	header('location: .../pages/floor_category.php');
	
?>