<?php
    include('conexion.php');
    $id = $_GET['id'];
    mysqli_query($datos_db, "DELETE FROM empleados WHERE id = $id");
    header("Location: ../ver_empleado.php");
?>