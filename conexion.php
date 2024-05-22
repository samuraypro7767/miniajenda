<?php
function conexion(){
//definición de variables de conexión

$dbhost="localhost";
$dbuser="root";
$dbpass="";
$dbname="miniagenda";

//función de conexión a la base de datos
$con= mysqli_connect($dbhost, $dbuser, $dbpass);

//función selección base de datos
mysqli_select_db($con, $dbname);

if(mysqli_connect_errno()){
    echo "Error, no se ha conectado a la BD ".$dbname;

}  /*else{
    echo"Se ha conectado a la BD ". $dbname;
} */

return $con;
}


?>