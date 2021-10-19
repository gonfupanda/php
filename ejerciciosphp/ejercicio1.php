<!DOCTYPE html PUBLIC "-//W3//DTD XHTML 1.0 transitional//En" "htttp://www.w3.org/TR/xhtml1-transitional.dtd">
<html xmlns="htttp: //www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="Content-Type" content="text/html;charset=iso-8859-1"/>
        <title>ejercicio</title>

    </head>
    <body>
        
        <?php
            $nombre= "Miren";
            $telefono = 944157298;
            $sueldo = 1560.98;
           // echo "El telefono de $nombre: $telefono y su sueldo es: $sueldo "."</br>";
            //echo "<b>"."El telefono de $nombre"."</b>"."</br>";
            //echo "<i>"."El telefono de $nombre"."</i>"."</br>";
           // echo "<h1>"."El telefono de $nombre"."</h1>"."</br>";
           // echo "<u>"."El telefono de $nombre"."</ub>"."</br>";
           // echo "<s>"."El telefono de $nombre"."</s>"."</br>";

           echo 'Crear "3 variables" una para almacenar el nombre, otra para e telefono y otra para el sueldo</br>
           Visualiza el contenido de las variables:</br>';
           echo "El telefono de $nombre: $telefono y su sueldo es: $sueldo "."</br>";
           echo "Etiquetas HTML</br>";
           echo "Negrita: &ltb>&lt/b></br>"; 
           echo "CURSIVA: &lti>&lt/i></br>"; 
           echo "ENCAVEZADOS: &lth1>&lt/h1></br>"; 
           echo 'Para alinear un texto se utiliza el atributo: align="center","left"...';    
           echo "<hr></u>";
           echo "<h1 align:'center'>"."PHP</h1>"."</br>";
           echo "<hr></u>";

            echo "<p><b>PHP</b> es un lenguaje de programacion del <b>lado servidor</b></br>
            PHP puede ser usado en la <i>mayoria de los servidores web</i>.</br>
            En cuanto a las <u>palabras clave</u>,PHP comparte con la mayoria de otros lenguajes con sintaxis C las condiciones if,</br>
            los bubles con for y while y retornos de funciones. Como es habitual en este tipo de lenguajes, las sentencias deben acabar
            con punto y coma(;) 
            </p>";
        
        ?>
        
    </body>
    
</html>
