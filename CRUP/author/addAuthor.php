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
        <form action="/author/manageAuthor.php" method="post">
            <label for="name">Nombre</label>
            <input type="text" name="firstName" id="firstName">
            <label for="lastname">Apellido</label>
            <input type="text" name="lastName" id="lastName">
            <label for="address">Dirección</label>
            <input type="text" name="address" id="address">
            <label for="telephone">Teléfono</label>
            <input type="text" name="phone" id="telephone">
            <label for="email">Correo</label>
            <input type="text" name="email" id="email">
            <label for="city">Ciudad</label>
            <input type="text" name="city" id="city">
            <input type="hidden" name="insertar" value="insertar">
            <input type="submit" value="Guardar">
            <a href="/index">Volver</a>
        </form>
    </main>
    <footer class="footer">
        &copy; 2023 Universidad
    </footer>
</body>

</html>