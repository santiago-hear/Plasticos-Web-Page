<?php
    $msg= file_get_contents("../plain_text_files/welcomemsg.txt");

    $welcome_msg = <<<HTML
    <textarea type='text' name='msg' class='form-control' id='msg-text' cols='5' rows='5' disabled>$msg</textarea>
HTML;
?>
<div class="container px-5">
    <div class="row my-5">
        <div class="col-sm-8">
            <h1 class="text-right">Otra Información</h1>
        </div>
        <div class="col-sm-4 my-auto">
            <button class="btn my-btn" id="editbtn">Editar</button>
        </div>
    </div>
    <?php echo (isset($_GET['msg'])) ? "<div class='alert alert-success'>La sección fue actualizada correctamente</div>" : "";?>
    <form class="proform" action="edit_section/set_others.php" method="POST">
        <hr>
        <div class="form-group py-3">
            <label for="msg-text" class="col-form-label"><h4>Mensaje de bienvenida: </h4></label>
            <div class="">
                <?php
                echo $welcome_msg;
                ?>
            </div>
        </div>
        <div class="form-group">
            <div class="">
                <button type="submit" class="btn my-btn" id="save" disabled>Guardar Cambios</button>
            </div>
        </div>
    </form>
</div>
<script>
$('#editbtn').click(function(){
        $('#msg-text').prop('disabled', false);
        $('#save').prop('disabled', false);
});
</script>