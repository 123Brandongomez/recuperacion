<?php
$binario = intval(readline("Ingrese un numero binario")); 
$decimal = floatval(readline("Ingrese un numero decimal"));

for ($i = 0; $i < strlen($binario); $i++) {
    $digito = $binario(strlen($binario) - 1 - $i);
    $base = 1;

    for ($e = 0; $e < $i; $e++) {
      $base *= 2;
    }
    $decimal += $digito * $base;
  }
  
  echo "El número binario $binario es igual a $decimal en decimal";




  