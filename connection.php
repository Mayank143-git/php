<?php 

$_server = "localhost";
$username ="root";
$pass = "";
$dbname = "ranju";

$conn = mysqli_connect($_server, $username, $pass, $dbname);

if($conn){
    echo "conn succ";
}

else
{
    echo"unsucc";
}

?>