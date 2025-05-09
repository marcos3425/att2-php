<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Cadastro</title>
</head>
<body>
<form id="formulario_pesquisa" action="pages/formulario_pesquisa/pesquisa.php" method="POST">
    <label for="termo">Pesquise algo:</label><br>
    <input type="text" id="termo" name="termo"><br><br>
    
    <input type="submit" value="Pesquisar">
</form>
<div id="resultado"></div>

<script>
        $(document).ready(function() {
            $('#formulario_pesquisa').submit(function(event) {
                event.preventDefault(); // Evita a submissão padrão do formulário
			

               var termo = $('#termo').val();
             
              
                // Requisição AJAX para calcular.php
                $.ajax({
                    type: 'POST',
                    url: '/atividade2/pages/formulario_pesquisa/pesquisa.php',
                    data: { 
                        termo : termo
                
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
