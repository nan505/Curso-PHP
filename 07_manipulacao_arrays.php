<?php

$infoEmpresa = [
    'nome' => 'Senac Americana',
    'funcionario' => 'Paulo Santos',
    'anoAtual' => '2026',
];

$infoCursos = [
    'cursos' => ['PHP', 'JS', 'Vue JS', 'Laravel'],
    'totalCursos' => 26,
];
echo '<pre>';
// "array_keys" mostra as chaves do Array (Ex: Mostra a chave "nome", mas não os nomes (valores) atribuídos dentro dela)
// var_dump(array_keys($infoEmpresa));

// "array_values" mostra os valores do Array (Ex: Mostra os nomes (valores) atribuídos dentro da chave "nome")
//var_dump(array_values($infoEmpresa));

// "count" conta quantas chaves existem no Array
//var_dump(count($infoEmpresa))

$infoEmpresa = array_merge($infoEmpresa, $infoCursos);
print_r($infoEmpresa);

?>