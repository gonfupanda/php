<?php 
    ////////////////////////////////////////////////////////////////
    //ESCRIBIR EL FICHERO
    //////////////////////////////////////////////////////////////
    $ar=fopen("pedidos.txt","a") or die("Problemas en la creacion");  
   // fwrite($ar,$_POST[''].PHP_EOL);//tengo que cambiar el salto de linea a nada mas empezar menos en el primero
   if(filesize("pedidos.txt") != 0){//mirar si el fichero esta vacio
    fwrite($ar,PHP_EOL); 
   }
   echo "filesize: ".filesize("pedidos.txt")."</br>";
    fwrite($ar,$_GET['nombre']);
    fwrite($ar, "|"); 
    fwrite($ar,$_GET['direccion']);
    //AQUI SE HARIA CON UN BUBLE(HABRIA QUE CAMBIAR LOS NOMBRES)
    ///
    
    for($i=0;$i<sizeof($_GET);$i=$i+2){
        if(isset($_GET[$i])){//sobra el if
            $num=$i+1;
            fwrite($ar, "|"); 
            fwrite($ar,($_GET[$i])); 
            fwrite($ar, "|"); 
            fwrite($ar,$_GET[$num]);  
        }
    }
    /// 
    fclose($ar); 
    echo "Los datos se guardaron correctamente."; 

    ////////////////////////////////////////////////////////////////
    //MOSTRAR EL FICHERO
    //////////////////////////////////////////////////////////////

    //$pizzas=["Jamon Y queso","Napolitana","Muzzarella"];
    $fp = fopen('pedidos.txt','r') or die('ERROR: No ha sido posible abrir el archivo. Revisa su nombre y sus permisos.');


    //$line = fgets($fp); // guardamos toda la línea en $line como un string. Leemos el primer registro del fichero
    while (!feof($fp)) { // loop hasta que se llegue al final del archivo
    $line = fgets($fp);
    $field[] = explode ('|', $line); // dividimos $line en sus celdas, separadas por el caracter |  e incorporamos la línea a la matriz $field


    //$line = fgets($fp);//leemos del registro segundo al último.
    }
    fclose($fp);
    // generamos la salida HTML 

    foreach($field as $infor){
    echo ' 
    <div>Nombre: '.$infor[0].'</div>

    <div>Direccion: '.$infor[1].'</div> 
    <div>Pedido:</div>';
    for($i=2;$i<sizeof($infor);$i=$i+2){
        echo "<div>$infor[$i]   ".$infor[$i+1]."</div></br>";     
    }
   
    echo "<div>*******************</div>";
  
    }
?>