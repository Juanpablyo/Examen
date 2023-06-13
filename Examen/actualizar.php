<?php
include("conexion.php");
?>
<?php
$id = $_POST['id'];
$menu = $_POST['menu'];
$Descripcion = $_POST['Descripcion'];
$Precio = $_POST['Precio'];
$Proporcion = $_POST['Proporcion'];

$query = "UPDATE taqueria SET menu = '$menu', Descripcion = '$Descripcion', Precio = '$Precio', Proporcion = '$Proporcion' ";
$result = mysqli_query($conexion, $query);

if ($result) {
    echo "Cotización actualizada correctamente.";
} else {
    echo "Error al actualizar cotización: " . mysqli_error($conexion);
}

mysqli_close($conexion);
?>
<br>
<button onclick="window.location.href='index.php'">Regresar a la lista de cotizaciones</button>