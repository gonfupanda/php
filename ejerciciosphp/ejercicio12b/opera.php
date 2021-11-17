<?php

if(!isset($_GET["nombre"])){
     echo<<<zana
     <form name="input" action="opera.php" method="get">
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
     
}else{

     $nombre = $_GET['nombre'];
     if(isset($_GET["modulos"])){
          $modulos = $_GET['modulos'];
     }
    
     
     //si que se podria hacer en uno llamandose a si mismo


     if($nombre=="" && !isset($modulos)){
          echo<<<zana
          <form name="input" action="opera.php" method="get">
               Nombre del alumno: <input type="text" name="nombre" /><label style="color:red">Debe introducir un nombre!</label><br />
               <p>Módulos que cursa:<label style="color:red">   Debe escoger al menos uno!</label></p>
               <input type="checkbox" name="modulos[]" value="DWES" /> Desarrollo web en entorno
               servidor<br />
               <input type="checkbox" name="modulos[]" value="DWEC" /> Desarrollo web en entorno
               cliente<br />
               <br />
               <input type="submit" value="Enviar" />
          </form>
zana;
     
          }else if($nombre==""){
               if(sizeof($modulos)==2){
                    echo<<<zana
                    <form name="input" action="opera.php" method="get">
                         Nombre del alumno: <input type="text" name="nombre" /><label style="color:red">Debe introducir un nombre!</label><br />
                         <p>Módulos que cursa:</p>
                         <input type="checkbox" name="modulos[]" value="DWES" checked /> Desarrollo web en entorno
                         servidor<br />
                         <input type="checkbox" name="modulos[]" value="DWEC"checked /> Desarrollo web en entorno
                         cliente<br />
                         <br />
                         <input type="submit" value="Enviar" />
                    </form>
zana;

               }else if($modulos[0]=="DWES"){
                    echo<<<zana
                    <form name="input" action="opera.php" method="get">
                         Nombre del alumno: <input type="text" name="nombre" /><label style="color:red">Debe introducir un nombre!</label><br />
                         <p>Módulos que cursa:</p>
                         <input type="checkbox" name="modulos[]" value="DWES" checked /> Desarrollo web en entorno
                         servidor<br />
                         <input type="checkbox" name="modulos[]" value="DWEC" /> Desarrollo web en entorno
                         cliente<br />
                         <br />
                         <input type="submit" value="Enviar" />
                    </form>
zana;

               }else{
                    echo<<<zana
                    <form name="input" action="opera.php" method="get">
                         Nombre del alumno: <input type="text" name="nombre" /><label style="color:red">Debe introducir un nombre!</label><br />
                         <p>Módulos que cursa:</p>
                         <input type="checkbox" name="modulos[]" value="DWES"  /> Desarrollo web en entorno
                         servidor<br />
                         <input type="checkbox" name="modulos[]" value="DWEC" checked /> Desarrollo web en entorno
                         cliente<br />
                         <br />
                         <input type="submit" value="Enviar" />
                    </form>
zana;

               }           
          }else if(!isset($modulos) && $nombre!=""){
               echo<<<zana
               <form name="input" action="opera.php" method="get">
                    Nombre del alumno: <input type="text" name="nombre" value="$nombre"/><br />
                    
                    <p>Módulos que cursa:<label style="color:red">    Debe escoger al menos uno!</label></p>
                    <input type="checkbox" name="modulos[]" value="DWES" /> Desarrollo web en entorno
                    servidor<br />
                    <input type="checkbox" name="modulos[]" value="DWEC" /> Desarrollo web en entorno
                    cliente<br />
                    <br />
                    <input type="submit" value="Enviar" />
               </form>
zana;                  
          }else{
               
               print "Nombre: ".$nombre."<br />";
          
               foreach ($modulos as $modulo) {
                    print "Modulo: ".$modulo."<br />";
               }
     
          }
     }
?>