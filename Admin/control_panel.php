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
                <a class="nav-item nav-link control_tabs" id="nav-contact-tab" data-toggle="tab" href="#nav-contact" role="tab" aria-controls="nav-contact" aria-selected="false">
                    Contacto</a>
                <a class="nav-item nav-link control_tabs" id="nav-aboutus-tab" data-toggle="tab" href="#nav-aboutus" role="tab" aria-controls="nav-aboutus" aria-selected="false">
                    Info conocenos</a>
                <a class="nav-item nav-link control_tabs" id="nav-customers-tab" data-toggle="tab" href="#nav-customers" role="tab" aria-controls="nav-customers" aria-selected="false">
                    Clientes</a>
                <a class="nav-item nav-link control_tabs" id="nav-customers-tab" data-toggle="tab" href="#nav-customers" role="tab" aria-controls="nav-customers" aria-selected="false">
                    Ubicación</a>
        </div>
        </nav>
        <div class="tab-content" id="nav-tabContent">
            <div class="tab-pane fade show active" id="nav-products" role="tabpanel" aria-labelledby="nav-products-tab"> </div>
            <div class="tab-pane fade" id="nav-categories" role="tabpanel" aria-labelledby="nav-categories-tab">...</div>
            <div class="tab-pane fade" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab">...</div>
            <div class="tab-pane fade" id="nav-aboutus" role="tabpanel" aria-labelledby="nav-aboutus-tab"> </div>
            <div class="tab-pane fade" id="nav-customers" role="tabpanel" aria-labelledby="nav-customers-tab">...</div>
            <div class="tab-pane fade" id="nav-customers" role="tabpanel" aria-labelledby="nav-contact-tab">...</div>
        </div>
    </main>
</body>
</html>