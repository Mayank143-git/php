<?php
session_start();

if(isset($_SESSION['email'])){
    header("location:login.php");
}
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
 
 <h1>Welcome to our <?php echo $_SESSION['email']; ?></h1>

</body>
      <script src="./js/bootstrap.min.js"></script>
</html>