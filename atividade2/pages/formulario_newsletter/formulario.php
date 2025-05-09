<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Cadastro</title>
</head>
<body>
<form id="formulario_newsletter" action="pages/formulario_newsletter/newsletter.php" method="POST">
    <label for="email">Digite seu email para inscrição:</label><br>
    <input type="email" id="email" name="email"><br><br>
    
    <input type="submit" value="Inscrever-se">
</form>
<div id="resultado"></div>

<script>
        $(document).ready(function() {
            $('#formulario_newsletter').submit(function(event) {
                event.preventDefault(); // Evita a submissão padrão do formulário
			

               var email = $('#email').val();
              
                // Requisição AJAX para calcular.php
                $.ajax({
                    type: 'POST',
                    url: '/atividade2/pages/formulario_newsletter/newsletter.php',
                    data: { 
                        email : email
                     
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
