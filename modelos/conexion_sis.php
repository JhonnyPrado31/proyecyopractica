<?php

class ConexionBD{

    
    function cBD(){

        $host='localhost';
        $dbname='BaseMoquegua';
        $username='master';
        $pasword='LAvidaesmrd17';
        $puerto=1433;

        try{
            $bd = new PDO("sqlsrv:Server=$host,$puerto;Database=$dbname",$username,$pasword);
            echo "Se conecto correctamente a la base de datos";
        }

        catch(PDOException $exp){
            echo ("No se logro conectar con la base de datos: $dbname, error: $exp");
        }
        
        return $bd;

    }
}
    
?>  