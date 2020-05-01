<?php
    $mail = "santi@plasticos.com";
    $name = "Santiago";
    $lastname = "Hernandez";
    $address = "Calle 1 # 1 -1";
?>
<div class="row">
    <div class="col-sm-8">
        <h1 class="text-right">Información Personal</h1>
    </div>
    <div class="col-sm-4 my-auto">
        <button class="btn my-btn" id="editbtn">Edit</button>
    </div>
</div>
<form class="py-5 proform">
    <div class="form-group row">
        <label for="mail" class="col-sm-3 col-form-label">Correo Electrónico:</label>
        <div class="col-sm-9">
            <?php echo "<label for='mail' class='col-sm-3 col-form-label'>$mail</label>" ?>
        </div>
    </div>
    <hr>
    <div class="form-group row">
        <label for="name" class="col-sm-3 col-form-label">Nombre:</label>
        <div class="col-sm-9">
            <?php
            echo "<input type='text' class='form-control' id='name' value='$name' disabled>";
            ?>
        </div>
    </div>
    <div class="form-group row">
        <label for="lastname" class="col-sm-3 col-form-label">Apellidos:</label>
        <div class="col-sm-9">
            <?php
            echo "<input type='text' class='form-control' id='lastname' value='$lastname' disabled>";
            ?>
        </div>
    </div>
    <div class="form-group row">
        <label for="address" class="col-sm-3 col-form-label">Dirección:</label>
        <div class="col-sm-9">
            <?php
            echo "<input type='text' class='form-control' id='address' value='$address' disabled>";
            ?>
        </div>
    </div>
    <fieldset class="form-group">
        <div class="row">
            <legend class="col-form-label col-sm-3 pt-0">Genero:</legend>
            <div class="col-sm-9">
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="gender" id="genderM" value="M" checked disabled>
                    <label class="form-check-label" for="genderM">
                        Masculino
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="gender" id="genderF" value="F" disabled>
                    <label class="form-check-label" for="genderF">
                        Femenino
                    </label>
                </div>
                <div class="form-check disabled">
                    <input class="form-check-input" type="radio" name="gender" id="genderO" value="O" disabled>
                    <label class="form-check-label" for="genderO">
                        Otro
                    </label>
                </div>
            </div>
        </div>
    </fieldset>
    <div class="form-group row">
        <label for="birthdate" class="col-sm-3 col-form-label">Fecha de Nacimiento:</label>
        <div class="col-sm-9">
            <?php
            echo "<input type='date' class='form-control' id='birthdate' value='2019-02-04' disabled>";
            ?>
        </div>
    </div>
    <div class="form-group row">
        <label for="state" class="col-sm-3 col-form-label">Departamento:</label>
        <div class="col-sm-9">
            <select id="state" class="form-control" disabled>
                <option>Caldas</option>
                <option>Amazonas</option>
            </select>
        </div>
    </div>
    <div class="form-group row">
        <label for="city" class="col-sm-3 col-form-label">Ciudad:</label>
        <div class="col-sm-9">
            <select id="city" class="form-control" disabled>
                <option>Manizales</option>
                <option>Villamaria</option>
            </select>
        </div>
    </div>
    <div class="form-group row">
        <legend class="col-form-label col-sm-3 pt-0"></legend>
        <div class="col-sm-9">
            <div class="form-check">
                <input class="form-check-input" type="checkbox" id="notify" disabled>
                <label class="form-check-label" for="notify">
                    Deseo recibir notificaciones a mi correo electrónico
                </label>
            </div>
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
        $('#name').prop('disabled', false);
        $('#lastname').prop('disabled', false);
        $('#address').prop('disabled', false);
        $('#genderM').prop('disabled', false);
        $('#genderF').prop('disabled', false);
        $('#genderO').prop('disabled', false);
        $('#birthdate').prop('disabled', false);
        $('#state').prop('disabled', false);
        $('#city').prop('disabled', false);
        $('#notify').prop('disabled', false);
        $('#save').prop('disabled', false);
});
</script>
<style>
.general_info
{
    background-color: #89BD9E;
}
</style>