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
	left: 0;
	top: -16px;
	background-color: #FFFFFF;
}
#Layer2 {
	position:absolute;
	width:789px;
	height:449px;
	z-index:2;
	left: -14px;
	top: -18px;
}
#Layer3 {
	position:absolute;
	width:797px;
	height:506px;
	z-index:1;
	background-color: #FFFFFF;
	left: 2px;
	top: -14px;
}
#Layer4 {
	position:absolute;
	width:387px;
	height:115px;
	z-index:1;
	left: 223px;
	top: 92px;
}
#Layer5 {
	position:absolute;
	width:456px;
	height:51px;
	z-index:2;
	left: 172px;
	top: 26px;
}
.Estilo3 {	font-size: 18px;
	color: #004080;
	font-family: "Courier New", Courier, monospace;
	font-weight: bold;
	font-style: italic;
}
.Estilo4 {color: #004080}
.Estilo6 {color: #004080; font-weight: bold; }
-->
</style>
<script>
function valida(formulario){

	er=/^[0-9]+$/;
	if(er.test(formulario.user.value)==false){
		alert("El campo usuario debe rellenarse con caracteres alfanuméricos simples");
		return false; // NO se enviará el formulario.
	}
	er=/^[0-9]+$/;
	if(er.test(formulario.dig.value)==false){
		alert("El segundo campo del rut (digito verificador) debe ingresarse");
		return false; // NO se enviará el formulario.
	}
	er=/^[a-zA-Z0-9]+$/;
	if(er.test(formulario.pass.value)==false){
		alert("El campo clave debe rellenarse con caracteres alfanuméricos simples");
		return false; // NO se enviará el formulario.
	}

	er=/^[a-zA-Z ñÑáéíóúÁÉÍÓÚuüÜÇç]+$/;
	if(er.test(formulario.nombre.value)==false){
		alert("El campo nombre debe rellenarse con caracteres alfabéticos");
		return false; // NO se enviará el formulario.
	}

	er=/^[a-zA-Z ñÑáéíóúÁÉÍÓÚuüÜÇç]+$/;
	if(er.test(formulario.apellidos.value)==false){
		alert("El campo apellidos debe rellenarse con caracteres alfabéticos");
		return false; // NO se enviará el formulario.
	}


	if((formulario.email.value)==false){
		alert("El campo email no tiene un formato del tipo: usuario@servidor.com");
		return false; // NO se enviará el formulario.
	}

	return true; // Se enviará el formulario.
}
</script>
</head>

<body><div style="width: 800px; position: relative; margin-left: auto; margin-right: auto; left: 0; top: 0;">
  <div id="Layer3">
    <div id="Layer4">
		<form onSubmit="return valida(formulario)" name="formulario" method="POST" action="registrar_usuario.php">
<table width="349" height="217" border="3" bordercolor="#004080" bgcolor="#F9FFFF">
<tr>
<td width="31%" height="33"><span class="Estilo4"><strong>Rut</strong>:</span></td>
<td width="69%">
 
  <input type="text" name="user" size="20" maxlength="20">
  <strong>-</strong>
 <label>
 <input name="dig" type="text" size="1" maxlength="1" />
 </label>
 <br>
 (de la forma 16275643 - 5)
  </td>
</tr>
<tr>
<td width="31%" height="33"><span class="Estilo4"><strong>Clave:</strong></span></td>
<td width="69%"><input type="password" name="pass" size="20" maxlength="20"></td>
</tr>
<tr>
<td width="31%" height="32"><span class="Estilo4"><strong>Nombre:</strong></span></td>
<td width="69%"><input type="text" name="nombre" size="20" maxlength="20"></td>
</tr>
<tr>
<td width="31%" height="33"><span class="Estilo4"><strong>Apellidos</strong>:</span></td>
<td width="69%"><input type="text" name="apellidos" size="30" maxlength="30"></td>
</tr>
<tr>

<td width="31%" height="31"><span class="Estilo4"><strong>Direccion:</strong></span></td>
<td width="69%"><input type="text" name="email" size="30" maxlength="30"></td>
</tr>

<td width="31%" height="35"><span class="Estilo4"><strong>Telefono:</strong></span></td>
<td width="69%"><input type="text" name="telefono" size="30" maxlength="30"></td>
</tr>
   <tr>
            <td width="31%" height="28" class="Estilo6">Tipo de Usuario</td>
            <td width="69%"><ul>
              <li class="Estilo4"><strong align="left">Administrador:</strong>
                  <input type="radio" value="Administrador" checked name="respuesta">
              </li>
              <li class="Estilo4"><strong align="left">Comprador :</strong>
                  <input type="radio" value="Comprador"  name="respuesta">
              </li>
              <li> <span class="Estilo4"><strong align="left">Bodeguero :</strong>
                  <input type="radio" value="Bodeguero"  name="respuesta">
              </span></li>
            </ul></td>
       </tr>
</table>
<p><input type="submit" value="Registrar" name="enviar">
<input type="reset" value="Limpiar" name="limpiar"></p>
</form>
</div>
    <div class="Estilo3" id="Layer5"><u>Formulario de Registro de usuarios </u></div>
  </div>
</div>
</body>
</html>
