<?php

$capital = -15000; 
$presupuesto_equipo = 5000; 
$presupuesto_mobiliario = 2000; 


$presupuesto_total = $capital;
if ($capital < 0) {
  $presupuesto_total += 10000; 
} else if ($capital < 20000) {
  $presupuesto_total += 20000 - $capital; 
}


$presupuesto_restante = $presupuesto_total - $presupuesto_equipo - $presupuesto_mobiliario;
$insumos = $presupuesto_restante / 2;
$insentivos = $presupuesto_restante - $insumos;


echo "Capital actual: . $capital . \n";
echo "Presupuesto total disponible:  . $presupuesto_total . \n";
echo "Presupuesto equipo de cómputo:  . $presupuesto_equipo . \n";
echo "Presupuesto mobiliario:  . $presupuesto_mobiliario \n";
echo "Presupuesto insumos:  . $insumos  \n";
echo "Presupuesto incentivos:  . $insentivos  \n";