<?php
// Leer dos numeros enteros
$a = (int) readline("Ingrese el primer numero: ");
$b = (int) readline("Ingrese el segundo numero: ");

// Ordenar de menor a mayor
if ($a < $b) {
    echo "Orden ascendente: $a, $b\n";
} elseif ($a > $b) {
    echo "Orden ascendente: $b, $a\n";
} else {
    echo "Los dos numeros son iguales: $a\n";
}
?>