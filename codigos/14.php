<?php
$numero1 = 0;
$anterior = 1;

/* for para seguir sumando esta estructura*/
for ($i = 1; $i <= 50; $i++) {

  $numero1 = $numero1 + $anterior;

  $anterior = $numero1 - $anterior; 

  echo $numero1 . "  \n" ;
}


