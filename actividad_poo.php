<?php

    class Persona 
    {
        public string $nombre;
        public int $edad;
        
        public function __construct(string $nombre, int $edad){
            $this -> nombre = $nombre;
            $this -> edad = $edad;
        }
        public function imprimirDatos() {
            echo  $this->nombre . '<br>' . $this->edad . '<br>';
        }
    }

    class Ciudadano extends Persona
    {
        public string $deposito;

        public function __construct($nombre, $edad, $deposito)
        {
            parent:: __construct($nombre,$edad);
            $this -> deposito = $deposito;
        }

        public function imprimirDeposito(){
            parent:: imprimirDatos();
            echo $this->deposito . '<br>'; 
        }

        public function impuestos(){
            if ($this->deposito > 3000) {
                echo "El ciudadano " .$this->nombre ." debe PAGAR INPUESTOS";
            }else{
                echo "El ciudadano " .$this->nombre ." NO debe PAGAR INPUESTOS";
            }
        }
    }
    
    $cliente = new Ciudadano("Martin",45,2500); 
    //echo $cliente -> imprimirDatos();
    echo $cliente -> imprimirDeposito();
    echo $cliente -> impuestos();

    /*
    Mariano debe pagar impuestos
    Leonel debe pagar impuestos
    Yanet debe pagar impuestos
    Martin no debe pagar impuestos
    */
?>