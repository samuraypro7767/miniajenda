<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD Agenda Telefónica</title>
     <link rel="stylesheet" href="estilo/estilocss.css">
</head>
<body>
 <?php
 //Iniciamos Sesión en el Servidor
 session_start();
 //Se valida si el usuario inicia sesión para permitir el ingreso al CRUD

 if(empty($_SESSION["usuario"])){
        header("location: iniciosesion.php");
 } 
 ?> 
        <h1>Agenda Telefónica</h1>
        <?php
//Se emplea variable de sesión para darle la bienvenida al usuario que inicia sesión p
         echo "<h2>Bienvenid@ ".$_SESSION["usuario"]."</h2>";
        ?>
        <a href='cerrarsesion.php'>Cerrar Sesión</a>  <!--Botón CSS para cerrar sesión en el Servidor -->
        <!--Botón de Enlace al Formulario para agregar un Contacto -->
        <div class="buscar">
                <div class="buscar1">
                <a href="formulario-agregar-contacto.php">Agregar Contacto</a>
                </div>
                <div class="consulta">
                        <form action="consultar-contacto.php" method="POST">
                        
                        <table>
                                <tr>
                                        <td coldspan=2><input type="text"  name="id" placeholder="Id Contacto"></td>
                                        <td><button type="submit"  value="Consultar">Consultar </button></td>
                                        <td><button type="reset"  value="Limpiar">Limpiar    </button>   </td>
                                </tr>
                        </table>
                        
                                       
                        </form>
                                        
                                        
                </div>
        </div>
       
        
        <!--Tabla HTML para desplegar la información resultado de la consulta realizada a la Base de datos -->
        <table>
                <thead>
                <!--Botón de Enlace al Formulario para agregar un Contacto -->
                <?php
                //Solicitud de conexión a la base de datos
                        include("conexion.php");
                        $con=conexion();
                //Se realiza consulta a la base de datos
                        $sql="SELECT * FROM usuario";
                        $resultado=mysqli_query($con,$sql);
                ?>
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
                        while($filas=mysqli_fetch_assoc($resultado)){
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