<?php
    $section = isset($_GET["section"]) ? $_GET["section"] : "home";
?>
<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Plásticos LA 17, !Todo en plásticos y desechables!</title>
        <link rel="stylesheet" href="Styles/cssb/bootstrap.min.css">
        <script src="Styles/jsb/jquery.min.js"></script>
        <script src="Styles/jsb/popper.min.js"></script>
        <script src="Styles/jsb/bootstrap.min.js"></script>
        <link rel="icon" type="image/png" href="Images/start_logo.png" />
        <link rel="stylesheet" href="Styles/css/style_1.css">
        
    </head>
    <body>
        <header class="px-5">
            <nav class="navbar searchnav fixed-top">
                <div class="col-md-1 pl-5">
                    <a href="index.php?section=home" class="navbar-brand"><img src="Images/logof.png" alt="logo"></a>
                </div>
                <div class="searchitems col-md-10 searchform">
                    <form class="form-inline ">
                        <input class="form-control col-sm-8" name="search" placeholder="¡Hola! ¿Qué estás buscando?">
                        <button type="search" class="form-control searchbtn my-btn col-sm-3">Buscar</button>
                    </form>
                </div>
            </nav>
            <nav class="navbar navbar-expand-lg navbar-dark mainheader">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mr-auto col-sm-7 list">
                        <li class="nav-item">
                            <a class="nav-link nvi" href="index.php?section=about_us">Conócenos</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link nvi" href="index.php?section=contact">Contacto</a>          
                        </li>
                        <li class="nav-item">
                            <a class="nav-link nvi" href="index.php?section=directions">Ubicación</a>          
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle nvi" data-toggle="dropdown">Productos</a>
                            <div class="dropdown-menu dropdiv">
                                <a class="dropdown-item nvi" href="index.php?section=categories&category_id=1">Envoltorios</a>
                                <a class="dropdown-item nvi" href="index.php?section=categories&category_id=2">Desechables</a>
                                <a class="dropdown-item nvi" href="index.php?section=categories&category_id=3">Alimentos</a>
                                <a class="dropdown-item nvi" href="index.php?section=categories&category_id=4">Fibras</a>
                                <a class="dropdown-item nvi" href="index.php?section=categories&category_id=5">Aseo</a>
                                <a class="dropdown-item nvi" href="index.php?section=categories&category_id=6">Bolsas</a>
                            </div>
                        </li>
                    </ul>
                    <form class="form-inline mr-5" action="index.php" method="GET">
                        <input type="hidden" name="section" value="login">
                        <button class="mr-3 form-control my-btn" type="submit">Iniciar Sesión</button>
                        <label class="mr-3 register"><a href="index.php?section=register">o Regístrate.</a></label>
                    </form>
                </div>
            </nav>
        </header>
            <!--
            <nav class="navbar navbar-expand-md mainheader">
                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <div class="col-sm-2"></div>
                    <ul class="navbar-nav mr-auto list">
                        <li class="nav-item">
                            <a class="nav-link nvi" href="index.php?section=about_us">Conócenos</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link nvi" href="index.php?section=contact">Contacto</a>          
                        </li>
                        <li class="nav-item">
                            <a class="nav-link nvi" href="index.php?section=directions">Ubicación</a>          
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle nvi" data-toggle="dropdown">Productos</a>
                            <div class="dropdown-menu dropdiv" >
                                <a class="dropdown-item nvi" href="index.php?section=categories&category_id=1">Envoltorios</a>
                                <a class="dropdown-item nvi" href="index.php?section=categories&category_id=2">Desechables</a>
                                <a class="dropdown-item nvi" href="index.php?section=categories&category_id=3">Alimentos</a>
                                <a class="dropdown-item nvi" href="index.php?section=categories&category_id=4">Fibras</a>
                                <a class="dropdown-item nvi" href="index.php?section=categories&category_id=5">Aseo</a>
                                <a class="dropdown-item nvi" href="index.php?section=categories&category_id=6">Bolsas</a>
                            </div>
                        </li>
                    </ul>
                    <form class="form-inline col-sm-3" action="index.php" method="GET">
                        <input type="hidden" name="section" value="login">
                        <button class="px-4 form-control my-btn" type="submit">Inicia Sesión</button>
                        <label class="px-3 register"><a href="index.php?section=register">o Regístrate.</a></label>
                    </form>
                </div>
            </nav>
-->
        <main>
        <?php
            switch ($section) {
                case "home":
                    include("Sections/banner.php");
                    include("Sections/welcome_msg.php");
                    include("Sections/best_sellers.php");
                    break;
                case 'categories':
                    include("Sections/best_sellers.php");
                    break;
                case 'about_us':
                    include("Sections/about_us.php");
                    break;
                case 'login':
                    include("Sections/login.php");
                    break;
                case 'register':
                    include("Sections/register.php");
                    break;
                case 'directions':
                    include("Sections/directions.php");
                    break;
                case 'contact':
                    include("Sections/contact.php");
                    break;
                case 'profile':
                    include("Sections/profile.php");
                    break;
                case 'view':
                    include("Sections/view_product.php");
                    break;
                default:
                include("Sections/error.php");
                    break;
            }
        ?>
        </main>
        <footer class="text-muted">
            <div class="container">
                <p class="float-right float-bottom">
                    Desarrollado por:
                    <a href="https://www.facebook.com/santiagohear/">Santiago Hernández</a>
                </p>
                <p>Plásticos La 17 &copy; Todos los derechos reservados.</p>
            </div>
        </footer>
    </body>
</html>