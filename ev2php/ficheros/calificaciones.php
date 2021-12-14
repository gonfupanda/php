<?php 
    $fp = fopen('calificaciones.txt','r') or die('ERROR: No ha sido posible abrir el archivo. Revisa su nombre y sus permisos.');
    while (!feof($fp)) { // loop hasta que se llegue al final del archivo
        $line = fgets($fp);
        $field[] = explode ('&', $line); // dividimos $line en sus celdas, separadas por el caracter &  e incorporamos la línea a la matriz $field
    }
    fclose($fp);
    $nombres=[];
    $esta;

    //var_dump($field);//saca contenido de la array
    /*
    foreach($field as $infor){
        if($infor[2]<5){
            
            echo ' 
            <div>Nombre: '.$infor[0].'</div>
        
            <div>Asignatura: '.$infor[1].'</div> 
            <div>Nota:'.$infor[2].'</div>'; 
            echo "<div>*******************</div>";
              
            }
    }*/

    //ejercicio2
    $cont=0;
   foreach($field as $infor){
        if($infor[2]<5){
            $esta=false;
           /* foreach($nombres as $a){
                if($a==$infor[0]){
                    $esta=true;
                }
            }*/
            $cont=0;
            while(!$esta && $cont<sizeof($nombres)){
                
                if($nombres[$cont]==$infor[0]){
                    $esta=true;
                }
               // echo "".$nombres[$cont]."=".$infor[0]."";
                $cont++;
            }

            if($esta==false){
                $nombres[]=$infor[0];
                echo ' 
                <div>Nombre: '.$infor[0].'</div>';    
                echo "<div>*******************</div>";
              
                }
            }           
    }
    var_dump($nombres);
             
        
?>