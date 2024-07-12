<?php


$edad = intval(readline("Ingrese su edad: "));
$sexo = intval(readline("Ingrese su sexo: "));
$hemoglobina = intval(readline("Ingrese su hemoglobina: "));


if ($edad <= 1) {
  $rango_minimo = 13;
  $rango_maximo = 26;

} else if ($edad <= 6) {
  $rango_minimo = 10;
  $rango_maximo = 18;

} else if ($edad <= 12) {
  $rango_minimo = 11;
  $rango_maximo = 15;

} else if ($edad <= 5) {
  $rango_minimo = 11.5;
  $rango_maximo = 15;

} else if ($edad <= 10) {
  $rango_minimo = 12.6;
  $rango_maximo = 15.5;

} else if ($edad <= 15) {
  $rango_minimo = 13;
  $rango_maximo = 15.5;

} else if ($sexo == "mujer") {
  $rango_minimo = 12;
  $rango_maximo = 16;
}
 else {
  $rango_minimo = 14;
  $rango_maximo = 18;
}

$tiene_anemia = $hemoglobina < $rango_minimo;


echo $tiene_anemia ? "El paciente tiene anemia." : "El paciente no tiene anemia.";


