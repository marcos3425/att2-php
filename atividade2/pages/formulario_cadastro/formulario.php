<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Cadastro</title>
   
</head>
<body>
    <h1>Formulário de Cadastro</h1>
    <form action="pages/formulario_cadastro/cadastro.php" method="POST">
        <label for="nome">Nome:</label><br>
        <input type="text" id="nome" name="nome"><br><br>

        <label for="email">Email:</label><br>
        <input type="email" id="email" name="email"><br><br>

        <label for="idade">Idade:</label><br>
        <input type="number" id="idade" name="idade"><br><br>

        <input type="submit" value="Cadastrar">
    </form>
    <div id="resultado"></div>

    
</body>
</html>
