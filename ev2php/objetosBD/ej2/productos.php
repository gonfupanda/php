<?php 
    class Productos{
        protected $produ=array();

        function __construct(){
            $this->produ;
        }
        static function getProductos($conexion){
            $resu=$conexion->query("SELECT * FROM producto") or die("fallo en la consulta");
            return $resu;
        }
    }
?>