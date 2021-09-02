<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>Base de datos de empleados</title>
</head>
<body>

<?php
require("header.php");
?>

<section id="inicio">
   <div class="form-center">
   <form method="POST" action="cargar_empleado.php">
    <input type="text" name="nombre" placeholder="Nombre" maxlenght="30" required>
    <input type="text" name="apellido" placeholder="Apellido" maxlenght="50" required>
    <input type="text" name="imagen" placeholder="Imagen" maxlenght="30" required>
    <textarea name="descripcion" rows="6" placeholder="Descripción" required></textarea>
    <input type="submit" value="Cargar empleado">
    </form>

     <?php
    // if(isset($_GET['ok'])) {
    //     echo "<h4>Carga exitosa!</h4>";
    // }
    ?> 

   </div>

   <?php
include("footer.php");
?>
    
</section>


</body>
</html>