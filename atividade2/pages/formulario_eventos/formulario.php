<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Cadastro</title>
</head>
<body>
<form id="formulario_evento" action="pages/formulario_eventos/evento.php" method="POST">
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
<div id="resultado"></div>

<script>
        $(document).ready(function() {
            $('#formulario_evento').submit(function(event) {
                event.preventDefault(); // Evita a submissão padrão do formulário
			

               var nome = $('#nome').val();
                var email = $('#email').val();
                var evento = $('#evento').val();
              
                // Requisição AJAX para calcular.php
                $.ajax({
                    type: 'POST',
                    url: '/atividade2/pages/formulario_eventos/evento.php',
                    data: {
                        nome: nome,
                        email: email,
                        evento: evento
                     
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
