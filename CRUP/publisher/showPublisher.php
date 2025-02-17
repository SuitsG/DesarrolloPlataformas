<?php
require_once('../conexion.php');
require_once('publisher.php');
require_once('crudPublisher.php');

$crud = new CrudPublisher(Db::conectar());
$listaPublishers = $crud->getAll();
$publisher = new Publisher();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mostrar editoriales</title>
    <link rel="stylesheet" href="/styles/publisher/showPublisher.css">
    <link rel="shortcut icon" href="/images/icon.png" type="image/x-icon">
</head>

<body>
    <header class="header">
        <h1>Editoriales disponibles</h1>
    </header>
    <main>
        <section class="table">
            <table border="1">
                <thead>
                    <tr>
                        <th>Nombre</th>
                        <th>Fundador</th>
                        <th>País</th>
                        <th>Actualizar</th>
                        <th>Eliminar</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($listaPublishers as $publisher) { ?>
                        <tr>
                            <td><?php echo $publisher->getNamePublisher(); ?></td>
                            <td><?php echo $publisher->getFounderPublisher(); ?></td>
                            <td><?php echo $publisher->getCountryPublisher(); ?></td>
                            <td><a href="updatePublisher.php?id=<?php echo $publisher->getId(); ?>&accion=a">Actualizar</a></td>
                            <td><a href="managePublisher.php?id=<?php echo $publisher->getId(); ?>&accion=e">Eliminar</a></td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
            <a href="/index.php">Volver</a>
        </section>
    </main>
    <footer class="footer">
        &copy; Universidad 2025
    </footer>
</body>

</html>