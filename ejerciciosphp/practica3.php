<html>
<head>
    <title>formulario</title>
</head>
<body>
    <?php
      if(!$_GET){
    
    ?>

    <form method="GET" > 
        Introduce un numero: 
        <input type="number" name="numero"> 
        <br /> 
        <input type="submit" name="botonnumero" value="aceptar" > 
    </form>
  <?php
      }else{
        $valor=$_GET["numero"];

        for($i=1;$i<=10;$i++){
            echo $valor."*".$i."<input type=\"text\" name=\".$i.\"></br>";
            //echo $valor."*".$i."=<input type="."text"." name=""valor".$i."></br>";
        }
        echo "<input type=\"number\" name=\"numero2\" hidden></br>";
        echo "</br>";
        $a =$_GET["numero2"];

        //creo el boton para comprobar
        echo "<input type=\"submit\" name =\"botonfinalizar\"value=\"comprobar\">"; 
        $errores=0;
        //intento commprobar los errores con un buble
        $respuestas =[];
        
        if(isset($_GET["botonfinalizar"])){
            comprobar($a);

        }
        function comprobar($a){
            $errores=0;
            for($i=1;$i<=10;$i++){
                if($_GET[$i]!=($a*$i)){
                    echo $a."*".$i."= ".$_GET[$i]."   Incorrecto</br>";
                    $errores++;
                }else{
                    echo $a."*".$i."= ".$_GET[$i]."   Correcto</br>";
                }
            }
            echo "Numero de errores: ".$errores;
        }          
      }
        
?>

</body>
</html>    
