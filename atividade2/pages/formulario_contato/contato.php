
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $assunto = $_POST['assunto'];
    $mensagem = $_POST['mensagem'];

    echo "Mensagem enviada com sucesso!<br>";
    echo "Nome: $nome<br>";
    echo "Email: $email<br>";
    echo "Assunto: $assunto<br>";
    echo "Mensagem: $mensagem<br>";
}
?>

