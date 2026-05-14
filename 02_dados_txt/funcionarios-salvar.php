<?php

$nome_funcionario = $_POST['nome_funcionario'];
$telefone_funcionario = $_POST['telefone_funcionario'];
$numero_dependentes_funcionario = $_POST['numero_dependentes_funcionario'];
$uf_funcionario = $_POST['uf_funcionario'];
$funcionario_casado = $_POST['funcionario_casado'];
$funcionario_necessita_adapt = $_POST['funcionario_necessita_adapt'];
$funcionario_descricao = $_POST['funcionario_descricao'];

$arquivo = fopen("funcionarios.txt", "a");

fwrite($arquivo, "$nome_funcionario \t $telefone_funcionario \t $numero_dependentes_funcionario \t $uf_funcionario \t $funcionario_casado \t $funcionario_necessita_adapt \t $funcionario_descricao \n");
fclose($arquivo);

header("location: funcionarios-formulario.php?mensagem=sucesso");

?>