<?php
include 'view_query.php';
?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>PHP CRUD</title>
    <link href="style.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    <div class=" text-center p-5 text-danger-emphasis">
        <h1>STUDENT ID INFORMATION</h1>
    </div>

    <div class="container">

    <table class="table">
    <thead class="table table-striped color-danger">
        <tr>
            <th scope="col">ID</th>
            <th scope="col">First Name</th>
            <th scope="col">Last Name</th>
            <th scope="col">Father Name</th>
            <th scope="col">Mother Name</th>
            <th scope="col">Email</th>
            <th scope="col">Phone</th>
            <th scope="col">Password</th>
            <th scope="col">Address</th>
            <th scope="col">Action</th>
        </tr>
    </thead>
    <tbody>

        <?php while ($data = mysqli_fetch_assoc($result)){?>
        <tr>
        <td><?php echo $data['id'] ?></td>
        <td><?php echo $data['first_name'] ?></td>
        <td><?php echo $data['last_name'] ?></td>
        <td><?php echo $data['father_name'] ?></td>
        <td><?php echo $data['mother_name'] ?></td>
        <td><?php echo $data['email'] ?></td>
        <td><?php echo $data['phone'] ?></td>
        <td><?php echo $data['password'] ?></td>
        <td><?php echo $data['address'] ?></td>
        <td>
        
        <a class="btn btn-danger" href="delete_query.php?id=<?php echo $data['id'] ?>">Delete</a>
        <a class="btn btn-success" href="edit_info.php?id=<?php echo $data['id']?>">Update</a>
        </td>
        </tr>
        <?php } ?>
        </tbody>
        </table>

        <!-- Using JavaScript to Navigate -->
        <button class="btn btn-primary" onclick="window.location.href='index.php'">Add Student</button>

    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" 
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" 
    crossorigin="anonymous"></script>

</body>

</html>