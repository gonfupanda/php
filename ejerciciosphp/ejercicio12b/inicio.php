<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "
http://www.w3.org/TR/html4/loose.dtd%22%3E">
<!-- Desarrollo Web en Entorno Servidor -->
<!-- Tema 3 : Características del Lenguaje PHP -->
<!-- Ejemplo: Formulario web -->
<html>
     <head>
          <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
          <title>Formulario web</title>
     </head>
     <body>
          <?php 
               if(isset($_GET)){

               
          ?>

          <form name="input" action="inicio.php" method="get">
               Nombre del alumno:
              
               <!--  <input type="text" name="nombre" />
                    <input type="checkbox" name="modulos[]" value="DWES" /> Desarrollo web en entorno
                    servidor<br />
                    <input type="checkbox" name="modulos[]" value="DWEC" /> Desarrollo web en entorno
                    cliente<br />
                    <br />
                    <input type="submit" value="Enviar" />

               -->
               <?php 
                    if(!isset($_GET["nombre"]) || $_GET["nombre"]==""){
                    echo <<<zana
                    <input type="text" name="nombre" /><label style="color:red">Debe introducir un nombre!</label><br/>
zana;
                    }else{
                    echo <<<zana
                    <input type="text" name="nombre" value="$_GET[nombre]" /><br/>
zana;
                    }
               ?>
                <?php 
                    if(!isset($_GET["modulos"])){
                         echo <<<zana
                         <p>Módulos que cursa:<label style="color:red">   Debe escoger al menos uno!</label></p>
                         <input type="checkbox" name="modulos[]" value="DWES" /> Desarrollo web en entorno
                         servidor<br />
                         <input type="checkbox" name="modulos[]" value="DWEC" /> Desarrollo web en entorno
                         cliente<br />
zana;
                    }else{
                         if(sizeof($_GET["modulos"])==2){
                              echo <<<zana
                             
                                   <p>Módulos que cursa:</p>
                                   <input type="checkbox" name="modulos[]" value="DWES" checked /> Desarrollo web en entorno
                                   servidor<br />
                                   <input type="checkbox" name="modulos[]" value="DWEC"checked /> Desarrollo web en entorno
                                   cliente<br />

zana;     
                         }else if($_GET["modulos"][0]=="DWES"){
                              echo <<<zana
                             
                                   <p>Módulos que cursa:</p>
                                   <input type="checkbox" name="modulos[]" value="DWES" checked /> Desarrollo web en entorno
                                   servidor<br />
                                   <input type="checkbox" name="modulos[]" value="DWEC" /> Desarrollo web en entorno
                                   cliente<br />

zana;        
                         }else{
                              echo <<<zana
                             
                              <p>Módulos que cursa:</p>
                              <input type="checkbox" name="modulos[]" value="DWES"  /> Desarrollo web en entorno
                              servidor<br />
                              <input type="checkbox" name="modulos[]" value="DWEC" checked/> Desarrollo web en entorno
                              cliente<br />

zana;        
                         }  
                    }

                    if(isset($_GET["modulos"]) && $_GET["nombre"]!=""){
                         print "Nombre: ".$_GET["nombre"]."<br />";
          
                         foreach ($_GET["modulos"] as $modulo) {
                              print "Modulo: ".$modulo."<br />";
                         }
                    }
                ?>              
               <br />
               <input type="submit" value="Enviar" />
          </form>
          <?php 
          
          }else if(!isset($_GET)){
               echo<<<zana
               <form name="input" action="inicio.php" method="get">
                    Nombre del alumno: <input type="text" name="nombre" /><br />
                    <p>Módulos que cursa:</p>
                    <input type="checkbox" name="modulos[]" value="DWES" /> Desarrollo web en entorno
                    servidor<br />
                    <input type="checkbox" name="modulos[]" value="DWEC" /> Desarrollo web en entorno
                    cliente<br />
                    <br />
                    <input type="submit" value="Enviar" />
               </form>
zana;

          }
          ?>

     </body>
</html>