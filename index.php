<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Plásticos LA 17, !Todo en plásticos y desechables!</title>
        <link rel="icon" type="image/png" href="Images/start_logo.png" />
        <link rel="stylesheet" href="styles/cssb/bootstrap.min.css">
        <link rel="stylesheet" href="styles/css/style_1.css">
    </head>
    <body>
        <nav class="searchnav">
            <form class="form-inline">
                <input class="form-control col-sm-8" placeholder="¡Hola! ¿Qué estás buscando?">
                <button type="search" class="form-control searchbtn col-sm-3">Buscar</button>
            </form>
        </nav>
        <header>
            <nav class="navbar navbar-expand-md mainheader fixed-top">
                <a href="#" class="navbar-brand"><img src="Images/logof.png" alt="logo"></a>
                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <ul class="navbar-nav mr-auto list">
                        <li class="nav-item">
                            <a class="nav-link nvi" href="#">Conócenos</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link nvi" href="#">Contacto</a>          
                        </li>
                        <li class="nav-item">
                            <a class="nav-link nvi" href="#">Ubicación</a>          
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle nvi" href="" data-toggle="dropdown">Productos</a>
                            <div class="dropdown-menu dropdiv" >
                                <a class="dropdown-item nvi" href="#">Películas</a>
                                <a class="dropdown-item nvi" href="#">Desechables</a>
                                <a class="dropdown-item nvi" href="#">Alimentos</a>
                            </div>
                        </li>
                    </ul>
                    <form class="form-inline">
                        <button class="form-control sign_in_btn" type="submit">Inicia Sesión</button>
                        <label class="px-3 register"><a href="">o Regístrate.</a></label>
                    </form>
                </div>
            </nav>
        </header>
        <div id="slide" class="carousel slide banner" data-ride="carousel">
            <!-- Indicators -->
            <ul class="carousel-indicators">
                <li data-target="#slide" data-slide-to="0" class="active"></li>
                <li data-target="#slide" data-slide-to="1"></li>
                <li data-target="#slide" data-slide-to="2"></li>
                <li data-target="#slide" data-slide-to="3"></li>
                <li data-target="#slide" data-slide-to="4"></li>
            </ul>
            <!-- The slideshow -->
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="Images/aluminio.jpg" alt="Papel Aluminio">
                    <div class="carousel-caption msg">
                        <h2>Envoltorios</h2>
                        <p>Peliculas transparentes y aluminios...</p>
                        <button type="button" class="btn">Ir a la Categoria</button>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="Images/porta.jpg" alt="Portacomidas">
                    <div class="carousel-caption msg">
                        <h2>Desechables</h2>
                        <p>Platos, vasos y cubiertos...</p>
                        <button type="button" class="btn">Ir a la Categoria</button>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="Images/fsecos.jpg" alt="Frutos Secos">
                    <div class="carousel-caption msg">
                        <h2>Frutos Secos</h2>
                        <p>Coco, Almendras, Maní y más...</p>
                        <button type="button" class="btn">Ir a la Categoria</button>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="Images/palillos.jpeg" alt="Palillos">
                    <div class="carousel-caption msg">
                        <h2>Madera</h2>
                        <p>Palos, Palillos y Pinchos...</p>
                        <button type="button" class="btn">Ir a la Categoria</button>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="Images/bolsas.jpg" alt="Bolsas">
                    <div class="carousel-caption msg">
                        <h2>Bolsas</h2>
                        <p>Bolsas de papel, plásticas y más...</p>
                        <button type="button" class="btn">Ir a la Categoria</button>
                    </div>
                </div>
            </div>
            <!-- Left and right controls -->
            <a class="carousel-control-prev" href="#slide" data-slide="prev">
                <span class="carousel-control-prev-icon"></span>
            </a>
            <a class="carousel-control-next" href="#slide" data-slide="next">
                <span class="carousel-control-next-icon"></span>
            </a>
        </div>
        <section class="jumbotron text-center start">
            <div class="container">
                <h1 class="jumbotron-heading">BIENVENIDO</h1>
                <p class="lead text-muted">
                    !Gracias por tu visita! <br>
                    Queremos darte lo mejor de nuestros productos, 
                    nuestra meta es garantizar tu satisfacción así 
                    que puedes crear una cuenta y dar el visto bueno 
                    a tu compra o si tienes dudas de tu compra, puedes
                    dejar tu mensaje y responderemos lo mas pronto posible.
                <p>
                <a href="#" class="btn mybtn my-2">Registrarse</a>
                <p class="lead text-muted">
                    Te invitamos a realizar tu pedido a domicilio o visítanos
                    en la plaza de mercado, ingresa a nuestra ubicacion.
                </p>
                <a href="#" class="btn mybtn my-2">Ubicación</a>
            </div>
        </section>
        <div class="album">
            <h1 class="jumbotron-heading text-center py-5">Los más vendidos</h1>
            <div class="container">
                <div class="row">
                    <?php for ($i=0; $i < 6; $i++):?>
                    <div class="col-md-4">
                        <div class="card mb-4 box-shadow boxproduct">
                            <img class="card-img-top" src="Images/salsas.jpg" alt="Card image cap">
                            <div class="card-body">
                                <p class="card-text">
                                    <h3>Salsa de tomate</h3>
                                    <p><b>Cantidad:</b> 350 Gr.</p> 
                                    <p><b>Marca:</b> Differ</p> 
                                </p>
                                <div class="d-flex justify-content-between align-items-center">
                                    <div class="btn-group ">
                                        <button type="button" class="btn btn-sm btn-outline-secondary btns">Ver</button>
                                        <button type="button" class="btn btn-sm btn-outline-secondary btns">Editar</button>
                                        <button type="button" class="btn btn-sm btn-outline-secondary btns">Comentar</button>
                                    </div>
                                    <small class="text-muted">9 mins</small>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php endfor; ?>
                </div>
            </div>
        </div>
    </main>
    <footer class="text-muted">
        <div class="container">
            <p class="float-right">
                Desarrollado por:
                <a href="https://www.facebook.com/santiagohear/">Santiago Hernández</a>
            </p>
            <p>Plásticos La 17 &copy; Todos los derechos reservados.</p>
        </div>
    </footer>
        <script src="styles/jsb/jquery-3.5.0.min.js"></script>
        <script src="styles/jsb/popper.min.js"></script>
        <script src="styles/jsb/bootstrap.min.js"></script>
    </body>
</html>