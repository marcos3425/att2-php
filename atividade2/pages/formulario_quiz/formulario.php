<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Cadastro</title>
</head>
<body>
<form id="formulario_quiz" action="pages/formulario_quiz/quiz.php" method="POST">
    <label for="pergunta1">Qual a capital do Brasil?</label><br>
    <input type="radio" name="pergunta1" value="Brasília"> Brasília<br>
    <input type="radio" name="pergunta1" value="São Paulo"> São Paulo<br>
    <input type="radio" name="pergunta1" value="Minas Gerais"> Minas Gerais<br><br>

    <label for="pergunta2">Quanto é 5 + 3?</label><br>
    <input type="radio" name="pergunta2" value="6"> 6<br>
    <input type="radio" name="pergunta2" value="7"> 7<br>
    <input type="radio" name="pergunta2" value="8"> 8<br><br>

    <input type="submit" value="Submeter Respostas">
</form>
<div id="resultado"></div>

<script>
    $(document).ready(function() {
        $('#formulario_quiz').submit(function(event) {
            event.preventDefault(); // Evita a submissão padrão do formulário

            var pergunta1 = $('input[name="pergunta1"]:checked').val();
            var pergunta2 = $('input[name="pergunta2"]:checked').val();

            $.ajax({
                type: 'POST',
                url: '/atividade2/pages/formulario_quiz/quiz.php',
                data: { 
                    pergunta1: pergunta1,
                    pergunta2: pergunta2
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
