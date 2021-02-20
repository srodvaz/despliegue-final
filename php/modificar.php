<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modificar</title>
    <link rel="stylesheet" href="../css/style.css">
</head>

<body>
    <?php
    echo "<h1>BASES DE DATOS 3-1 - Modificación</h1>";
    echo "<h3 class='result'>Se modifica el apellido del registro con ID 2</h3>";
    // Llamamos a la clase conexion con los datos de la BBDD
    require_once('conexion.php');

    // Creamos la conexión a las BBDD
    $conn = conexion();

    // Comprobamos la conexión a la BBDD
    if (!$conn) {
        die("Conexión fallida: " . mysqli_connect_error());
    }
    // Realizamos el update a la BBDD
    $query = "UPDATE clientes SET apellido='Doe' WHERE id=2";
    $resultado = mysqli_query($conn, $query);

    // Mostrar el resultado de la consulta
    if ($resultado === TRUE) {
        echo "<h3 class='result'>Registro modificado</h3>";
    } else {
        echo "<div class='result'>Error: " . $conn->error . "</div>";
    }
    $conn->close();

    //Enlace de vuelta al index
    echo "<a class='volver' href='../index.html'>Volver atrás</a>"
    ?>
</body>

</html>