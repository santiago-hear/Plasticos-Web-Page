<?php
    include("connection.php");

    $Place = ($_POST['place'] !='') ? "'$_POST[place]'" : 'NULL';
    $Address = ($_POST['address'] !='') ? "'$_POST[address]'" : 'NULL';
    $City = ($_POST['city'][0] !='') ? "'".$_POST['city'][0]."'" : 'NULL';
    $Frame = ($_POST['frame'] !='') ? $_POST['frame'] : '';

    $update_company = "UPDATE company SET 
                            Place = $Place, 
                            address = $Address,
                            CityId = $City
                        WHERE CompanyId= 1";

    $ok = mysqli_query($database,$update_company);

    if($ok):
        if ($Frame != ''):
            $exp1 = "/height=\"...\"/i";
            $exp2 = "/width=\"...\"/i";
            preg_match($exp1,$Frame,$coin);
            preg_match($exp2,$Frame,$coin2);
            $Frame = str_replace($coin[0],"height=\"500\"",$Frame);
            $Frame = str_replace($coin2[0],"width=\"1000\"",$Frame);
            file_put_contents("../../plain_text_files/framelocation.txt",$Frame);
        endif; 
        header("Location: http://localhost/Plasticos_la17/Admin/control_panel.php?view=location&msg=okupd");
    else:
        header("Location: http://localhost/Plasticos_la17/Admin/control_panel.php?view=location&msg=errorupd"); 
    endif;  
?>