<?php

//clase padre



class seleccionFutbol{
    public $id;
    public $nombre;
    public $edad;

    public function __construct($id, $nombre, $edad)
    {
        $this->id = $id;
        $this->nombre = $nombre;
        $this->edad = $edad;

    }

    public function concentrarse()
    {
        echo $this->nombre . " Está en concentración.";
    }

    public function viajar()
    {
        echo $this->nombre . " Está viajando.";
    }
}

//clase hija
class Jugador extends seleccionFutbol{
    //Propiedades de una clase
    public $posicion;
    public $numero;

    //constructor
    public function __construct($id, $nombre, $edad,$posicion,$numero)
    {
        parent::__construct($id, $nombre, $edad);
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

class Entrenador extends seleccionFutbol
{
    public $experiencia;

    public function __construct($id, $nombre, $edad,$experiencia)
    {
        parent::__construct($id, $nombre, $edad);
        $this->experiencia = $experiencia;
    }
    
    public function dirigirEntrenamiento(){
        echo $this->nombre . " Esta dirigiendo el entrenamiento";
    }

    public function dirigirPartido(){
        echo $this->nombre . " Esta dirigiendo el partido";
    }
}

$jugador1= new Jugador(123,"Messi",36,"Delantero",10);
$entrenador1 = new Entrenador(345,"Pekerman",65,20);
echo $jugador1->viajar();
echo '<br>';
echo $entrenador1 -> dirigirEntrenamiento();
?>