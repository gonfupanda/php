<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8"/>
<title>Pagina 1</title>
</head>
<body>
<?php
if(isset($_GET['bien'])){
echo "<p>Bienvenido: " . $_SESSION['nombre'] . "";
echo "<p>Bienvenido: " . $_SESSION['edad'] . "";
//session_destroy();
echo "<p><a href=' ejer1.php'>Cerrar Sesion</a></p>";   
}else {
?>
<form action="ejer2.php" method="GET">
    <p>
        <!--Nombre:<input type="text" placeholder="Tu Nombre!" name="nombre" required/> -->
        Nombre:
        <?php echo(!isset($_GET["nombree"])?"<input type=\"text\" placeholder=\"Tu Nombre!\" value=\"".$_SESSION["nombre"]."\" name=\"nombre\"  required/>": "<input type=\"text\" placeholder=\"Tu Nombre!\"  name=\"nombre\"  required/>");?>
        <?php echo(isset($_GET["nombree"])? $_SESSION["avisoNombre"]: ""); ?>
    </p><br />
    <p>
          <!--Edad:<input type="text" placeholder="Tu edad!" name="edad"  required/> -->
          Edad:
        <?php echo(!isset($_GET["edadd"])?"<input type=\"text\" placeholder=\"Tu edad!\" value=\"".$_SESSION["edad"]."\" name=\"edad\"  required/>": "<input type=\"text\" placeholder=\"Tu edad!\"  name=\"edad\"  required/>");?>
        <?php echo(isset($_GET["edadd"])? $_SESSION["avisoedad"]: ""); ?>
    </p><br />
    <input type="submit" value="Enviar" />
</form>
<?php
}
?>
</body>
</html>
