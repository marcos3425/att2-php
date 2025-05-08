

<?php
$usuarioValido = "admin";
$senhaValida = "1234";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $usuario = $_POST['usuario'];
    $senha = $_POST['senha'];

    if ($usuario == $usuarioValido && $senha == $senhaValida) {
        echo "Login bem-sucedido!";
    } else {
        echo "Usuário ou senha inválidos.";
    }
}
?>


