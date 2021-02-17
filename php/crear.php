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
    echo "<h1>BASES DE DATOS 3-1 - Crear Base de Datos y Tabla</h1>";
    $servername = "localhost";
    $username = "root";
    $password = "";

    // Create connection 
    $conn = mysqli_connect($servername, $username, $password);

    // Check connection 
    if (!$conn) {
        die("Conexión fallida " . mysqli_connect_error());
    }

    $sql = "CREATE DATABASE tarea1PHP";
    if (mysqli_query($conn, $sql)) {
        echo "<h3 class='result'>Base de datos creada con éxito</h3>";
        // Create connection
        $conn2 = mysqli_connect($servername, $username, $password, "tarea1PHP");
        // Check connection
        if (!$conn2) {
            die("Conexión2 fallida: " . mysqli_connect_error());
        }

        // sql to create table
        $sql = "CREATE TABLE Clientes (
        id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
        nombre VARCHAR(30) NOT NULL,
        apellido VARCHAR(30) NOT NULL,
        email VARCHAR(50),
        reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
        )";

        if (mysqli_query($conn2, $sql)) {
            echo "<h3 class='result'>Tabla creada con éxito.</h3>";
        } else {
            echo "<div class='result'>Error al crear la tabla: " . mysqli_error($conn) . "</div>";
        }
    } else {
        echo "<div class='result'>Error al crear la base de datos: " . mysqli_error($conn) . "</div>";
    }

    mysqli_close($conn);
    ?>
</body>

</html>