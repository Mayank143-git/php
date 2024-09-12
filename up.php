<?php
include 'conn.php';

$xyz = $_GET['ids'];

if(isset($xyz)){

$sql = "SELECT * FROM `users` WHERE id='$xyz'";


$sql_run = mysqli_query($conn, $sql);

$row = mysqli_num_rows($sql_run);

if($row>0){

while($f = mysqli_fetch_array($sql_run)){

?>

<form method="post">
    <input type="text" name="name" value="<?php echo $f['username']; ?>">
    <input type="password" name="password"  value="<?php echo $f['password']; ?>">
    <input type="submit" name="submit">
</form>

<?php

if(isset($_POST['submit'])){
    $password =$_POST['password'];
    $name = $_POST['name'];

        $update ="UPDATE `users` SET 'username`='$name',`password`='$password' WHERE id='$xyz'";
        
    $update_q = mysqli_query($conn, $update);

    if ($update_q){
        header("location:reg.php");
    }


}

}

}

}

else{
    header("location:reg.php");
}

?>