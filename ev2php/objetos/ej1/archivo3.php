<html>
<head>
<title>Ejercicio</title>
</head>
<body>
<?php 
include("archivo1.php");
  $persona1=new Persona('Jon ',"Arrieta","hombre");
  echo 'Datos personales de la persona:<br>';

  echo "Nombre:".$persona1->getNombre();
  //$persona1->visualizar();

?>
</body>
</html>
