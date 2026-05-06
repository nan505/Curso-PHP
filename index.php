<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>História da Programação</title>
    <link rel="stylesheet" href="./css/style.css">
</head>
<body>
    <h4>História da programação</h4>
    <h1>Mulheres que fizeram a diferença</h1>
    <hr>
    <?php
    
    $arrayMulheres = [
        ['Ada Lovelace', 'ada-lovelace.webp', 'Ada Lovelace foi uma matemática britânica do século XIX, considerada a primeira programadora da história. Ao trabalhar com Charles Babbage, criou o primeiro algoritmo para uma máquina, antecipando conceitos da computação moderna e destacando o potencial criativo dos computadores.'],
        ['Grace Hopper', 'grace-hopper.webp', 'Grace Hopper foi uma cientista da computação e oficial da Marinha dos EUA, pioneira no desenvolvimento de linguagens de programação. Criou o primeiro compilador e contribuiu para o COBOL, tornando a programação mais acessível e influenciando sistemas usados até hoje.'],
        ['Dorothy Vaughan', 'dorothy-vaughan.png', 'Dorothy Vaughan foi uma matemática afro-americana que trabalhou na NASA e se destacou como programadora. Especialista em FORTRAN, liderou uma equipe de mulheres negras e teve papel essencial na transição dos cálculos manuais para a computação eletrônica.'],
        ['Marissa Mayer', 'marissa-mayer1.png', 'Marissa Mayer é uma engenheira de software e executiva que ganhou destaque no Google, onde liderou projetos importantes de busca e experiência do usuário. Depois, tornou-se CEO do Yahoo, sendo uma das mulheres mais influentes da tecnologia.'],
        ['Margareth Hamilton', 'margareth-hamilton.webp', 'Margaret Hamilton foi uma cientista da computação responsável pelo software de voo das missões Apollo da NASA. Seu trabalho foi crucial para o sucesso do pouso na Lua, e ela ajudou a estabelecer práticas de engenharia de software modernas.']
    ];
    ?>

    <div class="galeria">
        
        <div class=item>
            <img src="./img/<?php echo $arrayMulheres[0][1]; ?>">
            <h3><?php echo $arrayMulheres[0][0]; ?></h3>
            <p><?php echo $arrayMulheres[0][2]; ?></p>
        </div>

        <div class=item>
            <img src="./img/<?php echo $arrayMulheres[1][1]; ?>">
            <h3><?php echo $arrayMulheres[1][0]; ?></h3>
            <p><?php echo $arrayMulheres[1][2] ?></p>
        </div>

        <div class=item>
            <img src="./img/<?php echo $arrayMulheres[2][1]; ?>">
            <h3><?php echo $arrayMulheres[2][0]; ?></h3>
            <p><?php echo $arrayMulheres[2][2] ?></p>
        </div>

        <div class=item>
            <img src="./img/<?php echo $arrayMulheres[3][1]; ?>">
            <h3><?php echo $arrayMulheres[3][0]; ?></h3>
            <p><?php echo $arrayMulheres[3][2] ?></p>
        </div>

        <div class=item>
            <img src="./img/<?php echo $arrayMulheres[4][1]; ?>">
            <h3><?php echo $arrayMulheres[4][0]; ?></h3>
            <p><?php echo $arrayMulheres[4][2] ?></p>
        </div>
        
    </div>

    
</body>
</html>
 