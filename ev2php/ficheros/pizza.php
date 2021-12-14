<!DOCTYPE html >
<html >
<head>
<meta http-equiv="content-type" content="text/html; charset=UTF-8" />
<title>Pizzas</title>
</head>
<body> 

<form action="pizza2.php" method="get" >
   <p>nombre: <input type="text" name="nombre" size="20"/></p>
   <p>Direccion: <input type="text" name="direccion"/></p>
   <!--ESTO SE PRODIA HACER CON BUCLE-->
   <?php 
   $tipo="";
   $num;
        for($i=0;$i<5;$i=$i+2){//podria hacer que salte de 2 en 2 y que el num sea el siguiente a i
            switch($i){
                case 0:
                    $tipo="Jamon Y queso";
                    break;
                case 2:
                    $tipo="Napolitana";
                    break;
                case 4:
                    $tipo="Muzzarella";
                    break;
            }
            $num=$i+1;
            echo<<<zana
            <p><input type="checkbox" name="$i"/ value="$tipo">$tipo</p>
            <p><input type="number" name="$num"/></p>
zana;
        }
   ?>
   <p><input type="submit"  name="submit" value="aceptar." /></p>
</form>
</body>
   <!--
   <p><input type="checkbox" name="jamonYqueso"/> Jamon Y queso:</p>
   <p><input type="number" name="checkJamon"/></p>
   <p><input type="checkbox" name="napolitana"/>Napolitana: </p>
   <p><input type="number" name="checkNapo"/></p>
   <p><input type="checkbox" name="muzzarella"/>Muzzarella: </p>
   <p><input type="number" name="checkMuza"/></p>-->
</html>