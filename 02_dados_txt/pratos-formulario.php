<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Pratos</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
</head>
<body>
    <section class="d-flex flex-column align-items-center">
        <div class="mb-3">
            <h2>Cadastro de Pratos</h2>
        </div>
        <div>
            <form action="pratos-salvar.php" method="post">
                <label>Nome do prato</label><br>
                <input type="text" name="nome_prato"><br>
                <label>Código do prato</label><br>
                <input type="text" name="codigo_prato"><br>
                <label>Categoria</label><br>
                <select name="categoria_prato">
                    <option value="doce">Doce</option>
                    <option value="salgado">Salgado</option>
                </select><br>
                <label>Vegetariano?</label><br>
                <input type="radio" name="is_prato_vegetariano" value="sim">
                <label>Sim</label><br>
                <input type="radio" name="is_prato_vegetariano" value="nao">
                <label>Não</label><br>
                <label>Vegano?</label><br>
                <input type="radio" name="is_prato_vegano" value="sim">
                <label>Sim</label><br>
                <input type="radio" name="is_prato_vegano" value="nao">
                <label>Não</label><br><br>
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
        <h2>Listagem de pratos</h2>

        <?php

        $arquivo = fopen("pratos.txt", "r");

        while(!feof($arquivo) ){
            $linha = fgets($arquivo);
            echo "$linha <br>";
        }
        fclose($arquivo);

        ?>

    </section>
</body>
</html>