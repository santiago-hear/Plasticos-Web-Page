<?php
    include("connection.php");

    $CompanyName = isset($_POST['companyname']) ? $_POST['companyname'] : NULL;
    $Phone = isset($_POST['phonenumber']) ? $_POST['phonenumber'] : NULL;
    $Mobile = isset ($_POST['mobilenumber']) ? $_POST['mobilenumber'] : NULL;
    $Email = isset ($_POST['mail']) ? $_POST['mail'] : NULL;
    
    $update_company = "UPDATE company SET 
                            CompanyName ='$CompanyName', 
                            PhoneNumber ='$Phone',
                            MobileNumber = '$Mobile',
                            Email = '$Email'
                        WHERE CompanyId= 1";

    var_dump($update_company);

    $ok = mysqli_query($database,$update_company);

    if($ok):
        header("Location: http://localhost/Plasticos_la17/Admin/control_panel.php?view=contact&msg=okupd");
    else:
        header("Location: http://localhost/Plasticos_la17/Admin/control_panel.php?view=contact&msg=errorupd"); 
    endif;  
?>