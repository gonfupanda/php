<?php
include("clases/vista.php");
include("clases/estudiantes.php");
//$esta;
$est=new Estudiante();
//var_dump($est);
/*while ($fila = mysqli_fetch_array($est)){
    $esta[]=$fila;
    
}*/

//var_dump($esta);
visualizar($est);
//$est ->visualizar($est);
        
?>