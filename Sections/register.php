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
                <div class="valid-feedback">
                    ¡Bien hecho!
                </div>
            </div>
            <div class="form-group col-md-6">
                <label for="lastname">Apellidos: </label>
                <input type="text" class="form-control" id="lastname" placeholder="¿Cúales son tus apellidos?">
                <div class="valid-feedback">
                    ¿No te gusta tu apellido?, ¡no lo pongas!
                </div>
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="mail">Correo Electrónico:</label>
                <label class="ast" style="color:red;">*
                    <span class="ob">Campo Obligatorio</span>
                </label>
                <input type="email" onchange="verify_mail()" class="form-control" id="mail" name="mail" placeholder="ejemplo@ejemplo.com" required>
                <div class="invalid-feedback">
                    ¡Vaya! parece que esto no es un correo electrónico.
                </div>
            </div>
            <div class="form-group col-md-6">
                <label for="mailconfirm">Confirmar correo electrónico:</label>
                <label class="ast" style="color:red;">*
                    <span class="ob">Campo Obligatorio</span>
                </label>
                <input type="email" onchange="verify_mail()" class="form-control" id="mailconfirm" name="mailconfirm" placeholder="ejemplo@ejemplo.com" required>
                <span id="errormail"></span>
                <div class="invalid-feedback">
                    ¡Vaya! debes confirmar tu correo.
                </div>
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="paswd">Contraseña:</label>
                <label class="ast" style="color:red;">*
                    <span class="ob">Campo Obligatorio</span>
                </label>
                <input type="password" onchange="verify_pswd()" class="form-control" id="paswd" name="paswd" placeholder="Contraseña" required>
                <small id="paswd" class="text-muted">
                    La contraseña debe tener al entre 8 y 16 caracteres, 
                    al menos un dígito, al menos una minúscula y al menos una mayúscula.
                    NO puede tener otros símbolos.
                </small>
                <div class="invalid-feedback">
                    No ingresaste una contraseña.
                </div>
            </div>
            <div class="form-group col-md-6">
                <label for="paswdconfirm">Confirmar contraseña:</label>
                <label class="ast" style="color:red;">*
                    <span class="ob">Campo Obligatorio</span>
                </label>
                <input type="password" onchange="verify_pswd()" class="form-control" id="paswdconfirm" name="paswdconfirm" placeholder="Confirmar Contraseña" required>
                <span id="errorpaswd"> </span>
                <span id="errorpattern"> </span>
                <div class="invalid-feedback">
                    No confirmaste tu contraseña
                </div>
            </div>
        </div>
        <div class="form-group">
            <label for="address">Dirección:</label>
            <input type="text" class="form-control" id="address" placeholder="Carrera 10 # 10-10">
            <div class="valid-feedback">
                Tal vez te guste poner tu dirección.
            </div>
        </div>
        <fieldset class="form-group">
            <div class="row">
                <legend class="col-form-label col-sm-1 pt-0">Genero:</legend>
                <div class="col-sm-5">
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="gender" id="genderM" value="M" checked>
                        <label class="form-check-label" for="genderM">
                            Masculino
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="gender" id="genderF" value="F">
                        <label class="form-check-label" for="genderF">
                            Femenino
                        </label>
                    </div>
                    <div class="form-check disabled">
                        <input class="form-check-input" type="radio" name="gender" id="genderO" value="O">
                        <label class="form-check-label" for="genderO">
                            Otro
                        </label>
                    </div>
                </div>
                <div class="col-sm-6">
                    <label for="address">Fecha de Nacimiento:</label>
                    <input type="date" class="form-control">
                    <div class="valid-feedback">
                        ¡Bien hecho!
                    </div>
                </div>
            </div>
        </fieldset>
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
            <div class="input-group">
                <div class="input-group-prepend">
                    <span class="input-group-text">Foto</span>
                </div>
                <div class="custom-file">
                    <input type="file" class="custom-file-input" id="photo">
                    <label class="custom-file-label" for="photo">Seleccionar Archivo</label>
                </div>
            </div>
        </div>
        <div class="form-group">
            <div class="form-check">
                <label class="form-check-label">
                    <input type="checkbox" class="form-check-input" id="terms" value="1" onclick="javascript:ValidateCheck(this);">
                    Acepto el tratamiento de datos personales.
                </label>
                <label class="ast" style="color:red;">*
                    <span class="ob">Campo Obligatorio</span>
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
    function verify_mail()
    {
        var email = document.getElementById('mail').value;
        var emailconfirm = document.getElementById('mailconfirm').value;
        var d = document.registerform;
        if(email !== emailconfirm)
        {
            document.getElementById('errormail').innerHTML = "Los correos electrónicos deben ser iguales.";
            d.regbtn.disabled = true;
        }
        else
        {
            document.getElementById('errormail').innerHTML = "";
            if(terms.checked==true){
                d.regbtn.disabled = false;
            }else{
                d.regbtn.disabled = true;
            }
        }
    }
    function verify_pswd()
    {
        var password = document.getElementById('paswd').value;
        var passwordconfirm = document.getElementById('paswdconfirm').value;
        var d = document.registerform;
        var expresion= /^(?=\w*\d)(?=\w*[A-Z])(?=\w*[a-z])\S{8,16}$/
        var eq;
        if(password !== passwordconfirm)
        {
            document.getElementById('errorpaswd').innerHTML = "Las contraseñas deben ser iguales.";
            d.regbtn.disabled = true;
            eq = false;
        }
        else
        {
            document.getElementById('errorpaswd').innerHTML = "";
            if(terms.checked==true){
                d.regbtn.disabled = false;
            }else{
                d.regbtn.disabled = true;
            }
        }
        if (!expresion.test(password))
        { 
            document.getElementById("errorpattern").innerHTML = "La contraseña no cumple con los requisitos";
            d.regbtn.disabled = true;
        }
        else
        {
            document.getElementById("errorpattern").innerHTML = "";
            if(terms.checked==true && eq != false){
                d.regbtn.disabled = false;
            }else{
                d.regbtn.disabled = true;
            }
        }
    }
</script>
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
