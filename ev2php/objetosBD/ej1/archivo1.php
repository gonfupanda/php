<?php
    @$conexion = new mysqli('localhost', 'root', '', 'dwes');
    //$conexion->query("DROP TABLE aaa") or die("fallo en el drop");
    $conexion->query("CREATE TABLE aaa AS SELECT * FROM stock WHERE unidades=1")or die("fallo en la la creacion de la tabla2");
    
    //var_dump($est);
    $error = $conexion->connect_errno;
    if ($error == null) {

        $resultado = $conexion->query('DELETE FROM stock WHERE unidades=0');
        $conexion->query("DROP TABLE aaa");
        
        if ($resultado) {
            print "<p>Se han borrado $conexion->affected_rows registros.</p>";
            $conexion->close();
        }   
        //$conexion->close();
    }else{
        $conexion->close();
    }
?>
