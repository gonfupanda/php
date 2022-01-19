<!DOCTYPE html >
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        <title>JI JI JI JA</title>
    </head>
    <body >
    <?php
    //setcookie("nombre","",time()-1000);//esto seria para borrar cookies

    if(!isset($_COOKIE["nombre"])){
        if(!isset($_GET["primera"])){
            echo "<a href=\"ej1.php?primera=1\">Escribe tu nombre</a>";
        }else if($_GET["primera"]=1){
            echo <<<zanna
            <form action="ej1_2.php" method="get">
                Introduce tu nombre :<br />
                <input type="text" name="nombre"><br />
                <input type="submit" value="Crear cookie">
            </form>
zanna;
        }
    }else{
        $namee=$_COOKIE["nombre"];
        echo <<< zanna
        Hola $namee<br>
        <h1>ARBOLES</h1><br>
        Un arbol es una planta perenne, de tallo leñoso,que se ramifica<br>
        El termino hace referencia habitualmente  a aquellas plantas cuya<br>
        difiere segun fuentes
zanna;
    }   
    ?>   
    </body>
</html>
