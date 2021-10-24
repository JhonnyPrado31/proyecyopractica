<?php

class Modelo{
    static public function RutasModelo($rutas){
        if($rutas== "registro_clientes" || $rutas== "registro_cuadre" || $rutas== "costo_gasolina" || $rutas== "registro_compras" || 
        $rutas== "reporte_cuadre" || $rutas== "fondos_clientes" || $rutas== "ingreso"){
        $pagina = "vistas/modulos/".$rutas.".php";
        
        }else if($rutas == "index"){
            $pagina = "vistas/index.php";
        }else{
            $pagina = "vistas/index.php";
        }
        return $pagina;
    }
}

?>