<?php

$ra_aluno = $_POST['ra_aluno'];
$nome_aluno = $_POST['nome_aluno'];
$idade_aluno = $_POST['idade_aluno'];

$arquivo = fopen("alunos.txt", "a");

fwrite($arquivo, "$ra_aluno \t $nome_aluno \t $idade_aluno \n");
fclose($arquivo);

header("location: alunos-formulario.php?mensagem=sucesso");

?>