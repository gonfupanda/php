<html>
    <head>
    </head>
    <body>
        <?php
        /*$Cadena = "Tipo de dato de cadena";
        $NumeroEntero = 1;  		// Un valor entero
        $NumeroFlotante = 1.55; 	// Un valor numérico con decimales
        $Booleano = True; 		// Un valor booleano True (1) o False (0) 
        $Matriz[0]= "A"; 		// Un valor de matriz con subíndice 0
        $Matriz[2] = 3; 		// Un valor de matriz con subíndice 2
        $NumeroOctal = 012; 		// Un número octal 12 es decimal 10
        $NumeroHexadecimal = 0x1C; //Un número hexadecimal 1c igual a decimal 28
        $NumeroNegativo = -33; // Los números negativos llevan el signo adelante
        $NumeroFlotanteExp = 1.55e3;
        echo $Cadena;
        echo $NumeroEntero;
        echo $NumeroFlotante;
        echo $Booleano;
        echo $Matriz[0];
        echo $Matriz[2];
        echo $NumeroOctal;
        echo $NumeroHexadecimal;
        echo $NumeroNegativo;
        echo $NumeroFlotanteExp;*/

        $nombre = "Miren"; //asignación por valor
        $nombreBis=&$nombre; // asignación por referencia.
        $numero =1;

        echo gettype($nombre);
        echo gettype($numero);

        $nombre = "miron"; //asignación por valor // asignación por referencia.

      //  echo $nombre;
       // echo $nombreBis;//se cambia automaticamente al valor de $nombre actual

        /*
        FUNCIONES
        
        gettype()
        is_array()
        is_bool()
        is_float()
        is_integer()
        is_null()
        ,is_numeric()
        is_object() 
        is_resource()
        is_scalar()
        is_string()
        var_dump()
        */
        ?>

    </body>

</html>