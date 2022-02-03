<?php 
    class Conectar{

        /*function conexion(){
            $conexion=new mysqli("localhost","root","","dwes");
            return $conexion;

        }*/
        function conexion(){
            $conexion=new mysqli("localhost","root","","dwes");
            return $conexion;

        }
        static function desconectar($conexion){         
             $conexion->close();
        }
        function getProductos(){
            $conexion=new mysqli("localhost","root","","dwes");
            $resu=$conexion->query("SELECT * FROM producto");
            //var_dump($resu);
            return $resu;
        }
        function getStock($conexion,$produ){
            //var_dump($produ);
            $resu=$conexion->query("SELECT * FROM stock WHERE producto=\"$produ\"");
            //var_dump($resu);
            return $resu;
        }
    }
?>