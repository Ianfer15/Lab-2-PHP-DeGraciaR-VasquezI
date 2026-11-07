<?php
// Leer tres valores
$a = (float) readline("Ingrese el valor de A: ");
$b = (float) readline("Ingrese el valor de B: ");
$c = (float) readline("Ingrese el valor de C: ");

// Verificar que los valores sean diferentes
if ($a == $b || $a == $c || $b == $c) {
    echo "Alerta: los tres valores deben ser diferentes.\n";
} else {
    // Determinar el mayor y el menor
    $mayor = max($a, $b, $c);
    $menor = min($a, $b, $c);

    echo "El mayor es: $mayor\n";
    echo "El menor es: $menor\n";
}
?>