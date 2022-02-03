<?php
@$conexion = new mysqli('localhost', 'root', '', 'dwes');
//@$conexion = new mysqli('localhost', 'root', '', 'dwe');
//PHP soporta un operador de control de errores: el signo de arroba (@).
//  Cuando se antepone a una expresión en PHP, cualquier mensaje de error que pueda ser generado de forma predeterminada por esa expresión será ignorado.
$error = $conexion->connect_errno;
if ($error != null) {
     echo "<p>Error $error conectando a la base de datos: $conexion->connect_error</p>";
     exit();
}
echo "Conexión establecida correctamente";
?>
