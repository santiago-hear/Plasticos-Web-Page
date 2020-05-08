<div class="mx-5">
    <h1 class="text-center my-3">Comentarios</h1>
    <hr>
    <div class="my-5">
        <table class="table">
            <thead class="head_table">
                <tr class="">
                    <th scope="col">ID</th>
                    <th scope="col">ID Usuario</th>
                    <th scope="col">Nombre Usuario</th>
                    <th scope="col">Fecha</th>
                    <th scope="col">Producto</th>
                    <th scope="col">Contenido</th>
                </tr>
            </thead>
            <tbody>
                <?php for ($i=0; $i < 5; $i++):?>
                <tr>
                    <th scope="row">1</th>
                    <td>23</td>
                    <td>Santiago</td>
                    <td>04/04/04</td>
                    <td>Plato 30cm.</td>
                    <td>Me gusto el producto porque es bueno para las...</td>
                    <td><a href="#" class="icon_picture"><i class="icon-eye"></i></a></td>
                    <td><a href="#" class="icon_delete"><i class="icon-cross"></i></a></td>
                </tr>
                <?php endfor;?>
            </tbody>
        </table>
    </div>
</div>