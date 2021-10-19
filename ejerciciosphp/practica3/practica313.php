<html>
<head>
    <title>formulario</title>
</head>
<body>  
  <?php
    $valor =$_GET["valor"];

        //$respuestass = $GLOBALS["respuestas"];
      
       // $valor=$GLOBALS["valor"];
        $errores=0;
        //intento commprobar los errores con un buble
        comprobar($valor);


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
        //comprobar($respuestass,$valor);        
      
        
?>

</body>
</html>    
