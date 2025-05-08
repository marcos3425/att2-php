<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Cadastro</title>
</head>
<body>
<form action="pages/formulario_evento/evento.php" method="POST">
    <label for="nome">Nome:</label><br>
    <input type="text" id="nome" name="nome"><br><br>

    <label for="email">Email:</label><br>
    <input type="email" id="email" name="email"><br><br>

    <label for="evento">Evento de Interesse:</label><br>
    <select id="evento" name="evento">
        <option value="PHP">PHP</option>
        <option value="JavaScript">JavaScript</option>
        <option value="Python">Python</option>
    </select><br><br>
    
    <input type="submit" value="Registrar">
</form>



</body>
</html>
