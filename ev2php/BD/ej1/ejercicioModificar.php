
<!DOCTYPE html >
<html >
    <head>
        <meta http-equiv="content-type" content="text/html; charset=UTF-8" />
        <title>con BD</title>
    </head>
    <body> 
        <?php     
            $conexion=mysqli_connect("localhost","root","","trenes") or die("Error en la coexion a la BD");
            if(!$_GET){
        ?>
   <form action="ejercicioModificar.php" method="get" >
            <h1>Tren</h1><br>
            <p>numero: <input type="number" name="numero"/></p>
            <p>Fecha Compra: <input type="date" name="fechatren"/></p>
            <p><input type="submit"  name="fechaVieja" value="Aceptar" /></p>
        </form>
        <?php
            }else if(isset($_GET["fechaVieja"])) {
                $num=$_GET["numero"];
                $seguro=mysqli_real_escape_string($conexion,$num);
                $registros =mysqli_query($conexion ,
                "select numero from  trenes where numero = $seguro") or die("Problemas en el select:".mysqli_error());
                $reg=mysqli_fetch_array($registros);
                $numCorrecto=$reg['numero'];
                if($numCorrecto==$num){
                    echo"numero bien";
                    $fechaOld=$_GET["fechatren"];
                    echo <<<zana
                    <form action="ejercicioModificar.php" method="get" >
                        <h1>Tren</h1><br>
                        <p>numero: <input type="number" name="numero" value="$num" readonly/></p>
                        <p>Fecha Compra: <input type="date" value="$fechaOld" name="fechatren" readonly></p>
                        <p>Fecha Compra Nueva: <input type="date" name="fechaTrenNueva"></p>
                        <p><input type="submit"  name="fechaNueva" value="Cambiar" /></p>
                    </form>
zana;                     
                }else{
                    echo "<h1>Numero Incorrecto</h1>";
                    echo <<< zana
                    <form action="ejercicioModificar.php" method="get" >
                        <h1>Tren</h1><br>
                        <p>numero: <input type="number" name="numero"/></p>
                        <p>Fecha Compra: <input type="date" name="fechatren"/></p>
                        <p><input type="submit"  name="fechaVieja" value="Aceptar" /></p>
                    </form>
zana;            
                }
                      
            }else{
                $fechaOld=$_GET["fechatren"];
                $fechaNew=$_GET["fechaTrenNueva"];
                $numeroo=$_GET["numero"];
                $fechaa =mysqli_query($conexion ,
                "select fecha_compra from  trenes where fecha_compra ='$fechaOld' and numero= $numeroo") or die("Problemas en el select:".mysqli_error());
                $aa=mysqli_fetch_array($fechaa);
                $fechaBn=$aa['fecha_compra'];
                if($fechaBn==$fechaOld){
                    mysqli_query($conexion,
                    "update trenes set fecha_compra='$fechaNew'  where fecha_compra='$fechaOld'") 
                    or die("Problemas en el select:".mysqli_error());
                    echo "Se ha completado el cambio";
                }else{
                    echo "<h1>Fecha Incorrecta</h1>";
                    echo <<< zana
                    <form action="ejercicioModificar.php" method="get" >
                        <h1>Tren</h1><br>
                        <p>numero: <input type="number" name="numero"/></p>
                        <p>Fecha Compra: <input type="date" name="fechatren"/></p>
                        <p><input type="submit"  name="fechaVieja" value="Aceptar" /></p>
                    </form>
zana;            
                }
            }
        ?>
    </body>

</html>