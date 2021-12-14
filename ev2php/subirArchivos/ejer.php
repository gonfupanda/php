<?php 
    echo "Tratamiento de archivos subidos al servidor</br>";
    echo "1.Verifica si se permiten upload:</br>";
    if(get_cfg_var("file_uploads")==1){
        echo "TRUE</br>";
    }else{
        echo "FALSE</br>";
    }
    echo "2.Aqui se cargara el archivo(directiva upload_tmp_dir en php.ini)</br>";
    echo get_cfg_var("upload_tmp_dir");
    echo "</br>";

    echo "3.Limite maximo de capacidad que se puede tranferir</br>";
    echo get_cfg_var("upload_max_filesize");
    echo "</br>";
    echo "4.Verifica si hubo algún error en la subida del archivo >> 0</br>";
    echo UPLOAD_ERR_OK;echo "</br>";
    echo $_FILES['foto']['error'] ;echo "</br>";
    

    echo "4.Verifica si hubo algún error en la subida del archivo >> 4</br>";

    echo '5. Éste es el contenido de la superglobal $_FILES </br>';
    echo '**Para ésta visualización utilizar: print_r ($_FILES);*****</br>';
    print_r($_FILES);echo "</br>";
    //print_r( $GLOBALS($_FILES));echo "</br>";
    //var_dump($GLOBALS($_FILES));
   
    echo '6. Otra verificación de la subida</br>';

?>