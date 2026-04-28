<?php

$carrinho = ['Arroz', 'Sabão', 'Feijão', 'Balinhas'];

echo '<pre>';

var_dump($carrinho);

echo '<hr>';

// "array_pop" remove o último elemento de um Array
array_pop($carrinho);
var_dump($carrinho);

echo '<hr>';

// "array_shift" remove o primeiro elemento de um Array
array_shift($carrinho);
var_dump($carrinho);

echo '<hr>';

// "unset" remove o valor especificado da memória
unset($carrinho[0]);
var_dump($carrinho);

echo '<hr>';

array_push($carrinho, 'Tapete');
array_push($carrinho, 'Rodo');
var_dump($carrinho);

echo '<hr>';

array_unshift($carrinho, 'Microondas');
array_unshift($carrinho, 'Tapete');
var_dump($carrinho);

echo '<hr>';

$carrinho = array_unique($carrinho);
var_dump($carrinho);

?>