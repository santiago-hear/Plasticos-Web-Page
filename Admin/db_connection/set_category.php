<?php
    include("connection.php");

    $backdir = $_SERVER["HTTP_REFERER"];
    
    $query = "INSERT INTO category SET CategoryName='$_POST[categoryname]', Description='$_POST[description]'";

    mysqli_query($database,$query);

    header("Location: $backdir&msg=ok"); 
?>