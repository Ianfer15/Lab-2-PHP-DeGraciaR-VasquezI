<?php
// Leer un numero entero
$n = (int) readline("Ingrese un numero entero: ");

// Verificar si es par o impar
if ($n % 2 == 0) {
    echo "El numero $n es par.\n";
} else {
    echo "El numero $n es impar.\n";
}
?>