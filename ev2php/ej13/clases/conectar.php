<?php 

     function conexion(){
        $conexion=mysqli_connect("localhost","root","", "estudiantes")  or die("fallo en la conexion");
        $sql="SELECT id,nombre,telefono FROM alumnos";
        $resultado = mysqli_query($conexion,$sql) or die("fallo en la la sentencia");
        // crear el array de elementos para la capa de la vista
        $est=array();
        while ($fila = mysqli_fetch_array($resultado)){
            $est[]=$fila;
            
        }
        //mysqli_close($conexion);
        //var_dump($est);
        return $est;
       
    }
     function desconexion(){
         mysqli_close();
        
    }

?>