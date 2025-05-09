<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Cadastro</title>
</head>
<body>
<form id="formulario_contato" action="pages/formulario_contato/contato.php" method="POST">
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
<div id="resultado"></div>

 <script>
        $(document).ready(function() {
            $('#formulario_contato').submit(function(event) {
                event.preventDefault(); // Evita a submissão padrão do formulário
			

                var nome = $('#nome').val();
                var email = $('#email').val();
                var assunto = $('#assunto').val();
                var mensagem = $('#mensagem').val();

                // Requisição AJAX para calcular.php
                $.ajax({
                    type: 'POST',
                    url: '/atividade2/pages/formulario_contato/contato.php',
                    data: {
                        nome: nome,
                        email: email,
                        assunto: assunto,
                        mensagem: mensagem
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
