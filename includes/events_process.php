<?php


include('conn.php');


 $sql = "SELECT * FROM event_attendance LEFT JOIN students ON students.rfid = event_attendance.rfid_id 
 LEFT JOIN event ON event.id = event_attendance.event_id
 LEFT JOIN event_category ON event_category.id = event.event_category_id ORDER BY event_attendance.id DESC";

 $query = $conn->query($sql);
 while ($row = $query->fetch_assoc()) {
  
  echo "
       <tr>
        <td class='hidden'></td>
        <td>".$row['student_id']."</td>
        <td>".$row['event_name']. ' | ' .date('M d, Y', strtotime($row['date']))."</td>
        <td>".$row['firstname']. ' ' .$row['lastname']."</td>
        <td>" . date('M d, Y', strtotime($row['event_date'])) . "</td>
        <td>" . $row['time_in'] . "</td>
        <td>" . $row['time_out'] . "</td>

       </tr>
      ";
 }
 ?>