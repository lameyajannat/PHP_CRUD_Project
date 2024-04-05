<?php
include 'dbconnect.php';
$sql = "SELECT * FROM `bio_data`";

$result = mysqli_query($conn, $sql);
$data = mysqli_fetch_assoc($result);

?>