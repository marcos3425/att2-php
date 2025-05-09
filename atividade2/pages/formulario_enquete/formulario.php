<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Enquete</title>
</head>
<body>
<form id="formulario_enquete" action="pages/formulario_enquete/enquete.php" method="POST">
    <label for="filme">Qual é o seu gêneros de filme favorito?</label><br>
    <input type="radio" name="filme" value="Ação"> Ação<br>
    <input type="radio" name="filme" value="Comédia"> Comédia<br>
    <input type="radio" name="filme" value="Drama"> Drama<br><br>

    <input type="submit" value="Votar">
</form>
<div id="resultado"></div>

 <script>
        $(document).ready(function() {
            $('#formulario_enquete').submit(function(event) {
                event.preventDefault(); // Evita a submissão padrão do formulário
			

               var filme = $('input[name="filme"]:checked').val();
              
                // Requisição AJAX para calcular.php
                $.ajax({
                    type: 'POST',
                    url: '/atividade2/pages/formulario_enquete/enquete.php',
                    data: {
                        filme: filme
                     
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
