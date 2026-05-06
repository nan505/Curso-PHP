<?php

$nome = 'Carlos Ferreira';

// Valida se a variável existe e possui um valor atribuído a ela
if(isset($nome)){
    echo $nome;
}
else{
    echo 'Não existe!';
}

unset($nome);
if(isset($nome)){
    echo $nome;
}
else{
    echo 'Não existe!';
}

?>