<!--Actualizar la base de datos-->
<?php

include("conexion.php");
$con=conexion();

$id=$_POST['id'];
$nombre=$_POST['nombre'];
$apellido=$_POST['apellido'];
$direccion=$_POST['direccion'];
$telefono=$_POST['telefono'];

$sql="UPDATE usuario SET  nombre='$nombre',apellido='$apellido',
direccion='$direccion', telefono='$telefono' WHERE id='$id'";
$query=mysqli_query($con,$sql);

    if($query){
        Header("Location: iniciocrud2.php");
    }
?>