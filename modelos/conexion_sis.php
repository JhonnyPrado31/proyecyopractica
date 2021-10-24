<?php

class ConexionBD{

    
    Public static function cBD(){

            $bd = new PDO("mysql:host=localhost; dbname=id17821434_cormariscaldb",
            "root","");


        return $bd;

    }
}
    
?>  