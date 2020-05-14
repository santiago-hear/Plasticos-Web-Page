<?php
    include("connection.php");

    $cName = isset($_POST['categoryname']) ? $_POST['categoryname'] : NULL;
    $Description = isset($_POST['description']) ? $_POST['description'] : NULL;
    
    $set_category = "INSERT INTO category SET CategoryName='$cName', Description='$Description'";

    $ok = mysqli_query($database,$set_category);

    if($ok):
        header("Location: http://localhost/Plasticos_la17/Admin/control_panel.php?view=categories&msg=okadd");
    else:
        header("Location: http://localhost/Plasticos_la17/Admin/control_panel.php?view=categories&msg=erroradd"); 
    endif;  
?>