<?php
//Inicio la sesi�n
session_start();
if ($_SESSION["autentificado"] != "SI") 
{
	//si no existe, lo reenvio a la p�gina de autentificacion
	header("Location: index.php");
	//ademas salgo de este script
	exit();
}
?>