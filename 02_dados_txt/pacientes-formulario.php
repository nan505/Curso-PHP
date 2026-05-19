<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Pacientes</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
</head>
<body>
    <section class="d-flex flex-column align-items-center">
        <div class="mb-3">
            <h2>Cadastro de Pacientes</h2>
        </div>
        <div>
            <form action="pacientes-salvar.php" method="post">
                <label>Nome</label><br>
                <input type="text" name="nome_paciente"><br>
                <label>Telefone</label><br>
                <input type="tel" maxlength="11" name="telefone_paciente"><br>
                <label>Cidade</label><br>
                <input type="text" name="cidade_paciente"><br>
                <label>Estado</label><br>
                <select name="uf_paciente">
                    <option value="AC">AC</option>
                    <option value="AP">AP</option>
                    <option value="AM">AM</option>
                    <option value="PA">PA</option>
                    <option value="RO">RO</option>
                    <option value="RR">RR</option>
                    <option value="TO">TO</option>

                    <option value="AL">AL</option>
                    <option value="BA">BA</option>
                    <option value="CE">CE</option>
                    <option value="MA">MA</option>
                    <option value="PB">PB</option>
                    <option value="PE">PE</option>
                    <option value="PI">PI</option>
                    <option value="RN">RN</option>
                    <option value="SE">SE</option>

                    <option value="DF">DF</option>
                    <option value="GO">GO</option>
                    <option value="MT">MT</option>
                    <option value="MS">MS</option>

                    <option value="ES">ES</option>
                    <option value="MG">MG</option>
                    <option value="RJ">RJ</option>
                    <option value="SP">SP</option>

                    <option value="PR">PR</option>
                    <option value="RS">RS</option>
                    <option value="SC">SC</option>
                </select><br>
                <label>Fumante?</label><br>
                <input type="radio" name="paciente_fuma" value="sim">
                <label>Sim</label><br>
                <input type="radio" name="paciente_fuma" value="nao">
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
        <h2>Listagem de pacientes</h2>

        <?php

        $arquivo = fopen("pacientes.txt", "r");

        while(!feof($arquivo) ){
            $linha = fgets($arquivo);
            echo "$linha <br>";
        }
        fclose($arquivo);

        ?>

    </section>
</body>
</html>