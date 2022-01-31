<?php
    include("conectar.php");
    class Estudiante{

        protected $est;

        public function __construct(){
            $this->est=conexion();
        }   
        public function getEstudiante(){
            desconexion();
            return $this->est;
            
        }
        function visualizar($est){
            var_dump($est);       
           foreach ($est as $a ) {//si funciona
            var_dump($a);  
                for($i=0;$i<sizeof($a);$i++){
                    echo "ID:".$a[$i]["id"]."<br>";
                    echo "Nombre". $a[$i]["nombre"]."<br>";
                    echo "telefono".$a[$i]["telefono"]."<br>";
                    echo "<hr>"; 
                }
           }
       }  
       
    }
?> 