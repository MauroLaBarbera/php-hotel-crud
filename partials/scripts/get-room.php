<?php 
/**
 * GET DATA FOR ROOMs ARCHIVE
 */

 require_once __DIR__ . '/database.php'; 

 //GET ROOMS
 $sql = "SELECT `id` , `room_number` , `floor` FROM `stanze`";
 $result = $conn->query($sql);
 

 if ($result && $result-> num_rows > 0) {
    $rooms = [];

    while ($row = $result->fetch_assoc()) {
        // PUSH IN ARRAY ROOMS
        $rooms[] = $row;
    }
    //var_dump($rooms);
 } else {
     echo "query error";
 }

 //CLOSE DB CONNECTION
 $conn->close();