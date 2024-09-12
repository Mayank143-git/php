<?php
include 'connection.php';

$idsram = $_GET['ids'];

$sql = "DELETE FROM `name` WHERE id='$idsram'";

$sql_run = mysqli_query($conn, $sql);

if($sql_run){
    header("location:registration.php");
}else{
    echo "error";
}





?>