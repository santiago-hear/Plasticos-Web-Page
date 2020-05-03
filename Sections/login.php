<div class="container py-5">
    <h1 class="display-3 text-center">Inciar Sesión</h1>
    <form class="needs-validation py-5" action="index.php?section=login" method="GET" novalidate>
        <div class="form-group">
            <label for="mail">Correo Electrónico: </label>
            <label class="ast" style="color:red;">*
                <span class="ob">Campo Obligatorio</span>
            </label>
            <input type="email" class="form-control" id="mail" aria-describedby="emailHelp" required>
            <small id="emailHelp" class="form-text text-muted">* Nunca compartas tu información a terceros.</small>
            <div class="invalid-feedback">
                Debes ingresar tu correo
            </div>
        </div>
        <div class="form-group">
            <label for="passwd">Contraseña: </label>
            <label class="ast" style="color:red;">*
                <span class="ob">Campo Obligatorio</span>
            </label>
            <input type="password" class="form-control" id="passwd" required>
            <div class="invalid-feedback">
                No puedes iniciar sesión sin tu contraseña.
            </div>
        </div>
        <div class="form-group form-check">
            <input type="checkbox" class="form-check-input" id="remember">
            <label class="form-check-label" for="remember">Recordar mi correo</label>
        </div>
        <button type="submit" class="btn my-btn">Iniciar Sesión</button>
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
        if ()
        form.classList.add('was-validated');
      }, false);
    });
  }, false);
})();
</script>