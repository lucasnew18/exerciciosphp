<!DOCTYPE html>
<html>
<head>
    <title>Formulário de Registro</title>
</head>
<body>
    <h1>Formulário de Registro</h1>
    <form action="processar_formulario.php" method="post">
        <label for="data">Data:</label>
        <input type="date" id="data" name="data" required><br><br>

        <label for="link">Link:</label>
        <input type="url" id="link" name="link" required><br><br>

        <label for="id_canal">ID do Canal:</label>
        <input type="text" id="id_canal" name="id_canal" required><br><br>

        <label for="jogo">Jogo:</label>
        <input type="text" id="jogo" name="jogo" required><br><br>

        <label for="membros">Membros:</label>
        <input type="number" id="membros" name="membros" required><br><br>

        <label for="observacao">Observação:</label>
        <textarea id="observacao" name="observacao" rows="4" cols="50"></textarea><br><br>

        <input type="submit" value="Enviar">
    </form>
</body>
</html>
