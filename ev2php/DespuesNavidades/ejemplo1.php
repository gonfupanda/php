<?php
//unset($_SERVER);//hacer las pruebas con esto comentado y luego descomentar para limpiar la array de $_server

/*if(isset($_SERVER)){//no funciona
    unset($_SERVER);
}*/
$conexion=mysqli_connect("localhost","root","","dwesTema5") or die("fallo en la conexion");
$registros2 =mysqli_query($conexion , "SELECT * FROM usuarios") or die("Problemas en el select:".mysqli_error());

/*echo gettype($registros2);
var_dump($registros2);
$a=mysqli_fetch_array($registros2);
echo gettype($a);
var_dump($a);*/
//var_dump($registros2);

/*for($i=0;sizeof($registros2);$i++){//DONDE METO ESTO?
    $reg=mysqli_fetch_array($registros2[$i]);
    if($reg["usuario"]==$_SERVER['PHP_AUTH_USER'] && $reg["contra"]==$_SERVER['PHP_AUTH_PW']){
        $esta=true;
        $i=sizeof($registros2);
    }
}*/

header('Content-Type: text/html; charset=UTF-8');

if (!isset($_SERVER['PHP_AUTH_USER'])) {	
    header('WWW-Authenticate: Basic Realm="Contenido restringido"');
    header('HTTP/1.0 401 Unauthorized');
   // echo "Usuario no reconocido!";
    echo "Has pulsado CANCELAR";
    exit;

}else { 
    $esta=false;
    /*echo <<< zana
        "<div display='none'>
            <script type='text/javascript'>
                console.log(md5($_SERVER['PHP_AUTH_PW']));
            </script>
        </div>"
zana;*/
   while($reg=mysqli_fetch_array($registros2)){
        if($reg["usuario"]==$_SERVER['PHP_AUTH_USER'] && $reg["contra"]==md5($_SERVER['PHP_AUTH_PW'])){//mk5()
            $esta=true;
            break;
        }
    
    }
   
    if(!$esta){
        header('WWW-Authenticate: Basic Realm="Contenido restringido"');
        header('HTTP/1.0 401 Unauthorized');
        

    }else{
        echo "Bienvenido";
        exit;
    }
    //echo "<p>Has pulsado INICIAR SESION</p>"; 
    //echo "<p>Usuario: {$_SERVER['PHP_AUTH_USER']}</p>"; 
    //echo "<p>Contraseña: {$_SERVER['PHP_AUTH_PW']} </p>"; 
    /*if($_SERVER['PHP_AUTH_USER']=="dwes" && $_SERVER['PHP_AUTH_PW']=="abc123"){
        echo "ENTRANDO: </br>".$_SERVER['PHP_AUTH_USER']."</br>".$_SERVER['PHP_AUTH_PW'];
    }*/

     /*for($i=0;sizeof($a);$i++){//DONDE METO ESTO?
        $reg=$a[$i];
        if($reg["usuario"]==$_SERVER['PHP_AUTH_USER'] && $reg["contra"]==$_SERVER['PHP_AUTH_PW']){
            $esta=true;
            $i=sizeof($registros2);
        }
    }*/
} 

?>
