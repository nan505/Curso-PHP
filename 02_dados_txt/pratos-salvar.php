<?php

$nome_prato = $_POST['nome_prato'];
$codigo_prato = $_POST['codigo_prato'];
$categoria_prato = $_POST['categoria_prato'];
$is_prato_vegetariano = $_POST['is_prato_vegetariano'];
$is_prato_vegano = $_POST['is_prato_vegano'];

$arquivo = fopen("pratos.txt", "a");

fwrite($arquivo, "$nome_prato \t $codigo_prato \t $categoria_prato \t $is_prato_vegetariano \t $is_prato_vegano \n");
fclose($arquivo);

header("location: pratos-formulario.php?mensagem=sucesso");

?>