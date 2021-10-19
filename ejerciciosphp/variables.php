<?php

//phpinfo();
/*
$a = "esto es un string";
$b= 12;
$c=true;
$d = 3.33;*/

/*
echo gettype($a);echo "\n";
echo gettype($b);echo "\n";
echo gettype($c);echo "\n";
echo gettype($d);echo "\n";

echo "el valor de la variable es $a";
echo "el valor de la variable es". $a;
echo 'el valor de la variable es $a';*/

/*
//este modo es horrible
echo<<<mensaje
el valor de la variable es:$a
mensaje;
//este modo tambien es horrible
echo<<<'mensaje'
el valor de la variable es: $a
mensaje;*/

//manejar tipos de errores que quieres que salgan(Hay que ponerlos en la parte superior)
//error_reporting (E_ALL);  //todos
//error_reporting (E_ALL &~E_NOTICE);  //todos menos los NOTICE
//error_reporting (0);  //ninguno
/*
const Pi = 3.14;
const pi=3.14;
echo pi.'</br>';
echo pi.'</br>';
$x=pi+2;


echo 'el valor de la variable es '.pi.'</br>';
echo 'el valor de la variable es '.$x.'</br>';*/

//hago el comando dir dentro de php
/*$var =`dir`;
echo "<pre>$var</pre>";*/

//llamo al fichero php.ini
//php.init();
/*

$numero = 0;
$resultado = 1 / $numero;
print "<p>Resultado: $resultado</p>";

print "sumar 2 valores<br>";
$x=$y+5;
print "el resultado de la suma es: $x" */

//ejercicio1
//crear una funcion inicializar una variable y con dos echos: uno visualiza contenido de dicha variable y el otro
//visualiza una variable global con el mismo nombre que la local
/*
$var=2;
function prueba(){
    $var=1;
    echo $GLOBALS["var"]."</br>";
    echo $var;
}

prueba();
*/
//ejercicio2
//inicializar dos variables globales,inicializar dos variables dentro de la funcion con el global y pasar el valor de la primera
//variable a la segunda variable. visualizar fuera de la funcion el contenido de las variables de dos formas diferentes
/*
$a=2;
$b=4;
function prueba(){
    global $a;
    global $b;
    $a =$b;
}

prueba();
echo $GLOBALS["a"]."</br>";
echo $b;
*/

//ejercicio con varias variaables y realizar asignaciones por valor y por referencia
$x=1;
$b= 2;

function sumar_uno(&$x,$b) {//& para la asignacion por referencia
    echo "antes del cambio: </br>";
    echo $x."</br>";
    echo $b."</br>";
    $x++;
    $b++;//b=b+1;
    echo "Despues del cambio: </br>";
    echo $x."</br>";
    echo $b."</br>";//fuera de la funcion vuelve a su valor original
}

sumar_uno($x,$b);
echo "fuera de la funcion: </br>";
echo $x."</br>";//mantiene el cambio
echo $b;//mantiene el valor original

//

?>