<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    

<form>

<input type="text" name="name"><br>
<input type="number" name="phone"><br>
<input type="submit" name="submit">

</form>

<?php

   include 'connection.php';
    
    if(isset ($_GET["submit"]))
    {
        $name = $_GET["name"];
        $phone = $_GET["phone"];


        $insert = "INSERT INTO `name`(`name`, `phone`, `address`) VALUES ('$name', '$phone', 'sdfasdf')";
        $insert_run = mysqli_query($conn, $insert);

        if($insert_run){
            echo"succ";
        }else{
            echo "succ not";
        }
    }

?>


<table border=1 style="margin-top:10px;">
    <tr>
        <th>Id</th>
        <th>user</th>
        <th>Phone</th>
        <th>Action</th>
    </tr>

    <?php
       
       $sql = "SELECT * FROM `name`";

       $sql_run = mysqli_query($conn, $sql);

       $row = mysqli_num_rows($sql_run);

       if ($row>0){
        while($f = mysqli_fetch_array($sql_run)){

    ?>
            <tr>
                <td><?php echo $f['id'];?></td>
                <td><?php echo $f['name'];?></td>
                <td><?php echo $f['phone'];?></td>
                <td><a href="del.php?ids=<?php echo $f['id'];?>">delete</td>
                <td><a href="update.php?ids=<?php echo $f['id'];?>">update</td>
            </tr>

        <?php
        }
       }else{
        echo "no data";
       }
    ?>

</body>
</html>





?>