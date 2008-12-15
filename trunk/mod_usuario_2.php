<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Documento sin t&iacute;tulo</title>

<style type="text/css">
<!--
body {
	background-color: #00334F;
}
#Layer1 {
	position:absolute;
	width:800px;
	height:446px;
	z-index:0;
	left:  2px;
	top: -16px;
	background-color: #FFFFFF;
}
#Layer2 {
	position:absolute;
	width:387px;
	height:41px;
	z-index:1;
	left: 92px;
	top: 60px;
}
#Layer3 {
	position:absolute;
	width:185px;
	height:41px;
	z-index:1;
	left: 260px;
	top: 164px;
}
.Estilo2 {
	color: #000099;
	font-weight: bold;
	font-style: italic;
	font-size: 18px;
}
.Estilo4 {font-weight: bold; font-size: 18px; color: #000000;}
.Estilo5 {color: #000000}
.Estilo6 {font-weight: bold; font-size: 18px; color: #000099;}

-->
</style>
</head>

<body>
<div style="width: 800px; position: relative; margin-left: auto; margin-right: auto; left: 0; top: 0;">
<div id="Layer1">
<?php
include("connect.php");
$rut=$_POST['rut'];
$clave=$_POST['pass'];
$nombre=$_POST['nombre'];
$apellidos=$_POST['apellidos'];
$direccion=$_POST['email'];
$telefono=$_POST['telefono'];
$tipo_usuario=$_POST['respuesta'];
$tipo=0;
if($tipo_usuario=='Administrador')
	$tipo=1;
	
if($tipo_usuario=='Comprador')
	$tipo=2;

if($tipo_usuario=='Bodeguero')
	$tipo=3;
$largo= strlen($rut) -2;
//echo"$largo";
$login='--------';
for($i=0;$i<$largo;$i++){
	$login[$i]=$rut[$i];
	}

$sql="update usuario set  identificador='$tipo', login='$login', nombre='$nombre', apellidos='$apellidos', direccion='$direccion', telefono='$telefono', clave='$clave' where id_usuario='$rut'";

$result=odbc_exec($cid,$sql)or die(exit("Error en odbc_exec"));
//echo "<p>$sql";

if($result) {
echo "<div class=\"Estilo4\" id=\"Layer2\">Tus Datos ya est&aacute;n actualizados en la base de datos. Ya se puedes acceder al sistema Con el login '$login' </div>";
echo "<div id=\"Layer3\"><span class=\"Estilo6\"><span class=\"Estilo5\">[</span></span><span class=\"Estilo2\"><a href=\"mod_usuario_0.php\">Volver a Usuarios</a></span> <span class=\"Estilo4\">]</span> </div>";
}

?>


</div>
</div>

</body>
</html>
