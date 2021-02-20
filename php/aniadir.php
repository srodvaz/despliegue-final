<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aniadir</title>
    <link rel="stylesheet" href="../css/style.css">
</head>

<body>
    <?php
    echo "<h1>BASES DE DATOS 3-1 - Añadir</h1>";

    // Llamamos a la clase conexion con los datos de la BBDD
    require_once('conexion.php');

    // Creamos la conexión a las BBDD
    $conn = conexion();

    // Comprobamos la conexión a la BBDD
    if (!$conn) {
        die("Conexión fallida: " . mysqli_connect_error());
    }
    // Ejecutamos la sentencia insert en la BBDD
    $query = "insert into clientes(nombre,apellido,email) values ('test','automatico','email1')";
    $resultado = mysqli_query($conn, $query);

    // Mostramos los resultados
    if ($resultado === TRUE) {
        echo "<h3 class='result'>Nuevo registro creado.</h3>";
    } else {
        echo "<div class='result'>Error: " . $sql . "<br>" . $conn->error . "</div>";
    }
    $conn->close();

    // enlace de vuelta a index
    echo "<a class='volver' href='../index.html'>Volver atrás</a>"
    ?>
</body>

</html>