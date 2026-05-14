<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Adotantes</title>
</head>
<body>
    <h1>Cadastro de Adotantes</h1>
    <form action="adotantes-salvar.php" method="post">
        <label>Nome completo:</label>
        <input type="text" name="nome" required><br>
        <label>E-mail:</label>
        <input type="email" name="email" required><br>
        <label>Número de telefone:</label>
        <input type="tel" name="telefone" maxlength="11" required><br>
        <label>CPF:</label>
        <input type="text" name="cpf" maxlength="11" required><br>
        <button type="submit">Salvar</button>
        <button type="reset">Limpar</button>
    </form>
</body>
</html>