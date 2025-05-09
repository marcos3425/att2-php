<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Minha Página (Fernando)</title>
</head>
<body>
    <?php include 'header.php'; ?>

    <div class="container-fluid my-5">
        <?php
        $pagina = isset($_GET['pagina']) ? $_GET['pagina'] : 'home';
        if ($pagina === 'home') {
            $pagePath = 'home.php';
        } else 
        $pagePath = "pages/formulario_{$pagina}/formulario.php";

        if (file_exists($pagePath)) {
            include $pagePath;
        } else {
            echo "<div class='alert alert-danger'>Página não encontrada.</div>";
        }
        ?>
    </div>

    <?php include 'footer.php'; ?>
    </body>
   
</html>
