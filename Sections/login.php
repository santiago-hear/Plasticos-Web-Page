<div class="container py-5">
    <h1 class="display-3 text-center">Inciar Sesión</h1>
    <form class="needs-validation py-5" novalidate>
        <div class="form-group">
            <label for="mail">Correo Electrónico:</label>
            <input type="email" class="form-control" id="mail" placeholder="micorreo@example.com" required>
            <div class="invalid-feedback">
                El formato es incorrecto o no has ingresado tu correo.
            </div>
        </div>
        <div class="form-group">
            <label for="paswd">Contraseña:</label>
            <div class="input-group pb-2">
                <input type="password" class="form-control" id="paswd" placeholder="Ingrese su contraseña" aria-describedby="view" required>
                <div class="input-group-append">
                    <a type="button" class="input-group-text icon-eye" id="viewbtn" onclick="ViewPassword()"></a>
                </div>
                <div class="invalid-feedback">
                    Ingrese su contraseña.
                </div>
            </div>
            <a href="" class="text-info">Olvidé mi contraseña</a>
        </div>
        <div class="form-group">
            <div class="form-check">
                <input class="form-check-input" type="checkbox" value="" id="invalidCheck">
                <label class="form-check-label" for="invalidCheck">
                    Recordar mi correo electrónico.
                </label>
            </div>
        </div>
  <button class="btn my-btn" type="submit">Iniciar Sesión</button>
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
    function ViewPassword()
    {
        var password = document.getElementById("paswd");
        var icon = document.getElementById("viewbtn");
        if(password.type == "password"){
            password.type = "text";
            icon.classList.replace("icon-eye","icon-eye-blocked");
        }
        else{
            password.type = "password";
            icon.classList.replace("icon-eye-blocked","icon-eye");
        }
    }
</script>