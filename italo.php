<?php

$peso = 61;
$altura = 1.55;
$imc = $peso /($altura**2);

if ($imc <16) { // Verifica se o imc da pessoa é menor ou igual a 16
 echo "Magreza grau III";
 }

 elseif ($imc >=16 && $imc < 16.9) { // Verifica se o mc da pessoa é maior ou igual a 16 até 16.9
 echo "Magreza Grau II";
 }

 elseif ($imc >= 17 && $imc < 18.4){
    echo "Magreza I";
 }

 elseif ($imc >= 18.5 && $imc < 24.9) {
    echo "Eutrofia";
 }

elseif ($imc >= 25 && $imc < 29.9) {
    echo "Pré-obesidade";
}

elseif ($imc >= 30 && $imc < 34.9) {
    echo "Obesidade moderada (Grau I)";
}

elseif ($imc >= 35 && $imc <39.9) {
    echo "Obesidade Severa (Grau II)";
}

else {
    echo "Obesidade muito severa (Grau III)";
}

echo "<br> Seu imc é: $imc";

echo "<br> Seu peso é: $peso <br> Sua altura é: $altura"; 
?>