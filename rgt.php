<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./css/bootstrap.min.css">
</head>
<body>
    <?php
    include "navbar.php";
  5
    ?>
 

 <div class="container mt-5">
        <h2 class="text-center mb-4">Registration Form</h2>
        <form method="post">
          <div class="form-group">
            <label for="username">Username</label>
            <input type="text" class="form-control" name="username" placeholder="Enter username">
          </div>
          <div class="form-group">
            <label for="email">email</label>
            <input type="email" class="form-control" name="email" placeholder="email">
          </div>
          <div class="form-group">
            <label for="password">Password</label>
            <input type="password" class="form-control" name="password" placeholder="Password">
          </div>
          <button type="submit" name="submit" class="btn btn-primary">Register</button>
        </form>
      </div>

      <script src="./js/bootstrap.min.js"></script>



      <?php

   include 'conn.php';
    
    if(isset ($_POST["submit"]))
    {
        $username = $_POST["username"];
        $email = $_POST["email"];
        $password = $_POST["password"];

        
   $sql = "SELECT * FROM `userdata` WHERE email='$email'";

   $sql_run = mysqli_query($conn, $sql);

   if($sql_run){

   $sql_row = mysqli_num_rows($sql_run);

   if($sql_row>0){
    echo "email already exits";

   }else{
        $insert = "INSERT INTO `userdata`(`username`, `email`, `password`) VALUES ('$username','$email','$password')";
        $sql_insert = mysqli_query($conn, $insert);

        if($sql_insert){
            echo"register succ";
        }else{
            echo "unsucc";
        }
    }

  }

}
?>

</body>
</html>