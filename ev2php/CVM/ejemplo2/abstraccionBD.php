<?php
  
    function getTodosLosEstudiantesModelo2(){
       $conexion =crearConexion("localhost","root","","estudiantes");
       $resultado=consulta($conexion,"SELECT * FROM alumnos");
     
       return $resultado;
    } 
?>
