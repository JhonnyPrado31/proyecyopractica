<?php
require_once "controladores/rutasC.php";
require_once "controladores/adminControler.php";

require_once "modelos/rutasM.php";
require_once "modelos/adminModel.php";

$rutas = new rutasControlador();
$rutas -> plantilla();

?>  
