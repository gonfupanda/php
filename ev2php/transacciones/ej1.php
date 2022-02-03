<?php
@$conexion = new mysqli('localhost', 'root', '', 'dwes');
$error = $conexion->connect_errno;
if ($error == null) {//null==todo va bien
    $conexion->autocommit(false);  

    $resultado1 = $conexion->query("insert into producto values('produc1',NULL,'prd1',NULL,0,'MP3')");
    if ($resultado1) {
    print "<p>Se ha insertado $conexion->affected_rows registro.</p>";
    }else{
        echo "error1";
    } 

    $resultado2 = $conexion->query("insert into stock values('produc11',1,60)"); //error al escribir, se queria poner: produc1
    if ($resultado2) {
        print "<p>Se ha insertado $conexion->affected_rows registro.</p>";
    }else{
        echo "error2";
    } 

    if(!$resultado1 && !$resultado2){
        $conexion->commit();
    }else{
         $conexion->rollback();
    }
}

$conexion->close();
?>
