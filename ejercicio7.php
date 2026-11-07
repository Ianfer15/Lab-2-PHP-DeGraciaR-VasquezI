<?php
// Leer el radio y la altura del cilindro
$r = (float) readline("Ingrese el radio del cilindro: ");
$h = (float) readline("Ingrese la altura del cilindro: ");

// Verificar que las dimensiones sean positivas
if ($r <= 0 || $h <= 0) {
    echo "El radio y la altura deben ser mayores que cero.\n";
} else {
    // Calcular las propiedades del cilindro
    $areaLateral = 2 * pi() * $r * $h;
    $areaTotal = 2 * pi() * $r * ($r + $h);
    $volumen = pi() * $r * $r * $h;

    echo "Area lateral: " . round($areaLateral, 2) . "\n";
    echo "Area total: " . round($areaTotal, 2) . "\n";
    echo "Volumen: " . round($volumen, 2) . "\n";
}
?>