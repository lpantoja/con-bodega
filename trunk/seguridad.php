<?php
//Inicio la sesión
session_start();
if ($_SESSION["autentificado"] != "SI") 
{
	//si no existe, lo reenvio a la página de autentificacion
	header("Location: index.php");
	//ademas salgo de este script
	exit();
}
?>