<?php
$numero=intval(readline("Ingrese un numero"));

if ($numero<10){
    echo"tinen 1 cifras";
}
elseif($numero<100){
    echo"tiene 2 cifras";
}
elseif($numero<1000){
    echo"tiene 3 cifras";
}else
echo"tinen mas cifras";