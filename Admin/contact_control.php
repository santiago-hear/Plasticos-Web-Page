<div class="container px-5">
    <div class="row my-5">
        <div class="col-sm-8">
            <h1 class="text-right">Información de Contacto</h1>
        </div>
        <div class="col-sm-4 my-auto">
            <button class="btn my-btn" id="editbtn">Editar</button>
        </div>
    </div>
    <?php $msg = isset($_GET['msg']) ? $_GET['msg'] : '';
        switch ($msg):
            case 'okupd':
                echo "<div class='alert alert-success'>La Información de contacto fue actualiazda correctamente</div>";
                break;
            case 'errorupd':
                echo "<div class='alert alert-danger'>Ocurrió un error al actualizar la información de contacto</div>";
                break;
        endswitch;
    ?>
    <form class="proform" action="db_connection/update_contact.php" method="POST">
        <hr>
        <div class="form-group row">
            <label for="bussinessname" class="col-sm-3 col-form-label">Nombre de la empresa:</label>
            <div class="col-sm-9"> 
                <input type='text' name='companyname' class='form-control' id='bussinessname' value='<?php echo utf8_encode($company['CompanyName']);?>' disabled>
            </div>
        </div>
        <div class="form-group row">
            <label for="phone_number" class="col-sm-3 col-form-label">Telefono Fijo:</label>
            <div class="col-sm-9">
                <?php
                echo "<input type='text' name='phonenumber' class='form-control' id='phone_number' value='$company[PhoneNumber]' disabled>";
                ?>
            </div>
        </div>
        <div class="form-group row">
            <label for="mobile_number" class="col-sm-3 col-form-label">Celular:</label>
            <div class="col-sm-9">
                <?php
                echo "<input type='text' name='mobilenumber' class='form-control' id='mobile_number' value='$company[MobileNumber]' disabled>";
                ?>
            </div>
        </div>
        <div class="form-group row">
            <label for="mail" class="col-sm-3 col-form-label">Correo Electrónico:</label>
            <div class="col-sm-9">
                <?php
                echo "<input type='email' name='mail' class='form-control' id='mail' value='$company[Email]' disabled>";
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
</div>
<script>
$('#editbtn').click(function(){
        $('#bussinessname').prop('disabled', false);
        $('#phone_number').prop('disabled', false);
        $('#mobile_number').prop('disabled', false);
        $('#mail').prop('disabled', false);
        $('#save').prop('disabled', false);
});
</script>