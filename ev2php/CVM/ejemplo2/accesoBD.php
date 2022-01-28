<?php
    function crearConexion($servidor,$usuario,$contra,$bd){
        return mysqli_connect($servidor,$usuario,$contra, $bd);
       
    }
    function consulta($conexion,$consulta){
        
        $resultado= mysqli_query($conexion,$consulta);
        $est=array();
        while ($fila = mysqli_fetch_array($resultado)){
            $est[]=$fila;
            
        }
        mysqli_close($conexion);
        return $est;
    }

?>
