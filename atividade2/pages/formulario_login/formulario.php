
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Cadastro</title>
</head>
<body>
<form id="formulario_login" action="pages/formulario_login/login.php" method="POST">
    <label for="usuario">Usuário:</label><br>
    <input type="text" id="usuario" name="usuario"><br><br>
    
    <label for="senha">Senha:</label><br>
    <input type="password" id="senha" name="senha"><br><br>
    
    <input type="submit" value="Login">
</form>
<div id="resultado"></div>

<script>
        $(document).ready(function() {
            $('#formulario_login').submit(function(event) {
                event.preventDefault(); // Evita a submissão padrão do formulário
			

               var usuario = $('#usuario').val();
                var senha = $('#senha').val();
                

              
                // Requisição AJAX para calcular.php
                $.ajax({
                    type: 'POST',
                    url: '/atividade2/pages/formulario_login/login.php',
                    data: { 
                        usuario: usuario,
                        senha: senha
                     
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