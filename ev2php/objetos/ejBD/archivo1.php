<html>
    <head>
        <meta charset="utf-8">
    </head>
    <body>
    
        <?php   
            $conexion=mysqli_connect("localhost","root","", "estudiantes") or die ("fallo en la conexion");      
            $est=array();   
            $sql="SELECT id,nombre,telefono FROM alumnos";
            $res=mysqli_query($conexion,$sql) or die ("fallo en la consulta");
            //var_dump($conexion);
            //var_dump($res);
            while($reg =mysqli_fetch_assoc($res)){//mysqli_fetch_array($res)   mysqli_fetch_assoc($res)
                //vamos a guardar cada registro como un array asociativo
                //mysqli_fetch_assoc($res) es lo mismo que mysqli_fetch_array($res,MYSQLI_ASSOC)  
                $est[]=$reg;    
            }

           /* for($i=0; $i<sizeof($est);$i++){

                $id=$est[$i]['id'];
                $nom=$est[$i]['nombre'];
                $telefono=$est[$i]['telefono'];
                echo <<<visualizacion
                Identificación: <input type='text' value='$id'/>
                <br />
                Nombre Completo: <input type='text' value='$nom'/>
                <br />
                Teléfono: <input type='text' value='$telefono'/>
                <br />
                <hr />
                visualizacion;
            }*/

            //con un foreach
           /* foreach($est as $indice =>$contenido){
                $id=$contenido["id"];
                $nom=$contenido["nombre"];
                $telefono=$contenido["telefono"];
                echo <<<visualizacion
                Identificación: <input type='text' value='$id'/>
                <br />
                Nombre Completo: <input type='text' value='$nom'/>
                <br />
                Teléfono: <input type='text' value='$telefono'/>
                <br />
                <hr />
                visualizacion;
            }*/

            //2 foreach
            $leyendas=["id","nombre","telefono"];
            foreach($est as $indice =>$contenido){
                $i=0;
                foreach($contenido as $b =>$a){
                    $id=$contenido["id"];
                    $nom=$contenido["nombre"];
                    $telefono=$contenido["telefono"];
                    echo $leyendas[$i].":<input type='text' value='$a'/><br>";
                    $i++;
                   
                }
                echo "<hr>";
                
            }
        ?>
   </body>
</html>
