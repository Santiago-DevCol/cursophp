<?php
    /* 
        Imagine que la tienda donde usted trabaja ofrece descuentos a los clientes en navidad, de acuerdo con el monto de su compra. El criterio para establecer el descuento se muestra a continuación:
        Teniendo en cuenta la tabla, te piden que escribas un programa que solicite el nombre del cliente y el valor de la compra. Y que arroje como resultado: 

        Recuerde que para calcular el descuento primero debe multiplicar el valor de la compra por el porcentaje. Luego, debe restar el valor obtenido al valor de la compra y con eso obtiene el precio con descuento.

        descuento = valor_compra x porcentaje
        precio final = valor_compra - descuento
    */

    $nombre_cliente = "Eva Castro";
    $valor_compra = 350;

    if ($valor_compra < 50){
        $descuento = 0.05;
    } elseif ($valor_compra >= 50 && $valor_compra<100){
        $descuento = 0.1;
    }elseif ($valor_compra >= 100 && $valor_compra<=250){
        $descuento = 0.15;
    }elseif ($valor_compra > 250 && $valor_compra < 400){
        $descuento = 0.2;
    }else {
        $descuento = 0;
    }

    $precio_final = $valor_compra - ($valor_compra * $descuento);

    echo "Bienvenido a Colombia Gamer Señor: " . $nombre_cliente . '<br>';
    echo "El valor de su compra es: $" . $valor_compra . '<br>';
    echo "El descuento a aplicar es: " . ($descuento * 100) . "%" . '<br>' ;
    echo "El valor a pagar es: $" . $precio_final;

    /*
        El valor de la compra de  Juan pablo es de 55 USD y con descuento queda en 49.5 USD
        El valor de la compra de  Kenia Ortiz es de 120 USD y con descuento queda en 102 USD
        El valor de la compra de  Angie Andrade es de 275 USD y con descuento queda en 220 USD
        El valor de la compra de  Eva Castro es de 350 USD y con descuento queda en 280 USD
    */


?>