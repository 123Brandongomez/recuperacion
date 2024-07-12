<?php
$sexo=readline("Ingrese su sexo: ");
$edad=intval(readline("Ingrese su edad: "));
 if($sexo=="femenino"){
    $pulsaciones=intval(readline("Ingrese sus pulsaciones: "));
    $pulsacion=220-$edad/$pulsaciones;
    echo"Sus pulsaciones son $pulsacion";
 }
 if($sexo=="masculino"){
    $pulsaciones=intval(readline("Ingrese sus pulsaciones: "));
    $pulsacion=210-$edad/$pulsaciones;
    echo"Sus pulsaciones son $pulsacion";
 }











