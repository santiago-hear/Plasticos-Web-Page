<div>
    <h1 class="text-center my-3">Usuarios</h1>
    <hr>
    <div class="my-5">
        <table class="table">
            <thead class="head_table">
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Nombre(s)</th>
                    <th scope="col">Apellido(s)</th>
                    <th scope="col">Correo</th>
                    <th scope="col">Dirección</th>
                    <th scope="col">Genero</th>
                    <th scope="col">Nacimiento</th>
                    <th scope="col">Ciudad</th>
                    <th scope="col">Dep.</th>
                    <th scope="col">Foto</th>
                    <th scope="col">Permisos</th>
                </tr>
            </thead>
            <tbody>
                <?php for ($i=0; $i < 5; $i++):?>
                <tr>
                    <th scope="row">1</th>
                    <td>Santiago</td>
                    <td>Hernandez</td>
                    <td>santi@ejemplo.com</td>
                    <td>Calle 10 # 10-10</td>
                    <td>M</td>
                    <td>12/12/12</td>
                    <td>Manizales</td>
                    <td>Caldas</td>
                    <td class="text-center"><a href="" class="icon_picture"><i class="icon-file-picture"></i></a></td>
                    <td>
                        <select name="" id="" class="form-control p-0">
                            <option selected>usuario</option>
                            <option>editor</option>
                            <option>admin</option>
                        </select>
                    </td>
                    <td><a href="# " class="icon_delete"><i class="icon-cross"></i></a></td>
                </tr>
                <?php endfor;?>
            </tbody>
        </table>
    </div>
</div>