<?php
	include '../../includes/session.php';

	if(isset($_POST['edit'])){
		$id = $_POST['id'];

		$title = $_POST['title'];
		$category = $_POST['category'];
		
		$sql = "UPDATE equipments SET title = '$title', category_id = '$category' WHERE id = '$id'";

		if($conn->query($sql)){
			$_SESSION['success'] = 'Equipment updated successfully';
		}
		else{
			$_SESSION['error'] = $conn->error;
		}
	}
	else{
		$_SESSION['error'] = 'Fill up edit form first';
	}

	header('location:../../pages/equipment.php');

?>