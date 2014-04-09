<?php 
    $rutaStyle = "css";
    $rutaJs    = "js";
    include("engine/tpm/header.tpm"); 
?>

    

        <section>
            <div class="container">
                <div id="newTeam" class="col-xs-4">
                <form action="engine/sistem/inserNewData.php" method="post" role="form">
                    <div class="form-group">
                        <label for="nameTeam">Nombre del Equipo</label>
                        <input type="text" name="nameTeam" id="nameTeam" class="form-control" placeholder="Ingresar Nombre del Equipo">
                    </div>
                    <div class="form-group">
                        <label for="labelTeam">Etiqueta del Equipo</label>
                        <input type="text" name="labelTeam" id="labelTeam" class="form-control" placeholder="Ingresar Etiqueta">
                    </div>
                    <div class="form-group">
                        <label for="capitanTeam">Capitán</label>
                        <input type="text" name="capitanTeam" id="capitanTeam" class="form-control" placeholder="Ingresar Nombre del Manda Mas">
                    </div>
                    <div class="form-group">
                        <label for="adCarryTeam">AD Carry</label>
                        <input type="text" name="adCarryTeam" id="adCarryTeam" class="form-control" placeholder="Ingresar Nombre del tirador">
                    </div>
                    <div class="form-group">
                        <label for="apCarryTeam">AP Carry</label>
                        <input type="text" name="apCarryTeam" id="apCarryTeam" class="form-control" placeholder="Ingresar Nombre del Maldito Mago">
                    </div>
                    <div class="form-group">
                        <label for="topTeam">Top</label>
                        <input type="text" name="topTeam" id="topTeam" class="form-control" placeholder="Ingresar Nombre del aguata Golpes">
                    </div>
                    <div class="form-group">
                        <label for="supportTeam">Support</label>
                        <input type="text" name="supportTeam" id="supportTeam" class="form-control" placeholder="Ingresar el de los Wards">
                    </div>
                    <div class="form-group">
                        <label for="junglerTeam">Jungler</label>
                        <input type="text" name="junglerTeam" id="junglerTeam" class="form-control" placeholder="Ingresar Nombre del Come Mostruos">
                    </div>
                    <div class="form-group">
                        <label for="sustitutoTeam">Suplente A</label>
                        <input type="text" name="sustitutoTeam" id="sustitutoTeam" class="form-control" placeholder="Ingresar suplete">
                    </div>
                    <div class="form-group">
                        <label for="sustituto2Team">Suplente B</label>
                        <input type="text" name="sustituto2Team" id="sustituto2Team" class="form-control" placeholder="Ingresar otro calienta banca">
                    </div>
                    <div class="form-group">
                        <button class="btn btn-default">Registrar</button>
                    </div>
                    <div id="listLink" class="form-group">
                        <a class="btn btn-default" href="listado.php">
                            Ver Listado de participantes
                        </a>
                    </div>
                </form>
            </div>
</div>
</section>
<?php include("engine/tpm/footer.tpm"); ?>