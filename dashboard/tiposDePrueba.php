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
            text-align: center;
        }
        .visible {
            opacity: 1;
            transform: translateY(0);
        }

        /* Estilos para los botones geométricos */
        .button-container {
            display: flex;
            justify-content: center;
            align-items: center;
            margin-top: 50px;
        }
        .fun-button {
            width: 200px;
            height: 200px;
            margin: 10px;
            display: flex;
            justify-content: center;
            align-items: center;
            background-color: #3498db;
            color: #fff;
            font-weight: bold;
            font-size: 14px;
            cursor: pointer;
            transition: transform 0.3s;
        }
        .circle {
            border-radius: 50%;
        }
        .triangle {
            width: 0;
            height: 0;
            border-left: 60px solid transparent;
            border-right: 60px solid transparent;
            border-bottom: 104px solid #e74c3c;
        }
        .hexagon {
            width: 100px;
            height: 58px;
            background-color: #27ae60;
            position: relative;
        }
        .hexagon:before,
        .hexagon:after {
            content: "";
            width: 0;
            border-left: 50px solid transparent;
            border-right: 50px solid transparent;
            position: absolute;
        }
        .hexagon:before {
            top: -29px;
            border-bottom: 29px solid #27ae60;
        }
        .hexagon:after {
            bottom: -29px;
            border-top: 29px solid #27ae60;
        }
        .rectangle {
            width: 200px;
            height: 100px;
            background-color: #e74c3c;
        }
        .diamond {
            width: 100px;
            height: 100px;
            transform: rotate(45deg);
            background-color: #f39c12;
        }
        /* Efecto de movimiento */
        .fun-button:hover {
            transform: translate(0, -5px);
        }
    </style>
</head>
<body>

<!--INICIO del cont principal-->
<div class="container mt-5">
    <h1 class="progressive-title">Tipos de Pruebas</h1>

    <!-- Botones divertidos en formas geométricas -->
    <div class="button-container">
        <button class="btn btn-primary fun-button circle">FUNCIONALES</button>
        <button class="btn btn-primary fun-button triangle">STRESS</button>
        <button class="btn btn-primary fun-button hexagon">REVISIÓN<br>DE CODIGO</button>
        <button class="btn btn-primary fun-button rectangle">AUTOMATIZACIONES</button>
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
