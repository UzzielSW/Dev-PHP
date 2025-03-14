<!-- 
    GRUPO 2:

    Un pequeño aeropuerto maneja 3 pistas de aterrizaje hasta para 4 aviones que pueden aparcar. Haga un programa que controle el aterrizaje a través de un sistema de control así.
    
    Sistema de control de aterrizaje
    
    1.  Asignar pista:  Aquí debe desplegarse la información de las 3 pistas y la cantidad de aparcamientos disponibles, De haber, hay que asignar al avión que aterriza un espació el cual aterrizará. De no haber, mandar un mensaje. (el sistema no debe permitir mas de 4 aviones aparcado por pista)
    2.  Despegar avión: Aquí se debe tomar el avión que despegará de una pista y liberar el aparcamiento donde estaba (los aparcamientos no quedan consecutivos)
    3.  Salir del sistema. Cierra el sistema
 -->

<?php

function desplegar($pistas)
{
    $i = 0;
    echo "\n---------------------------------------------";
    echo "\nPistas de aterrizaje:";
    foreach ($pistas as $key => $pista) {
        echo "\nPista ".++$i.": ";
        if (count($pista) == 4)
            echo "[aparcamientos full], pista llena";
        else
            echo "aparcamientos disponibles [". (4-count($pista)) . "]";  
    }
}

function imprime($pistas)
{
    for ($i=0; $i < count($pistas); $i++) { 
        for ($j=0; $j < count($pistas[$i]); $j++) { 
            echo "  $pistas[$i][$j]";
        }
        echo "\n";
    }
}

$pistas = array(
    0 => array(),
    1 => array(),
    2 => array()
);

$opc = 0;

do {
    echo chr(27).chr(91).'H'.chr(27).chr(91).'J';
    echo "\t.:Sistema de control de aterrizaje:.";
    echo "\n 1. Asignar pista";
    echo "\n 2. Despegar avion";
    echo "\n 3. Salir";
    echo "\nopc? ";
    fscanf(STDIN, "%d", $opc);

    switch ($opc) {
        case 1:
            desplegar($pistas);
            echo "\nelejir pista de aterrizaje: ";
            fscanf(STDIN, "%d", $nPista);
            if ($nPista > 3) echo "\n!!La pista no existe!!";
            elseif(count($pistas[$nPista-1]) == 4)
                echo "\nel sistema no debe permitir mas de 4 aviones aparcado por pista";
            else
                array_push($pistas[$nPista-1], 1);
        break;
        
        case 2:
            desplegar($pistas);
            echo "\n elejir pista de aterrizaje: ";
            fscanf(STDIN, "%d", $nPista);
            if ($nPista > 3) echo "\n!!La pista no existe!!";
            elseif(count($pistas[$nPista-1]) == 0)
                echo "!!pista vacia!!";
            else
                array_pop($pistas[$nPista-1]);
        break;

        case 3: echo "OK"; break;
        
        case 4: print_r($pistas); break;
        default:
            echo "\nopcion invalida";
    }
    // sleep(1.5); //pausar por 1.5 segundos
    trim(fgets(STDIN)); //le una cadena pero sirve para detener pantalla como system("pause")
} while ($opc != 3);
?>