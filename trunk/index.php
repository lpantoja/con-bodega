<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN" "http://www.w3.org/TR/html40/loose.dtd">
<html>
  <head>
    <title>index2 0 200 -16 128</title>
    <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
    <meta name="author" content="" />
    <meta name="generator" content="SWiSHmax http://www.swishzone.com" />
    <meta name="description" content="index2" />
    <meta name="keywords" content="11, 221630, 236985, 873, aluminios, contactenos, cristales, cuando, en, fono, galeria, home, nosotros, oriente, pensaras, pienses, productos, pvc, talca, tecnalum, ventanas, website" />
    <!-- text used in the movie -->
    <!-- 11, 221630, 236985, 873, aluminios, contactenos, cristales, cuando, en, fono, -->
    <!-- galeria, home, nosotros, oriente, pensaras, pienses, productos, pvc, talca, -->
    <!-- tecnalum, ventanas, website -->
    <!-- Creado por SWiSHmax - Flash fácil - www.swishzone.com -->
  <style type="text/css">
<!--
body {
	background-color: #00334F;
}
#Layer1 {
	position:absolute;
	width:800px;
	height:531px;
	z-index:0;
	left: 0;
	top: 7px;
	background-color: #FFFFFF;
}
#Layer2 {
	position:absolute;
	width:200px;
	height:115px;
	z-index:1;
	left: 237px;
	top: 197px;
}
#Layer3 {
	position:absolute;
	width:289px;
	height:40px;
	z-index:2;
	left: 285px;
	top: 142px;
}
.Estilo3 {
	font-family: Georgia, "Times New Roman", Times, serif;
	font-style: italic;
	font-weight: bold;
	color: #000000;
	font-size: 18px;
}
#Layer4 {
	position:absolute;
	width:433px;
	height:95px;
	z-index:3;
	left: 157px;
	top: 374px;
}
#Layer5 {
	position:absolute;
	width:510px;
	height:115px;
	z-index:4;
	left: 17px;
	top: 25px;
}
.Estilo4 {font-size: 24px}
.Estilo5 {
	font-size: 36px;
	font-weight: bold;
	font-style: italic;
	font-family: Georgia, "Times New Roman", Times, serif;
	color: #004080;
}
.Estilo7 {font-size: 18}
.Estilo8 {
	font-size: 18px;
	font-weight: bold;
}
-->
  </style>
  <script>
function valida(formulario){

	er=/^[A-Za-z0-9_.\-]+$/;
	if(er.test(formulario.user.value)==false){
		alert("El campo usuario debe rellenarse con caracteres validos");
		return false; // NO se enviará el formulario.
	}

	er=/^[a-zA-Z0-9]+$/;
	if(er.test(formulario.pass.value)==false){
		alert("El campo usuario debe rellenarse con caracteres validos");
		return false; // NO se enviará el formulario.
	}

	er=/^[a-zA-Z ñÑáéíóúÁÉÍÓÚuüÜÇç]+$/;
	if(er.test(formulario.nombre.value)==false){
		alert("El campo usuario debe rellenarse con caracteres validos");
		return false; // NO se enviará el formulario.
	}

	er=/^[a-zA-Z ñÑáéíóúÁÉÍÓÚuüÜÇç]+$/;
	if(er.test(formulario.apellidos.value)==false){
		alert("El campo usuario debe rellenarse con caracteres validos");
		return false; // NO se enviará el formulario.
	}

	// formato aceptado: Mat-usuario_2.07@em-1.servidor_p4.com
	er=/^[A-Za-z0-9_.\-]+@[A-Za-z0-9_.\-]+\.[A-Za-z]{2,3}$/;
	if(er.test(formulario.email.value)==false){
		alert("El campo email no tiene un formato del tipo: usuario@servidor.com");
		return false; // NO se enviará el formulario.
	}

	return true; // Se enviará el formulario.
	
}
</script>
  </head>
  <body >
<div style="width: 800px; position: relative; margin-left: auto; margin-right: auto; left: 0; top: 0;">
	
  <div id="Layer1">
    <div id="Layer2">
	  <form onSubmit="return valida(formulario)" name="formulario" method="POST" action="index.php">
        <table width="298" height="73" border="3" bordercolor="#004080" bgcolor="#F9FFFF">
<tr>
<td width="26%" height="28" class="Estilo4"><span class="Estilo7"><strong>Rut</strong>:</span></td>
<td width="74%"><input name="user" type="text" size="20" maxlength="20"></td>
</tr>
<tr>
<td width="26%" height="36" class="Estilo4"><span class="Estilo8">Clave:</span></td>
<td width="73%"><input name="pass" type="password" size="20" maxlength="20"></td>
</tr>
</table>
<p><input type="submit" value="Inscribir" name="enviar">
<input type="reset" value="Limpiar" name="limpiar"></p>
</form>
	</div>
  
    <div class="Estilo3" id="Layer3"><u>Ingreso Usuario </u></div>
    <div id="Layer4"><img src="imagenes/copeval.JPG" width="409" height="81"></div>
    <div class="Estilo5" id="Layer5">Control De Bodega </div>
  </div>
  </div>
</body>
</html>
<?php
include("connect.php");
$rut=$_POST['user'];
$clave=$_POST['pass'];
$sqltipo="SELECT * FROM Usuario WHERE login = '$rut' and clave = '$clave' ";
$restipo=odbc_exec($cid,$sqltipo)or die(null) ;
while(odbc_fetch_row($restipo))
{
		$tipo=odbc_result($restipo, "identificador");
		$tipologin=odbc_result($restipo, "login");
		$usuario=odbc_result($restipo, "id_usuario");
		$tipoclave=odbc_result($restipo, "clave");	
		
		session_start();
		$_SESSION["autentificado"]="SI";
		$_SESSION["login"]=$usuario;
		$_SESSION["tipo"]=$tipo;
		echo "<html>";
		echo "<body onLoad='{Control.submit();}'>";
		echo "<form name='Control' action='indexb.html' method='get'>";
		echo "</form>";
		echo "</body></html>";

		
}
if($tipologin != $rut && tipoclave != $clave &&  $clave  != "" && $rut != ""){
	echo "<html><head>";
	echo "<script language='JavaScript'>alert('Usuario No Existe.');";
	echo "</script></head><body>";	
	echo "<form onSubmit='return valida(formulario)' name='formulario' method='POST' action='index.php'>";
	echo "</body></html>";			
}
?>