<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<form method="post">

<input type="text" name="fname" require><br>
<input type="email" name="email" require><br>
<button type="submit" name="submit"> submit</button>
</form>
</body>
</html>

<?php

// if(isset($_GET["submit"]))
// {
//     echo $_GET["fname<br>"];
//     echo $_GET["email"];


// }

if(isset($_POST["submit"]))
 {

    echo $_POST["fname"];
    echo "<br>";
   echo $_POST["email"];
 }

?>