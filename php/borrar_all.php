<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Borrar Todo</title>
    <link rel="stylesheet" href="../css/style.css">
</head>

<body>
    <?php
    echo "<h1>BASES DE DATOS 3-1 - Borrar todos los datos</h1>";

    // Llamamos a la clase conexion con los datos de la BBDD
    require_once('conexion.php');

    // Creamos la conexión a las BBDD
    $conn = conexion();

    // Comprobamos la conexión
    if (!$conn) {
        die("Conexión fallida: " . mysqli_connect_error());
    }
    // Pasamos el delete a la BBDD
    $query = "DELETE FROM Clientes";
    $resultado = mysqli_query($conn, $query);

    // Mostramos el resultado
    if ($resultado === TRUE) {
        echo "<h3 class='result'>Todos los datos eliminados correctamente.</h3>";
    } else {
        echo "<div class='result'>Error: " . $conn->error . "</div>";
    }
    $conn->close();
    
    // Enlace al index
    echo "<a class='volver' href='../index.html'>Volver atrás</a>"
    ?>
</body>

</html>