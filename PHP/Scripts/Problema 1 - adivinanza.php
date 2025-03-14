<?php
/*
    PROBLEMA #1: Advinanza

    Llene un vector de 10 posiciones con valores que van de 0 a 100. (Asignelos ustedes mismos). El programa debe permitir al usuario un total de 3 oportunidades para adivinar algunos de los 10 números del vector. En caso de hacerlo, despliegue un mensaje de felicitaciones e imprima en cuantos intentos lo logró. De menos, despliego el mensaje “¡Lo Siento!... Hasta la próxima.

*/
$arreglo = array(4, 16, 21, 33, 49, 67, 71, 80, 83, 93);
$intentos = 0;
$aux = false;

echo "Adivine numero 0 - 100\n";
do {
    $intentos++;
    echo "is: ";
    fscanf(STDIN, "%d", $number);
    if(in_array($number, $arreglo))
    {
        $aux = true;    
        break;
    }
} while ($intentos < 3);

if($aux)
{
    echo "\n----------------------------";
    echo "\n!felicidades!\nintentos: $intentos";
}
else
    echo "\n¡Lo Siento!... Hasta la próxima";
?>