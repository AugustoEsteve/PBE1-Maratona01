<?php
$n = 10;
$soma = 0;

for ($numero = 1; $numero <= $n; $numero += 2) {
    $soma += $numero;
}

echo "A soma dos números ímpares de 0 a $n é $soma.";
?>