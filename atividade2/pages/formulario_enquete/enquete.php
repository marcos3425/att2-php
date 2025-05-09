<?php
session_start();

// Inicializa os resultados se ainda não existirem
if (!isset($_SESSION['resultados'])) {
    $_SESSION['resultados'] = ['Ação' => 0, 'Comédia' => 0, 'Drama' => 0];
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $opcoesValidas = ['Ação', 'Comédia', 'Drama'];

    // Verifica se o valor enviado é válido
    if (isset($_POST['filme']) && in_array($_POST['filme'], $opcoesValidas)) {
        $filmeVotado = $_POST['filme'];
        $_SESSION['resultados'][$filmeVotado]++;
        echo "Você votou em: $filmeVotado<br><br>";
    } else {
        echo "Voto inválido.<br><br>";
    }

    echo "Resultados atuais da enquete:<br>";
    foreach ($opcoesValidas as $filme) {
        $votos = $_SESSION['resultados'][$filme];
        echo "$filme: $votos votos<br>";
    }
}
?>
