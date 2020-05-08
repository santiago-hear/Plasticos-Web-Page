<?php
    $msg= strip_tags("!Gracias por tu visita! <br>
    Queremos darte lo mejor de nuestros productos, 
    nuestra meta es garantizar tu satisfacción así 
    que puedes crear una cuenta y dar el visto bueno 
    a tu compra o si tienes dudas de tu compra, puedes
    dejar tu mensaje y responderemos lo mas pronto posible.");


    $wellcome_msg = <<<HTML
    <textarea type='text' class='form-control' id='msg-text' cols='5' rows='5' disabled>
        $msg
    </textarea>
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
    <form class="proform" action="control_panel.php?view=contact" method="POST">
        <hr>
        <div class="form-group py-3">
            <label for="msg-text" class="col-form-label"><h4>Mensaje de bienvenida: </h4></label>
            <div class="">
                <?php
                echo $wellcome_msg;
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