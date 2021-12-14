<?php 
$ar=fopen("datos.txt","a") or die("Problemas en la creacion"); 
fwrite($ar,$_POST['nombre']); 
fwrite($ar, "|"); //separación entre nombre y teléfono
fwrite($ar,$_POST['telefono'].PHP_EOL); //PHP_EOL (End Of Line. Introduce un salto de línea)
fclose($ar); 
echo "Los datos se guardaron correctamente."; 
?>