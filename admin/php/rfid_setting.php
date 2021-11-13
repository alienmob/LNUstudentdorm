<?php
	include '../includes/session.php';

	if(isset($_POST['setting'])){

		$rfid = $_POST['rfid'];

        if($rfid == 1){
		$sql = "UPDATE rfid_setting SET setting_id = '$rfid', event_id = NULL, status = 0";

        } else {
        $sql = "UPDATE rfid_setting SET setting_id = '$rfid', status = 1";
        }

		if($conn->query($sql)){

        $sql = "SELECT * FROM setting WHERE id = '$rfid'";
		$query = $conn->query($sql);
		$row = $query->fetch_assoc();
        $function = $row['function'];

			$_SESSION['success'] = 'RFID Function changed to "'.$function.'" mode';
		}
		else{
			$_SESSION['error'] = $conn->error;
		}
	}
	else{
		$_SESSION['error'] = 'Fill up edit form first';
	}

	header('location:../pages/home.php');

?>