<div class="container py-5">
    <h1 class="display-3 text-center register">Registro</h1>
    <form class="py-5">
        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="name">Nombre: </label>
                <input type="text" class="form-control register" id="name" placeholder="¿Cúal es tu nombre?">
            </div>
            <div class="form-group col-md-6">
                <label for="lastname">Apellidos: </label>
                <input type="text" class="form-control" id="lastname" placeholder="¿Cúales son tus apellidos?">
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="mail">Correo Electrónico:</label>
                <input type="email" class="form-control" id="mail" placeholder="ejemplo@ejemplo.com">
            </div>
            <div class="form-group col-md-6">
                <label for="mailconfirm">Confirmar correo electrónico:</label>
                <input type="email" class="form-control" id="mailconfirm" placeholder="ejemplo@ejemplo.com">
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="paswd">Contraseña:</label>
                <input type="password" class="form-control" id="paswd" placeholder="Contraseña,  Min 8 caracteres, 2 num">
            </div>
            <div class="form-group col-md-6">
                <label for="paswdconfirm">Confirmar contraseña:</label>
                <input type="password" class="form-control" id="paswdconfirm" placeholder="Confirmar Contraseña">
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
                        <input type="radio" class="form-check-input" name="gender" id="gendertype">
                        Hombre
                    </label>
                </div>
                <div class="form-check-inline mx-3">
                    <label for="gendertype" class="form-check-label">
                        <input type="radio" class="form-check-input" name="gender" id="gendertype">
                        Mujer
                    </label>
                </div>
                <div class="form-check-inline mx-3">
                    <label for="gendertype" class="form-check-label">
                        <input type="radio" class="form-check-input" name="gender" id="gendertype">
                        Otro
                    </label>
                </div>
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="state">Ciudad</label>
                <select id="state" class="form-control">
                    <option selected disabled>Escoger departamento</option>
                    <option>Caldas</option>
                    <option>Amazonas</option>
                </select>
            </div>
            <div class="form-group col-md-6">
                <label for="city">Ciudad</label>
                <select id="city" class="form-control">
                <option selected disabled>Escoger ciudad</option>
                    <option>Caldas</option>
                    <option>Amazonas</option>
                </select>
            </div>
        </div>
        <div class="form-group">
        <div class="form-check">
            <label class="form-check-label">
                <input type="checkbox" class="form-check-input" value="">Acepto el tratamiento de datos personales
            </label>
            </div>
            <div class="form-check">
            <label class="form-check-label">
                <input type="checkbox" class="form-check-input" value="">Quiero recibir notificaciones a mi correo
            </label>
            </div>
        </div>
        <button type="submit" class="btn btn-primary" disabled>Registrarse</button>
    </form>
</div>
