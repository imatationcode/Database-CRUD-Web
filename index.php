<?php
include 'connect.php';
if(isset($_POST['submit']))
{
    $name=$_POST['name'];
    $email=$_POST['email'];
    $mobile=$_POST['mobile'];
    $password=$_POST['passwrod']; 

    $sql = "INSERT INTO empdetails (name, email, mobile, password) 
    VALUES ('$name', '$email', '$mobile', '$password')";

    $result = mysqli_query($conn, $sql); 

    if ($result) {
        // echo "New record created successfully";
        header('location:display.php');
    } else {
        die("Insertion failed: " . mysqli_error($conn));
    }
}
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Softmonks Details</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  </head>
  <body>
    <div class="container my-5" >
        <form method="post">
           <div class="mb-3">
                <label >Name</label>
                <input type="text" class="form-control" 
                placeholder="Enter your Name" name="name" autocomplete="off">
            </div>
            <div class="mb-3">
                <label >Email Address</label>
                <input type="email" class="form-control" 
                placeholder=" Email" name="email" autocomplete="off">
            </div>
            <div class="mb-3">
                <label >Mobile</label>
                <input type="text" class="form-control" 
                placeholder="Mobile Number" name="mobile" autocomplete="off">
            </div>
            <div class="mb-3">
                <label >Passwrod</label>
                <input type="password" class="form-control" 
                placeholder="Passwrod" name="passwrod" autocomplete="off">
            </div>

            <button type="submit" class="btn btn-primary" name="submit">Submit</button>
        </form>
   </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>