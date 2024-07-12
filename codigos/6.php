<?php
$sueldo=intval(readline("Ingrese su sueldo: "));
$año=intval(readline("Ingrese su año:"));



if($sueldo<500 and $año>=10){
    $pagar=$sueldo*0.20;
    $pago=$sueldo+$pagar;
    echo"Su pago es de: $pago";
}
elseif($sueldo<500 and $año<10){
    $pagar=$sueldo*0.5;
    $pago=$sueldo+$pagar;
    echo"Su pago es de: $pago";
}
elseif($sueldo>=500 ){
    echo"Su pago es de: $sueldo";
}

