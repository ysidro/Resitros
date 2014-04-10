<?php  

      require("engine/sistem/engine.php");

        $dbConect = dbConect();
    $deletTeam = mysql_real_escape_string($_GET['id']);
    $sql = "DELETE FROM gameTeams WHERE id ='".$deletTeam."'"; 

        $insert = mysql_query($sql); 
        if($insert){
                header("location: " . $_SERVER['HTTP_REFERER']);
            };

        echo "<div class='alert-error'>Hay problemas <br />" . mysql_error() . "</div>";        




?>