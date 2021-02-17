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
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "tarea1PHP";

    // Create connection 
    $conn = mysqli_connect($servername, $username, $password, $dbname);

    // Check connection 
    if (!$conn) {
        die("Conexión fallida: " . mysqli_connect_error());
    }
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