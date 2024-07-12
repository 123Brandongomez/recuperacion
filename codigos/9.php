<?php
$monto = floatval(readline("Ingrese el monto total de la compra: "));

if ($monto > 500000) {
    $invercion = $monto * 0.55;
    $prestamo = $monto * 0.30;
    $credito = $monto - $invercion - $prestamo;
    $intereses = $credito * 0.20;
} 

elseif($monto<=500000){
    $invercion = $monto * 0.70;
    $prestamo = $monto * 0.30;
    $credito = $monto - $invercion - $prestamo;
    $intereses = $credito * 0.20;
    $pago_credito=$credito+$intereses;
}

echo "Inversión propia: $invercion  \n";
echo "Prestamo al banco:   $prestamo \n";
echo "Credito al fabricante:  $pago_credito \n";


