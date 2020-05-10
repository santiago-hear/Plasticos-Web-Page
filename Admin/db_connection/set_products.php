<?php
    include("connection.php");

    var_dump($_POST['nameproduct']);
    var_dump($_POST['category']);
    var_dump($_POST['price']);
    var_dump($_POST['amount']);

    #$backdir = $_SERVER["HTTP_REFERER"];
    
    #$insert_product = "
    #    INSERT INTO product SET ProductName='$_POST[categoryname]', Description='$_POST[description]'";

    #mysqli_query($database,$query);

    #header("Location: $backdir&msg=ok"); 
?>