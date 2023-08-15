<?php
if (isset($_POST['submit'])) {
    $archivo = $_FILES['archivo_excel'];
    $nombreArchivo = $archivo['name'];
    $rutaArchivo = 'archivos_subidos/' . $nombreArchivo;

    if (move_uploaded_file($archivo['tmp_name'], $rutaArchivo)) {
        echo "Archivo subido exitosamente.";
    } else {
        echo "Error al subir el archivo.";
    }
}
?>