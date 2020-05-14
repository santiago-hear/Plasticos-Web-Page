<?php

    $cat_id = isset ($_GET["cid"]) ? $_GET["cid"] : 'NULL';

    $get_category = 
    "
        SELECT
            CategoryName,
            Description
        FROM category
        WHERE CategoryId= $cat_id; 
    ";
    $result_category = mysqli_query($database,$get_category);

    $category = mysqli_fetch_assoc($result_category);

?>
<div class="container mt-3">
    <h1 class="text-center my-3">Editar Categoria</h1>
    <form class="needs-validation text-left" action="db_connection/update_category.php" method="POST" novalidate>
        <input type="hidden" name='cid' value='<?php echo $cat_id;?>'>
        <div class="form-group">
            <label for="categoryname">Nombre:</label>
            <input type="text" name="categoryname" class="form-control" value="<?php  echo $category['CategoryName']?>" id="categoryname" required>
            <div class="invalid-feedback">
                Debes ingresar el nombre de la categoria.
            </div>
        </div>
        <div class="form-group">
            <label for="description">Descripción:</label>
            <textarea type="text" class="form-control" name="description" cols="5" rows="5"><?php  echo $category['Description']?></textarea>
        </div>
        <button type="submit" class="btn my-btn">Guardad Cambios</button>
    </form>
</div>