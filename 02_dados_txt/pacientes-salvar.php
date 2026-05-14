<?php

$nome_paciente = $_POST['nome_paciente'];
$telefone_paciente = $_POST['telefone_paciente'];
$cidade_paciente = $_POST['cidade_paciente'];
$uf_paciente = $_POST['uf_paciente'];
$paciente_fuma = $_POST['paciente_fuma'];

$arquivo = fopen("pacientes.txt", "a");

fwrite($arquivo, "$nome_paciente \t $telefone_paciente \t $cidade_paciente \t $uf_paciente \t $paciente_fuma \n");
fclose($arquivo);

header("location: pacientes-formulario.php?mensagem=sucesso");

?>