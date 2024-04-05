<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "student_info";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $database);

 //Check connection
if (!$conn) {
 die("Connection failed: " . mysqli_connect_error());
//  }

if($conn){
     echo 'success';

 }
?>