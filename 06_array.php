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
echo ' - ';
echo $carroDois['marca'];
echo ' - ';
echo $carroDois['cor'];

$carroTres = [
    'modelo' => 'Punto',
    'marca' => 'Fiat',
    'cor' => 'Amarelo',
];

echo '<br>';

echo $carroTres['modelo'];
echo ' - ';
echo $carroTres['marca'];
echo ' - ';
echo $carroTres['cor'];

echo '<br>';

$carroQuatro = [
    'modelo' => 'Kwid',
    'marca' => 'Renault',
    'cor' => 'Branco',
];

echo $carroQuatro['modelo'];
echo $carroQuatro['marca'];
echo $carroQuatro['cor'];

echo '<br><br>';

$carroCinco = [
    'modelo' => 'Brasília',
    'marca' => 'Volkswagen',
    'cor' => 'Azul',
];

echo 'Marca: ';
echo $carroCinco['marca'];
echo '<br>';
echo 'Modelo: ';
echo $carroCinco['modelo'];
echo '<br>';
echo 'Cor: ';
echo $carroCinco['cor'];

?>