<?php
//iniciar Sesión en el Servidor
session_start();
//Destruir la Sesión en el Servidor
session_destroy();
header("location: iniciosesion.php");
?>