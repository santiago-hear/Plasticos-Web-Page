<?php
    $backdir = $_SERVER["HTTP_REFERER"];
    var_dump($backdir);

    header("Location: $backdir"); 

?>