<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Documento sin t&iacute;tulo</title>
<style type="text/css">
</style>
<script>
function valida(formulario){

	er=/^[A-Za-z0-9_.\- ]+$/;
	if(er.test(formulario.user.value)==false){
		alert("El campo login debe rellenarse con caracteres validos");
		document.formulario.user.focus() 
		return false; // NO se enviará el formulario.
	}

	er=/^[a-zA-Z0-9 ]+$/;
	if(er.test(formulario.pass.value)==false){
		alert("El campo clave debe rellenarse con caracteres validos");
		document.formulario.pass.focus() 
		return false; // NO se enviará el formulario.
	}

	er=/^[a-zA-Z ñÑáéíóúÁÉÍÓÚuüÜÇç ]+$/;
	if(er.test(formulario.nombre.value)==false){
		alert("El campo nonmbre debe rellenarse con caracteres validos");
		document.formulario.nombre.focus() 
		return false; // NO se enviará el formulario.
	}

	er=/^[a-zA-Z ñÑáéíóúÁÉÍÓÚuüÜÇç ]+$/;
	if(er.test(formulario.apellidos.value)==false){
		alert("El campo apellidos debe rellenarse con caracteres validos");
		document.formulario.apellidos.focus() 
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
  <body onLoad='{formulario.focus();}'>

<div style="width: 800px; position: relative; margin-left: auto; margin-right: auto; left: 0; top: 0;">  
<div id="Layer1">
<center>
<p><b>Crear Usuario</b></p>
<div style="width: 800px; position: relative; margin-left: auto; margin-right: auto; left: 0; top: 0;">
  <div id="Layer3">
    <div id="Layer4">
      <form onSubmit="return valida(formulario)" name="formulario" method="POST" action="ingresa_usuario.php">

        <table width="313" height="96" border="2" bordercolor="#004080" bgcolor="#F9FFFF">
           		  
		  <tr>
            <td width="26%" height="28"><span class="Estilo4"><strong>Nombre</strong>:</span></td>
            <td width="74%"><input name="nombre" type="text" size="20" maxlength="20"></td>
          </tr>
		  <tr>
            <td width="26%" height="28"><span class="Estilo4"><strong>Apellidos</strong>:</span></td>
            <td width="74%"><input name="apellido" type="text" size="20" maxlength="20"></td>
          </tr>
		  <tr>
            <td width="26%" height="28"><span class="Estilo4"><strong>Direccion</strong>:</span></td>
            <td width="74%"><input name="direccion" type="text" size="20" maxlength="20"></td>
          </tr>
		  <tr>
            <td width="26%" height="28"><span class="Estilo4"><strong>Telefono</strong>:</span></td>
            <td width="74%"><input name="telefono" type="text" size="20" maxlength="20"></td>
          </tr>
		   <tr>
            <td width="26%" height="28"><span class="Estilo4"><strong>Login</strong>:</span></td>
            <td width="74%"><input name="user" type="text" size="20" maxlength="20"></td>
          </tr>         		
		   <tr>
            <td width="26%" height="28"><span class="Estilo4"><strong>Clave:</strong></span></td>
            <td width="73%"><input name="pass" type="password" size="20" maxlength="20"></td>
          </tr>
		 <table>
		 
		 <center><p><b>Tipo Usuario</b></p></center>
		 
		 </table>
		  
		   <tr>
            <td width="26%" height="28"><span class="Estilo4"><strong>Administrador:</strong></span></td>
            <td width="73%">    
      <input type="radio" value="Administrador" checked name="respuesta">
	   </td>
       </tr>
		   <tr>
            <td width="26%" height="28"><span class="Estilo4"><strong>Comprador:</strong></span></td>
            <td width="73%">    
       <input type="radio" value="Comprador"  name="respuesta">
	   </td>
       </tr>
	    <tr>
            <td width="26%" height="28"><span class="Estilo4"><strong>Bodeguero:</strong></span></td>
            <td width="73%">    
       <input type="radio" value="Bodeguero"  name="respuesta">
	   </td>
       </tr>
          <tr>
          </table>
        <p><input type="submit" value="Inscribir" name="enviar">
<input type="reset" value="Limpiar" name="limpiar"></p>
</form>
</center>
</div>
</div>
</body>
</html>
<?php
include("connect.php");
$rut=$_POST['user'];
$clave=$_POST['pass'];
$valor = $_POST['respuesta'];
$sqltipo="SELECT login FROM Usuario WHERE login = '$rut' ";
$restipo=odbc_exec($cid,$sqltipo)or die(odbc_error());

while(odbc_fetch_row($restipo))
{
	$tipologin=odbc_result($restipo, "login");
	echo "<html><head>";
	echo "<script language='JavaScript'>alert('EL Login ya  Existe.');";
	echo "</script></head><body>";	
	echo "<form onSubmit='return valida(formulario)' name='formulario' method='POST' action='ingresa_usuario.php'>";
	echo "</body></html>";	
	exit;
}
if(empty($respuesta) && $rut !="" && $clave !=""){


	echo "<html><head>";
	echo "<script language='JavaScript'>alert('Debe Elegir un tipo de Usuario.');";
	echo "</script></head><body>";	
	echo "<form onSubmit='return valida(formulario)' name='formulario' method='POST' action='ingresa_usuario.php'>";
	echo "</body></html>";	
	exit;

}
$sql="SELECT MAX(Id_usuario) FROM Usuario ";
$res=odbc_exec($cid,$sql)or die(odbc_error()) ;
//while(odbc_fetch_row($res))
	$id_u=odbc_result($res, "MAX(Id_usuario)");
	$id_usuario  = $id_u +  1;
		

	
if($tipologin != $rut  && $rut != ""  &&  !empty($respuesta)){
	
	
	if(	$valor =="Administrador")	
		$sqlcreado="INSERT INTO Usuario values('$id_usuario',1,'$_POST[user]','$_POST[nombre]','$_POST[apellido]','$_POST[direccion]','$_POST[telefono]','$_POST[pass]') ";
	if(	$valor =="Bodeguero")
		$sqlcreado="INSERT INTO Usuario values('$id_usuario',3,'$_POST[user]','$_POST[nombre]','$_POST[apellido]','$_POST[direccion]','$_POST[telefono]','$_POST[pass]') ";
	if(	$valor =="Comprador")
		$sqlcreado="INSERT INTO Usuario values('$id_usuario',2,'$_POST[user]','$_POST[nombre]','$_POST[apellido]','$_POST[direccion]','$_POST[telefono]','$_POST[pass]') ";

	$restipo=odbc_exec($cid,$sqlcreado)or die(odbc_error());
	echo "<html><head>";
	echo "<script language='JavaScript'>alert('Usuario Creado con Exito.');";
	echo "</script></head><body>";
	echo "<form onSubmit='return valida(formulario)' name='formulario' method='POST' action='ingresa_usuario.php'>";
	echo "</body></html>";		
	exit;	
}
?>