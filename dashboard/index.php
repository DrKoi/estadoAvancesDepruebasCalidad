<!DOCTYPE html>
<html>
<head>
    <!-- Otros metadatos y enlaces CSS -->

    <!-- Enlace al archivo firebase.js -->
    <script src="ruta/al/archivo/firebase.js"></script>
</head>
<body>
    <!-- Contenido de la página -->

    <!-- Otros scripts y códigos JavaScript específicos de la página -->
</body>
</html>

<?php require_once "vistas/parte_superior.php"?>

<!--INICIO del cont principal-->
<div class="container">
    <h1>Proyectos Calidad</h1>
    
    <?php
    include_once '../bd/conexion.php';
    $objeto = new Conexion();
    $conexion = $objeto->Conectar();

    $consulta = "SELECT id, nombreproyecto FROM proyectos";
    $resultado = $conexion->prepare($consulta);
    $resultado->execute();
    $data=$resultado->fetchAll(PDO::FETCH_ASSOC);
    ?>

    <div class="container">
        <div class="row">
            <div class="col-lg-12">            
             
            </div>    
        </div>    
    </div>    
    <br>  
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="table-responsive">        
                    <table id="tablaPersonas" class="table table-striped table-bordered table-condensed" style="width:100%">
                        <thead class="text-center">
                            <tr>
                                <th>N°</th>
                                <th>Nombre Proyecto</th>
                                <th>Estado Proyecto</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php                            
                            foreach($data as $dat) {                                                        
                            ?>
                            <tr>
                                <td><?php echo $dat['id'] ?></td>
                                <td>
                                    <?php
                                    if ($dat['nombreproyecto'] == '05 Complementario de Salud') {
                                        echo '<a href="complementario_de_salud.php">Complementario de Salud</a>';
                                    } elseif ($dat['nombreproyecto'] == 'Fast Track') {
                                        echo '<a href="fast_track.php">Fast Track</a>';
                                    } else {
                                        echo '<a href="bienvenido.php">' . $dat['nombreproyecto'] . '</a>';
                                    }
                                    ?>
                                </td>
                                <td></td>
                            </tr>
                            <?php
                            }
                            ?>                                
                        </tbody>        
                    </table>                    
                </div>
            </div>
        </div>  
    </div>    
    
    <!--Modal para CRUD-->
    <!-- ... Tu modal actual ... -->
    
</div>
<!--FIN del cont principal-->
<?php require_once "vistas/parte_inferior.php"?>
