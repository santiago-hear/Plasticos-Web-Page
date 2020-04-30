<div class="container py-5">
    <h1 class="display-3 text-center">Registro</h1>
    <form class="needs-validation py-5" name="registerform" action="index.php?section=register" method="GET" novalidate >
        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="name">Nombre:</label>
                <label class="ast" style="color:red;">*
                    <span class="ob">Campo Obligatorio</span>
                </label>
                <input type="text" class="form-control register" id="name" placeholder="¿Cúal es tu nombre?" required>
                <div class="invalid-feedback">
                    Campo Obligatorio
                </div>
            </div>
            <div class="form-group col-md-6">
                <label for="lastname">Apellidos: </label>
                <input type="text" class="form-control" id="lastname" placeholder="¿Cúales son tus apellidos?">
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="mail">Correo Electrónico:</label>
                <label class="ast" style="color:red;">*
                    <span class="ob">Campo Obligatorio</span>
                </label>
                <input type="email" class="form-control" id="mail" name="mail" placeholder="ejemplo@ejemplo.com" required>
                <div class="invalid-feedback">
                    Campo Obligatorio
                </div>
            </div>
            <div class="form-group col-md-6">
                <label for="mailconfirm">Confirmar correo electrónico:</label>
                <label class="ast" style="color:red;">*
                    <span class="ob">Campo Obligatorio</span>
                </label>
                <input type="email" class="form-control" id="mailconfirm" name="mailconfirm" placeholder="ejemplo@ejemplo.com" required>
                <div class="invalid-feedback">
                    Campo Obligatorio
                </div>
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="paswd">Contraseña:</label>
                <label class="ast" style="color:red;">*
                    <span class="ob">Campo Obligatorio</span>
                </label>
                <input type="password" class="form-control" id="paswd" name="paswd" placeholder="Contraseña" required>
                <small id="paswd" class="text-muted">La contraseña debe tener por lo menos 8 Caracteres con 2 numeros</small>
                <div class="invalid-feedback">
                    Campo Obligatorio
                </div>
            </div>
            <div class="form-group col-md-6">
                <label for="paswdconfirm">Confirmar contraseña:</label>
                <label class="ast" style="color:red;">*
                    <span class="ob">Campo Obligatorio</span>
                </label>
                <input type="password" class="form-control" id="paswdconfirm" name="paswdconfirm" placeholder="Confirmar Contraseña" required>
                <div class="invalid-feedback">
                    Campo Obligatorio
                </div>
            </div>
        </div>
        <div class="form-group">
            <label for="address">Dirección:</label>
            <input type="text" class="form-control" id="address" placeholder="Carrera 10 # 10-10">
        </div>
        <div class="form-group">
            <label for="gendertype">Genero: </label>
            <div class="form">
                <div class="form-check-inline mx-3">
                    <label for="gendertype" class="form-check-label">
                        <input type="radio" class="form-check-input" value="M" name="gender" id="gendertype" checked>
                        Masculino
                    </label>
                </div>
                <div class="form-check-inline mx-3">
                    <label for="gendertype" class="form-check-label">
                        <input type="radio" class="form-check-input" value="F" name="gender" id="gendertype">
                        Femenino
                    </label>
                </div>
                <div class="form-check-inline mx-3">
                    <label for="gendertype" class="form-check-label">
                        <input type="radio" class="form-check-input" value="O" name="gender" id="gendertype">
                        Otro
                    </label>
                </div>
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="state">Departamento:</label>
                <select id="state" class="form-control">
                    <option selected disabled>Escoger departamento</option>
                    <option>Caldas</option>
                    <option>Amazonas</option>
                </select>
            </div>
            <div class="form-group col-md-6">
                <label for="city">Ciudad:</label>
                <select id="city" class="form-control">
                <option selected disabled>Escoger ciudad</option>
                    <option>Caldas</option>
                    <option>Amazonas</option>
                </select>
            </div>
        </div>
        <div class="form-group">
            <label for="photo">Foto:</label>
            <input type="file" class="form-control" id="photo">
        </div>
        <div class="form-group">
            <div class="form-check">
                <label class="form-check-label">
                    <input type="checkbox" class="form-check-input" value="1" onclick="javascript:ValidateCheck(this);">
                    Acepto el tratamiento de datos personales.
                </label>
                <div class="invalid-feedback">
                    Debes aceptar los terminos
                </div>
            </div>
            <div class="form-check">
                <label class="form-check-label">
                    <input type="checkbox" class="form-check-input" value="true">
                    Quiero recibir notificaciones a mi correo.
                </label>
            </div>
        </div>
        <button type="submit" name="regbtn" class="btn my-btn" disabled>Registrarse</button>
    </form>
</div>
<script>
// Example starter JavaScript for disabling form submissions if there are invalid fields
(function() {
  'use strict';
  window.addEventListener('load', function() {
    // Fetch all the forms we want to apply custom Bootstrap validation styles to
    var forms = document.getElementsByClassName('needs-validation');
    // Loop over them and prevent submission
    var validation = Array.prototype.filter.call(forms, function(form) {
      form.addEventListener('submit', function(event) {
        if (form.checkValidity() === false) {
          event.preventDefault();
          event.stopPropagation();
        }
        form.classList.add('was-validated');
      }, false);
    });
  }, false);
})();
</script>
<script>
function ValidateCheck(checkbox){
	var d = document.registerform;
	if(checkbox.checked==true){
		d.regbtn.disabled = false;
	}else{
		d.regbtn.disabled = true;
	}
}
</script>
