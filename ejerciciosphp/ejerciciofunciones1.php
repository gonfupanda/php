<html>
<head>
    <title>formulario</title>
</head>
<body>
<?php
      if(!$_GET){
    
    ?>

    <form method="GET"  action=""> 
        <label>Introduce el nombre:</label>
        <input type="text" name="nombre"> 
        <br />
        <label>Introduce el apellido:</label>
        <input type="text" name="apellido1"> 
        <br /> 
        <label>Introduce otro apellido:</label>
        <input type="text" name="apellido2"> 
        <br /> 
        <label>Introduce tu nota de Desarrollo Cliente:</label>
        <input type="number" name="desarrolloCli"> 
        <br /> 
        <label>Introduce el Desarrollo Servidor:</label>
        <input type="number" name="desarrolloSer"> 
        <br /> 
        <label>Introduce el Despliegue web:</label>
        <input type="number" name="despliegueWeb"> 
        <br /> 
         
        <input type="submit" name="botonnumero" value="aceptar" > 
    </form>
    <?php
      }else{
          function mostrar_datos(){
              echo "Nombre: ".$_GET["nombre"]."</br>";
              echo "Apellidos: ".$_GET["apellido1"]."  ".$_GET["apellido2"]."</br>";
              echo "Notas:</br>";
              echo "Desarrollo Cliente: ".$_GET["desarrolloCli"]."</br>";
              echo "Desarrollo Servidor: ".$_GET["desarrolloSer"]."</br>";
              echo "Despliegue web: ".$_GET["despliegueWeb"]."</br>";
              $media = ($_GET["desarrolloCli"]+$_GET["desarrolloSer"]+ $_GET["despliegueWeb"])/3;
              echo "Nota media: ".$media."</br>";
              
              
          }
          mostrar_datos();

      }
    
    ?>

</body>
</html>    
