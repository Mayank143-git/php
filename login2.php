<?php

session_start();

?>

<form method="post">
    
<input type="text" name="name">
<input type="email" name="email">
<input type="password" name="password">
<input type="submit" value="login" name="submit">

</form>

<!-- <a href="home.php"> home page</a> -->

<?php

include 'conn.php';

if(isset($_POST['submit']))
{
$name = $_POST['name'];
$eamail =$_POST['email'];
$passwoed=$_POST['passwoed']

$sql = "SELECT * FROM `users` WHERE name = '$name'";
$sql_run= mysqli_query($conn, $sql);

$sql_row =mysqli_num_rows($sql_run);

if($sql_row>0){
    while($data = mysqli_fetch_array($sql_run)){

        if($data['password'] == $password){
            $_SESSION['abc'] = $data ['users'];
            header ("location:homepage.php");
        }
        else{
            echo "you are not secc";
        }
    }
}
}

?>