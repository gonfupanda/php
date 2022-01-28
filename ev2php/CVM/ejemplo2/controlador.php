<?php
require_once('accesoBD.php');
require_once('abstraccionBD.php');
$est=getTodosLosEstudiantesModelo2();
//require('vista.php');
require_once('logicaVista.php');
require("layout.php");
?>
