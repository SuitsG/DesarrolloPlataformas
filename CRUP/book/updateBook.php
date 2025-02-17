<?php
require_once('../conexion.php');
require_once('crudBook.php');
require_once('book.php');

$crud = new CrudBook(Db::conectar());
$book = $crud->read($_GET['id']);
$authors = $crud->getAuthors();
$publishers = $crud->getPublishers();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Actualizar libro</title>
    <link rel="stylesheet" href="/styles/book/updateBook.css">
    <link rel="shortcut icon" href="/images/icon.png" type="image/x-icon">
</head>

<body>
    <header class="header">
        <h1>Actualiza los datos del libro</h1>
    </header>
    <main class="main">
        <form class="form" action="manageBook.php" method="post">
            <table>
                <tr>
                    <input type="hidden" name="id" value="<?php echo $book->getId() ?>">
                    <td>Nombre libro:</td>
                    <td><input type="text" name="nameBook" value="<?php echo $book->getNameBook() ?>"></td>
                </tr>
                <tr>
                    <td>Autor:</td>
                    <td>
                        <select name="authorId">
                            <?php foreach ($authors as $author): ?>
                                <option value="<?php echo $author['id']; ?>" <?php echo $author['id'] == $book->getAuthorId() ? 'selected' : ''; ?>>
                                    <?php echo $author['name']; ?>
                                </option>
                            <?php endforeach; ?>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td>Editorial:</td>
                    <td>
                        <select name="publisherId">
                            <?php foreach ($publishers as $publisher): ?>
                                <option value="<?php echo $publisher['id']; ?>" <?php echo $publisher['id'] == $book->getPublisherId() ? 'selected' : ''; ?>>
                                    <?php echo $publisher['name']; ?>
                                </option>
                            <?php endforeach; ?>
                        </select>
                    </td>
                </tr>
            </table>
            <div class="buttons">
                <input type="hidden" name="actualizar" value="actualizar">
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