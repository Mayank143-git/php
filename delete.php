<?php
include 'conn.php';

$delete = $_GET['ids'];

$sql = "DELETE FROM `users` WHERE id='$delete'";

$sql_run = mysqli_query($conn, $sql);

if($sql_run){
    header("location:reg.php");
}else{
    echo "error";
}





?>