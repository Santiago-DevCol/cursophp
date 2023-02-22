<?php

    function verificar_votante($edad, $nombre){
        if ($edad < 18) {
            echo $nombre . " Parece que no tienes la edad suficiente para votar, nos vemos en la proxima!";
        } else{
            echo "Felicidades " . $nombre . " Estas habilitado para participar en nuestra jornada de elecciones estudiantiles";
        }
    }

    verificar_votante(22 , "Jorge");

    /*
        Ashely tiene 14 años y no puede votar
        Luis tiene 20 años y puede votar
        Fernando tiene 16 años y no puede votar
        Jorge tiene 22 años y puede votar
    */
?>