<?php
	session_start();
	include '../includes/conn.php';

		
	
	if(isset($_POST['login'])){
		$username = $_POST['username'];
		$password = $_POST['password'];

		
		$sql = "SELECT * FROM admin WHERE username = '$username'";
		$query = $conn->query($sql);
		

		
		

		if($query->num_rows < 1){
			$_SESSION['error'] = 'Username does not exist!';
			
		}
		else{
			$row = $query->fetch_assoc();

			if(password_verify($password, $row['password'])){
				$_SESSION['admin'] = $row['id'];
				
				$_SESSION['login'] = 'Welcome!&nbsp;&nbsp;&nbsp;&nbsp;'.$row['firstname'].'&nbsp;&nbsp;'.$row['lastname'].'';


	$sql = "SELECT * FROM admin WHERE id = '".$_SESSION['admin']."'";
	$query = $conn->query($sql);
	$row = $query->fetch_assoc();
	$admin = $row['id'];

	$sql = "INSERT INTO activity_logs (admin_id, details) VALUES ('$admin', 'Signed In')";
	$conn->query($sql);
				
			}
			
			else{
				$_SESSION['error'] = 'Password is Incorrect!';
				
			}
		}
		
	}
	else{
		$_SESSION['error'] = 'Input Admin Credentials First';
	}

	header('location: ../index.php');

?>