<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agregar Nuevo Contacto</title>
    <link rel="stylesheet" href="estilo/estilos.css">
</head>
<body>
      <h1>AGREGAR NUEVO CONTACTO</h1>
      <!--FORMULARIO PARA LA RECEPCIÓN DE DATOS DEL NUEVO CONTACTO -->
      <!-- Se programa el Formulario para enviar los datos al script PHP correspondiente a través del método post -->
      <form action="agregar-contacto.php" method="post">
       
        <input type="text" name="nombre" id="nombre" placeholder="Digite su Nombre"></br>
        <input type="text" name="apellido" id="apellido" placeholder="Digite sus Apellidos"></br>
        <input type="text" name="direccion" id="direccion" placeholder="Dirección Residencia"></br>
        <input type="number" name="telefono" id="telefono" placeholder="Número Teléfono o Móvil"></br>
        <div>
        <button type="submit" name="enviar" value="AGREGAR">Agregar Contacto</button>
        <button type="reset">Limpiar</button>
        </div>
        <!-- Botón para regresar a la Página de Inicio del CRUD -->
        <a href="iniciocrud2.php">Regresar</a>
      </form>
</body>
</html>