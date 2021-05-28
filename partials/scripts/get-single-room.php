<?php 
/**
 * GET DATA FOR ROOMs ARCHIVE
 */

 require_once __DIR__ . '/database.php'; 
//GET ROOM ID
 $id = empty($_GET['id']) ? false : $_GET['id'];

 if ($id) {
     
     $stmt = $conn->prepare("SELECT * FROM `stanze` WHERE `id` = ?");
     $stmt->bind_param('i' , $id);
     //EXECUTE
     $stmt->execute();
     //GET RESULTS
     $result = $stmt->get_result();

     if($result && $result->num_rows > 0) {
         $room = $result->fetch_assoc();
         //var_dump($room);
     }
 }

 //CLOSE DB CONNECTION
 $conn->close();