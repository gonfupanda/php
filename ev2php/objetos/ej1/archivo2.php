<?php 

    interface personaInterface{

        public function getNombre();
        public function getApellido();
        public function getGenero();   
        public function setNombre($nombre);
        public function setApellido($apellido);
        public function setGenero($genero);
    }
   
?>