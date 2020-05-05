<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Panel de Control</title>
    <link rel="stylesheet" href="../Styles/cssb/bootstrap.min.css">
    <script src="../Styles/jsb/jquery.min.js"></script>
    <script src="../Styles/jsb/popper.min.js"></script>
    <script src="../Styles/jsb/bootstrap.min.js"></script>
    <link rel="icon" type="image/png" href="../Images/start_logo.png" />
    <link rel="stylesheet" href="../Styles/css/style_1.css">
    <link rel="stylesheet" href="../Styles/Icons/style.css">
</head>
<body>
    <header class="py-3">
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    <h1 class="display-3">Panel de Control</h1>
                </div>
                <div class="col-sm-6 m-auto text-right">
                    <span class="pr-3"> Bienvenido $Username</span>
                    <button class="btn my-btn btn-outline-light">Volver al perfil</button>
                </div>
            </div>
        </div>
    </header>
    <main class="container py-5">
        <nav>
            <div class="nav nav-tabs" id="nav-tab" role="tablist">
                <a class="nav-item nav-link control_tabs active" id="nav-products-tab" data-toggle="tab" href="#nav-products" role="tab" aria-controls="nav-products" aria-selected="true">
                    Productos</a>
                <a class="nav-item nav-link control_tabs" id="nav-categories-tab" data-toggle="tab" href="#nav-categories" role="tab" aria-controls="nav-categories" aria-selected="false">
                    Categorias</a>
                <a class="nav-item nav-link control_tabs" id="nav-customers-tab" data-toggle="tab" href="#nav-customers" role="tab" aria-controls="nav-customers" aria-selected="false">
                    Clientes</a>
                <a class="nav-item nav-link control_tabs" id="nav-comments-tab" data-toggle="tab" href="#nav-comments" role="tab" aria-controls="nav-comments" aria-selected="false">
                    Comentarios</a>
                <a class="nav-item nav-link control_tabs" id="nav-contact-tab" data-toggle="tab" href="#nav-contact" role="tab" aria-controls="nav-contact" aria-selected="false">
                    Contacto</a>
                <a class="nav-item nav-link control_tabs" id="nav-aboutus-tab" data-toggle="tab" href="#nav-aboutus" role="tab" aria-controls="nav-aboutus" aria-selected="false">
                    Info conocenos</a>
                <a class="nav-item nav-link control_tabs" id="nav-location-tab" data-toggle="tab" href="#nav-location" role="tab" aria-controls="nav-location" aria-selected="false">
                    Ubicación</a>
                <a class="nav-item nav-link control_tabs" id="nav-others-tab" data-toggle="tab" href="#nav-others" role="tab" aria-controls="nav-others" aria-selected="false">
                    Otros</a>
            </div>
        </nav>
        <div class="tab-content" id="nav-tabContent">
            <div class="tab-pane fade show active" id="nav-products" role="tabpanel" aria-labelledby="nav-products-tab">
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
            <div class="tab-pane fade" id="nav-categories" role="tabpanel" aria-labelledby="nav-categories-tab">
                <h1 class="text-center my-3">Categorias</h1>
                <hr>
                <div class="text-center mt-3">
                    <a class="btn my-btn" data-toggle="collapse" onclick="javascript:hide_show('Categoria',this);" data-target="#addproducts">Añadir Categoria</a>
                    <div id="addproducts" class="collapse mt-3">
                        <h3 class="text-center my-3">Registrar Categoria</h3>
                        <form class="needs-validation text-left" novalidate>
                            <div class="form-group">
                                <label for="nameproduct">Nombre:</label>
                                <input type="text" class="form-control" placeholder="Nombre de la categoria" id="nameproduct" required>
                                <div class="invalid-feedback">
                                    Debes ingresar el nombre de la categoria.
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="description">Descripción:</label>
                                <textarea type="text" class="form-control" id="description" placeholder="Descripcion de la categoria" cols="5" rows="5"></textarea>
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
                            <?php for ($i=0; $i < 5; $i++):?>
                            <tr>
                                <th scope="row">1</th>
                                <td>Desechables</td>
                                <td>Platos, vasos, cucharas todo lo relacionado con fiestas...</td>
                                <td>35</td>
                                <td><a href="" class="icon_edit"><i class="icon-pencil"></i></a></td>
                                <td><a href="" class="icon_delete"><i class="icon-cross"></i></a></td>
                            </tr>
                            <?php endfor;?>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="tab-pane fade" id="nav-customers" role="tabpanel" aria-labelledby="nav-customers-tab">...</div>
            <div class="tab-pane fade" id="nav-comments" role="tabpanel" aria-labelledby="nav-comments-tab">...</div>
            <div class="tab-pane fade" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab">...</div>
            <div class="tab-pane fade" id="nav-aboutus" role="tabpanel" aria-labelledby="nav-aboutus-tab"> </div>
            <div class="tab-pane fade" id="nav-location" role="tabpanel" aria-labelledby="nav-location-tab">...</div>
            <div class="tab-pane fade" id="nav-others" role="tabpanel" aria-labelledby="nav-others-tab">...</div>
        </div>
    </main>
</body>
</html>
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
        form.classList.add('was-validated');
      }, false);
    });
  }, false);
})();
</script>
<script>
    function hide_show(section , btn)
    {
        if(btn.innerHTML == "Añadir Producto" || btn.innerHTML == "Añadir Categoria")
        {
            btn.innerHTML = "Cancelar";
        }
        else
        {
            switch (section) 
            {
                case "Producto":
                    btn.innerHTML = "Añadir Producto";
                    break;
                case "Categoria":
                    btn.innerHTML = "Añadir Categoria";
                    break;
                default :
                    btn.innerHTML = "NN";
            }
        }
    }
</script>