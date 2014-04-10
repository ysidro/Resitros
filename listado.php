<?php     
    $rutaStyle = "css";
    $rutaJs    = "js";
    $rutalink  = "";
    require("engine/sistem/engine.php");
    include("engine/tpm/header.tpm"); 
?>


<section>
    <div class="container">
        <div class="col-xs-12">
        <h3>Listado de Equipos</h3>
        

    
<?php
    
    $dbConect = dbConect();

    $sql   = "SELECT * FROM gameTeams";
    
    $query = mysql_query($sql);

    while ($l = mysql_fetch_array($query)) {
 
 ?>
  <div class="equipo">
        <div  class="ident">
            <div class="col-xs-4"><h4>Nombre del Equipo:</h4> <?php echo $l["nameTeam"]; ?> </div>
            <div class="col-xs-4"><h4>Etiqueta:</h4> <?php echo $l["labelTeam"]; ?> </div>
            <div class="col-xs-4"><h4>Capitan:</h4> <?php echo $l["capitanTeam"]; ?> </div>
            <br >
        </div>
            <div class="col-xs-12">

               <div class="col-sm-3"><h5>Ad Carry</h5> <?php  echo $l["adCarryTeam"];?> </div>
               <div class="col-sm-3"><h5>Ap Carry</h5> <?php  echo $l["apCarryTeam"];?> </div>
               <div class="col-sm-3"><h5>Top</h5>      <?php  echo $l["topTeam"];?>     </div>
               <div class="col-sm-3"><h5>Support</h5> <?php  echo $l["supportTeam"];?>  </div>
               <div class="col-sm-3"><h5>Jungler</h5> <?php  echo $l["junglerTeam"];?>  </div>
               <div class="col-sm-3"><h5>Sustitulo A</h5> <?php  echo $l["sustitutoTeam"];?></div>
               <div class="col-sm-3"><h5>Sustitulo B</h5> <?php  echo $l["sustituto2Team"];?></div>
               <div class="col-xs-3"> <br>
              <a class="btn btn-lol" href="eleminarTeam.php?id=<?php echo $l["id"]; ?>">Eliminar </a>

              <a class="btn btn-lol" href="editarTeam.php?id=<?php echo $l["id"]; ?>">Editar </a>
            </div>
           </div>
        </div>
  


<?php } ?>  </div>
        </div>
</section>


<?php include("engine/tpm/footer.tpm"); ?>