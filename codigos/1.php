<?php


$usuario=intval(readline("Ingrese su radio: "));

$circunferencia=((2*3.1416)*$usuario);
$area=(3.1416*($usuario**2));
$volumen=((4*3.1416*$usuario**3)/3);


echo "La circunferencia es de: $circunferencia \n";
echo "La area es de: $area \n";
echo "El volumen es de: $volumen";