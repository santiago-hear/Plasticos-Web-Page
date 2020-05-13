
<?php
    $ProductId = isset($_GET['pid']) ? $_GET['pid'] : 'error';

    $get_product = "
            SELECT 
                p.ProductId,
                p.ProductName,
                Description,
                p.Amount,
                p.Price, 
                (SELECT CategoryId FROM productxcategory WHERE productId = p.ProductId LIMIT 1) as category,
                Brands,
                Material  
            FROM product p 
            WHERE p.ProductId = $ProductId; 
        ";
 
    $result_product = mysqli_query($database,$get_product);

    $product = mysqli_fetch_assoc($result_product);
?>

<div class="container">
    <h3 class="text-center my-5">Editar Producto</h3>
    <form class="needs-validation text-left" action="db_connection/update_product.php" method="POST" novalidate>
        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="nameproduct">Nombre:</label>
                <input type="text" class="form-control" name="nameproduct" value="<?php echo $product['ProductName'] ?>" id="nameproduct" required>
                <div class="invalid-feedback">
                    Debes ingresar el nombre del producto.
                </div>
            </div>
            <div class="form-group col-md-6">
                <label for="category">Categoria: </label>
                <select id="category" class="form-control" name="category[]" required>
                    <?php  
                        while ($categories = mysqli_fetch_assoc($result_categories))
                        { 
                            if ($categories['cid'] == $product['Cateogry']):
                                echo "<option selected value='$categories[cid]'> $categories[CategoryName] </option>";
                            else:
                                echo "<option value='$categories[cid]'> $categories[CategoryName] </option>";
                            endif;
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
            <textarea type="text" name="description" class="form-control" id="description" cols="5" rows="5"><?php echo $product['Description'] ?></textarea>
        </div>
        <div class="form-row">
            <div class="form-group col-sm-6">
                <label for="price">Precio:</label>
                <input type="number" step="500" name="price" value="<?php echo $product['Price'] ?>" class="form-control" required>
                <div class="invalid-feedback">
                    El producto debe tener un precio.
                </div>
            </div>
            <div class="form-group col-sm-6">
                <label for="amount">Cantidad:</label>
                <input type="text" class="form-control" name="amount" value="<?php echo $product['Amount'] ?>" id="amount">
            </div>
        </div>
        <div class="form-row mb-4">
            <div class="col-sm-6">
                <label class="form-label" for="brand">Marca(s): </label>
                <input class="form-control" name="brand" value="<?php echo $product['Brands'] ?>" type="text" id="brand">
            </div>
            <div class="col-sm-6">
                <label class="form-label" for="material">Material: </label>
                <input class="form-control" name="material" value="<?php echo $product['Material'] ?>" type="text" id="material">
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
        <button type="submit" class="btn my-btn">Guardar Cambios</button>
    </form>
</div>