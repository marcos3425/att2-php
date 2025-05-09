<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Cadastro</title>
</head>
<body>
<form id="formulario_feedback" action="pages/formulario_feedback/feedback.php" method="POST">
    <label for="produto">Nome do Produto:</label><br>
    <input type="text" id="produto" name="produto"><br><br>
    
    <label for="avaliacao">Avaliação (1 a 5 estrelas):</label><br>
    <input type="number" id="avaliacao" name="avaliacao" min="1" max="5"><br><br>
    
    <label for="comentarios">Comentários:</label><br>
    <textarea id="comentarios" name="comentarios"></textarea><br><br>
    
    <input type="submit" value="Enviar Feedback">
</form>
<div id="resultado"></div>

<script>
        $(document).ready(function() {
            $('#formulario_feedback').submit(function(event) {
                event.preventDefault(); // Evita a submissão padrão do formulário
			

               var produto = $('#produto').val();
                var avaliacao = $('#avaliacao').val();
                var comentarios = $('#comentarios').val();

              
                // Requisição AJAX para calcular.php
                $.ajax({
                    type: 'POST',
                    url: '/atividade2/pages/formulario_feedback/feedback.php',
                    data: { 
                        produto: produto,
                        avaliacao: avaliacao,
                        comentarios: comentarios
                     
                    },
                    success: function(response) {
                        $('#resultado').html('Resultado: ' + response);
                    },
                    error: function(xhr, status, error) {
                        $('#resultado').html('Erro: ' + error);
                    }
                });
            });
        });
    </script>
</body>
</html>
