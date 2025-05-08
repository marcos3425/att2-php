

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $respostasCorretas = 0;

    if ($_POST['pergunta1'] == "Brasília") {
        $respostasCorretas++;
    }

    if ($_POST['pergunta2'] == "8") {
        $respostasCorretas++;
    }

    echo "Você acertou $respostasCorretas de 2 perguntas!";
}
?>


