<?php
    function visualizar($est){
        var_dump($est);       
       foreach ($est as $b ) {//no funciona
        var_dump($b);
            for($i=0;$i<sizeof($b);$i++){
                echo "ID:".$b[$i]["id"]."<br>";
                echo "Nombre". $b[$i]["nombre"]."<br>";
                echo "telefono".$b[$i]["telefono"]."<br>";
                echo "<hr>"; 
            }
       }
   }  
?>