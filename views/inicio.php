<?php
include '../models/drivers/conexDB.php';
include '../models/entities/model.php';
include '../models/entities/bill.php';
include '../models/entities/category.php';
include '../models/entities/income.php';
include '../models/entities/report.php';
include '../controllers/ProyectController.php';

use App\controllers\ProyectController;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Control de Gastos</title>
</head>
<body>
    <a href="form_ingreso.php">Ingresos</a>
    <a href="form_gasto.php">Gastos</a>
    <a href="form_categoria.php">Categorías</a>
    <a href="form_reporte.php">Reportes</a>
    
</body>
</html>