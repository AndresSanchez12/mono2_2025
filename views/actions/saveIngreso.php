<?php
include '../../models/drivers/conexDB.php';
include '../../models/entities/model.php';
include '../../models/entities/income.php';
include '../../controllers/ProyectController.php';

use App\controllers\ProyectController;

$controller = new ProyectController();
if ($_SERVER["REQUEST_METHOD"] != "POST") {
    header('location: ../inicio.php');
}

$res = $controller->saveNewIncome($_POST);

?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado operación</title>
</head>

<body>
    <h1>Resultado de la operación</h1>
    <?php
    if ($res == 'yes') {
        echo '<p>Datos guardados</p>';
    } else {
        echo  '<p>No se pudo guardar los datos</p>';
    }
    ?>
    <br>
    <a href="../personas.php">Volver</a>
</body>

</html>