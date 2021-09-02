<?php
$id_edit = $_POST['id'];
$nombre_edit = $_POST['nombre'];
$apellido_edit = $_POST['apellido'];
$imagen_edit = $_POST['imagen'];
$descripcion_edit = $_POST['descripcion'];

include('conexion.php');

mysqli_query($datos_db, "UPDATE empleados SET nombre = '$nombre_edit', apellido = '$apellido_edit', imagen = '$imagen_edit', descripcion = '$descripcion_edit' WHERE id = '$id_edit'");

header("Location: ver_empleado.php");
?>