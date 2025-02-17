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
    <title>Update Publisher</title>
    <link rel="stylesheet" href="/styles/publisher/updatePublisher.css">
    <link rel="shortcut icon" href="/images/icon.png" type="image/x-icon">
</head>

<body>
    <header class="header">
        <h1>Actualiza datos de la editorial</h1>
    </header>
    <main class="main">
        <form class="form" action="managePublisher.php" method="post">
            <table>
                <tr>
                    <input type="hidden" name="id" value="<?php echo $publisher->getId() ?>">
                    <td>Nombre de la editorial:</td>
                    <td><input type="text" name="namePublisher" value="<?php echo $publisher->getNamePublisher() ?>" required></td>
                </tr>
                <tr>
                    <td>Dueño de la editorial:</td>
                    <td><input type="text" name="founderPublisher" value="<?php echo $publisher->getFounderPublisher() ?>" required></td>
                </tr>
                <tr>
                    <td>País de la editorial:</td>
                    <td><input type="text" name="countryPublisher" value="<?php echo $publisher->getCountryPublisher() ?>" required></td>
                </tr>
                <input type="hidden" name="actualizar" value="actualizar">
            </table>
            <div class="buttons">
                <input type="submit" value="Guardar">
                <a href="/index.php">Volver</a>
            </div>
        </form>
    </main>
    <footer class="footer">
        &copy; 2025 Universidad
    </footer>

</body>

</html>