<?php
// Recibo los datos del formulario
$nombre_empleado = $_POST['nombre'];
$apellido_empleado = $_POST['apellido'];
$imagen_empleado = $_POST['imagen'];
$descripcion_empleado = $_POST['descripcion'];
// Conectar con la DB
include('conexion.php');
// Realizar una consulta
mysqli_query($datos_db, "INSERT INTO empleados VALUES (DEFAULT, '$nombre_empleado', '$apellido_empleado', '$imagen_empleado', '$descripcion_empleado')");
// Redireccionar al index.php después de la carga de datos y dar un msj
// header('Location: index.php?ok');
header('Location: ver_empleado.php');
?>