<?php
    echo "\nTextLine: ";
    $line = trim(fgets(STDIN)); // reads one line from STDIN
    
    echo "Number: ";
    fscanf(STDIN, "%d", $number); // reads number from STDIN
    
    echo "Letter: ";
    fscanf(STDIN, "%c", $letter);

    echo "\n-----------------------";
    echo "\ntextLine: ".$line;
    echo "\nnumber: ".$number;
    echo "\nletter: ".$letter;

    //limpiar pantalla
    // echo chr(27).chr(91).'H'.chr(27).chr(91).'J';
?>