 <?php
//Iniciamos Sesión en el Servidor
session_start();
//Verificamos si el usuario y contraseña ingresados para iniciar sesión se encuentran en la tabla registro en la BD.
if (!empty($_POST["enviar"])) {
//Se verifica si se ingresaron datos en el formulario, si no tiene campos vacios
    if(!empty($_POST["usuario"]) and !empty($_POST["clave"])){
        $usuario=$_POST["usuario"]; //Si el formulario no tiene campos vacios se reciben los datos del usuario y contraseña y se almacenan.
        $password=$_POST["clave"];
//Solicitud de conexión a la base de datos
        include("conexion.php");
        $con=conexion();
//Se realiza consulta a la base de datos
//Se seleccionan el usuario y la contraseña de la tabla de registro que correspondan con el usuario y contraseña digitados en el formulario
        $sql="SELECT * FROM administrador WHERE usuario='$usuario' and clave='$password'";
        $resultado=mysqli_query($con,$sql);
        $filas=mysqli_fetch_assoc($resultado);
//si existe el registro del administrador, se almacena el codigo de identificación y el correo del usuario en la variable de sesión
        if($filas){
            $_SESSION["id"]=$filas["id"];
            $_SESSION["usuario"]=$filas["usuario"];
//se redirecciona a la página de inicio del Crud      
            header("Location:iniciocrud2.php");
         }else{
//S i no se inicia sesión con los datos correctos se informa que se ha denegado el acceso al Crud
            echo "</br><h2>Acceso Denegado</h2>";
         }
    }else{ //Se informa que no se ingresaron datos al formulario de inicio de sesión.
        echo "</br><h2>¡Campos Vacios!</h2>";
         }
    }
            ?>