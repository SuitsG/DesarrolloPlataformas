<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agregar Autor</title>
    <link rel="stylesheet" href="/styles/author/addAuthor.css">
</head>

<body>
    <header class="header">
        <h1>Ingrese los datos del autor</h1>
    </header>
    <main class="main">
        <form class="form" action="/author/manageAuthor.php" method="post">
            <div class="form-group">
                <label for="name">Nombre</label>
                <input type="text" name="firstName" id="firstName" required>
                <label for="lastname">Apellido</label>
                <input type="text" name="lastName" id="lastName" required>
                <label for="address">Dirección</label>
                <input type="text" name="address" id="address" required>
                <label for="telephone">Teléfono</label>
                <input type="text" name="phone" id="telephone" required>
                <label for="email">Correo</label>
                <input type="text" name="email" id="email" required>
                <label for="city">Ciudad</label>
                <input type="text" name="city" id="city" required>
            </div>
            <div class="buttons">
                <input type="hidden" name="insertar" value="insertar">
                <input type="submit" value="Guardar">
                <a href="/index">Volver</a>
            </div>
        </form>
    </main>
    <footer class="footer">
        &copy; 2025 Universidad
    </footer>
</body>

</html>