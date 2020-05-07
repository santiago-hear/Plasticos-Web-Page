<div>
    <h1 class="text-center my-3">Productos</h1>
    <hr>
    <div class="text-center mt-3">
        <a class="btn my-btn" data-toggle="collapse" onclick="javascript:hide_show('Producto',this);" data-target="#addproducts">Añadir Producto</a>
        <div id="addproducts" class="collapse mt-3">
            <h3 class="text-center my-3">Registrar Producto</h3>
            <form class="needs-validation text-left" novalidate>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="nameproduct">Nombre:</label>
                        <input type="text" class="form-control" placeholder="Nombre del producto" id="nameproduct" required>
                        <div class="invalid-feedback">
                            Debes ingresar el nombre del producto.
                        </div>
                    </div>
                    <div class="form-group col-md-6">
                        <label for="category">Categoria: </label>
                        <select id="category" class="form-control" required>
                            <option selected disabled>Escoger Categoria</option>
                            <?php  
                                for ($i=0; $i < 10; $i++) 
                                { 
                                    echo "<option> Category name </option>";
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
                    <textarea type="text" class="form-control" id="description" placeholder="Descripcion de producto" cols="5" rows="5"></textarea>
                </div>
                <div class="form-row">
                    <div class="form-group col-sm-6">
                        <label for="price">Precio:</label>
                        <input type="number" step="500" class="form-control" placeholder="Precio del producto" required>
                        <div class="invalid-feedback">
                            El producto debe tener un precio.
                        </div>
                    </div>
                    <div class="form-group col-sm-6">
                        <label for="amount">Cantidad:</label>
                        <input type="text" class="form-control" placeholder="Paq. x 20 unidades" id="amount">
                    </div>
                </div>
                <div class="form-row mb-4">
                    <div class="col-sm-6">
                        <label class="form-label" for="brand">Marca(s): </label>
                        <input class="form-control" placeholder="Marcas del producto separadas por coma" type="text" id="brand">
                    </div>
                    <div class="col-sm-6">
                        <label class="form-label" for="material">Material: </label>
                        <input class="form-control" placeholder="icopo, plastico, etc..." type="text" id="material">
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
                    
                </tr>
            </thead>
            <tbody>
                <?php for ($i=0; $i < 5; $i++):?>
                <tr>
                    <th scope="row">1</th>
                    <td>Plato 30 oz.</td>
                    <td>Plato ideal para típicos como frijoles ...</td>
                    <td>Paquete x 20 unidades.</td>
                    <td>3500</td>
                    <td>Desechables</td>
                    <td>Darnel, Wow!</td>
                    <td>Icopor</td>
                    <td><a href="#" class="icon_edit"><i class="icon-pencil"></i></a></td>
                    <td><a href="# " class="icon_delete"><i class="icon-cross"></i></a></td>
                </tr>
                <?php endfor;?>
            </tbody>
        </table>
    </div>
</div>