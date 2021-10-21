<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="//js.nicedit.com/nicEdit-latest.js" type="text/javascript"></script>
    <script type="text/javascript">bkLib.onDomLoaded(nicEditors.allTextAreas);</script>
						
    <link rel="stylesheet" href="./css/styles.css">
    <title>Base de datos de empleados</title>
</head>
<body>
<?php
require("./components/header.php");
?>
<section id="inicio">
    <?php
    require('./php/conexion.php');
    $id = $_GET['id'];
    $datos_empleado =  mysqli_query($datos_db, "SELECT * FROM empleados WHERE id = $id");
    $info_empleado = mysqli_fetch_assoc($datos_empleado);
    ?>
   <div class="form-center">
   <form method="POST" action="./php/editar_empleado.php">
    <input type="hidden" name="id" value="<?php echo $info_empleado['id'] ?>">
    <input type="text" name="nombre" value="<?php echo $info_empleado['nombre'] ?>
">
    <input type="text" name="apellido" value="<?php echo $info_empleado['apellido'] ?>
">  
    <input type="text" name="imagen" value="<?php echo $info_empleado['imagen'] ?>
">  
    <textarea name="descripcion" rows="6"><?php echo $info_empleado['descripcion'] ?></textarea>
    <input type="submit" value="Guardar cambios">
    </form>
    
   </div>
    
</section>

<?php
include("./components/footer.php");
?>
</body>
</html>