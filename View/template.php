<?php
require_once('autoload.php');
use Controller\PaginaController;
    $capturaEnlace = new PaginaController();
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página que maneja enlaces</title>
    <!--<meta http-equiv="Content-Security-Policy" content="default-src 'self'"> -->
    <link rel="stylesheet" href="Assets/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/f31d6f48e7.js" crossorigin="anonymous"></script>

    <link rel="icon" type="image/x-icon" href="Assets/logo_intecap.ico">

    <link rel="stylesheet" href="/resources/demos/style.css">
    <link rel="stylesheet" href="//code.jquery.com/ui/1.13.2/themes/base/jquery-ui.css">
    <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
    <script src="https://code.jquery.com/ui/1.13.2/jquery-ui.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/intro.js@7.2.0/intro.min.js"></script>
    <link href=" https://cdn.jsdelivr.net/npm/intro.js@7.2.0/minified/introjs.min.css " rel="stylesheet">
 
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.6/css/jquery.dataTables.css" />
    <script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.js"></script>

    <style>
         .letra-negra{
            color:black;
            text-align: center;
         }
    </style>
</head>
<body>

    <?php require_once("pages/navbar.php"); ?>

    <div class="container">
        <?php
            $capturaEnlace->enlacesPagina();
        ?>
    </div>

</body>
</html>

