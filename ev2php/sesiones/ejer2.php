<?php
session_start();
$_SESSION["nombre"]=$_GET["nombre"];
$_SESSION["edad"]=$_GET["edad"];

$nombre=$_SESSION["nombre"];
$edad=$_SESSION["edad"];
//echo $edad;

$_SESSION["avisoNombre"]="Introduce el nombre correctamente";
$_SESSION["avisoedad"]="Introduce la edad correctamente";



function recoge($var){  //pilar
    echo "var: ".$_REQUEST[$var];
   $tmp = is_null($_REQUEST[$var])     
        ? "": trim(htmlspecialchars($_REQUEST[$var], ENT_QUOTES, "UTF-8"));
    //echo "tmp: ".$tmp;
    return $tmp;
}
function recogee($var){  //cambiada
    echo "var: ".$var;
   $tmp = is_null($var)     
        ? "": trim(htmlspecialchars($var, ENT_QUOTES, "UTF-8"));
    //echo "tmp: ".$tmp;
    return $tmp;
}
function valido(){
    $nombre=$GLOBALS["nombre"];
    $edad=$GLOBALS["edad"];
    $nombreValido=recoge("nombre");
    //$nombreValido=recogee($nombre);
    echo $nombreValido;
    $edadValido= is_numeric($edad);
    if($edadValido && $nombreValido){
        header("Location:ejer1.php?bien=1");
        exit();
    }else if(!$edadValido && $nombreValido){
        header("Location:ejer1.php?edadd=1");
        exit();
    }else if(!$nombreValido && $edadValido){
        header("Location:ejer1.php?nombree=1");
        exit();
    }else{
        header("Location:ejer1.php?nombree=1&edadd=1");
        exit();
    }
}
valido();

?>