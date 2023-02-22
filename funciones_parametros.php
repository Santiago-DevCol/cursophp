<?php
/*
function saludo($nombre){
        echo "Hola " .$nombre . ", eres un gran programador" . '<br>';
    }

    saludo("Santiago");
    $numero = 5;
    echo $numero . '<br>';
    */

    function operaciones($numero1, $numero2, $operacion){
        $resultado = 0;
        switch ($operacion){
            case "Sumar":
                $resultado = $numero1 + $numero2;
            break;

            case "Restar":
                $resultado = $numero1 - $numero2;
            break;

            case 'Multiplicar':
                $resultado = $numero1 * $numero2;
            break;
            
            case 'Dividir':
                $resultado = $numero1 / $numero2;
            break;

            default:
                echo "no se encuentra la operación a realizar";
        }
        return $resultado;
    }

    $imprimir = operaciones(5,6,"Sumar");

    echo $imprimir;

?>