<?php
//index.php 

// Incluir las rutas
$rutas = require 'routes/web.php';

// Obtener la ruta actual

// Incluir el controlador y la conexión a la base de datos
require_once  'controllers/IndexController.php';
require_once  'config/db/db.php';

// Crear la conexión
$dbConnection = Database::connect();

?>


<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HabitaRoom</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="public/css/styles.css">
</head>

<body class="bg-dark">

    <!-- Barra de Navegación | Header -->
    <?php include __DIR__ . '/includes/headerIndex.php'; ?>
    <div class="bloque-menu-nav"></div>

    <!-- Contenido principal -->
    <div class="contenidoMain" id="contenidoMain"></div>

    <!-- Footer -->
    <?php include __DIR__ . '/includes/footer.php'; ?>


    <!--SCRIPTS-->

    <!-- Bootstrap JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

    <!-- jQuery -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>


    <!-- Scripts control contenido -->
    <script src="config/app.js"></script>
</body>

</html>