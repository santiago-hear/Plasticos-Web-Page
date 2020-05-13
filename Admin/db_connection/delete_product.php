<?php
    include("connection.php");

    $productId = isset($_GET['pid']) ? $_GET['pid'] : 'error';

    $delete_product = "DELETE FROM product WHERE ProductId=$productId";

    $ok = mysqli_query($database,$delete_product);

    if ($ok):
        header("Location: http://localhost/Plasticos_la17/Admin/control_panel.php?view=products&msg=okdel");
    else:
        header("Location: http://localhost/Plasticos_la17/Admin/control_panel.php?view=products&msg=errordel");
    endif;
?>