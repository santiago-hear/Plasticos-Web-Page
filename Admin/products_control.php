<?php
    $get_products = 
    "
        SELECT 
            p.ProductId,
            p.ProductName,
            Description,
            p.Amount,
            p.Price, 
            (SELECT get_categories(p.ProductId)) as categories,
            Brands,
            Material  
        FROM product p; 
    ";
    $result_products = mysqli_query($database,$get_products);
?>
<div class="mx-5">
    <h1 class="text-center my-3">Productos</h1>
    <hr>
    <div class="text-center mt-3">
        <?php $msg = isset($_GET['msg']) ? $_GET['msg'] : '';
            if ($msg == 'ok') :
                echo "<div class='alert alert-success'>El producto se registró con éxito</div>";
            elseif ($msg == 'error'):
                echo "<div class='alert alert-danger'>Ocurrió un error al registrar el producto</div>";
            endif;
        ?>
        <a class="btn my-btn" data-toggle="collapse" onclick="javascript:hide_show('Producto',this);" data-target="#addproducts">Añadir Producto</a>
        <div id="addproducts" class="collapse mt-3">
            <h3 class="text-center my-3">Registrar Producto</h3>
            <form class="needs-validation text-left" action="db_connection/set_products.php" method="POST" novalidate>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="nameproduct">Nombre:</label>
                        <input type="text" class="form-control" name="nameproduct" placeholder="Nombre del producto" id="nameproduct" required>
                        <div class="invalid-feedback">
                            Debes ingresar el nombre del producto.
                        </div>
                    </div>
                    <div class="form-group col-md-6">
                        <label for="category">Categoria: </label>
                        <select id="category" class="form-control" name="category[]" required>
                            <option selected disabled>Escoger Categoria</option>
                            <?php  
                                while ($categories = mysqli_fetch_assoc($result_categories))
                                { 
                                    echo "<option value='$categories[cid]'> $categories[CategoryName] </option>";
                                }
                            ?>
                        </select>
                        <div class="invalid-feedback">
                            Porfavor selecciona la categoria del producto.
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <label for="description">Descripción:</label>
                    <textarea type="text" name="description" class="form-control" id="description" placeholder="Descripcion de producto" cols="5" rows="5"></textarea>
                </div>
                <div class="form-row">
                    <div class="form-group col-sm-6">
                        <label for="price">Precio:</label>
                        <input type="number" step="500" name="price" class="form-control" placeholder="Precio del producto" required>
                        <div class="invalid-feedback">
                            El producto debe tener un precio.
                        </div>
                    </div>
                    <div class="form-group col-sm-6">
                        <label for="amount">Cantidad:</label>
                        <input type="text" class="form-control" name="amount" placeholder="Paq. x 20 unidades" id="amount">
                    </div>
                </div>
                <div class="form-row mb-4">
                    <div class="col-sm-6">
                        <label class="form-label" for="brand">Marca(s): </label>
                        <input class="form-control" name="brand" placeholder="Marcas del producto separadas por coma" type="text" id="brand">
                    </div>
                    <div class="col-sm-6">
                        <label class="form-label" for="material">Material: </label>
                        <input class="form-control" name="material" placeholder="icopo, plastico, etc..." type="text" id="material">
                    </div>
                </div>
                <div class="input-group mb-4">
                    <div class="input-group-prepend">
                        <span class="input-group-text">Imagen del Producto</span>
                    </div>
                    <div class="custom-file">
                        <input type="file" name="productimage" class="custom-file-input" id="productimage">
                        <label class="custom-file-label" for="productimage">Seleccionar Archivo</label>
                    </div>
                </div>
                <button type="submit" class="btn my-btn">Registrar Producto</button>
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
                    <th scope="col">Cantidad</th>
                    <th scope="col">Precio</th>
                    <th scope="col">Categoria</th>
                    <th scope="col">Marcas</th>
                    <th scope="col">Material</th>
                    <th scope="col">Imagen</th>
                    
                </tr>
            </thead>
            <tbody>
                <?php while ($products = mysqli_fetch_assoc($result_products)):?>
                <tr>
                    <?php
                    echo "<th scope='row'>$products[ProductId]</th>";
                    echo "<td>$products[ProductName]</td>";
                    if ($products["Description"]==''):
                        echo "<td class='text-muted'><small>sin contenido</small></td>";
                    else:
                        echo "<td>$products[Description]</td>";
                    endif;
                    if ($products["Amount"]==''):
                        echo "<td class='text-muted'><small>sin contenido</small></td>";
                    else:
                        echo "<td>$products[Amount]</td>";
                    endif;
                    echo "<td>$$products[Price]</td>";
                    echo "<td>$products[categories]</td>";
                    if ($products["Brands"]==''):
                        echo "<td class='text-muted'><small>sin contenido</small></td>";
                    else:
                        echo "<td>$products[Brands]</td>";
                    endif;
                    if ($products["Material"]==''):
                        echo "<td class='text-muted'><small>sin contenido</small></td>";
                    else:
                        echo "<td>$products[Material]</td>";
                    endif;
                    echo "<td class='text-center'><a href='' class='icon_picture'><i class='icon-file-picture'></i></a></td>";
                    echo "<td><a href='#' class='icon_edit'><i class='icon-pencil'></i></a></td>";
                    echo "<td><a href='#' class='icon_delete'><i class='icon-cross'></i></a></td>";
                    ?>
                </tr>
                <?php endwhile;?>
            </tbody>
        </table>
    </div>
</div>
