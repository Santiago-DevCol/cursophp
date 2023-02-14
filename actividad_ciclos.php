<?php 
    $numero = 20;
    $factorial = 1;

    for($i=1; $i <= $numero; $i++){
        $factorial = $factorial * $i;
    }

    echo "El factorial del numero " . $numero . " es =" . $factorial;

    /* 
        El factorial de 5 es 120
        El factorial de 10 es 3628800
        El factorialde 15 es 1307674368000
        El factorial de 20 es 2432902008176640000

    */

?>