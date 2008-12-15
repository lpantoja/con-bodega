<?php
session_start();
		$_SESSION["autentificado"]="NO";
		$_SESSION["login"]='';
		session_destroy();
		header("Location: index.php");
		exit();
?>