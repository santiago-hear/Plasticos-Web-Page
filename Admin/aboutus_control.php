<?php

$aboutus = <<<HTML
    <textarea type='text' name='aboutus' class='form-control' id='aboutus-text' cols='5' rows='5' disabled>$company[AboutUs]</textarea>
HTML;

$mision = <<<HTML
    <textarea type='text' name='mission' class='form-control' id='mision-text' cols='5' rows='5' disabled>$company[Mission]</textarea>
HTML;

$vision = <<<HTML
    <textarea type='text' name='vision' class='form-control' id='vision-text' cols='5' rows='5' disabled>$company[Vision]</textarea>
HTML;

?>
<div class="container px-5">
    <div class="row my-5">
        <div class="col-sm-8">
            <h1 class="text-right">Información Conócenos</h1>
        </div>
        <div class="col-sm-4 my-auto">
            <button class="btn my-btn" id="editbtn">Editar</button>
        </div>
    </div>
    <?php $msg = isset($_GET['msg']) ? $_GET['msg'] : '';
        switch ($msg):
            case 'okupd':
                echo "<div class='alert alert-success'>La Información de Conóncenos fue actualiazda correctamente</div>";
                break;
            case 'errorupd':
                echo "<div class='alert alert-danger'>Ocurrió un error al actualizar la Información de Conóncenos</div>";
                break;
        endswitch;
    ?>
    <form class="proform" action="db_connection/update_aboutus.php" method="POST">
        <hr>
        <div class="form-group py-3">
            <label for="aboutus-text" class="col-form-label"><h4>¿Quienes somos?</h4></label>
            <div class="">
                <?php
                echo $aboutus;
                ?>
            </div>
        </div>
        <div class="form-group">
            <label for="mision-text" class="col-form-label"><h4>Misión:</h4></label>
            <div class="">
                <?php
                echo $mision;
                ?>
            </div>
        </div>
        <div class="form-group">
            <label for="vision-text" class="col-form-label"><h4>Visión:</h4></label>
            <div class="">
                <?php
                echo $vision;
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
        $('#aboutus-text').prop('disabled', false);
        $('#mision-text').prop('disabled', false);
        $('#vision-text').prop('disabled', false);
        $('#save').prop('disabled', false);
});
</script>