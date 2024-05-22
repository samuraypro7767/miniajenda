<!--Eliminar en la base de datos-->
<?php

include("conexion.php");
$con=conexion();

$id=$_GET['id'];

$sql="DELETE FROM usuario WHERE id='$id'";
$query=mysqli_query($con,$sql);

    if($query){
        Header("Location: iniciocrud2.php");
    }
?>