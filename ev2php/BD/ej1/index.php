
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
   <form action="index.php" method="get" >
            <h1>Tren</h1><br>
            <p>Numero: <input type="number" name="numero"/></p>
            <p>Fecha Compra: <input type="date" name="fechatren"/></p>
            <p>km_Recorridos: <input type="number" name="km"/></p>
            <p><input type="submit"  name="submitTren" value="Aceptar" /></p>
        </form>
        <form action="index.php" method="get" >
            <h1>Estacion</h1><br>
            <p>Codigo Estacion: <input type="number" name="cod_estacion"/></p>
            <p>Nombre: <input type="text" name="nom_estacion"/></p>
            <p>Poblacion: <input type="number" name="poblacion"/></p>
            <p><input type="submit"  name="submitEstacion" value="Aceptar" /></p>
        </form>
        <form action="index.php" method="get" >
            <h1>Recorrido</h1><br>
            <p>Tren: <input type="number" name="cod_estacion"/></p>
            <p>Codigo_Estacion: <input type="number" name="poblacion"/></p>
            <p><input type="submit"  name="submitRecorrido" value="Aceptar" /></p>
        </form>
        <?php
            }else {
                //var_dump($_GET);
                //ejercicio 3
                /*
                $registros =mysqli_query($conexion ,
                "select * from  trenes ") or die("Problemas en el select:".mysqli_error()); 
                while ($reg=mysqli_fetch_array($registros)){ //Para recuperar  registro a registro los datos obtenidos por el select hay que llamar a la función mysqli_fetch_array()
                    echo "Numero de tren:".$reg['numero']."<br>";
                    echo "fecha de compra:".$reg['fecha_compra']."<br>";
                   // echo "km recorridos:".$reg['km_recorridos']."<br>";

                    echo "<br>";
                    echo "<hr>";
                }
                mysqli_close($conexion);
                */


                //ejercicio 4 //no tengo estaciones en bilbao insertadas
                /*
                $registros =mysqli_query($conexion ,
                "select * from  estaciones where nombre like '%Bilbao%' ") or die("Problemas en el select:".mysqli_error()); 
                while ($reg=mysqli_fetch_array($registros)){ //Para recuperar  registro a registro los datos obtenidos por el select hay que llamar a la función mysqli_fetch_array()
                    echo "Numero de tren:".$reg['cod_estacion']."<br>";
                    echo "fecha de compra:".$reg['nombre']."<br>";
                    echo "<br>";
                    echo "<hr>";
                }

                $registros =mysqli_query($conexion ,
                "SELECT count(*) FROM `estaciones` WHERE nombre LIKE '%Bilbao%'") or die("Problemas en el select:".mysqli_error());
                echo "Numero de estaciones en Bilbao:".$registros;
                */

                 //ejercicio 6
           /*
           SELECT e.nombre AS Estacion, t.fecha_compra 
           FROM `recorridos` r, `trenes` t, `estaciones` e 
           WHERE r.estacion=e.cod_estacion 
           AND r.tren = t.numero
           */

          $registros =mysqli_query($conexion ,
          "SELECT e.nombre AS Estacion, t.fecha_compra AS fecha FROM `recorridos` r, `trenes` t, `estaciones` e WHERE r.estacion=e.cod_estacion AND r.tren = t.numero")
           or die("Problemas en el select:".mysqli_error());
           while ($reg=mysqli_fetch_array($registros)){ //Para recuperar  registro a registro los datos obtenidos por el select hay que llamar a la función mysqli_fetch_array()
                echo "Numero de tren:".$reg['Estacion']."<br>";
                echo "fecha de compra:".$reg['fecha']."<br>";
                echo "<br>";
                echo "<hr>";
            }

            //ejercicio 7
            /*
                DELETE FROM `trenes` 
                WHERE fecha_compra <= 2000-1-1

                mysqli_query($conexion  "DELETE FROM `trenes` WHERE fecha_compra <= 2000-1-1  ")
                or die("Problemas en el select:".mysqli_error());
            */

            //ejercicio 8
            /*
            mysqli_query($conexion,
                "update trenes set fecha_compra='1998-01-01'  where numero='10'") 
                or die("Problemas en el select:".mysqli_error());

            */


            /* //un insert de la tabla trenes(funciona)
                $numero=$_GET["numero"];
                echo $numero;
                $fecha=$_GET["fechatren"];
                echo "</br>".$fecha;
                $km=$_GET["km"];
                echo "</br>".$km;
                mysqli_query($conexion ,
                "insert into  trenes  values ($numero,'$fecha',$km)") or die("Problemas en el select"); 
            */
            /*
                if(isset($_POST["submitTren"]){ //me da sintax error
                    echo "Entro donde tren";


                }else if(isset($_POST["submitEstacion"]){
                    echo "Entro donde estacion";


                }else if(isset($_POST["submitRecorrido"]){
                    echo "Entro donde recorrido";


                }*/

               
        }
          
         
    
        ?>
    </body>

</html>