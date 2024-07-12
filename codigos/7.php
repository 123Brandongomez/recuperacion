<?php


$numero=intval(readline("Ingrese su cantidad en metros: "));
echo"1). Pasar a unidades \n";
echo"2). Pasar a centimetros \n";
echo"3). Pasar a kilometros \n";
echo"4). Pasar a pulgadas";

$respuesta=intval(readline("Ingrese una opcion: "));


if ($respuesta==1){
    $unidades=($numero*100);
    echo"Estos son las unidades: $unidades";
}
elseif($respuesta==2){
    $Centímetros = $numero*100;
    echo"Estos son los centimetros: $centimetros";
}
elseif($respuesta==3){
    $Kilometros= $numero / 1000;
    echo"Estos son los kilometros: $kilometros";
}
elseif($respuesta==4){
    $Pulgadas= $numero*39.37;
    echo"Estos son las pulgadas: $pulgadas";
}






