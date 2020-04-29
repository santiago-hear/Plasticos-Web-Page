<?php
    $section = isset($_GET["section"]) ? $_GET["section"] : "home";
?>
<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Plásticos LA 17, !Todo en plásticos y desechables!</title>
        <link rel="icon" type="image/png" href="Images/start_logo.png" />
        <link rel="stylesheet" href="Styles/cssb/bootstrap.min.css">
        <link rel="stylesheet" href="Styles/css/style_1.css">
        <script src="Styles/jsb/jquery.min.js"></script>
    </head>
    <body>
        <header class="px-5">
            <nav class="navbar navbar-expand-md mainheader">
                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <div class="col-sm-1"></div>
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
                                <a class="dropdown-item nvi" href="index.php?section=categories">Todas las categorias</a>
                                <a class="dropdown-item nvi" href="index.php?category_id=1">Envoltorios</a>
                                <a class="dropdown-item nvi" href="index.php?category_id=2">Desechables</a>
                                <a class="dropdown-item nvi" href="index.php?category_id=3">Alimentos</a>
                                <a class="dropdown-item nvi" href="index.php?category_id=4">Fibras</a>
                                <a class="dropdown-item nvi" href="index.php?category_id=5">Aseo</a>
                                <a class="dropdown-item nvi" href="index.php?category_id=6">Bolsas</a>
                            </div>
                        </li>
                    </ul>
                    <form class="form-inline col-sm-3" action="index.php" method="GET">
                        <input type="hidden" name="section" value="login">
                        <button class="form-control my-btn" type="submit">Inicia Sesión</button>
                        <label class="px-3 register"><a href="index.php?section=register">o Regístrate.</a></label>
                    </form>
                </div>
            </nav>
            <nav class="navbar searchnav fixed-top" action="index.php" method="GET">
                <a href="index.php?section=home" class="navbar-brand col-md-1"><img src="Images/logof.png" alt="logo"></a>
                <div class="searchitems col-md-10">
                    <form class="form-inline">
                        <input class="form-control col-sm-8" name="search" placeholder="¡Hola! ¿Qué estás buscando?">
                        <button type="search" class="form-control searchbtn my-btn col-sm-3">Buscar</button>
                    </form>
                </div>
            </nav>
        </header>
        <?php
            switch ($section) {
                case "home":
                    echo "<main>";
                    include("Sections/banner.php");
                    include("Sections/welcome_msg.php");
                    include("Sections/best_sellers.php");
                    break;
                case 'categories':
                    echo "<main class='container py-5'>";
                    include("Sections/best_sellers.php");
                    break;
                case 'about_us':
                    echo "<main class='container py-5'>";
                    include("Sections/about_us.php");
                    break;
                case 'login':
                    echo "<main class='container py-5'>";
                    include("Sections/login.php");
                    break;
                case 'register':
                    echo "<main class='container py-5'>";
                    include("Sections/register.php");
                    break;
                case 'directions':
                    echo "<main class='container py-5'>";
                    include("Sections/directions.php");
                    break;
                case 'contact':
                    echo "<main class='container py-5'>";
                    include("Sections/contact.php");
                    break;
                case 'profile':
                    echo "<main class='container py-5'>";
                    include("Sections/profile.php");
                    break;
                default:
                echo "<main class='container py-5'>";
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
        <script src="Styles/jsb/jquery-3.5.0.min.js"></script>
        <script src="Styles/jsb/popper.min.js"></script>
        <script src="Styles/jsb/bootstrap.min.js"></script>
    </body>
</html>