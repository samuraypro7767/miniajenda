<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio Sesión Administrador</title>
    <link rel="stylesheet" href="estilo/estilos.css">
</head>
<body>
      <h1>INICIO SESIÓN ADMINISTRADOR</h1>
      <!--FORMULARIO DE INICIO SESIÓN ADMINISTRADOR -->
      <!-- Se programa el Formulario para enviar los datos al script PHP correspondiente a través del método post -->
      
      <form action=""  method="post">
        <h1>BIENVENDIDO</h1>
        <?php 
        include('validacion.php');
        ?>
        <input type="text" name="usuario" id="usuario" placeholder="Digite su Correo Electrónico"></br>
        <input type="password" name="clave" id="clave" placeholder="Digite su Contraseña"></br>
        <div>
        <button type="submit" name="enviar" value="enviar">Enviar</button>
        <button type="reset">Limpiar</button>
        </div>
      </form>
      
</body>
</html>