<?php
include("archivo2.php");
    class Persona implements personaInterface {
        protected $nombre;
        protected $apellido;
        protected $genero;
        
        public function __construct($nombre,$apellido,$genero){
            $this->nombre=$nombre;
            $this->apellido=$apellido;
            $this->genero=$genero;
        }
        public function visualizar(){
            echo 'Nombre:'.$this->nombre.'<br>';
            echo 'apellido:'.$this->apellido.'<br>';
            echo 'genero:'.$this->genero.'<br>';
        }

        public function getNombre(){
            return $this->nombre;
        }
        public function getApellido(){
            return $this->apellido;
        }
        public function getGenero(){
            return $this->genero;
        }  
        public function setNombre($nombre){
            $this->nombre = $nombre;
        }
        public function setApellido($apellido){
            $this->apellido = $apellido;
        }
        public function setGenero($genero){
            $this->genero = $genero;
        }
    } 
?>