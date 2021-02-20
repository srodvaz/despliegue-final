<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listar</title>
    <link rel="stylesheet" href="../css/style.css">
</head>

<body>
    <?php
    echo "<h1>BASES DE DATOS 3-1 - Listar</h1>";

    // Llamamos a la clase conexion con los datos de la BBDD
    require_once('conexion.php');

    // Creamos la conexión a las BBDD
    $conn = conexion();

    //Comprobamos la conexión a la BBDD
    if (!$conn) {
        die("Conexión fallida: " . mysqli_connect_error());
    }
    // Realizamos el select a la BBDD
    $query = "SELECT id, nombre, apellido FROM clientes";
    $resultado = mysqli_query($conn, $query);

    if ($resultado->num_rows > 0) {
        echo "<h3 class='result'>Resultados:</h3>";
        while ($row = $resultado->fetch_assoc()) {
            echo "<div class='result'>id: " . $row["id"] . " - Nombre: " . $row["nombre"] . " " . $row["apellido"] . "</div>";
        }
    } else {
        echo "<div class='result'>0 resultados</div>";
    }

    $conn->close();

    ?>
</body>

</html>