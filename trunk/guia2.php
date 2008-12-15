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
	height:550px;
	z-index:0;
	left: 0;
	top: -16px;
	background-color: #FFFFFF;
}
#Layer2 {
	position:absolute;
	width:222px;
	height:41px;
	z-index:1;
	left: 298px;
	top: 29px;
}
#Layer3 {
	position:absolute;
	width:605px;
	height:326px;
	z-index:2;
	left: 121px;
	top: 82px;
}
.Estilo1 {
	color: #000000;
	font-weight: bold;
	font-size: 18px;
	font-style: italic;
}
-->
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
  </head>
  <body >
<div style="width: 800px; position: relative; margin-left: auto; margin-right: auto; left: 0; top: 0;">
	
  <div id="Layer1">
    <div class="Estilo1" id="Layer2">Crear Usuario</div>
<div id="Layer3">
      <form onSubmit="return valida(formulario)" name="formulario" method="POST" action="guia2.php">

        <table width="442" height="96" border="2" bordercolor="#004080" bgcolor="#F9FFFF">
           		  
		  <tr>
            <td width="13%" height="28"><span class="Estilo4"><strong>Nombre</strong>:</span></td>
            <td width="33%"><input name="nombre" type="text" size="20" maxlength="20"></td>
          </tr>
		  <tr>
            <td width="13%" height="28"><span class="Estilo4"><strong>Apellidos</strong>:</span></td>
            <td width="33%"><input name="apellido" type="text" size="20" maxlength="20"></td>
          </tr>
		  <tr>
            <td width="13%" height="28"><span class="Estilo4"><strong>Direccion</strong>:</span></td>
            <td width="33%"><input name="direccion" type="text" size="20" maxlength="20"></td>
          </tr>
		  <tr>
            <td width="13%" height="28"><span class="Estilo4"><strong>Telefono</strong>:</span></td>
            <td width="33%"><input name="telefono" type="text" size="20" maxlength="20"></td>
          </tr>
		   <tr>
            <td width="13%" height="28"><span class="Estilo4"><strong>Login</strong>:</span></td>
            <td width="33%"><input name="user" type="text" size="20" maxlength="20"></td>
          </tr>         		
		   <tr>
            <td width="13%" height="28"><span class="Estilo4"><strong>Clave:</strong></span></td>
            <td width="33%"><input name="pass" type="password" size="20" maxlength="20"></td>
          </tr>
		   <tr>
            <td width="13%" height="28"><strong>Tipo de Usuario</strong></td>
            <td width="33%"><ul>
              <li><strong align="left">Administrador:</strong>
                <input type="radio" value="Administrador" checked name="respuesta">
              </li>
              <li><strong align="left">Comprador :</strong>
                 <input type="radio" value="Comprador"  name="respuesta">
              </li>
              <li> <strong align="left">Bodeguero :</strong>
                <input type="radio" value="Bodeguero"  name="respuesta">
              </li>
            </ul></td>
       </tr>
        </table>
        <p><input type="submit" value="Inscribir" name="enviar">
<input type="reset" value="Limpiar" name="limpiar"></p>
</form>
</center>

</div>
  </div>
  </div>
</body>
</html>
