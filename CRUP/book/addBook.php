<?php
require_once('../conexion.php');
require_once('../author/crudAuthor.php');
require_once('../publisher/crudPublisher.php');

$crudAuthor = new CrudAuthor(Db::conectar());
$crudPublisher = new CrudPublisher(Db::conectar());

$autores = $crudAuthor->getAll();
$publishers = $crudPublisher->getAll();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agregar Libro</title>
    <link rel="stylesheet" href="/styles/book/addBook.css">
</head>

<body>
    <header class="header">
        <h1>Agregar Libro</h1>
    </header>
    <main class="main">
        <form class="form" action="manageBook.php" method="post">
            <table>
                <tr>
                    <td>Nombre del libro:</td>
                    <td><input class="nameBook" type="text" name="nameBook" required></td>
                </tr>
                <tr>
                    <td>Autor:</td>
                    <td>
                        <select name="authorId" required>
                            <option value="" disabled selected>Seleccione un autor</option>
                            <?php foreach ($autores as $autor) { ?>
                                <option value="<?php echo $autor->getId(); ?>"><?php echo $autor->getFirstName() . ' ' . $autor->getLastName(); ?></option>
                            <?php } ?>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td>Editorial:</td>
                    <td>
                        <select name="publisherId" required>
                            <option value="" disabled selected>Seleccione una editorial</option>
                            <?php foreach ($publishers as $publisher) { ?>
                                <option value="<?php echo $publisher->getId(); ?>"><?php echo $publisher->getNamePublisher(); ?></option>
                            <?php } ?>
                        </select>
                    </td>
                </tr>
            </table>
            <div class="buttons">
                <input type="hidden" name="insertar" value="insertar">
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