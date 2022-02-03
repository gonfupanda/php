<?php 
    include("conectar.php");
    include("productos.php");
    include("vista.php");

    $aa=new Conectar();
    $con=$aa->conexion();
 
    $productos=new Productos();
    $produ=$productos->getProductos($con);

    $ff=str_replace(" ","/","Hola soy un string con espacios");
    $gg=str_replace("/"," ","Hola/soy/un/string/con/espacios");
    //$pagina->visualizar($produ,$con);
    $_SESSION["productos"]=$produ;
    $_SESSION["conexion"]=$con;
    echo <<<zzana
    <form action="index.php" method="get">
    <label>Producto:</label>
    <select name="opciones" style="width:600px">
    zzana;

    foreach($produ as $a){
        for($i=0;$i<1;$i++){
            $c=$a["nombre_corto"]; 
            $d=$a["cod"];
            if(isset($_GET["opciones"])){
                if($d==$_GET["opciones"]){
                    echo "<option value=\"".$d."\" selected>".$c."</option>";
                }else{
                    echo "<option value=\"".$d."\">".$c."</option>";
                }
            }else{
                echo "<option value=\"".$d."\">".$c."</option>";
            }

            
        }
    }    
    echo <<<zanna
    </select>
    <input type="submit" name="boton" value="mostrar stock" >
    </form>
    zanna;

    echo "<br><br>";
    if(isset($_GET["boton"])){
        $opcion=$_GET["opciones"];
        $stock=array();
        $stock=$aa->getStock($_SESSION["conexion"],$opcion);
        foreach($stock as $a){
            for($i=0;$i<1;$i++){
               echo "tienda:".$a["tienda"]."<br>Unidades:".$a["unidades"]."<hr>";
               break;
            }
        }         
    }
    function verProductos($produ){
        foreach($produ as $a){
            var_dump($a["nombre_corto"]);
            for($i=0;$i<1;$i++){
               echo "cod:".$a["cod"]."<br>";
               break;
            }
        }    
    }  
    
?>