<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ingresar libro</title>
    <link rel="stylesheet" href="/styles/book/addBook.css">
</head>
<body>
    <header>
        <h1>Ingresar los datos del libro</h1>
    </header>
    <main>
        <form action="administrarBook.php" method="post">
            <table>
                <tr>
                    <td>Nombre del libro</td>
                    <td><input type="text" name="nombre"></td>
                </tr>
                <tr>
                    <td colspan="2">
                        <input type="hidden" name="insertar" value="insertar">
                        <input type="submit" value="Guardar">
                        <a href="/index.php">Volver</a>
                    </td>
                </tr>
            </table>
        </form>
    </main>
</body>
</html>