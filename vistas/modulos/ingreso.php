

<form method="post" action="">
                <input type="text" name="usuarioi"  placeholder="Usuario" required/>
            </div>
                <input type="password" name="contraseñai"  placeholder="Contraseña" required/>
            </div>  
                <input type="submit" value="Registrar" />
                <a href="vistas/index.php">aa</a>
</form>

<?php 
$ingreso = new adminC();
$ingreso -> IngresoC();

?>