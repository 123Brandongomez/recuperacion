<?php
$texto = readline("Ingrese su texto: ");
$minusculas = strtolower($texto);
$repetidas = [];


for ($i = 0; $i < strlen($minusculas); $i++) {
    $letra = $minusculas[$i];
    
    if ($letra !== " ") {
        if (!isset($repetidas[$letra])) {
            $repetidas[$letra] = 1;
        } else {
            $repetidas[$letra]++;
        }
    }
}

echo "Letras repetidas:\n";
foreach ($repetidas as $letra => $veces) {
    echo "$letra: se repite $veces veces\n";
}
