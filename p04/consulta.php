<!DOCTYPE html>
<html>
<head>
    <title>Consulta de Autos</title>
</head>
<body>
    <h1>Consulta de Autos</h1>
    
    <form action="resultado.php" method="post">
        <label for="matricula">Consultar por Matrícula:</label>
        <input type="text" name="matricula" id="matricula" required>
        <input type="submit" value="Consultar">
    </form>
    
    <form action="resultado.php" method="post">
        <input type="hidden" name="consulta_todos" value="true">
        <input type="submit" value="Mostrar todos los Autos Registrados">
    </form>
</body>
</html>