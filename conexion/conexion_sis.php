<?php

class ConexionBD{
    Public function cBD(){
        $connectionInfo = array("UID" => "master", "pwd" => "{your_password_here}", "Database" => "BaseMoquegua", "LoginTimeout" => 30, "Encrypt" => 1, "TrustServerCertificate" => 0);
        $serverName = "tcp:originmoqueguaproyect.database.windows.net,1433";
        $conn = sqlsrv_connect($serverName, $connectionInfo);
        return $conn;
    
    }
}
    
?>  