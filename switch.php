<?php
    /*
    Realizar un programa que imprima el color favorito
    mostrar un ejemplo con if-else y otro con switch
    */

    $color_favorito= "amarillo";

    //IF - ELSE
    if ($color_favorito == "Verde" || $color_favorito == "morado" || $color_favorito == "rojo" || $color_favorito == "azul") {
        echo "Tu collor favorito es: " . $color_favorito;
    } else{
        echo "no encontre tu color favorito";
    }
    echo '<br>';
    
    // switch
    switch($color_favorito){
        case "verde":
            echo "Tu collor favorito es: " . $color_favorito;
        break;

        case "morado":
            echo "Tu collor favorito es: " . $color_favorito;
        break;

        case "rojo":
            echo "Tu collor favorito es: " . $color_favorito;
        break;

    }
?> 