<?php

$variableGlobal = 0;

function suma($a, $b)
{
    global $variableGlobal;
    $resultado = $variableGlobal + $a + $b;
    return $resultado;
}

function division($a, &$b)
{
    if ($b == 0) {
        echo "No se puede dividir por cero. Se cambió el segundo número a 1.\n";
        $b = 1; 
    }
    $resultado = $a / $b;
    return $resultado;
}

function multiplicacion($a, $b)
{
    $resultado = 0;
    for ($i = 0; $i < $b; $i++) {
        $resultado = suma($resultado, $a);
    }
    return $resultado;
}

while (true) {
    echo "Elija la operación que desea realizar:\n";
    echo "1- Suma\n";
    echo "2- Division\n";
    echo "3- Multiplicación\n";
    echo "4- Salir\n";

    $opcion = readline("Ingrese la opción: ");

    if ($opcion == 4) {
        echo "Saliendo del programa...\n";
        break;
    }


    $numero1 = readline("Ingrese el primer número: ");
    $numero2 = readline("Ingrese el segundo número: ");

    switch ($opcion) {
        case 1:
            $resultado = suma($numero1, $numero2);
            echo "El resultado de la suma es: $resultado\n";
            break;
        case 2:
            $resultado = division($numero1, $numero2);
            echo "El resultado de la división es: $resultado\n";
            break;
        case 3:
            $resultado = multiplicacion($numero1, $numero2);
            echo "El resultado de la multiplicación es: $resultado\n";
            break;
        default:
            echo "Opción no válida\n";
            break;
    }
}
