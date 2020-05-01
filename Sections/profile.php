<?php
    $profile_site = isset($_GET["site"]) ? $_GET["site"] : "general_info";
?>
<div class="container py-5">
    <h1 class="display-3 text-center">Perfil</h1>
    <hr>
    <div class="row py-5">
        <div class="col-sm-3">
            <div class="card">
                <img class="card-img-top" src="Images/profile_other.png" alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title">Username</h5>
                    <p class="card-text">

                    </p>
                </div>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item general_info">
                        <a class="enl" href="index.php?section=profile&site=general_info">Información Personal</a>
                    </li>
                    <li class="list-group-item change_photo">
                        <a class="enl" href="index.php?section=profile&site=change_photo">Cambiar mi foto</a>
                    </li>
                    <li class="list-group-item comments">
                        <a class="enl" href="index.php?section=profile&site=comments">Mis comentarios</a>
                    </li>
                    <li class="list-group-item favorites">
                        <a class="enl" href="index.php?section=profile&site=favorites">Mis favoritos</a>
                    </li>
                    <li class="list-group-item">
                        <a href="" style="color:red;">Cerrar Sesión</a>
                    </li>
                    
                </ul>
            </div>
        </div>
        <div class="col-sm-9">
            <?php
                switch ($profile_site) 
                {
                    case 'general_info':
                        include("profile_sections/general_info.php");
                        break;
                    case 'change_photo':
                        include("profile_sections/change_photo.php");
                        break;
                    case 'comments':
                        include("profile_sections/my_comments.php");
                        break;
                    case 'favorites':
                        include("profile_sections/favorites.php");
                        break;
                    default:
                        # code...
                        break;
                }
            ?>
        </div>
    </div>
</div>