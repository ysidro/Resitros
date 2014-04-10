<?php 
    
    require("engine.php");
    /* Capturar datos del formulario */
        
        $nameTeam       = mysql_real_escape_string(trim($_POST["nameTeam"]));
        $labelTeam      = mysql_real_escape_string(trim($_POST["labelTeam"]));
        $capitanTeam    = mysql_real_escape_string(trim($_POST["capitanTeam"]));
        $adCarryTeam    = mysql_real_escape_string(trim($_POST["adCarryTeam"])); 
        $apCarryTeam    = mysql_real_escape_string(trim($_POST["apCarryTeam"])); 
        $topTeam        = mysql_real_escape_string(trim($_POST["topTeam"]));
        $supportTeam    = mysql_real_escape_string(trim($_POST["supportTeam"]));
        $junglerTeam    = mysql_real_escape_string(trim($_POST["junglerTeam"]));
        $sustitutoTeam  = mysql_real_escape_string(trim($_POST["sustitutoTeam"]));
        $sustituto2Team = mysql_real_escape_string(trim($_POST["sustituto2Team"]));

        /* Validad carpos  */
 
            if( $nameTeam       ==  "" ||
                $labelTeam      ==  "" ||
                $capitanTeam    ==  "" ||
                $adCarryTeam    ==  "" ||
                $apCarryTeam    ==  "" ||
                $topTeam        ==  "" ||
                $supportTeam    ==  "" ||
                $junglerTeam    ==  "" 
            )
            {
            
                echo "<h3>UPSSSS...</h3><p>Olvidaste llenar campo. <del>Cabeza de Huevo</del> :D</p>";
                include("../../errorcampo.php");
            
            }else{



                    $x   =  dbConect();
                    $sql =  "INSERT INTO gameTeams (nameTeam, labelTeam, capitanTeam, adCarryTeam, apCarryTeam, topTeam, supportTeam, junglerTeam, sustitutoTeam, sustituto2Team)
                        
                       VALUES('". $nameTeam . "','"
                                . $labelTeam . "','"
                                . $capitanTeam . "','"
                                . $adCarryTeam . "','"
                                . $apCarryTeam . "','"
                                . $topTeam . "','"
                                . $supportTeam . "','"
                                . $junglerTeam . "','"
                                . $sustitutoTeam . "','"
                                . $sustituto2Team . "')";

                        $query = mysql_query($sql);
                        if($query){
                            header("location: ../../index.php");
                        }else{
                            echo "EPIC FAIL.." . mysql_error();
                        }
                
            }
 ?>