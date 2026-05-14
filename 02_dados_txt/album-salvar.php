<?php

$nome_artista = $_POST['nome_artista'];
$nome_album = $_POST['nome_album'];
$ano_lancamento = $_POST['ano_lancamento'];

$arquivo = fopen("albuns.txt", "a");

fwrite($arquivo, "$nome_artista \t $nome_album \t $ano_lancamento \n");
fclose($arquivo);

header("location: album-formulario.php?mensagem=sucesso");

?>