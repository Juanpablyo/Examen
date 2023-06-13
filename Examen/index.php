<?php
// Configuración de la conexión a la base de datos
$host = 'localhost';
$db = 'flanes';
$user = 'root';
$password = '';

// Crear conexión
$conn = new mysqli($host, $user, $password, $db);

// Verificar si hay errores en la conexión
if ($conn->connect_error) {
    die("Error de conexión: " . $conn->connect_error);
}

// Consultar los elementos de la tabla
$sql = "SELECT * FROM menu";
$result = $conn->query($sql);

// Cerrar la conexión
$conn->close();
?>

<!DOCTYPE html>
<html>
<head>
    <title>Elementos de la tabla Taqueria</title>
    <style>
        table {
            border-collapse: collapse;
        }
        th, td {
            border: 1px solid black;
            padding: 5px;
        }
    </style>
</head>
<body>
    <h1>Elementos de la tabla Flanes</h1>

    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Flanes</th>
                <th>Descripción</th>
                <th>Precio</th>
                <th>Porción</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            <?php while ($row = $result->fetch_assoc()): ?>
                <tr>
                    <td><?php echo $row['id']; ?></td>
                    <td><?php echo $row['Flanes']; ?></td>
                    <td><?php echo $row['Descripcion']; ?></td>
                    <td><?php echo $row['Precio']; ?></td>
                    <td><?php echo $row['Proporcion']; ?></td>
                    <td><?php echo "<a href='editar.php?id=" . $row['id'] . "'>Editar</a>";?>
                <?php echo " | ";?>
               <?php echo "<a href='eliminar.php?id=" . $row['id'] . "'>Eliminar</a>";?>

                </tr>
            <?php endwhile; ?>
        </tbody>
    </table>
     <a href="agregar_menu.php">Agregar Comida</a>
</body>
</html>