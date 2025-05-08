

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $idade = $_POST['idade'];

    echo "Cadastro realizado com sucesso!<br>";
    echo "Nome: $nome<br>";
    echo "Email: $email<br>";
    echo "Idade: $idade<br>";
}
?>
