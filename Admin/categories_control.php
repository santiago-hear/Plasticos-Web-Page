<div class="mx-5" id="nav-categories" role="tabpanel" aria-labelledby="nav-categories-tab">
    <h1 class="text-center my-3">Categorias</h1>
    <hr>
    <div class="text-center mt-3">
        <?php $msg = isset($_GET['msg']) ? $_GET['msg'] : '';
            if ($msg == 'ok') :
                echo "<div class='alert alert-success'>Se registró la categoria con éxito</div>";
            endif;
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
                    <th scope="col">Número de productos</th>
                    
                </tr>
            </thead>
            <tbody>
                <?php while ($categories = mysqli_fetch_assoc($result_categories)):?>
                <tr>
                    <?php
                        echo "<th scope='row'>$categories[cid]</th>";
                        echo "<td>$categories[CategoryName]</td>";
                        echo "<td>$categories[Description]</td>";
                        echo "<td>$categories[amount_p]</td>";
                    ?>
                    
                    <td><a href="" class="icon_edit"><i class="icon-pencil"></i></a></td>
                    <td><a href="" class="icon_delete"><i class="icon-cross"></i></a></td>
                </tr>
                <?php endwhile;?>
            </tbody>
        </table>
    </div>
</div>