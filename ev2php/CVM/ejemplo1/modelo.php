<?php
    function getTodosLosEstudiantes(){
        $conexion=mysqli_connect("localhost","root","", "estudiantes")  or die("fallo en la conexion");
        $resultado = mysqli_query($conexion,"SELECT * FROM alumnos") or die("fallo en la la sentencia");
        // crear el array de elementos para la capa de la vista
        $est=array();
        while ($fila = mysqli_fetch_array($resultado)){
            $est[]=$fila;
            
        }
        mysqli_close($conexion);
        return $est;
    }
?>
