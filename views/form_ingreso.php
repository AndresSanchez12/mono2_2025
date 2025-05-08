<?php
include '../models/drivers/conexDB.php';
include '../models/entities/model.php';
include '../models/entities/income.php';
include '../controllers/ProyectController.php';

use App\controllers\ProyectController;

$controller = new ProyectController();
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crear Ingreso</title>
</head>

<body>
    <h1>Registrar Ingreso</h1>
    <br>
    <form action="actions/saveIngreso.php" method="post">
        <div>
            <label for="namePerson"></label>
            <input type="text" id="namePerson" name="nameMonth" placeholder="Mes" required>
        </div>
        <br>
        <div>
            <label for="emailPerson"></label>
            <input type="number" id="emailPerson" name="nameYear" placeholder="Año" required>
        </div>
        <br>
        <div>
            <label for="agePerson"></label>
            <input type="number" id="agePerson" name="nameValue" placeholder="Valor del ingreso" required>
        </div>
        <br>
        <div>
            <button type="submit">Guardar</button>
        </div>
        <br>
    </form>
    <a href="personas.php">Volver</a>
</body>

</html>