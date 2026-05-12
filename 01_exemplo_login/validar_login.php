<?php

$email = strtolower($_POST['email']);
$senha = strtolower($_POST['senha']);

if($email == "adm@senac.com.br" && $senha == 123){
    header("location: tela_administrativa.php");
}
else{
    header("location: formulario.php?mensagem=erro");
}

?>