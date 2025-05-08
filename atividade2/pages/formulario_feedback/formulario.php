<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Cadastro</title>
</head>
<body>
<form action="pages/formulario_feedback/feedback.php" method="POST">
    <label for="produto">Nome do Produto:</label><br>
    <input type="text" id="produto" name="produto"><br><br>
    
    <label for="avaliacao">Avaliação (1 a 5 estrelas):</label><br>
    <input type="number" id="avaliacao" name="avaliacao" min="1" max="5"><br><br>
    
    <label for="comentarios">Comentários:</label><br>
    <textarea id="comentarios" name="comentarios"></textarea><br><br>
    
    <input type="submit" value="Enviar Feedback">
</form>



</body>
</html>
