<!DOCTYPE html>
<html>
<head>
    <title>Resultado de Consulta</title>
</head>
<body>
    <h1>Resultado de Consulta</h1>
    
    <?php
    include 'registro.php';

    if (isset($_POST['consulta_todos']) && $_POST['consulta_todos'] == 'true') {
        echo "<h2>Todos los Autos Registrados:</h2>";
        print_r($parqueVehicular);
    } elseif (isset($_POST['matricula']) && isset($parqueVehicular[$_POST['matricula']])) {
        echo "<h2>Información del Auto con Matrícula {$_POST['matricula']}:</h2>";
        print_r($parqueVehicular[$_POST['matricula']]);
    } else {
        echo "<p>No se encontró información para la matrícula proporcionada.</p>";
    }
    ?>
    
    <p><a href="consulta.php">Realizar otra consulta</a></p>
</body>
</html>