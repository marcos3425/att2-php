<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Cadastro</title>
   
</head>
<body>
    <h1>Formulário de Cadastro</h1>
    <form id="formulario" action="pages/formulario_cadastro/cadastro.php" method="POST">
        <label for="nome">Nome:</label><br>
        <input type="text" id="nome" name="nome"><br><br>

        <label for="email">Email:</label><br>
        <input type="email" id="email" name="email"><br><br>

        <label for="idade">Idade:</label><br>
        <input type="number" id="idade" name="idade"><br><br>

        <input type="submit" value="Cadastrar">
    </form>
    <div id="resultado"></div>

    <script>
        $(document).ready(function() {
            $('#formulario').submit(function(event) {
                event.preventDefault(); // Evita a submissão padrão do formulário
            

                var nome = $('#nome').val();
                var email = $('#email').val();
                var idade = $('#idade').val();

                // Requisição AJAX para calcular.php
                $.ajax({
                    type: 'POST',
                    url: '/atividade2/pages/formulario_cadastro/cadastro.php',
                    data: {
                        nome: nome,
                        email: email,
                        idade: idade
                    },
                    success: function(response) {
                        $('#resultado').html(response);
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
