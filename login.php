<?php
session_start();

?>

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

    ?>
 

 <div class="container mt-5">
        <h2 class="text-center mb-4">Login Page</h2>
        <form method="post">
          <div class="form-group">
            <label for="email">email address</label>
            <input type="email" class="form-control" name="email" placeholder="email">
          </div>
          <div class="form-group">
            <label for="password">Password</label>
            <input type="password" class="form-control" name="password" placeholder="Password">
          </div>
          <button type="submit" name="submit" class="btn btn-primary">submit</button>
        </form>
      </div>

      <script src="./js/bootstrap.min.js"></script>

</body>


<?php
include "conn.php";

if(isset($_POST['submit'])){

$email = $_POST['email'];
$password = $_POST['password'];

$sql = "SELECT * FROM `userdata` WHERE email='$email'";

$sql_run = mysqli_query($conn, $sql);

if($sql_run){

    $sql_row = mysqli_num_rows($sql_run);

    if($sql_row>0){

        while($f = mysqli_fetch_array($sql_run)){
            if($f['password'] == $password){

                $_SESSION['email'] = $f['email'];

                header("location:profile.php");
            }else{
                echo "password wrong";
            }
        }
    }else{
        echo "data not exits please go register page";
    }
}




}

?>

