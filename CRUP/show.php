<?php
require_once('book.php');
require_once('crudBook.php');

$crud = new CrudLibro();
$libro = new Libro();

$listaLibros = $crud->mostrar();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mostrar libros</title>
</head>
<body>
    <main>
        <table border="1">
            <head>
                <td>Nombre</td>
                <td>Actualizar</td>
                <td>Eliminar</td>
            </head>
            <body>
                <?php foreach ($listaLibros as $libro) { ?>
                    <tr>
                        <td><?php echo $libro->getNombre(); ?></td>
                        <td><a href="update.php?id=<?php echo $libro->getId(); ?>&accion=a">Actualizar</a></td>
                        <td><a href="administrarBook.php?id=<?php echo $libro->getId(); ?>&accion=e">Eliminar</a></td>
                    </tr>
                <?php } ?>
            </body>
        </table>
        <a href="index.php">Volver</a>
    </main>
</body>
</html>