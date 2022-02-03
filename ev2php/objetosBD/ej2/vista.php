<?php 
class Vista{
    function visualizar($produ,$con){
        $_SESSION["productos"]=$produ;
        $_SESSION["conexion"]=$con;
        echo <<<zzana
        <form action="vista.php" method="get">
        <label>Producto:</label>
        <select name="opciones" style="width:600px">
        zzana;

        foreach($produ as $a){
            var_dump($a);
            for($i=0;$i<1;$i++){
                $c=$a["nombre_corto"];           
                echo "<option value=".$c.">".$c."</option>";
            }
        }    
        echo <<<zanna
        </select>
        <input type="submit" name="boton" value="mostrar stock" >
        </form>
        zanna;
    }
    function verProductos($produ){
        foreach($produ as $a){
            var_dump($a["nombre_corto"]);
            for($i=0;$i<sizeof($a);$i++){
                
               echo "cod:".$a["cod"]."<br>";
               break;
            }
        }    
    }
    function stock(){
        if(isset($_GET["boton"])){
            $opcion=$_GET["opciones"];
            $stock=aray();
            $aa=new Conectar();
            $stock=$aa->getStock( $_SESSION["conexion"],$opcion);
            var_dump($stock);   
        }
    }

    
}
                    
?>

