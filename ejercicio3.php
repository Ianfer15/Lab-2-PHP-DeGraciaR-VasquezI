<?php
// Leer la distancia en millas marinas
$millas = (float) readline("Ingrese la distancia en millas marinas: ");

// Convertir a metros
$metros = $millas * 1852;

echo "Distancia en metros: $metros\n";
?>