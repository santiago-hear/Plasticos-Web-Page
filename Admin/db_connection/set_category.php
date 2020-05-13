<?php
    include("connection.php");

    $backdir = $_SERVER["HTTP_REFERER"];
    
    $query = "INSERT INTO category SET CategoryName='$_POST[categoryname]', Description='$_POST[description]'";

    $ok = mysqli_query($database,$query);

    if($ok):
        header("Location: $backdir&msg=okadd");
    else:
        header("Location: $backdir&msg=erroradd"); 
    endif;  
?>