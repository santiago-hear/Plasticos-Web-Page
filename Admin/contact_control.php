<div class="row my-5">
    <div class="col-sm-8">
        <h1 class="text-right">Información de Contacto</h1>
    </div>
    <div class="col-sm-4 my-auto">
        <button class="btn my-btn" id="editbtn">Editar</button>
    </div>
</div>
<form class="proform" action="control_panel.php?view=contact" method="POST">
    <hr>
    <div class="form-group row">
        <label for="bussinessname" class="col-sm-3 col-form-label">Nombre de la empresa:</label>
        <div class="col-sm-9">
            <?php
            echo "<input type='text' class='form-control' id='bussinessname' value='Platicos La 17' disabled>";
            ?>
        </div>
    </div>
    <div class="form-group row">
        <label for="phone_number" class="col-sm-3 col-form-label">Telefono Fijo:</label>
        <div class="col-sm-9">
            <?php
            echo "<input type='text' class='form-control' id='phone_number' value='036 882 47 58' disabled>";
            ?>
        </div>
    </div>
    <div class="form-group row">
        <label for="mobile_number" class="col-sm-3 col-form-label">Celular:</label>
        <div class="col-sm-9">
            <?php
            echo "<input type='text' class='form-control' id='mobile_number' value='+57 314 625 3419' disabled>";
            ?>
        </div>
    </div>
    <div class="form-group row">
        <label for="mail" class="col-sm-3 col-form-label">Correo Electrónico:</label>
        <div class="col-sm-9">
            <?php
            echo "<input type='email' class='form-control' id='mail' value='plasticosla17@gmail.com' disabled>";
            ?>
        </div>
    </div>
    <div class="form-group row">
        <div class="col-sm-3"></div>
        <div class="col-sm-9">
            <button type="submit" class="btn my-btn" id="save" disabled>Guardar Cambios</button>
        </div>
    </div>
</form>
<script>
$('#editbtn').click(function(){
        $('#bussinessname').prop('disabled', false);
        $('#phone_number').prop('disabled', false);
        $('#mobile_number').prop('disabled', false);
        $('#mail').prop('disabled', false);
        $('#save').prop('disabled', false);
});
</script>