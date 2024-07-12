<?php
$figura=readline("Ingrese su figura: ");
$lado=intval(readline("Ingrese un valor: "));

/*cuadrado */
if ($figura == "cuadrado") {
  for ($i = 0; $i < $lado; $i++) {
    for ($o = 0; $o < $lado; $o++) {
      echo "*"; 
    }
    echo "\n"; 
  }
} 

/*triangulo */
elseif ($figura=="triangulo"){
  
  for ($i = 1; $i <= $lado; $i++) {
    for ($o = 0; $o < $i; $o++) {
      echo "*"; 
    }
    echo "\n"; 
  }
}
else
    echo " incorrecto.\n";




