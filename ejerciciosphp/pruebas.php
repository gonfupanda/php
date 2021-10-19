<?php
 function incrementa ($a){
 $a = $a + 1;
 return $a;
 } 
 $a=1; 
 incrementa ($a);
 echo $a; // Muestra un 1 
 $a =incrementa($a);
 echo $a;//muestra 2
 /*
 <html> 
  <head> 
  <title>Formulario de entrada del dato nombre</title> 
  </head> 
  <body>-->
  <?php
  /*if(!$_GET){	  
  ?>
<form method="GET" action="todoUno.php"> 
  Teclea tu nombre: 
  <input type="text" name="nombre"> 
  <br /> 
  <input type="submit" value="aceptar"> 
  </form>
  <?php
  }
  else{  
    echo "El nombre tecleado es:";  
    echo $_GET['nombre'];
  }
  ?>
</body> 
</html>
 
 */ 
?>

