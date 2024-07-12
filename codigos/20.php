<?php
$contador_primo = 0;

for ($i = 1; $i <= 100; $i++) {
  $si_primo = true; 

  for ($a = 2; $a <= sqrt($i); $a++) { 

    if ($i % $a == 0) { 
      $si_primo = false; 
      break; 
    }
  }

  if ($si_primo) {
    $contador_primo++; 
    echo $i . "  \n"; 
  }
}

echo "\nla Cantidad de nnmeros primos entre 1 y 100 son " . $contador_primo;


