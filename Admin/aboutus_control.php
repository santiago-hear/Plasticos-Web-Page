<?php

$aboutus = <<<HTML
    <textarea type='text' class='form-control' id='aboutus-text' cols='5' rows='5' disabled> 
        Somos una empresa fundada el 10 de Agosto de 2020
        por Carlos Mario, idea que nació a raíz de la 
        relación con el area de pásticos y desechables
        en gran parte de la familia, y quienes son fabricantes
        de una amplia variedad de productos que nosotros distribuimos.
    </textarea>
HTML;

$mision = <<<HTML
    <textarea type='text' class='form-control' id='mision-text' cols='5' rows='5' disabled>
        Somos una empresa fundada el 10 de Agosto de 2020
        por Carlos Mario, idea que nació a raíz de la 
        relación con el area de pásticos y desechables
        en gran parte de la familia, y quienes son fabricantes
        de una amplia variedad de productos que nosotros distribuimos.
    </textarea>
HTML;

$vision = <<<HTML
    <textarea type='text' class='form-control' id='vision-text' cols='5' rows='5' disabled>
        Somos una empresa fundada el 10 de Agosto de 2020
        por Carlos Mario, idea que nació a raíz de la 
        relación con el area de pásticos y desechables
        en gran parte de la familia, y quienes son fabricantes
        de una amplia variedad de productos que nosotros distribuimos.
    </textarea>
HTML;

?>

<div class="row my-5">
    <div class="col-sm-8">
        <h1 class="text-right">Información Conócenos</h1>
    </div>
    <div class="col-sm-4 my-auto">
        <button class="btn my-btn" id="editbtn">Editar</button>
    </div>
</div>
<form class="proform" action="control_panel.php?view=contact" method="POST">
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
<script>
$('#editbtn').click(function(){
        $('#aboutus-text').prop('disabled', false);
        $('#mision-text').prop('disabled', false);
        $('#vision-text').prop('disabled', false);
        $('#save').prop('disabled', false);
});
</script>