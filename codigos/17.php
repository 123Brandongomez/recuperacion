<?php

$alfabeto_morse = array(
    'a' => '.-',     'b' => '-...',   'c' => '-.-.',   'd' => '-..',
    'e' => '.',      'f' => '..-.',   'g' => '--.',    'h' => '....',
    'i' => '..',     'j' => '.---',   'k' => '-.-',    'l' => '.-..',
    'm' => '--',     'n' => '-.',     'o' => '---',    'p' => '.--.',
    'q' => '--.-',   'r' => '.-.',    's' => '...',    't' => '-',
    'u' => '..-',    'v' => '...-',   'w' => '.--',    'x' => '-..-',
    'y' => '-.--',   'z' => '--..',   

);

$texto = readline("Ingrese su texto: ");
$morse = "... --- .-.. .-   -- ..- -. -.. ---";

$texto_morse = '';
foreach (str_split(strtolower($texto)) as $letras) {
    if ($letras == ' ') {
        $texto_morse = '  '; 
    } else {
        $texto_morse = $alfabeto_morse[$letras] . ' '; 
    }
}
echo "Texto original: $texto\n";
echo "Texto a Morse: " . rtrim($texto_morse, ' ') . "\n";
