<?php
    include '../controllers/controller.reservaciones.php';
    $listaReservas = leerDatosDelArchivo('../data/reservaciones/reservaciones.txt')
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
    <title>Reservaciones</title>
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
                <li class="nav-item">
                    <a class="nav-link" href="../reservaciones.php"><h5>reservaciones</h5></a>
                </li>
                </ul>
            </div>
        </div>
    </nav>

    <h1>Reservaciones</h1>
    <div class="row m-4">
        <button type="button" class="btn btn-primary col-8 col-md-5 col-lg-2" data-bs-toggle="modal" data-bs-target="#exampleModal" data-bs-whatever="@mdo">Hacer reserva</button>
    </div>
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">New message</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form method="post" id="formIDReserva" action="#">
                <div class="mb-3">
                    <label for="recipient-name" class="col-form-label" require>Nombre:</label>
                    <input type="text" class="form-control" id="recipient-name">
                </div>
                <div class="mb-3">
                    <label for="recipient-name" class="col-form-label" require>Numero:</label>
                    <input type="number" class="form-control" id="recipient-name">
                </div>
                <div class="mb-3">
                    <label for="recipient-name" class="col-form-label" require>Fecha:</label>
                    <input type="date" class="form-control" id="recipient-name">
                </div>
                <div class="mb-3">
                    <label for="recipient-name" class="col-form-label" require>Hora:</label>
                    <input type="time" class="form-control" id="recipient-name">
                </div>
                <div class="mb-3">
                    <label for="recipient-name" class="col-form-label">Descripcion:</label>
                    <input type="text" class="form-control" id="recipient-name">
                </div>

                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Send message</button>
                </div>
                </form>
            </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row d-flex justify-conetent-center">
            <?php foreach( $listaReservas as $reserva) {?>
            <div class="card col-12 col-md-6 col-lg-4" style="width: 18rem;">
                <div class="card-header">
                    Reservacion
                </div>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item">NOMBRE: <?php echo $reserva[0]?></li>
                    <li class="list-group-item">NUMERO: <?php echo $reserva[1]?></li>
                    <li class="list-group-item">FECHA: <?php echo $reserva[2]?></li>
                    <li class="list-group-item">HORA: <?php echo $reserva[3]?></li>
                    <li class="list-group-item">DESCRIPCION: <?php echo $reserva[4]?></li>
                </ul>
            </div>
            <?php }?>
        </div>
    </div>
</body>
</html>