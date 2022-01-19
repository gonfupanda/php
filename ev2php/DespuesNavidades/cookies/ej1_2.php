<?php
header('Content-Type: text/html; charset=UTF-8');

setcookie("nombre",$_REQUEST["nombre"],time()+60*60*24*365);
header("Location:ej1.php");
?> 
<html>
<head>
<title>Problema</title>
</head>
<body>
<!--<script>window.location.replace("ej1.php");</script>-->
<!--<a href="cookies3.php">Ir a la otra página</a>-->
</body>
</html>
