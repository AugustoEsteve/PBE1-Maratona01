<?php
$palavra = "Programacao";
$palavraLower = strtolower($palavra);
$qtdVogais = 0;
$vogais = ['a', 'e', 'i', 'o', 'u'];
for ($i = 0; $i < strlen($palavraLower); $i++) {
    if (in_array($palavraLower[$i], $vogais)) {
        $qtdVogais++;
    }
}
echo "A palavra '$palavra' tem $qtdVogais vogais.";
?>