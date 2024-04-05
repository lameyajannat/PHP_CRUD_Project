<?php
include 'dbconnect.php';
$id = $_GET['id'];

$sql = "SELECT * FROM `bio_data`  WHERE id=$id";
$result = mysqli_query($conn, $sql);

($data = mysqli_fetch_assoc($result))
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP CRUD</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<body>
    <div class="container mt-5">
        <div class="row justify-content-center">
          <div class="col-md-6">
             <h1 class="text-center p-4 bg--subtle">STUDENT ID VERIFICATION</h1>

            <form method="POST">
              <div class="form-row">
                <div class="form-group col-md-6">
                  <label for="firstName">First Name</label>
                  <input type="text" class="form-control" id="firstName" placeholder="First name" name='first_name'>
                </div>

                <div class="form-group col-md-6">
                  <label for="lastName">Last Name</label>
                  <input type="text" class="form-control" id="lastName" placeholder="Last name" name='last_name'>
                </div>
              </div>

              <div class="form-row">
                <div class="form-group col-md-6">
                  <label for="firstName">Father Name</label>
                  <input type="text" class="form-control" id="fatherName" placeholder="Father name" name='father_name'>
                </div>

                <div class="form-group col-md-6">
                  <label for="lastName">Mother Name</label>
                  <input type="text" class="form-control" id="motherName" placeholder="Mother name" name='mother_name'>
                </div>
              </div>

              <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="email">Email</label>
                    <input type="email" class="form-control" id="email" placeholder="Email" name='email'>
                  </div>
    
                  <div class="form-group col-md-6">
                    <label for="password">Password</label>
                    <input type="password" class="form-control" id="password" placeholder="Password" name='password'>
                  </div>
    
            </div>
              
            <div class="form-row">
                <div class="form-group col-md-4">
                    <label for="phone">Phone</label>
                    <input type="text" class="form-control" id="phone" placeholder="Phone" name='phone'>
                  </div>
    
                  <div class="form-group col-md-8">
                    <label for="address">Address</label>
                    <input type="text" class="form-control" id="address" placeholder="Address" name='address'>
                  </div>

            </div>
              
              <button type="submit" class="btn btn-success">Submit</button>
              <button type="reset" class="btn btn-danger" name="submit">Reset</button>
            </form>

          </div>
        </div>
      </div>

      <script src="https://cdn.jsdelivr.net/npm/
      bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
       integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" 
       crossorigin="anonymous"></script>
       
</body>
</html>