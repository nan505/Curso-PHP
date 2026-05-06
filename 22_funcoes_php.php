<?php

$name = 'Senac Americana - Cursos de TI';

// Deixa os caracteres em maiúsculo
echo strtoupper($name);

echo '<hr>';

// Deixa os caracteres em minúsculo
echo strtolower($name);

echo '<hr>';

// Deixa o primeiro caractere da string em maiúsculo
echo ucfirst(strtolower($name));

echo '<hr>';

// Deixa o primeiro caractere de cada palavra em maiúsculo
echo ucwords(strtolower($name));

echo '<hr>';

?>