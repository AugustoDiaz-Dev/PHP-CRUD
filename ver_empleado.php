<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/styles.css">
    <title>Base de datos de empleados</title>
</head>

<body>

    <?php
    require("./components/header.php");
    ?>

    <section id="inicio">
        <?php
        require("./php/conexion.php");
        $consulta = mysqli_query($datos_db, 'SELECT * FROM empleados ORDER BY apellido');
        while ($lista_empleados = mysqli_fetch_assoc($consulta)) {
        ?>
            <div class="empleados">
                <div class="img_emp">
                    <img src="img/<?php echo $lista_empleados['imagen']; ?>" alt="Empleado">
                </div>
                <div class="info_emp">
                    <h4>
                        <?php echo $lista_empleados['nombre'] . " " . $lista_empleados['apellido']; ?>
                    </h4>
                    <p><?php echo $lista_empleados['descripcion']; ?></p>
                    <a href="editar.php?id=<?php echo $lista_empleados['id']; ?>">
                    <img src="img/edit-icon.png" alt="" class="icon">
                </a>

                    <a href="./php/eliminar_empleado.php?id=<?php echo $lista_empleados['id']; ?>" onclick="return confirm('Realmente desea eliminar el empleado: <?php echo $lista_empleados['nombre'] . ' ' . $lista_empleados['apellido']; ?>?');">
                    <img src="img/delete-icon.png" alt="" class="icon">
                </a>

                </div>
                <div class="borrar"></div>
            </div>
        <?php } ?>
    </section>

    <?php
    include("./components/footer.php");
    ?>

</body>

</html>