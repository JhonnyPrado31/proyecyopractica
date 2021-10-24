<?php

class adminC{
    public function IngresoC(){
        if(isset($_POST["usuarioi"])){
            $datosC = array("usuario" => $_POST["usuarioi"],"contraseña" => $_POST["contraseñai"]);

            $tablaBD = "usuarios";

            $respuesta = AdminM::IngresoM($datosC,$tablaBD);

            if($respuesta ["usuario"] == $_POST["usuarioi"] && $respuesta ["contraseña"] == $_POST["contraseñai"]){
                session_start();

                $_SESSION["ingreso"] = true;
                echo"si entro";
                header("location:index.php?ruta=registro_cuadre");

            }else {
                echo "Error";
            }
        }
    }
}