<?php
    $place = "Plaza de Mercado";
    $address = "Calle 22 # 16 - 23 local 122";
    $frame = ""
?>
<div class="container px-5">
    <div class="row my-5">
        <div class="col-sm-7">
            <h1 class="text-right">Ubicación</h1>
        </div>
        <div class="col-sm-5 my-auto">
            <button class="btn my-btn" id="editbtn">Editar</button>
        </div>
    </div>
    <form class="proform" action="control_panel.php?view=contact" method="POST">
        <hr>
        <div class="form-group py-3">
            <label for="place-text" class="display-5"><h5>Lugar:</h5></label>
            <div>
                <?php
                echo "<input class='form-control' id='place-text' type='text' value='$place' disabled>"; 
                ?>
            </div>
        </div>
        <div class="form-group">
            <label for="address-text" class="col-form-label"><h5>Direccion:</h5> </label>
            <div>
                <?php
                echo "<input class='form-control' id='address-text' type='text' value='$address' disabled>";
                ?>
            </div>
        </div>
        <div class="form-group">
            <label for="city-text" class="col-form-label"><h5>Ciudad:</h5></label>
            <div>
                <select id="city-text" class="form-control" disabled>
                    <option selected>Manizales</option>
                    <option>Manzanares</option>
                </select>
            </div>
        </div>
        <div class="form-group">
            <label for="state-text" class="col-form-label"><h5>Departamento:</h5></label>
            <div>
                <select id="state-text" class="form-control" disabled>
                    <option selected>Caldas</option>
                    <option>Amazonas</option>
                </select>
            </div>
        </div>
        <div class="form-group">
            <label for="frame-text" class="col-form-label"><h5>Frame de Ubicación:</h5></label>
            <div>
                <input class='form-control' id='frame-text' type='text' aria-describedby='frame' placeholder="Ingrese un frame de ubicacion" disabled>
            </div>
            <small class="text-muted" id="frame">
                Ingrese a google maps y busque su nueva ubicación,
                haga click en "compartir", luego en "insertar un mapa"
                finalmente, haga click en "copiar html" y lo pega en este campo.
            </small>
            
        </div>
        <div class="form-group">
            <div>
                <button type="submit" class="btn my-btn" id="save" disabled>Guardar Cambios</button>
            </div>
        </div>
        <div class="text-center mt-5">
            <h5>Ubicación Actual:</h5>
            <div>
                <iframe height="500px" width="1000px"
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d993.5499803443171!2d-75.51832817080246!3d5.071320999769954!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zNcKwMDQnMTYuOCJOIDc1wrAzMScwNC4wIlc!5e0!3m2!1ses-419!2sco!4v1588109342729!5m2!1ses-419!2sco" 
                    frameborder="0" allowfullscreen="true" aria-hidden="false" tabindex="0">
                </iframe>
            </div>
        </div>
    </form>
</div>
<script>
$('#editbtn').click(function(){
        $('#place-text').prop('disabled', false);
        $('#address-text').prop('disabled', false);
        $('#city-text').prop('disabled', false);
        $('#state-text').prop('disabled', false);
        $('#frame-text').prop('disabled', false);
        $('#save').prop('disabled', false);
});
</script>