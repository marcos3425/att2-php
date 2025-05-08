<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora</title>
    <!-- jQuery com fallback caso CDN falhe -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        // Verifica se jQuery foi carregado, caso contrário carrega localmente
        window.jQuery || document.write('<script src="js/jquery-3.6.0.min.js"><\/script>');
    </script>
    <style>
        .loading {
            color: #666;
            font-style: italic;
        }
        .error {
            color: red;
        }
        .result {
            color: green;
            font-weight: bold;
        }
    </style>
</head>
<body>

<form id="formulario_calculadora" method="POST">
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
    // Usando jQuery no modo seguro para evitar conflitos
    (function($) {
        $(document).ready(function () {
            $('#formulario_calculadora').submit(function (event) {
                event.preventDefault();

                var $resultado = $('#resultado');
                $resultado.removeClass('error result').addClass('loading').html('Carregando...');

                // Limpa mensagens anteriores após 3 segundos
                var clearMessage = setTimeout(function() {
                    $resultado.empty().removeClass('loading error result');
                }, 3000);

                $.ajax({
                    type: 'POST',
                    url: 'pages/formulario_calculadora/calculadora.php',
                    data: $(this).serialize(),
                    dataType: 'text', // Especifica o tipo de resposta esperada
                    success: function (response) {
                        clearTimeout(clearMessage);
                        $resultado.removeClass('loading').addClass('result').html("Resultado: " + response);
                    },
                    error: function (jqXHR, textStatus, errorThrown) {
                        clearTimeout(clearMessage);
                        var errorMsg = "Erro ao processar: ";
                        
                        if (textStatus === 'timeout') {
                            errorMsg += "Tempo de requisição excedido";
                        } else if (textStatus === 'error') {
                            errorMsg += errorThrown || "Erro desconhecido";
                        } else {
                            errorMsg += textStatus;
                        }
                        
                        $resultado.removeClass('loading').addClass('error').html(errorMsg);
                    },
                    timeout: 5000 // Define timeout de 5 segundos
                });
            });
        });
    })(jQuery);
</script>

</body>
</html>