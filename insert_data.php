<?php
include 'dbconnect.php';

if (isset($_POST['submit'])) {
    // Escape user inputs for security
    $first_name =$_POST['first_name'];
    $last_name =$_POST['last_name'];
    $father_name =$_POST['father_name'];
    $mother_name =$_POST['mother_name'];
    $email =$_POST['email'];
    $phone =$_POST['phone'];
    $password =$_POST['password'];
    $address = $_POST['address'];

    // Attempt insert query execution
    $sql = "INSERT INTO `bio_data`( `first_name`, `last_name`, `father_name`, `mother_name`, `email`, `phone`, `password`, `address`) VALUES ('$first_name', '$last_name', '$father_name', '$mother_name', '$email', '$phone', '$password', '$address')";

    if (mysqli_query($conn, $sql)) {
       header('Location: view_data.php');
    } else {
        echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
    }
}

// Close connection
mysqli_close($conn);


?>