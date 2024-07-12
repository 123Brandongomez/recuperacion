<?php
$x = intval(readline("Ingrese la coordenada x: "));
$y = intval(readline("Ingrese la coordenada y: "));



if ($x >= 0 and $y >= 0){
    $cuadrante = 1;
}

elseif ($x < 0 and $y >= 0){
    $cuadrante = 2;
}

elseif ($x < 0 and $y < 0){
    $cuadrante = 3;
}
  else
    $cuadrante = 4;



    echo"El punto x, y, se ubica en el cuadrante $cuadrante";

