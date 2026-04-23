<?php

$carros = ['Uno', 'Gol', 'Fusion', 'Civic'];
echo $carros[2];

$carroUm = ['Uno', 'Fiat', 'Branco'];
echo $carroUm[2];

$carroDois = [
    'modelo' => 'Uno',
    'marca' => 'Fiat',
    'cor' => 'Branco',
];

echo $carroDois['modelo'];
echo $carroDois['marca'];
echo $carroDois['cor'];

?>