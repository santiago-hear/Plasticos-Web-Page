<div class="container" id="nav-categories" role="tabpanel" aria-labelledby="nav-categories-tab">
    <h1 class="text-center my-3">Categorias</h1>
    <hr>
    <div class="text-center mt-3">
        <?php $msg = isset($_GET['msg']) ? $_GET['msg'] : '';
            switch ($msg):
                case 'okadd':
                    echo "<div class='alert alert-success'>La categoría registró con éxito</div>";
                    break;
                case 'erroradd':
                    echo "<div class='alert alert-danger'>Ocurrió un error al registrar la categoría</div>";
                    break;
                case 'okdel':
                    echo "<div class='alert alert-success'>La categoría se eliminó correctamente</div>";
                    break;
                case 'errordel':
                    echo "<div class='alert alert-danger'>Ocurrió un error al eliminar la categoría</div>";
                    break;
            endswitch;
        ?>
        <a class="btn my-btn" data-toggle="collapse" onclick="javascript:hide_show('Categoria',this);" data-target="#addproducts">Añadir Categoria</a>
        <div id="addproducts" class="collapse mt-3">
            <h3 class="text-center my-3">Registrar Categoria</h3>
            <form class="needs-validation text-left" action="db_connection/set_category.php" method="POST" novalidate>
                <div class="form-group">
                    <label for="categoryname">Nombre:</label>
                    <input type="text" name="categoryname" class="form-control" placeholder="Nombre de la categoria" id="categoryname" required>
                    <div class="invalid-feedback">
                        Debes ingresar el nombre de la categoria.
                    </div>
                </div>
                <div class="form-group">
                    <label for="description">Descripción:</label>
                    <textarea type="text" class="form-control" name="description" placeholder="Descripcion de la categoria" cols="5" rows="5"></textarea>
                </div>
                <button type="submit" class="btn my-btn">Registrar Categoria</button>
            </form>
        </div>
    </div>
    <div class="my-5">
        <table class="table">
            <thead class="head_table">
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Nombre</th>
                    <th scope="col">Descripción</th>
                    <th class='text-center' scope="col">Cant. de productos</th>
                    
                </tr>
            </thead>
            <tbody>
                <?php while ($categories = mysqli_fetch_assoc($result_categories)):?>
                <tr>
                    <?php
                        echo "<th scope='row'>$categories[cid]</th>";
                        echo "<td>$categories[CategoryName]</td>";
                        echo ($categories['Description'] == '') ? "<td>Sin descripción</td>" : "<td>$categories[Description]</td>";
                        echo "<td class='text-center'>$categories[amount_p]</td>";
                        echo "<td><a href='edit/edit_category.php?cid=$categories[cid]' class='icon_edit'><i class='icon-pencil'></i></a></td>";
                        echo "<td><a href='db_connection/delete_category.php?cid=$categories[cid]' class='icon_delete'><i class='icon-cross'></i></a></td>";
                    ?>
                </tr>
                <?php endwhile;?>
            </tbody>
        </table>
    </div>
</div>