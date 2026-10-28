<?php
$texto = "Maratona"; 
$invertido = '';

for ($i = strlen($texto) - 1; $i >= 0; $i--) {
    $invertido .= $texto[$i];
}

echo $invertido;
?>