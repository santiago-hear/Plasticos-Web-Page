<?php
    include("connection.php");

    $aboutus = isset($_POST['aboutus']) ? $_POST['aboutus'] : NULL;
    $mission = isset($_POST['mission']) ? $_POST['mission'] : NULL;
    $vision = isset ($_POST['vision']) ? $_POST['vision'] : NULL;
    
    $update_aboutus = "UPDATE company SET 
                            AboutUs ='$aboutus', 
                            Mission ='$mission',
                            Vision = '$vision'
                        WHERE CompanyId= 1";

    $ok = mysqli_query($database,$update_aboutus);

    if($ok):
        header("Location: http://localhost/Plasticos_la17/Admin/control_panel.php?view=aboutus&msg=okupd");
    else:
        header("Location: http://localhost/Plasticos_la17/Admin/control_panel.php?view=aboutus&msg=errorupd"); 
    endif;  
?>