<?php 

class rutasControlador{
    public function plantilla(){
        include "vistas/ingreso.php";
    }

    public function Rutas(){
        if(isset($_GET["ruta"])){
            $rutas = $_GET["ruta"];

        }else{
            $rutas = "index";
        }

        $respuesta = Modelo::RutasModelo($rutas);

        include $respuesta;
    }   

}



?>