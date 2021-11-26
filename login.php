<?php
    session_start();
	include 'includes/session.php';

	if(isset($_POST['login'])){
		$student = $_POST['student'];
		$password = $_POST['password'];
		
		$sql = "SELECT * FROM students WHERE student_id = '$student'";
		$query = $conn->query($sql);
		$row = $query->fetch_assoc();
		$verify = $row['verified_at'];
		
		if($query->num_rows < 1){
			$_SESSION['error'] = 'Student ID does not exist';
		}else
		if($verify == NULL){
			$_SESSION['verify'] = 'This account is not yet verified, please check your email. Thank You!';
		}
		else{
		
			if(password_verify($password, $row['password'])){
				$_SESSION['student'] = $row['student_id'];
				$_SESSION['login'] = ''.$row['firstname'].'&nbsp;&nbsp;'.$row['lastname'].'';
			}
			else{
				$_SESSION['error'] = 'Password is Incorrect';
			}
		}
		
	}
	
	else{
		$_SESSION['error'] = 'Input Credentials First';
	}

	header('location: login_main.php');


?>