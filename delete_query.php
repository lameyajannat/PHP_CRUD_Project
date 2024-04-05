<?php

$id =$_GET['id'];

include 'dbconnect.php';

$sql = "DELETE FROM `bio_data` WHERE id=$id";


if (mysqli_query($conn, $sql)) {
    header('Location: view_data.php');
}

?>