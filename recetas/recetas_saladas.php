<?php
    include '../controllers/controller.recetas.php';
    $recetaSaladas = readRecetas('../data/recetas/recetas-saladas.txt');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="Pagina de restaurante de comida guatemalteca ">
    <meta name="keywords" content="Postres,Platos Fuertes, Pagina de Personal,Reseñas, Recetas Dulces, Recetas Saladas">
    <meta name="author" content="El Rincon de los Sabores">
    <meta property="og:title" content="El Rincon de los Sabores">
    <meta property="og:description" content="Comida deliciosa guatemalteca">
    <meta property="og:image" content="imagenes/icono.jpg">
    <meta property="og:url" content="http://127.0.0.1:5500/recetas/recetas_saladas.html">
    <link rel="shortcut icon" href="../imagenes/icono.jpg" type="image/x-icon">
    <link rel="stylesheet" href="../styles.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <title>Recetas Saladas</title>
</head>
<body>
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">
                <img src="../imagenes/icono.jpg" alt="Logo" width="100" class="d-inline-block align-text-top">
                <div class="logo">
                    <p class="text-center up-font"><strong> Rincon de los Sabores</strong></p>
                    <p class="sinespaciado" style="text-align: center;">Simplemente delicioso</p>
                </div>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="../index.html"><h5>Inicio</h5></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="../menu/postres.html"><h5>Postres</h5></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="../menu/platos_fuertes.html"><h5>Platos Fuertes</h5></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="../personal/personal.html"><h5>Pagina de Personal</h5></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="../resenias/resenias.html"><h5>Reseñas</h5></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="../recetas/recetas_dulces.php"><h5>Recetas Dulces</h5></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="../recetas/recetas_saladas.php"><h5>Recetas Saladas</h5></a>
                </li>
                </ul>
            </div>
        </div>
    </nav>

    <h1>Nuestras Recetas Saladas</h1>
        <div>
            <?php foreach ($recetaSaladas as $receta): ?>
                <h2><?php echo $receta[0]; ?></h2>
                <h3>Descripción</h3>
                <p><?php echo $receta[1]; ?></p>
                <h3>Ingredientes</h3>
                <ul>
                    <?php foreach (explode(';', $receta[2]) as $ingrediente): ?>
                        <li><?php echo trim($ingrediente); ?></li>
                    <?php endforeach; ?>
                </ul>
                <h3>Pasos</h3>
                <ol>
                    <?php foreach (explode(';', $receta[4]) as $paso): ?>
                        <li><?php echo trim($paso); ?></li>
                    <?php endforeach; ?>
                </ol>
                <hr>
            <?php endforeach; ?>
        </div>
</body>
</html>