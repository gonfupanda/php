<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>hipervinculos</title>
</head>
<body>
    <?php
       $cont; 
        if(!$_GET){
            $cont=0; 
        }else{
            $cont=$_GET["cont"];
        }
        $conexion=mysqli_connect("localhost","root","","trenes") or die("fallo en la conexion");
        
        $registros4 =mysqli_query($conexion , "SELECT COUNT(*) FROM recorridos ") or die("Problemas en el select:".mysqli_error());        
        //var_dump($registros);
        
          
          $registros3 =mysqli_query($conexion , "SELECT * FROM recorridos LIMIT  ".$cont.",2") or die("Problemas en el select:".mysqli_error());
          while($reg=mysqli_fetch_array($registros3)){
            echo "Tren: ".$reg["tren"]."<br>";
            echo "Estacion: ".$reg["estacion"]."<br>";  
            echo "<hr>";      
        }
        $a=$cont-2;
        $b=$cont+2;
        $aaa=mysqli_fetch_array($registros4);


        if($cont==0){          
            echo "<a href=\"hipervinculos.php?cont=$b\">Siguiente</a>";
        }else if($cont>=$aaa[0]-2){//else if($cont>=sizeof($registros)-2){
            echo "<a href=\"hipervinculos.php?cont=$a\">Anterior</a>";         
        }else{
            echo "<a href=\"hipervinculos.php?cont=$a\">Anterior     </a>";
            echo "<a href=\"hipervinculos.php?cont=$b\">Siguiente</a>";
        }  
         
    ?>
</body>
</html>