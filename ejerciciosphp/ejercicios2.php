<html>

<head>
    <title>ejercicios</title>

    <style>
                h1{font-family: "Times New Roman";text-decoration: underline;}
                body{background-color:lightblue;}
    </style>
</head>
<body>

<h1>Ejercicios</h1>
<?php

//ejercicio 1
/*
    $dia=24;
    //$mes=10;
    $mes =12;

    if($mes==12 && $dia==24) {
        echo "es navidad";
    }else {
        echo "no es navidad";
    }

    if($dia!=24 ||$mes!=12){
        echo "no es navidad";
    }else{
        echo "es navidad";
    }
*/

//ejercicio2
/*
    $a=2;
    $b=2;
    $c=2;
    $d=0;

    if($a==$b && $a==$c){
        $d=$a+$b;
        echo $d*$c;
    }else{
        echo "Los numeros no son iguales";
    }
*/

//ejercicio 3
/*
    $a=9;
    if($a<5){
        echo "Has pencado zoquete";
    }else if($a<6){
        echo "Has aprobado";

    }else if($a<7){
        echo "Bien";
    }else if($a<8){
        echo "Notable";
    }else{
        echo "Sobresaliente";
    }
*/

//ejercicio4
/*
    $a=1;
    $b=2;
    $opcion="d";
    $cont=1;
    echo "Introduce una opcion entre:s,r,m,d</br>";
    do{
        switch($opcion){
            case "s":
                echo $a+$b;
                break;
            case "r":
                echo $a-$b;
                break;
            case "m":
                echo $a*$b;
                break;
            case "d":
                echo $a%$b;
                break;
            default:
                echo "Introduce una opcion valida";
                break;

        }
        $cont--;


    }while($cont!=0);
*/

//PARTE DE LSO EJERCICOS CON BUCLES

//ejercicio1

//explica
//va mostrando el numero y aumentandolo hasta que supera el numero de 10
/*
    $var=1;
    while($var<=10){
        echo  $var;
        echo "<br />";
        $var++;
    }
    echo $var;
 */

//ejercicio2
//va mostrando esa frase y aumentando el tamaño de la letra hasta que llega a 7
/*
    $size=1;
    while ($size<=7)
    {
    echo "<font size=$size> Tama&ntilde;o $size </font> <br />";
    $size++;
    }
    */

//ejercicio3
/*
    echo "Multiplos de 4 de 100 a 400";
    for($a=100;$a<=400;$a++){
        if($a%4==0){
            echo $a."</br>";
        }
}*/

///Bucles con do...while

//ejercicio1
//fecha coje el dia y el contador va sumando y saliendo por pantalla hasta ser igual que el dia
/*
    $fecha = date("d");
    $cont =1;
    do{
        echo $cont."</br>";
        $cont++;

    }while($cont!=$fecha);
    */

//ejercicio2
/*
    $ale =rand(1,100);

    function random(){
       // global $ale;
       // echo $ale."</br>";
       
        echo $GLOBALS["ale"]."</br>";
        $cont=1;
        do{
            echo $cont."</br>";
            $cont++; 
        }while($cont<$GLOBALS["ale"]);
    }
*/
    //random();
    /*
    function statica(){
        static $misma =1;
        echo "Esta es la variable estatica: ".$misma."</br>";
        $misma++;
        
    }*/
   // statica(); statica(); statica()
    

//ejercicio3
/*
    $cont i=1;
    do{
        echo $i."</br>";

    }while($i<=20);
*/

///ejercicios con FOR

//ejercicio1
/*
    for($i=1;$i<100;$i++){
        echo $i."</br>";
    }
*/

//ejercicio2
/*
    $horas =0;
    $min=0;
    $seg=0;

    for($seg=1;$horas<23;$seg++){
        echo $horas.":".$min.":".$seg."</br>";
        if($seg==59){
            $seg=0;
            $min++;
        }
        if($min==59){
            $min=0;
            $horas++;
        }

    }
*/

//ejercicio3
/*    
    echo date("d|m|y");
    for($i=2;$i<=20;$i=$i+2){
        echo $i."</br>";
    }
*/


?>
</body>
</html>