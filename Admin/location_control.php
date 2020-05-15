<?php
    $get_location =  "SELECT
                        cp.Place,
                        cp.address,
                        cp.CityId,
                        (SELECT StateId FROM City st WHERE st.CityId = cp.CityId) AS stid,
                        (SELECT StateName FROM State WHERE StateId = stid) AS state,
                        (SELECT CityName FROM City cy WHERE cy.CityId = cp.CityId) AS city,
                        cp.FrameLocation
                    FROM company cp
                    WHERE CompanyId = 1";

    
    $get_states = "SELECT * FROM state";

    $location_result = mysqli_query($database,$get_location);

    $state_result = mysqli_query($database,$get_states);

    $location = mysqli_fetch_assoc($location_result);

    $place = $location['Place'];
    $stateid = $location['stid'];
    $address = $location['address'];
    $city = $location['CityId'];
    $frame = utf8_encode($location['FrameLocation']);
    
?>
<div class="container px-5">
    <div class="row my-5">
        <div class="col-sm-7">
            <h1 class="text-right">Ubicación</h1>
        </div>
        <div class="col-sm-5 my-auto">
            <button class="btn my-btn" id="editbtn">Editar</button>
        </div>
    </div>
    <?php $msg = isset($_GET['msg']) ? $_GET['msg'] : '';
        switch ($msg):
            case 'okupd':
                echo "<div class='alert alert-success'>La Información de Conóncenos fue actualiazda correctamente</div>";
                break;
            case 'errorupd':
                echo "<div class='alert alert-danger'>Ocurrió un error al actualizar la Información de Conóncenos</div>";
                break;
        endswitch;
    ?>
    <form class="proform" action="db_connection/update_location.php" method="POST">
        <hr>
        <div class="form-group py-3">
            <label for="place-text" class="display-5"><h5>Lugar:</h5></label>
            <div>
                <?php
                    echo "<input class='form-control' name='place' id='place-text' type='text' value='$place' disabled>"; 
                ?>
            </div>
        </div>
        <div class="form-group">
            <label for="address-text" class="col-form-label"><h5>Direccion:</h5> </label>
            <div>
                <?php
                    echo "<input class='form-control' name='address' id='address-text' type='text' value='$address' disabled>";
                ?>
            </div>
        </div>
        <div class="form-group">
            <label for="state-text" class="col-form-label"><h5>Departamento:</h5></label>
            <div>
                <select id="state-text" class="form-control" disabled>
                    <?php
                        while ($state = mysqli_fetch_assoc($state_result)) 
                        {
                            echo "<option value='$state[StateId]'>".utf8_encode($state['StateName'])."</option>";
                        }
                    ?>
                </select>
            </div>
        </div>
        <div class="form-group">
            <label for="city-text" class="col-form-label"><h5>Ciudad:</h5></label>
            <div>
                <select id="city-text" name="city[]" class="form-control" disabled>
                </select>
            </div>
        </div>
        <div class="form-group">
            <label for="frame-text" class="col-form-label"><h5>Frame de Ubicación:</h5></label>
            <div>
                <input class='form-control' name='frame' id='frame-text' type='text' aria-describedby='frame' placeholder="Ingrese un frame de ubicacion" disabled>
            </div>
            <small class="text-muted" id="frame">
                Ingrese a google maps y busque su nueva ubicación,
                haga click en "compartir", luego en "insertar un mapa"
                finalmente, haga click en "copiar html" y lo pega en este campo.
            </small>
            
        </div>
        <div class="form-group">
            <div>
                <button type="submit" class="btn my-btn" id="save" disabled>Guardar Cambios</button>
            </div>
        </div>
        <div class="text-center mt-5">
            <h5>Ubicación Actual:</h5>
            <div>
                <iframe height="500px" width="1000px"
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d993.5499803443171!2d-75.51832817080246!3d5.071320999769954!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zNcKwMDQnMTYuOCJOIDc1wrAzMScwNC4wIlc!5e0!3m2!1ses-419!2sco!4v1588109342729!5m2!1ses-419!2sco" 
                    frameborder="0" allowfullscreen="true" aria-hidden="false" tabindex="0">
                </iframe>
            </div>
        </div>
    </form>
</div>
<script type="text/javascript">
    $(document).ready(function(){
        $('#state-text').val(<?php echo $stateid; ?>);
        loadCities();

        $('#state-text').change(function(){
            loadCities();
        });
    })
</script>
<script type="text/javascript">
    function loadCities()
    {
        $.ajax({
            type:"POST",
            url:"db_connection/location_data.php",
            data:"state=" + $('#state-text').val() + "&city=<?php echo $city;?>",
            success:function(back)
            {
                $('#city-text').html(back);  
            }
        });
    }
</script>
<script>
$('#editbtn').click(function(){
        $('#place-text').prop('disabled', false);
        $('#address-text').prop('disabled', false);
        $('#city-text').prop('disabled', false);
        $('#state-text').prop('disabled', false);
        $('#frame-text').prop('disabled', false);
        $('#save').prop('disabled', false);
});
</script>