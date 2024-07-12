<?php

$dinero=intval(readline("Ingrese dinero generado: "));
$intereses=(floatval(readline("Ingrese sus intereses: "))*$dinero)/100;

if($intereses>700){
    $inversion=$intereses;
    echo"Esta es su inversion: $inversion";


}else
echo "Su dinero es de $intereses";








