<?php

$estado = 'São Paulo/SP';

// "Explode" o valor da variável em diferentes valores de um array com base em um parâmetro
$arrayEstado = explode('/', $estado);

echo '<pre>';
var_dump($arrayEstado);

$info = 'São Paulo/SP/Brasil/Terra';
$arrayInfo = explode('/', $info);
var_dump($arrayInfo);

echo '<hr>';

?>