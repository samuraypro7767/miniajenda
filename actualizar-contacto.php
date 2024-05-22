<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="estilo/estilos.css">
</head>
<body>
        <!--Consultar la base de datos-->

        <?php 
            include("conexion.php");
            $con=conexion();

        $id=$_GET['id'];
        $sql="SELECT * FROM usuario WHERE id='$id'";
        $query=mysqli_query($con,$sql);

        $filas=mysqli_fetch_array($query);
        ?>    

        <h1>Editar Informacion Cliente</h1>


        <form action="update-contacto.php" method="POST">
  
              <input type="hidden" name="id" value="<?php echo $filas['id']  ?>">
              
              <input type="text" name="nombre" placeholder="Nombre" value="<?php echo $filas['nombre']  ?>">
              <input type="text" name="apellido" placeholder="Apellidos" value="<?php echo $filas['apellido']  ?>">
              <input type="text" name="direccion" placeholder="Direccion" value="<?php echo $filas['direccion']  ?>">
              <input type="text" name="telefono" placeholder="Teléfono" value="<?php echo $filas['telefono']  ?>">
            <button type="submit" value="Actualizar">Actualizar</button>
          
  </form>
</body>
</html>