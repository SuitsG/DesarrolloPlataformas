<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Publisher</title>
    <link rel="stylesheet" href="/styles/publisher/addPublisher.css">
</head>

<body>
    <header class="header">
        <h1>Agregar editorial</h1>
    </header>
    <main class="main">
        <form class="form" action="managePublisher.php" method="post">
            <div class="form-group">
                <label for="namePublisher">Nombre de la editorial:</label>
                <input type="text" id="namePublisher" name="namePublisher" required>

                <label for="founderPublisher">Fundador:</label>
                <input type="text" id="founderPublisher" name="founderPublisher" required>

                <label for="countryPublisher">País:</label>
                <input type="text" id="countryPublisher" name="countryPublisher" required>
            </div>
            <div class="buttons">
                <input type="submit" name="insertar" value="Guardar">
                <a href="/index.php">Volver</a>
            </div>
        </form>
    </main>
    <footer class="footer">
        &copy; 2025 Universidad
    </footer>
</body>

</html>