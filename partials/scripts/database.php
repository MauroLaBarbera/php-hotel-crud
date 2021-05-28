<?php 
/**
 * DATABASE CONNECTION
 */

 //CONNECTION INFO
 $host = 'localhost';
 $username = 'root';
 $password = 'root';
 $db_name = 'test';

 //OPEN CONNECTION
 $conn = new mysqli ($host, $username, $password, $db_name);
//var_dump($conn);

 //CHECK CONNECTION
 if ($conn && $conn->connect_error) {
     die ("Connection error: $conn->connect_error");
 }