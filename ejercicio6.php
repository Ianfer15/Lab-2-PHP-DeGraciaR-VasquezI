<?php
// Leer cuatro numeros
$a = (float) readline("Ingrese el primer numero: ");
$b = (float) readline("Ingrese el segundo numero: ");
$c = (float) readline("Ingrese el tercer numero: ");
$d = (float) readline("Ingrese el cuarto numero: ");

// Verificar que todos sean diferentes
if ($a == $b || $a == $c || $a == $d ||
    $b == $c || $b == $d || $c == $d) {
    echo "Alerta: los cuatro numeros deben ser diferentes.\n";
} else {
    // Determinar el mayor y el menor
    $mayor = max($a, $b, $c, $d);
    $menor = min($a, $b, $c, $d);

    echo "El mayor es: $mayor\n";
    echo "El menor es: $menor\n";
}
?>