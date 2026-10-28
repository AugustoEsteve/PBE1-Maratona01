<?php
$numA = 15; $numB = 27; $numC = 12;
if ($numA >= $numB && $numA >= $numC) {
    $maior = $numA;
} elseif ($numB >= $numA && $numB >= $numC) {
    $maior = $numB;
} else {
    $maior = $numC;
}
echo "O maior entre $numA, $numB e $numC é: $maior";
?>