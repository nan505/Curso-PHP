<?php

$nome = $_POST['nome'];
$email = $_POST['email'];
$telefone = $_POST['telefone'];
$cpf = $_POST['cpf'];

$arquivo = fopen("adotantes.txt", "a");
fwrite($arquivo, "$nome \t $email \t $telefone \t $cpf \n");
fclose($arquivo);

?>