<?php

$nome_evento = $_POST['nome_evento'];
$tipo_evento = $_POST['tipo_evento'];
$descricao_evento = $_POST['descricao_evento'];

$arquivo = fopen("eventos.txt", "a");

fwrite($arquivo, "$nome_evento \t $tipo_evento \t $descricao_evento \n");
fclose($arquivo);

header("location: eventos-formulario.php?mensagem=sucesso");

?>