<?php 

$frase="El doctor David Niven, profesor de la Universidad de Ohio, se propuso hace unos años averiguar cuáles eran las 100 claves que garantizan el éxito";

function ej1($b){
    $a=strtolower($b);
    echo "<br/>Numeros de a:".substr_count($a,"a");
    echo "<br/>Numeros de e:".substr_count($a,"e");
    echo "<br/>Numeros de i:".substr_count($a,"i");
    echo "<br/>Numeros de o:".substr_count($a,"o");
    echo "<br/>Numeros de u:".substr_count($a,"u");

}
//ej1($frase);

function ej2($b){
    $a=strtolower($b);
    $tamano=strlen ($a);
    $cont1=0;
    $letras=[];

    // $letra=substr($a,$cont1,$cont2);//saco una letra
    for($i=0;$i<$tamano;$i++){//voy a ir mirando cada letra
        
        $letra=substr($a,$cont1,1);//saco una letra
        //echo "$letra</br>";
        /*if(sizeof($letras)!=0){//pregunto si la array esta vacia
        /*
            foreach($letras as $indice=>$b){///OPCION1 (FOREACH)
                foreach($b as $c){
                    if($c[0]==$a){//pregunto si esa letra esta en la array
                        $c[1]==$c[1]+1;
                    }else{//sino esta la añado
                        $letras[]=array($a,1);
                    }
                }
            }

            for($j=0;$j<sizeof($letras);$j++){//OPCION2 (FOR NORMAL)
                if($letras[$j][0]==$letra){//pregunto si esa letra esta en la array
                    $letras[$j][1]== $letras[$j][1]+1;                   
                }else if(!($letra==" " ||$letra=="a" ||$letra=="e" ||$letra=="i" ||$letra=="o" ||$letra=="u")){//sino esta la añado
                    $letras[]=array($letra,1);
                }
            }
        }else{
            $letras[]=array($a,1);
        }  */
        $cont1++;
        echo "</br>$letra";
    }
   /*foreach($letras as $indice=>$b){
        foreach($b as $c){
            echo "</br>".$c[0]." : ".$c[1];
        }
    }*/

}
ej2($frase);
?>