<?php
//Formas de declarar un arreglo

//$arreglo1 = array("Elemento1", 2, "Elemento3", 28, 5.85);

//$arreglo2 = ["Elemento1", 25, "Elemento3", "Elemento4", true,false];

//clave => valor
$arreglo3 = array(
    'nombre' => 'Santiago',
    'edad' => 23,
    'celular' => 31648893,
    'estatura' => 1.66,
);

echo '<pre>';
    var_dump($arreglo3);
echo '</pre>';

//Agregar campo
$arreglo3['email'] ='santiago@gmail.com';
//modificar valores
$arreglo3['celular'] = 1234567890;

echo '<pre>';
    var_dump($arreglo3);
echo '</pre>';

//eliminar el ultimo elemento del arreglo
array_pop($arreglo3);

//Encontrar valores en el arreglo
var_dump (in_array(20, $arreglo3));

echo '<pre>';
    var_dump($arreglo3);
echo '</pre>';

?>