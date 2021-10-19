<!DOCTYPE html>
<html >
<head>
<meta  charset=utf-8" />
<title>Calculadora</title>
</head>
<body>
<?php
    //require("C:/wamp/www/f2.php");
    $pri = $_GET['primera'];
	$seg = $_GET['segunda'];
	$op = $_GET['operador'];
	echo "<h1> Calculadora</h1>";
	echo "<h3>n1: $pri &nbsp n2: $seg <br> operacion: $op</h3>";
	echo "<br>resultado: ";

    
    function sumar($a,$b){
        return $a + $b;
    }
    function restar($a,$b){
        return $a - $b;
    }
    function multiplicar($a,$b){
        return $a * $b;
    }
    function dividir($a,$b){
        return $a / $b;
    }
	switch ($op){
		case "+": 
			echo sumar($pri,$seg); 
			break;
		case "-":     
			echo restar($pri,$seg); 
			break;
		case "*": 
			echo multiplicar($pri,$seg); 
			break;
		case "/": 
			echo dividir($pri,$seg); 
			break;
	}


?>
</body>
</html>
