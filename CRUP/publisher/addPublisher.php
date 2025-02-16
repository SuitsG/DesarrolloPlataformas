<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Publisher</title>
    <link rel="stylesheet" href="/styles/publisher/addPublisher.css">
</head>
<body>
    <h1>Agregar editorial</h1>
    <form action="managePublisher.php" method="post">
        <label for="namePublisher">Nombre de la editorial:</label>
        <input type="text" id="namePublisher" name="namePublisher" required><br><br>
        
        <label for="founderPublisher">Fundador:</label>
        <input type="text" id="founderPublisher" name="founderPublisher" required><br><br>
        
        <label for="countryPublisher">País:</label>
        <input type="text" id="countryPublisher" name="countryPublisher" required><br><br>
        
        <input type="submit" name="insertar" value="Guardar">
        <a href="/index.php">Volver</a>
    </form>
</body>
</html>