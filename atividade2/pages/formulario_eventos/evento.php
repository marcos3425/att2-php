

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    session_start();

    // Verifica se a sessão de participantes existe, caso contrário cria uma
    if (!isset($_SESSION['participantes'])) {
        $_SESSION['participantes'] = [];
    }

    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $evento = $_POST['evento'];

    // Adiciona os dados do participante na sessão
    $_SESSION['participantes'][] = ['nome' => $nome, 'email' => $email, 'evento' => $evento];

    echo "Participante registrado com sucesso!<br><br>";
    echo "Lista de participantes:<br>";

    // Exibe a lista de participantes
    foreach ($_SESSION['participantes'] as $participante) {
        echo "Nome: {$participante['nome']} - Email: {$participante['email']} - Evento: {$participante['evento']}<br>";
    }
}
?>

