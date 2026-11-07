<?php
// Leer dos numeros enteros
$a = (int) readline("Ingrese el primer numero entero: ");
$b = (int) readline("Ingrese el segundo numero entero: ");

// Realizar las operaciones aritmeticas
echo "Suma: " . ($a + $b) . "\n";
echo "Resta: " . ($a - $b) . "\n";
echo "Multiplicacion: " . ($a * $b) . "\n";

if ($b != 0) {
    echo "Division: " . ($a / $b) . "\n";
    echo "Modulo: " . ($a % $b) . "\n";
} else {
    echo "No se puede dividir entre cero.\n";
    echo "No se puede calcular el modulo entre cero.\n";
}
?>