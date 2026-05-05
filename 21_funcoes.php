<?php

function escrever($texto){
    echo "{$texto} <br>";
}

//escrever('Maneiro demais');

function soma($n1, $n2){
    return $n1 + $n2;
}

//echo soma(2, 9);

function conta($n1, $n2, $taxa = 2){
    return ($n1 + $n2) * $taxa;
}

//echo conta(1, 2);

function fnCalcularMedia($n1, $n2, $n3, $n4){
    return ($n1 + $n2 + $n3 + $n4) / 4;
}

echo fnCalcularMedia(2, 2, 2, 7);

?>