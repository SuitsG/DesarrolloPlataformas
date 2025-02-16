<?php

require_once('../conexion.php'); 
require_once('crudPublisher.php');
require_once('publisher.php');

$crud = new CrudPublisher(Db::conectar());
$publisher = new Publisher();

$publisher = $crud->read($_GET['id']);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Actualizar Publisher</title>
    <link rel="stylesheet" href="/styles/publisher/updatePublisher.css">
</head>

<body>
    <main>
        <form action="managePublisher.php" method="post">
            <table>
                <tr>
                    <input type="hidden" name="id" value="<?php echo $publisher->getId() ?>">
                    <td>Nombre Publisher:</td>
                    <td><input type="text" name="namePublisher" value="<?php echo $publisher->getNamePublisher() ?>"></td>
                </tr>
                <tr>
                    <td>Founder Publisher:</td>
                    <td><input type="text" name="founderPublisher" value="<?php echo $publisher->getFounderPublisher() ?>"></td>
                </tr>
                <tr>
                    <td>Country Publisher:</td>
                    <td><input type="text" name="countryPublisher" value="<?php echo $publisher->getCountryPublisher() ?>"></td>
                </tr>
                <input type="hidden" name="actualizar" value="actualizar">
            </table>
            <input type="submit" value="Guardar">
            <a href="/index.php">Volver</a>
        </form>
    </main>

</body>

</html>