<?php
    include("db_connection/connection.php");

    $view = isset ($_GET["view"]) ? $_GET["view"] : "products";

    $get_categories = 
    "
        SELECT 
            CategoryId as cid,
            CategoryName,Description, 
            (select count(*) from productxcategory as p where cid = p.CategoryId) as amount_p 
        from category; 
    ";
    $result_categories = mysqli_query($database,$get_categories);

    $get_company = "SELECT * FROM company";

    $result_company = mysqli_query($database,$get_company);

    $company = mysqli_fetch_assoc($result_company);

?>
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
<body onload='Active();'>
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
    <main class="mx-5 py-5">
        <nav class="px-5">
            <div class="nav nav-tabs px-5" id="nav-tab" role="tablist">
                <a class="nav-item nav-link control_tabs" id="nav-products-tab" href="control_panel.php?view=products">
                    Productos</a>
                <a class="nav-item nav-link control_tabs" id="nav-categories-tab" href="control_panel.php?view=categories">
                    Categorias</a>
                <a class="nav-item nav-link control_tabs" id="nav-users-tab"  href="control_panel.php?view=users">
                    Usuarios</a>
                <a class="nav-item nav-link control_tabs" id="nav-comments-tab"  href="control_panel.php?view=comments">
                    Comentarios</a>
                <a class="nav-item nav-link control_tabs" id="nav-contact-tab" href="control_panel.php?view=contact">
                    Contacto</a>
                <a class="nav-item nav-link control_tabs" id="nav-aboutus-tab" href="control_panel.php?view=aboutus">
                    Info conocenos</a>
                <a class="nav-item nav-link control_tabs" id="nav-location-tab" href="control_panel.php?view=location">
                    Ubicación</a>
                <a class="nav-item nav-link control_tabs" id="nav-others-tab" href="control_panel.php?view=others">
                    Otros</a>
            </div>
        </nav>
        <div>
            <?php
                switch ($view) 
                {
                    case 'products':
                        include("products_control.php");break;
                    case 'categories':
                        include("categories_control.php");break;
                    case 'users':
                        include("users_control.php");break;
                    case 'comments':
                        include("comments_control.php");break;
                    case 'contact':
                        include("contact_control.php");break;
                    case 'aboutus':
                        include("aboutus_control.php");break;
                    case 'location':
                        include("location_control.php");break;
                    case 'others':
                        include("others_control.php");break;
                    case 'editproduct':
                        include("edit_section/edit_product.php");break;
                    case 'editcategory':
                        include("edit_section/edit_category.php");break;
                    default:
                        #code
                }
            ?>
        </div>
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
<?php
    mysqli_free_result($result_categories);
    mysqli_close($database);
?>
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
<script>
    function Active()
    {
        var view ="<?php echo $view; ?>";

        document.getElementById("nav-products-tab").classList.remove("active");
        document.getElementById("nav-categories-tab").classList.remove("active");
        document.getElementById("nav-users-tab").classList.remove("active");
        document.getElementById("nav-comments-tab").classList.remove("active");
        document.getElementById("nav-contact-tab").classList.remove("active");
        document.getElementById("nav-aboutus-tab").classList.remove("active");
        document.getElementById("nav-location-tab").classList.remove("active");
        document.getElementById("nav-others-tab").classList.remove("active");

        var id= "nav-"+view+"-tab";

        document.getElementById(id).classList.add("active");
    }
</script>
