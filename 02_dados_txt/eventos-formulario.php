<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Eventos</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
</head>
<body>
    <section class="d-flex flex-column align-items-center">
        <div class="mb-3">
            <h2>Cadastro de Eventos</h2>
        </div>
        <div>
            <form action="eventos-salvar.php" method="post">
                <label>Nome</label><br>
                <input type="text" name="nome_evento"><br>
                <label>Tipo</label><br>
                <select name="tipo_evento">
                    <option value="casamento">Casamento</option>
                    <option value="festa_aniversario">Festa de aniversário</option>
                    <option value="despedida_solteiro">Despedida de solteiro</option>
                </select><br>
                <label>Descrição</label><br>
                <input type="text" name="descricao_evento"><br><br>
                <button type="submit">Salvar</button>
                <button type="reset">Limpar</button>
            </form>
        </div>

        <div>
            <p>
                <?php
                echo $_GET['mensagem'] ?? "";
                ?>
            </p>
        </div>

        <hr>
        <h2>Listagem de eventos</h2>

        <?php
        
        $arquivo = fopen("eventos.txt", "r");

        while(!feof($arquivo) ){
            $linha = fgets($arquivo);
            echo "$linha <br>";
        }
        fclose($arquivo);

        ?>

    </section>
</body>
</html>