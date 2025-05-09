<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora</title>

</head>
<body>

<form id="formulario_calculadora" action="pages/formulario_calculadora/calculadora.php" method="POST">
    <label for="numero1">Número 1:</label><br>
    <input type="number" id="numero1" name="numero1" required><br><br>

    <label for="numero2">Número 2:</label><br>
    <input type="number" id="numero2" name="numero2" required><br><br>

    <label for="operacao">Operação:</label><br>
    <select id="operacao" name="operacao" required>
        <option value="soma">Soma</option>
        <option value="subtracao">Subtração</option>
        <option value="multiplicacao">Multiplicação</option>
        <option value="divisao">Divisão</option>
    </select><br><br>

    <input type="submit" value="Calcular">
</form>

<div id="resultado"></div>

  <script>
        $(document).ready(function() {
            $('#formulario_calculadora').submit(function(event) {
                event.preventDefault(); // Evita a submissão padrão do formulário
			

                var numero1 = $('#numero1').val();
                var numero2 = $('#numero2').val();
                var operacao = $('#operacao').val();

                // Requisição AJAX para calcular.php
                $.ajax({
                    type: 'POST',
                    url: '/atividade2/pages/formulario_calculadora/calculadora.php',
                    data: {
                        numero1: numero1,
                        numero2: numero2,
                        operacao: operacao
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