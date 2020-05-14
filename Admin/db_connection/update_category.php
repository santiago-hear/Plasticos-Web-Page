<?php
    include("connection.php");

    $cid = $_POST['cid'];
    $cName = isset($_POST['categoryname']) ? $_POST['categoryname'] : NULL;
    $Description = isset($_POST['description']) ? $_POST['description'] : NULL;
    
    $update_category = "UPDATE category SET CategoryName='$cName', Description='$Description' WHERE CategoryId= $cid";

    $ok = mysqli_query($database,$update_category);

    if($ok):
        header("Location: http://localhost/Plasticos_la17/Admin/control_panel.php?view=categories&msg=okupd");
    else:
        header("Location: http://localhost/Plasticos_la17/Admin/control_panel.php?view=categories&msg=errorupd"); 
    endif;  
?>