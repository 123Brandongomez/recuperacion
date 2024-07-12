<?php

$dinero_prestado=intval(readline("Ingrese su cantidad prestada: "));
$cuenta_bancaria=intval(readline("Ingrese su cuenta bancaria: "));

 if ($dinero_prestado<1000000){
    $invercion=intval(readline("Ingrese su invercion total: "));
    $porcentaje1=$invercion*0.50/100;
    $porcentaje_final=$porcentaje1+$porcentaje1;
    echo"La invercion total es de: $porcentaje_final";
 }
 elseif($dinero_prestado>1000000){
    $invercion=intval(readline("Ingrese su invercion total: "));      
    $invercion2=$invercion-$dinero_prestado; 
    echo"La invercio total es de $dinero_prestado y las partes iguales son $invercion2";        
 }


























