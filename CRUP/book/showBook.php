<?php

require_once('../conexion.php');
require_once('book.php');
require_once('crudBook.php');

$crud = new CrudBook(Db::conectar());
$listaLibros = $crud->getBooksWithDetails();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mostrar libros</title>
    <link rel="stylesheet" href="/styles/book/showBook.css">
</head>
<body>
    <header class="header">
        <h1>Libros disponibles</h1>
    </header>
    <main>
        <table border="1">
            <thead>
                <tr>
                    <th>Nombre</th>
                    <th>Autor</th>
                    <th>Editorial</th>
                    <th>Actualizar</th>
                    <th>Eliminar</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($listaLibros as $book) { ?>
                    <tr>
                        <td><?php echo $book['nameBook']; ?></td>
                        <td><?php echo $book['authorName']; ?></td>
                        <td><?php echo $book['publisherName']; ?></td>
                        <td><a href="updateBook.php?id=<?php echo $book['id']; ?>&accion=a">Actualizar</a></td>
                        <td><a href="manageBook.php?id=<?php echo $book['id']; ?>&accion=e">Eliminar</a></td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
        <a href="/index.php">Volver</a>
    </main>
</body>
</html>
