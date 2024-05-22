<?php
if(isset($_POST['enviar'])){
    $nombre=$_POST['nombre'];
    $apellido=$_POST['apellido'];
    $direccion=$_POST['direccion'];
    $telefono=$_POST['telefono'];

    include("conexion.php");
    $con=conexion();
     $sql="INSERT INTO usuario(nombre,apellido,direccion,telefono) VALUES('$nombre','$apellido','$direccion','$telefono')";
     $resultado= mysqli_query($con,$sql);

     if($resultado){
        echo "La Información Ingresó correctamente a la Base de Datos";
        header("Location:iniciocrud2.php");
     }else{
        echo "La Información NO Ingresó  a la Base de Datos";
        header("Location:iniciocrud2.php");
     }
     
     
}



?>