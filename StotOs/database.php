<?php
//Information om database, så en forbindelse kan skabes mellem php database og vores hjemmeside form. 
    $server = "localhost";
    $username = "root";
    $password = "";
    $name = "teater";
    
    /* Attempt to connect to MySQL database */
    $mysqli = new mysqli($server, $username, $password, $name);
    
    // Check connection
    if($mysqli === false){
        die("ERROR: Could not connect. " . $mysqli->connect_error);
    }
    


    
?>