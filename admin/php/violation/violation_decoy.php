<?php
	include 'C:\xampp\htdocs\LNUstudentdorm\admin\includes\conn.php';


		

    $sql = "INSERT INTO violations (student_id, date, violation, punishment) VALUES ('1800567', '03/12/2021', 'nakaguba' , 'bayad')";
    $conn->query($sql);




?>