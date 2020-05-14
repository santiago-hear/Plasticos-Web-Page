<?php
    include("connection.php");

    $categoryId = isset($_GET['cid']) ? $_GET['cid'] : 'error';

    $delete_category = "DELETE FROM category WHERE CategoryId=$categoryId";

    $ok = mysqli_query($database,$delete_category);

    if ($ok):
        header("Location: http://localhost/Plasticos_la17/Admin/control_panel.php?view=categories&msg=okdel");
    else:
        header("Location: http://localhost/Plasticos_la17/Admin/control_panel.php?view=categories&msg=errordel");
    endif;
?>
