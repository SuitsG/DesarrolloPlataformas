<?php
require_once('crudAuthor.php');
require_once('author.php');

require_once('../conexion.php');

$pdo = Db::conectar();
$crud = new CrudAuthor($pdo);
$author = $crud->read($_GET['id']);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Actualizar Autor</title>
    <link rel="stylesheet" href="/styles/author/updateAuthor.css">
</head>

<body>
    <main>
        <form action="manageAuthor.php" method="post">
            <table>
                <tr>
                    <input type="hidden" name="id" value="<?php echo $author->getId() ?>">
                    <td>Nombre:</td>
                    <td><input type="text" name="firstName" value="<?php echo $author->getFirstName() ?>"></td>
                </tr>
                <tr>
                    <td>Apellido:</td>
                    <td><input type="text" name="lastName" value="<?php echo $author->getLastName() ?>"></td>
                </tr>
                <tr>
                    <td>Dirección:</td>
                    <td><input type="text" name="address" value="<?php echo $author->getAddress() ?>"></td>
                </tr>
                <tr>
                    <td>Teléfono:</td>
                    <td><input type="text" name="phone" value="<?php echo $author->getPhone() ?>"></td>
                </tr>
                <tr>
                    <td>Email:</td>
                    <td><input type="email" name="email" value="<?php echo $author->getEmail() ?>"></td>
                </tr>
                <tr>
                    <td>Ciudad:</td>
                    <td><input type="text" name="city" value="<?php echo $author->getCity() ?>"></td>
                </tr>
                <input type="hidden" name="actualizar" value="actualizar">
            </table>
            <input type="submit" value="Guardar">
            <a href="/index.php">Volver</a>
        </form>
    </main>

</body>

</html>