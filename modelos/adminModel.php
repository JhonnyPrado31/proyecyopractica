<?php

require_once "conexion_sis.php";

class AdminM extends ConexionBD{

    static public function IngresoM($datosC,$tablaBD){
        $pdo = ConexionBD::cBD()->prepare("select usuario,contraseña from $tablaBD where usuario = :usuario");
        $pdo -> bindParam(":usuario",$datosC ["usuario"], PDO::PARAM_STR);
        $pdo -> execute();

        return $pdo ->fetch();
        $pdo ->close;
        
    }
}

?>