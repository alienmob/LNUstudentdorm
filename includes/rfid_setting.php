<?php
	include 'conn.php';
    session_start();
    if(ISSET($_POST['id'])){
        $eventid = $_POST['id'];
        
        $sql = "SELECT * FROM `rfid_setting`";
        $query = $conn->query($sql);
        $row = $query->fetch_assoc();

        $id = $row['setting_id'];
        if($id != 1){
            //UPDATE THE EVENT_ID COLUMN
            $sqlupdate = "UPDATE rfid_setting SET event_id = '$eventid'";
            $conn->query($sqlupdate);
            $_SESSION['success'] = 'Event Attendance successfully';
            echo 'Success';
        }
        else {
            //RETURN SESSION ERROR
            $_SESSION['error'] = $conn->error;
            echo 'ID is equal to one';
        }

    
        header('location:../events.php');
    }
?>
