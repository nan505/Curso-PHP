<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Álbum</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
</head>
<body>
    <section class="d-flex flex-column align-items-center">
        <div class="mb-3">
            <h2>Cadastro de Álbum</h2>
        </div>
        <div>
            <form action="album-salvar.php" method="post">
                <label class="">Artista</label><br>
                <input type="text" name="nome_artista"><br>
                <label>Nome do álbum</label><br>
                <input type="text" name="nome_album"><br>
                <label>Ano de lançamento</label><br>
                <input type="number" name="ano_lancamento" maxlength="4"><br><br>
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

    </section>
</body>
</html>