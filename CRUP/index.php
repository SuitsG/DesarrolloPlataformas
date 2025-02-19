<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Administrar Biblioteca</title>
    <link rel="stylesheet" href="/styles/index.css">
    <link rel="shortcut icon" href="/images/icon.png" type="image/x-icon">
</head>
<body>
    <header>
        <h1>Bienvenido a Administrar tu biblioteca</h1>
    </header>
    <main>
        <section>
            <h2>Administración</h2>
            <table border="1">
                <thead>
                    <tr>
                        <th>Libros</th>
                        <th>Autores</th>
                        <th>Editoriales</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><a href="/book/addBook.php">Agregar libro</a></td>
                        <td><a href="/author/addAuthor.php">Agregar Autor</a></td>
                        <td><a href="/publisher/addPublisher.php">Agregar Editorial</a></td>
                    </tr>
                    <tr>
                        <td><a href="/book/showBook.php">Ver libros</a></td>
                        <td><a href="/author/showAuthors.php">Ver Autores</a></td>
                        <td><a href="/publisher/showPublisher.php">Ver Editoriales</a></td>
                    </tr>
                </tbody>
            </table>
        </section>
    </main>
    <footer>
        <p>Administrar biblioteca 2025</p>
    </footer>
</body>
</html>
