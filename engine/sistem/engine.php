<?php

function dbConect(){
    
 $host = "localhost";
 $user = "root";
 $pass = "";   
 $data = "game-teams";

$enlace =  mysql_connect($host, $user, $pass);

    if (!$enlace) {
        die('No pudo conectarse: ' . mysql_error());
    }else{

        $db = mysql_select_db($data,$enlace);
        if ($db) {}
    }

//mysql_close($enlace);

 }


function crearTablas(){
    //con desc
    $result = mysql_query("show tables like 'gameTeams'");
    //con select
    $exist = mysql_num_rows($result);
    //autos  no existe
    if(empty($exist))
    {
        echo mysql_error();
    
    /*  
        CREATE TABLE gameTeams (
        id int NOT NULL AUTO_INCREMENT PRIMARY KEY, 
        nameTeam VARCHAR(20),
        labelTeam VARCHAR(20),
        capitanTeam VARCHAR(20),
        adCarryTeam VARCHAR(20),
        apCarryTeam VARCHAR(20),
        topTeam VARCHAR(20),
        supportTeam VARCHAR(20),
        junglerTeam VARCHAR(20),
        sustitutoTeam VARCHAR(20),
        sustituto2Team VARCHAR(20),
        sustituto3Team VARCHAR(20))
    */    
    
    }
}

function consultaDatos(){

    $sql   = "SELECT * FROM gameTeams";
    $query = mysql_query($sql);

    /*while($r = mysql_fetch_object($query))
    {}*/
}



?>
