

<?php
session_start();

// Verifica se as variáveis de votação já existem, caso contrário cria
if (!isset($_SESSION['resultados'])) {
    $_SESSION['resultados'] = ['Ação' => 0, 'Comédia' => 0, 'Drama' => 0];
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $filmeVotado = $_POST['filme'];

    // Incrementa o voto para o filme escolhido
    $_SESSION['resultados'][$filmeVotado]++;

    echo "Você votou em: $filmeVotado<br><br>";
    echo "Resultados atuais da enquete:<br>";
    foreach ($_SESSION['resultados'] as $filme => $votos) {
        echo "$filme: $votos votos<br>";
    }
}
?>


