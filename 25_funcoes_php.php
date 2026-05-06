<?php

$empresa = 'Senac Jaú';
echo "$empresa <br>";

// Substitui um determinado valor de uma string por outro valor
$novaEmpresa = str_replace('Jaú', 'Americana', $empresa);
echo "$novaEmpresa <br>";

// Exibe uma quantidade determinada de caracteres de uma variável
echo substr($novaEmpresa, 0, 4) . "<br>";

// Conta a quantidade de caracteres em uma string
echo strlen($novaEmpresa);

?>