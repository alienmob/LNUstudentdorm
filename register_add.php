<?php
	include 'includes/conn.php';
	session_start();
	if(isset($_POST['register'])){

		$student_id = $_POST['student_id'];
		$fname = $_POST['fname'];
		$lname = $_POST['lname'];
        $mname = $_POST['mname'];
        $bdate = $_POST['bdate'];
        $gender = $_POST['gender'];
		$course = $_POST['course'];
        $contact = $_POST['contact'];
        $privilege = $_POST['privilege'];
        $email = $_POST['email'];
        $filename = $_FILES['photo']['name'];
		$address = $_POST['address'];
        $guardian = $_POST['guardian'];
		$gcontact = $_POST['gcontact'];

		if(!empty($filename)){
			move_uploaded_file($_FILES['photo']['tmp_name'], '../images/'.$filename);	
		}

        $sql = "SELECT * FROM students WHERE student_id = '$student_id'";
        $query = $conn->query($sql);
        if ($query->num_rows > 0) {
			$row = $query->fetch_assoc();
			$_SESSION['error'] = 'Student ID "' .$row['student_id']. '" Is already in the Database';
		}
		else {
			$sql = "INSERT INTO register (student_id, lname, fname, mname, bdate, gender, course, contact, privilege, email, photo, address, guardian, gcontact) VALUES 
			('$student_id', '$lname', '$fname', '$mname', '$bdate', '$gender', '$course', '$contact', '$privilege', '$email', '$filename', '$address', '$guardian', '$gcontact')";
			if($conn->query($sql)){
				$_SESSION['success'] = 'Registration sumbitted successfully and pending for approval!';
			}
		}

    }
	else{
		$_SESSION['error'] = 'Fill up add form first';
	}

	header('location: register.php');
?>