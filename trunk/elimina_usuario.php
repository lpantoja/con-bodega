<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Documento sin t&iacute;tulo</title>
<style type="text/css">
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
	left: 0;
	top: -16px;
	background-color: #FFFFFF;
}
-->
  </style>
  </head>
  <body >

<div style="width: 800px; position: relative; margin-left: auto; margin-right: auto; left: 0; top: 0;">  
<div id="Layer1">
<center>
<p><b>Eliminar Usuario</b></p>

           <p><b>Escriba Login Usuario a Eliminar</b></p>
<div style="width: 800px; position: relative; margin-left: auto; margin-right: auto; left: 0; top: 0;">
  <div id="Layer3">
    <div id="Layer4">
      <form onSubmit="return valida(formulario)" name="formulario" method="POST" action="elimina_usuario.php">
	
        <table width="313" height="96" border="2" bordercolor="#004080" bgcolor="#F9FFFF">

		   <tr>
            <td width="26%" height="28"><span class="Estilo4"><strong>Login</strong>:</span></td>
            <td width="74%"><input name="user" type="text" size="20" maxlength="20" value="">
			 </td> </tr>  
			 </table>  
	  <p><input type="submit" value="Eliminar Usuario" name="mostrar">	
			<input type="reset" value="Cancelar Eliminacion" name="limpiar"></p>                		

</form>
</center>
</div>
</div>
</body>
</html>
<?php
include("connect.php");
$rut=$_POST['user'];
$sqltipo="SELECT login FROM Usuario WHERE login = '$rut' ";
$restipo=odbc_exec($cid,$sqltipo)or die(odbc_error());

while(odbc_fetch_row($restipo))
{
		
		$tipologin=odbc_result($restipo,"login");
		
		$sqleliminar = "DELETE FROM Usuario WHERE login ='$rut' ";
		$restipoElim=odbc_exec($cid,$sqleliminar)or die(odbc_error());
		echo "<html><head>";
		echo "<script language='JavaScript'>alert('Usuario Eliminado con Exito.');";
		echo "</script></head><body>";	
		echo "<form onSubmit='return valida(formulario)' name='formulario' method='POST' action='elimina_usuario.php'>";
		echo "</body></html>";		
		exit;	
}
if($tipologin != $rut  && $rut != ""){
	echo "<html><head>";
	echo "<script language='JavaScript'>alert('Usuario No Existe.');";
	echo "</script></head><body>";	
	echo "<form onSubmit='return valida(formulario)' name='formulario' method='POST' action='elimina_usuario.php'>";
	echo "</body></html>";		
	exit;	
}
?>