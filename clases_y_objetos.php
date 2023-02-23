<?php

//clase
class Jugador{
    //Propiedades de una clase
    public $nombre;
    public $posicion;
    public $numero;

    //constructor
    public function __construct($nombre,$posicion,$numero)
    {
        $this->nombre = $nombre;
        $this->posicion = $posicion;
        $this->numero = $numero;
    }

    //metodos de una clase
    public function entrenar() {
        echo "El jugador " . $this->nombre ." está entrenando";
    }
    public function jugar(){
        echo "El jugador " . $this->nombre ." está jugando";
    }
}

//instancias de una ckase
$jugador1 = new jugador("Leo Messi","Media Punta",10);
// $jugador1 -> nombre = "Leo Messi";
// $jugador1 -> posicion = "Media Punta";
// $jugador1 -> numero = 10;
// $jugador1-> entrenar();
// echo '<br>';
// $jugador1-> jugar();

echo '<pre>';
var_dump($jugador1);
echo '</pre>';

$jugador2 = new jugador("David Ospina","Arquero",1);
// $jugador2 -> nombre = "David Ospina";
// $jugador2 -> posicion = "Arquero";
// $jugador2 -> numero = 1;
// $jugador2 -> jugar();
// echo '<br>';
// $jugador2 -> entrenar();

echo '<pre>';
var_dump($jugador2);
echo '</pre>';

?>