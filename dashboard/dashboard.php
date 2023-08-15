<?php require_once "vistas/parte_superior.php"?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
</head>
<body>

<!--INICIO del cont principal-->
<div class="container mt-5">
    <h1 class="text-center">Dashboard Calidad</h1>

    <div class="row justify-content-center">
        <div class="col-md-6">
            <!-- Gráfico Circular -->
            <div class="my-4">
                <canvas id="pieChart" class="chart"></canvas>
            </div>
        </div>
        <div class="col-md-6">
            <!-- Gráfico de Línea -->
            <div class="my-4">
                <canvas id="lineChart" class="chart"></canvas>
            </div>
        </div>
    </div>
</div>
<!--FIN del cont principal-->

<script>
    // Gráfico Circular
    var pieChart = new Chart(document.getElementById("pieChart"), {
        type: 'doughnut',
        data: {
            labels: ["Label 1", "Label 2", "Label 3"],
            datasets: [{
                data: [30, 40, 50],
                backgroundColor: ["#3498db", "#e74c3c", "#27ae60"],
            }],
        },
        options: {
            responsive: true,
            maintainAspectRatio: false,
        }
    });

    // Gráfico de Línea
    var lineChart = new Chart(document.getElementById("lineChart"), {
        type: 'line',
        data: {
            labels: ["Enero", "Febrero", "Marzo", "Abril", "Mayo"],
            datasets: [{
                label: "Dataset 1",
                data: [10, 15, 7, 25, 12],
                borderColor: "#3498db",
                fill: false,
            }],
        },
        options: {
            responsive: true,
            maintainAspectRatio: false,
        }
    });
</script>

<?php require_once "vistas/parte_inferior.php"?>
</body>
</html>

