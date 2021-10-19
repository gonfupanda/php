<html>
<head>
    <title>formulario</title>
</head>
<body>
    <?php
        $valor=$_GET["numero"];
    
        //formulario
       echo" <form method=\"GET\" action=\"practica313\"> ";
            echo $valor." X 1"."<input type=\"text\" name=\"1\"></br>";
            echo $valor." X 2"."<input type=\"text\" name=\"2\"></br>";
            echo $valor." X 3"."<input type=\"text\" name=\"3\"></br>";
            echo $valor." X 4"."<input type=\"text\" name=\"4\"></br>";
            echo $valor." X 5"."<input type=\"text\" name=\"5\"></br>";
            echo $valor." X 6"."<input type=\"text\" name=\"6\"></br>";
            echo $valor." X 7"."<input type=\"text\" name=\"7\"></br>";
            echo $valor." X 8"."<input type=\"text\" name=\"8\"></br>";
            echo $valor." X 9"."<input type=\"text\" name=\"9\"></br>";
            echo $valor." X 10"."<input type=\"text\" name=\"10\"></br>";

            echo "<input type=\"submit\" name=\"botonnumero\" value=\"aceptar\" > ";
            echo"<input type=\"text\" name=\"valor\" hidden value=\"".$valor."\">";
        echo "</form>";            
    ?>

</body>
</html>    
