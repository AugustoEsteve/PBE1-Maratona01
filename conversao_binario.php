<?php
$numero = 10;
$binario = '';

if ($numero === 0) {
    $binario = '0';
} else {
    while ($numero > 0) {
        $resto = $numero % 2;
        $binario = $resto . $binario;
        $numero = intdiv($numero, 2);
    }
}

echo $binario;
?>