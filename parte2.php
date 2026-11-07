<?php

// Problema 1: sumar los numeros del 1 al 10
function problema1() {
    $suma = 0;

    for ($i = 1; $i <= 10; $i++) {
        $suma += $i;
    }

    echo "La sumatoria del 1 al 10 es: $suma\n";
}

// Problema 2: contar impares y sumar del 1 al 300
function problema2() {
    $contadorImpares = 0;
    $suma = 0;

    for ($i = 1; $i <= 300; $i++) {
        $suma += $i;

        if ($i % 2 != 0) {
            $contadorImpares++;
        }
    }

    echo "Cantidad de numeros impares: $contadorImpares\n";
    echo "Sumatoria de los numeros del 1 al 300: $suma\n";
}

// Problema 3: promedio de cinco notas
function problema3() {
    $notas = [];
    $suma = 0;

    for ($i = 1; $i <= 5; $i++) {
        $nota = (float) readline("Ingrese la nota $i (0 para finalizar): ");

        if ($nota == 0) {
            break;
        }

        $notas[] = $nota;
        $suma += $nota;
    }

    $cantidad = count($notas);

    if ($cantidad > 0) {
        $promedio = $suma / $cantidad;
        echo "Promedio de las notas: " . round($promedio, 2) . "\n";
        echo "Cantidad de notas ingresadas: $cantidad\n";
    } else {
        echo "No se ingresaron notas para calcular el promedio.\n";
    }
}

// Problema 4: promedio de diez asignaturas
function problema4() {
    $notas = [];
    $suma = 0;

    for ($i = 0; $i < 10; $i++) {
        $notas[$i] = (float) readline(
            "Ingrese la nota de la asignatura " . ($i + 1) . ": "
        );

        $suma += $notas[$i];
    }

    $promedio = $suma / count($notas);

    echo "Notas ingresadas: " . implode(", ", $notas) . "\n";
    echo "Media de las diez asignaturas: " . round($promedio, 2) . "\n";
}

// Problema 5: ordenar un vector de cinco numeros
function problema5() {
    $original = [];

    for ($i = 0; $i < 5; $i++) {
        $original[] = (int) readline(
            "Ingrese el numero " . ($i + 1) . ": "
        );
    }

    echo "Vector original: " . implode(", ", $original) . "\n";

    $opcion = strtolower(
        readline("Seleccione a (ascendente), d (descendente) u o (original): ")
    );

    switch ($opcion) {
        case "a":
            $vector = $original;
            sort($vector);
            echo "Vector ascendente: " . implode(", ", $vector) . "\n";
            break;

        case "d":
            $vector = $original;
            rsort($vector);
            echo "Vector descendente: " . implode(", ", $vector) . "\n";
            break;

        case "o":
            echo "Vector original: " . implode(", ", $original) . "\n";
            break;

        default:
            echo "Opcion no valida.\n";
    }
}

// Menu principal
do {
    echo "\n===== MENU PRINCIPAL =====\n";
    echo "1. Sumatoria del 1 al 10\n";
    echo "2. Contar impares y sumar del 1 al 300\n";
    echo "3. Promedio de cinco notas\n";
    echo "4. Promedio de diez asignaturas\n";
    echo "5. Ordenar un vector de cinco numeros\n";
    echo "X. Salir\n";

    $opcion = strtoupper(trim(readline("Seleccione una opcion: ")));

    switch ($opcion) {
        case "1":
            problema1();
            break;

        case "2":
            problema2();
            break;

        case "3":
            problema3();
            break;

        case "4":
            problema4();
            break;

        case "5":
            problema5();
            break;

        case "X":
            echo "Programa finalizado.\n";
            break;

        default:
            echo "Opcion no valida. Intente nuevamente.\n";
    }

} while ($opcion != "X");

?>