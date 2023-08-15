<?php require_once "vistas/parte_superior.php"?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        /* Agrega estilos CSS para el efecto de aparición progresiva */
        .progressive-title {
            opacity: 0;
            transform: translateY(20px);
            transition: opacity 1s, transform 1s;
        }
        .visible {
            opacity: 1;
            transform: translateY(0);
        }

        /* Estilos para el botón Ingresar */
        .ingresar-btn {
            font-size: 20px;
            padding: 15px 30px;
            margin-top: 20px; /* Agregado para espaciado superior */
        }

        /* Estilos para el contenedor de texto sobre el botón */
        .text-container {
            text-align: center;
            margin-top: 10px;
        }

        /* Estilos para la imagen del robot */
        .robot-image {
            max-width: 90%; /* Aumentar el tamaño de la imagen */
            display: block; /* Centrar la imagen horizontalmente */
            margin: 0 auto;
        }
    </style>
</head>
<body>

<!--INICIO del cont principal-->
<div class="container mt-5">
    <div class="row">
        <div class="col-md-6 text-center">
            <!-- Agrega la etiqueta <img> para mostrar la imagen -->
            <img class="robot-image" src="https://i.pinimg.com/originals/79/04/42/7904424933cc535b666f2de669973530.gif" alt="Imagen GIF">
        </div>
        <div class="col-md-6 d-flex flex-column justify-content-center align-items-center">
            <!-- Título con efecto de aparición progresiva -->
            <h1 class="progressive-title">Procesos Automatizados en Rockebot</h1>
            <!-- Contenedor de texto sobre el botón -->
            <div class="text-container">
          
            </div>
            <!-- Botón "Ingresar" con estilos de Bootstrap -->
            <button class="btn btn-primary ingresar-btn">Ingresar</button>
        </div>
    </div>
</div>
<!--FIN del cont principal-->

<script>
    // JavaScript para aplicar el efecto de aparición progresiva
    document.addEventListener('DOMContentLoaded', function () {
        const title = document.querySelector('.progressive-title');
        title.classList.add('visible');
    });
</script>

<?php require_once "vistas/parte_inferior.php"?>
</body>
</html>

