<?php
include 'connection.php';


$ids = $_GET['ids'];

if(isset($ids)){

$sql = "SELECT * FROM `name` WHERE id='$ids'";

$sql_run = mysqli_query($conn, $sql);

$row = mysqli_num_rows($sql_run);

if($row>0){

while($f = mysqli_fetch_array($sql_run)){

?>


<form method="post">
    <input type="text" name="user" value="<?php echo $f['name']; ?>">
    <input type="text" name="phone"  value="<?php echo $f['phone']; ?>">
    <input type="submit" name="submit">
</form>


<?php

if(isset($_POST['submit'])){
    $phone =$_POST['phone'];
    $user = $_POST['user'];

    $update ="UPDATE `name` SET `name`='$user',`phone`='$phone' WHERE id= '$ids' ";

    $update_q = mysqli_query($conn, $update);

    if ($update_q){
        header("location:registration.php");
    }


}



}



}

}

else{
    header("location:registration.php");
}




?>