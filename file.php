<form method="post" enctype=multipart/form-data>
<input type="file" name="file">
<input type="submit" name="submit">
 
</form>

<?php

if(isset($_POST['submit'])){
    $file = $_FILES['file'];

    $file_path = $file['tmp_name'];
    $file_name = $file['name'];
    $file_erro = $file['error'];

    if($file_erro ==0){

        $upload = 'upload/'.$file_name;

        if(move_uploaded_file($file_path,$upload)){
            echo"file succ";
        }
        else{
            echo "not succ";
        }
    }
    else{
        echo "error file";
    }
}

?>