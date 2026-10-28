<?php
$palavra = "radar"; // Altere para verificar outra palavra.
$ehPalindromo = true;
$tamanho = strlen($palavra);

for ($i = 0; $i < $tamanho / 2; $i++) {
    if ($palavra[$i] !== $palavra[$tamanho - 1 - $i]) {
        $ehPalindromo = false;
        break;
    }
}

if ($ehPalindromo) {
    echo "$palavra é um palíndromo.";
} else {
    echo "$palavra não é um palíndromo.";
}
?>