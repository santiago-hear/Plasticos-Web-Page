<?php
    include("connection.php");

    $Place = ($_POST['place'] !='') ? "'$_POST[place]'" : 'NULL';
    $Address = ($_POST['address'] !='') ? "'$_POST[address]'" : 'NULL';
    $City = ($_POST['city'][0] !='') ? "'".$_POST['city'][0]."'" : 'NULL';
    $Frame = ($_POST['frame'] !='') ? "'$_POST[frame]'" : 'NULL';
    
    $update_company = "UPDATE company SET 
                            Place = $Place, 
                            address = $Address,
                            CityId = $City,
                            FrameLocation = $Frame
                        WHERE CompanyId= 1";

    $ok = mysqli_query($database,$update_company);

    if($ok):
        header("Location: http://localhost/Plasticos_la17/Admin/control_panel.php?view=location&msg=okupd");
    else:
        header("Location: http://localhost/Plasticos_la17/Admin/control_panel.php?view=location&msg=errorupd"); 
    endif;  
?>