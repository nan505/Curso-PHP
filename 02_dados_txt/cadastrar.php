<?php

$nome = $_POST['nome'];
$email = $_POST['email'];
$telefone = $_POST['telefone'];
$cpf = $_POST['cpf'];

echo "{$nome}, {$email}, {$telefone}, {$cpf}";

$arquivo = fopen("adotantes.txt", "a");
fwrite($arquivo, "$nome / $email / $telefone / $cpf \n");
fclose($arquivo);

?>