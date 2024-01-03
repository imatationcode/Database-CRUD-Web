<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Softmonks Details</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
     rel="stylesheet"
      integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN"
       crossorigin="anonymous">

</head>
<body>
    <div class="coontainer my-5 mx-5">
    <button type="submit" class="btn btn-primary my-5" name="submit"> 
        <a href="index.php" class="text-light">ADD Employee</a> </button>

        <table class="table">
  <thead>
    <tr>
      <th scope="col">Id</th>
      <th scope="col">Name</th>
      <th scope="col">Email</th>
      <th scope="col">Mobile</th>
      <th scope="col">Password</th>
      
    </tr>
  </thead>
  <tbody>

    <?php
        include 'connect.php';
        $sql = "select * from empdetails ";
        $result = mysqli_query($conn, $sql);
         if($result){
            while($row=mysqli_fetch_assoc($result))
            {
                $id = $row['Id'];
                $name = $row['Name'];
                $email = $row['Email'];
                $mobile = $row['Mobile'];
                $password = $row['Password'];
                echo '<tr>
                <th scope="row">'.$id.'</th>
                <td>'.$name.'</td>
                <td>'.$email.'</td>
                <td>'.$mobile.'</td>
                <td>'.$password.'</td>
                <td my-2  >
                  <button class="btn btn-primary" ><a href="modify.php? modifyid='.$id.'" class="text-light">Modify</a></button>
                  <button class="btn btn-danger"><a href="delete.php? deleteid='.$id.'" class="text-light">Delete</a></button>
                </td>
              </tr>';


            }
            
         }

    ?>
    
  </tbody>
</table>

    </div>
    
</body>
</html>