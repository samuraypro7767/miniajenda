<!DOCTYPE html>
<html lang="es">
<head>
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD Agenda Telefónica</title>
     <link rel="stylesheet" href="estilo/estilocss.css">
     
</head>
<body>
<h1>Agenda Telefónica</h1>
<div class="buscar">
                <div class="buscar1">
                <a href="iniciocrud2.php">Volver al Inicio</a>
                </div>
<?php
include("conexion.php");
$con=conexion();

$id_contacto=$_POST['id'];

if (mysqli_connect_errno())
{
echo "<br>";
echo "No pudo conectarse con la Base de Datos";
exit();
}

$consulta="SELECT  id,nombre,apellido,direccion,telefono FROM usuario where id='$id_contacto'";
$resultados=mysqli_query($con, $consulta);
mysqli_set_charset($con, "utf8");
?>
<table>
        <thead>
        <tr>
                                <th>Código</th>
                                <th>Nombre</th>
                                <th>Apellido</th>
                                <th>Dirección</th>
                                <th>Teléfono</th>
                                <th colspan="2">Acciones BD</th>
        </tr>        
        </thead>
        <tbody>
        <?php
                        //estructura de repetición para almacenar en el arreglo la información proporcionada por cada registro de la base de datos
                        while($filas=mysqli_fetch_assoc($resultados)){
                        ?>
                        <tr>
                                <!--Despliegue de la Información de cada registro de la BD en la Tabla HTML -->
                                <td><?php echo $filas['id'] ?></td>
                                <td><?php echo $filas['nombre'] ?></td>
                                <td><?php echo $filas['apellido'] ?></td>
                                <td><?php echo $filas['direccion'] ?></td>
                                <td><?php echo $filas['telefono'] ?></td>
                                <td><a href="actualizar-contacto.php?id=<?php echo $filas['id'] ?>">Editar</a></td>
                                <td><a href="delete-contacto.php?id=<?php echo $filas['id'] ?>">Eliminar</a></td>
                        </tr>
                        <?php
                        }
                        ?>
                </tbody>
        </table>

</body>
</html>