<div class="album container py-5">
    <h1 class="jumbotron-heading text-center py-5">Category Name</h1>
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