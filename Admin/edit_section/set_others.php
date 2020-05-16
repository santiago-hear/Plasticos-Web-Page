<?php
    file_put_contents("../../plain_text_files\welcomemsg.txt",$_POST['msg']);

    header("Location: http://localhost/Plasticos_la17/Admin/control_panel.php?view=others&msg=okupd");
?>