<?php

$porcentage=intval(readline("Ingrese su cantidad de preguntas correctas: "));


if($porcentage>=90){
    echo"Nivel superior";
}
elseif($porcentage>=75 and $porcentage<90){
    echo"Nivel medio";
}
elseif($porcentage>=50 and $porcentage<75){
    echo"Nivel regular";
}
elseif($porcentage<50){
    echo"Fuera de nivel";
}else
echo"Vas mal";













