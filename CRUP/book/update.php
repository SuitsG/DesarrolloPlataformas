<?php
require_once('crudBook.php');
require_once('book.php');


$crud = new crudLibro();
$libro = new Libro();

$libro = $crud->obtenerLibro($_GET['id']);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Actualizar libro</title>
</head>

<body>
    <main>
        <form action="administrarBook.php" method="post">
            <table>
                <tr>
                    <input type="hidden" name="id" value="<?php echo $libro->getId() ?>">
                    <td>Nombre libro:</td>
                    <td><input type="text" name="nombre" value="<?php echo $libro->getNombre() ?>"></td>
                </tr>
                <input type="hidden" name="actualizar" value="actualizar">
            </table>
            <input type="submit" value="Guardar">
            <a href="index.php">Volver</a>
        </form>
    </main>

</body>

</html>