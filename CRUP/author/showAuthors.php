<?php
require_once('author.php');
require_once('crudAuthor.php');
require_once('../conexion.php');

$pdo = Db::conectar();
$crud = new CrudAuthor($pdo);
$listAuthors = $crud->getAll();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ver autores</title>
    <link rel="stylesheet" href="/styles/author/showAuthors.css">
</head>
<body>
    <header class="header">
        <h1>Autores disponibles</h1>
    </header>
    <main class="main">
    <table border="1">
            <thead>
                <tr>
                    <th>Nombre</th>
                    <th>Apellido</th>
                    <th>Dirección</th>
                    <th>Teléfono</th>
                    <th>Correo</th>
                    <th>Ciudad</th>
                    <th>Actualizar</th>
                    <th>Eliminar</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($listAuthors as $author) { ?>
                    <tr>
                        <td><?php echo $author->getFirstName(); ?></td>
                        <td><?php echo $author->getLastName(); ?></td>
                        <td><?php echo $author->getAddress(); ?></td>
                        <td><?php echo $author->getPhone(); ?></td>
                        <td><?php echo $author->getEmail(); ?></td>
                        <td><?php echo $author->getCity(); ?></td>
                        <td><a href="/author/updateAuthor.php?id=<?php echo $author->getId(); ?>&accion=a">Actualizar</a></td>
                        <td><a href="/author/manageAuthor.php?id=<?php echo $author->getId(); ?>&accion=e">Eliminar</a></td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
        <a href="/index.php">Volver</a>
    </main>
    <footer class="footer">
    </footer>
</body>
</html>
