<?php 

    //mkdir("carpeta");//crear carpeta
    //para borrar una carpeta primero hay que vaciarla
    $carpeta="carpeta";
    //$carpeta="C:\wamp64\www\ejerciciosphp\BorrarCrearCarpetas";//con la ruta completa no funciona
    

    //is_dir($carpeta);//devuelve true si es una carpeta y false si es un archivo
    function recursiva($carpeta){
        //glob devuelve una array con los archivos que cumplan el patron//con el *.* cojemos todos los archivos de la carpeta 
        foreach(glob($carpeta."/*") as $indice =>$a){
            if(is_dir($a)){
                recursiva($a);
               
            }else{
                unlink($a);//borrar el fichero
            }
        }
        rmdir($carpeta);//borrar la carpeta//tiene que estar vacia primero
        
    }
    recursiva($carpeta);

?>