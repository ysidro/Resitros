<?php 
    $rutaStyle = "../../css/";
    $rutaJs    = "../../js/";
    include("../tpm/header.tpm"); 
?>

    

        <section>
            <div class="container">
                <div id="newTeam" class="col-xs-12">
                <form action="engine/sistem/inserNewData.php" method="post" role="form">
                    <div class="form-group col-sm-6 ">
                        <label for="nameTeam">Nombre del Equipo</label>
                        <input type="text" name="nameTeam" id="nameTeam" class="form-control" value="<?php if(isset($nameTeam)){ echo $nameTeam; } ?>" placeholder="Ingresar Nombre del Equipo">
                    </div>
                    <div class="form-group col-sm-6">
                        <label for="labelTeam">Etiqueta del Equipo</label>
                        <input type="text" name="labelTeam" id="labelTeam" class="form-control" value="<?php if(isset($labelTeam)){ echo $labelTeam; } ?>" placeholder="Ingresar Etiqueta">
                    </div>
                    <div class="form-group col-sm-6">
                        <label for="capitanTeam">Capitán</label>
                        <input type="text" name="capitanTeam" id="capitanTeam" class="form-control" value="<?php if(isset($capitanTeam)){ echo $capitanTeam;} ?>" placeholder="Ingresar Nombre del Manda Mas">
                    </div>
                    <div class="form-group col-sm-6">
                        <label for="adCarryTeam">AD Carry</label>
                        <input type="text" name="adCarryTeam" id="adCarryTeam" class="form-control" value="<?php if(isset($adCarryTeam )){ echo  $adCarryTeam;} ?>" placeholder="Ingresar Nombre del tirador">
                    </div>
                    <div class="form-group col-sm-6">
                        <label for="apCarryTeam">AP Carry</label>
                        <input type="text" name="apCarryTeam" id="apCarryTeam" class="form-control" value="<?php if(isset($apCarryTeam )){ echo $apCarryTeam; } ?>" placeholder="Ingresar Nombre del Maldito Mago">
                    </div>
                    <div class="form-group col-sm-6">
                        <label for="topTeam">Top</label>
                        <input type="text" name="topTeam" id="topTeam" class="form-control" value="<?php if(isset($topTeam)){ echo $topTeam; } ?>" placeholder="Ingresar Nombre del aguata Golpes">
                    </div>
                    <div class="form-group col-sm-6">
                        <label for="supportTeam">Support</label>
                        <input type="text" name="supportTeam" id="supportTeam" class="form-control" value="<?php if(isset($supportTeam)){ echo $supportTeam; } ?>" placeholder="Ingresar el de los Wards">
                    </div>
                    <div class="form-group col-sm-6">
                        <label for="junglerTeam">Jungler</label>
                        <input type="text" name="junglerTeam" id="junglerTeam" class="form-control" value="<?php if(isset($junglerTeam)){ echo $junglerTeam; } ?>" placeholder="Ingresar Nombre del Come Mostruos">
                    </div>
                    <div class="form-group col-sm-6">
                        <label for="sustitutoTeam">Suplente A</label>
                        <input type="text" name="sustitutoTeam" id="sustitutoTeam" class="form-control" value="<?php if(isset($sustitutoTeam)){echo $sustitutoTeam; } ?>" placeholder="Ingresar suplete">
                    </div>
                    <div class="form-group col-sm-6">
                        <label for="sustituto2Team">Suplente B</label>
                        <input type="text" name="sustituto2Team" id="sustituto2Team" class="form-control" value="<?php if(isset($sustituto2Team)){echo $sustituto2Team; } ?>" placeholder="Ingresar otro calienta banca">
                    </div>
                    <div class="form-group">
                        <button class="btn btn-lol">Registrar</button>
                    </div>
                    
                </form>
            </div>
</div>
</section>
<?php include("../tpm/footer.tpm"); ?>