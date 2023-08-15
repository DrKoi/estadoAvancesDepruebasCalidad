<?php
require 'vendor/autoload.php'; // Asegúrate de que la ruta a autoload.php sea correcta

use PhpOffice\PhpSpreadsheet\IOFactory;

$archivoExcel = "archivos_subidos/mi_archivo.xlsx"; // Ruta al archivo Excel subido
$html = "";

try {
    $spreadsheet = IOFactory::load($archivoExcel);
    $worksheet = $spreadsheet->getActiveSheet();
    
    $html .= "<table border='1'>";
    foreach ($worksheet->getRowIterator() as $row) {
        $html .= "<tr>";
        $cellIterator = $row->getCellIterator();
        $cellIterator->setIterateOnlyExistingCells(false);
        
        foreach ($cellIterator as $cell) {
            $html .= "<td>" . $cell->getValue() . "</td>";
        }
        
        $html .= "</tr>";
    }
    $html .= "</table>";
} catch (Exception $e) {
    $html = "Error al abrir el archivo Excel.";
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ver Excel</title>
</head>
<body>
    <?php echo $html; ?>
</body>
</html>
