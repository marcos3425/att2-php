<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Cadastro</title>
</head>
<body>
<form action="pages/formulario_contato/contato.php" method="POST">
    <label for="nome">Nome:</label><br>
    <input type="text" id="nome" name="nome"><br><br>

    <label for="email">Email:</label><br>
    <input type="email" id="email" name="email"><br><br>
    
    <label for="assunto">Assunto:</label><br>
    <input type="text" id="assunto" name="assunto"><br><br>
    
    <label for="mensagem">Mensagem:</label><br>
    <textarea id="mensagem" name="mensagem"></textarea><br><br>
    
    <input type="submit" value="Enviar">
</form>


</body>
</html>
