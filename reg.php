<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    

<form method ="post" >

<input type="text" name="name" placeholder="username"><br><br>
<input type="password" name="password" placeholder="password"><br><br>
<input type="email" name="email" placeholder="email"><br><br>
<input type="submit" name="submit">

</form>

<?php

   include 'conn.php';
    
    if(isset ($_POST["submit"]))
    {
        $name = $_POST["name"];
        $password = $_POST["password"];
        $email=$_POST["email"];

        $sql = "SELECT * FROM `users` WHERE email='$email'  ";

        $sql_run = mysqli_query($conn, $sql);

        if($sql_run){

            $sql_row = mysqli_num_rows($sql_run);
        

        if($sql_row>0)
        {
            echo "email alreay exits";
        }else{

        


        $insert = "INSERT INTO `users` (`username`, `password`, `email`) VALUES ('$name','$password','$email')";
        $sql_insert = mysqli_query($conn, $insert);



        if($sql_insert){
            echo"succ";
        }
        
        else{
            echo "succ not";
        }
    }
        }

    }
?>


<!-- <table border =1 style="margin-top:10px;">
    <tr>
        <th>Id</th>
        <th>user</th>
        <th>Phone</th>
        <th>email</th>
        <th>Action</th>
        <th> update </th>
    </tr>

    <?php
       
       $sql = "SELECT * FROM `users`";

       $sql_run = mysqli_query($conn, $sql);

       $row = mysqli_num_rows($sql_run);

       if ($row>0){
        while($f = mysqli_fetch_array($sql_run)){

    ?>
            <tr>
                <td><?php echo $f['id'];?></td>
                <td><?php echo $f['username'];?></td>
                <td><?php echo $f['password'];?></td>
                <td><?php echo $f['email'];?></td>
                <td><a href="delete.php?ids=<?php echo $f['id'];?>">delete</td>
                <td><a href="up.php?ids=<?php echo $f['id'];?>">update</td>
            </tr>

        <?php
        }
       }else{
        echo "no data";
       }
    ?> -->

</body>
</html>





