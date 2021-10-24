<?php

class ConexionBD{
    Public function cBD(){

        $server = "";
        $user = "";
        $pass = "";
        $db = "";

        $conexion = new mysqli($server, $user, $pass, $db);


        return $conexion;

    }
}
    
?>  