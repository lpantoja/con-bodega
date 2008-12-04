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
		document.formulario.pass.focus() 
		return false; // NO se enviará el formulario.
	}

	er=/^[a-zA-Z ñÑáéíóúÁÉÍÓÚuüÜÇç]+$/;
	if(er.test(formulario.nombre.value)==false){
		alert("El campo usuario debe rellenarse con caracteres validos");
		document.formulario.nombre.focus() 
		return false; // NO se enviará el formulario.
	}

	er=/^[a-zA-Z ñÑáéíóúÁÉÍÓÚuüÜÇç]+$/;
	if(er.test(formulario.apellidos.value)==false){
		alert("El campo usuario debe rellenarse con caracteres validos");
		document.formulario.apellidos.focus() 
		return false; // NO se enviará el formulario.
	}
	er=/^[a-zA-Z0-9]+$/;
	if(er.test(formulario.identificador.value)==false){
		alert("El campo usuario debe rellenarse con caracteres validos");
		document.formulario.id.focus() 
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
<p><b>Modificar Usuario</b></p>

           <p><b>Modifique los Datos que Desea</b></p>
		  
<div style="width: 800px; position: relative; margin-left: auto; margin-right: auto; left: 0; top: 0;">
  <div id="Layer3">
    <div id="Layer4">
     		<?php
			include("connect.php");

			$sqltipo="SELECT  *FROM Usuario WHERE login = '$tipologin'";
			$restipo=odbc_exec($cid,$sqltipo) ;
			while(odbc_fetch_row($restipo))
			{
				$tipo=odbc_result($restipo, "identificador");
				$tipoid_usuario=odbc_result($restipo, "id_usuario");
				$tipologin=odbc_result($restipo, "login");
				$tipoclave=odbc_result($restipo, "clave");	
				$tiponombre=odbc_result($restipo, "nombre");	
				$tipoapellidos=odbc_result($restipo, "apellidos");	
				$tipodireccion=odbc_result($restipo, "direccion");	
				$tipotelefono=odbc_result($restipo, "telefono");			
			}
			
			?>     	   
			<?php
			echo " <form onSubmit='return valida(formulario)' name='formulario' method='POST' action='index3.php'>";
			echo "<table width='313' height='96' border='2' bordercolor='#004080' bgcolor='#F9FFFF'>";
			
	     	echo "<tr>";
            echo "<td width='26%' height='28'><span class='Estilo4'><strong>Nombres</strong>:</span></td>";
            echo "<td width='74%'><input name='nombre' type='text' size='40' maxlength='40' value='$tiponombre'></td>";
            echo "</tr>";
			echo "<tr>";
            echo "<td width='26%' height='28'><span class='Estilo4'><strong>Apellidos</strong>:</span></td>";
            echo "<td width='74%'><input name='apellido' type='text' size='40' maxlength='40' value='$tipoapellidos'></td>";
            echo "</tr>";
			echo "<tr>";
            echo "<td width='26%' height='28'><span class='Estilo4'><strong>Direccion</strong>:</span></td>";
            echo "<td width='74%'><input name='direccion' type='text' size='40' maxlength='40' value='$tipodireccion'></td>";
            echo "</tr>";
			echo "<tr>";
            echo "<td width='26%' height='28'><span class='Estilo4'><strong>Telefono</strong>:</span></td>";
            echo "<td width='74%'><input name='telefono' type='text' size='40' maxlength='40' value='$tipotelefono'></td>";
            echo "</tr>";
			echo "<tr>";
            echo "<td width='26%' height='28'><span class='Estilo4'><strong>Login</strong>:</span></td>";
            echo "<td width='74%'><input name='user' type='text' size='40' maxlength='40' value='$tipologin'></td>";
            echo "</tr>";
			echo "<tr>";
            echo "<td width='26%' height='28'><span class='Estilo4'><strong>Clave</strong>:</span></td>";
            echo "<td width='74%'><input name='pass' type='password' size='40' maxlength='40' value='$tipoclave'></td>";
            echo "</tr>";
			echo "<tr>";
            echo "<td width='26%' height='28'><span class='Estilo4'><strong>Tipo Usuario</strong>:</span></td>";
            echo "<td width='73%'><input name='identificador' type='text' size='40' maxlength='40' value='$tipo'></td>";
            echo "</tr>";			
			echo "<tr>";
			echo " </table>";
			echo "<p><input type='submit' value='Guardar Modificacion' name='enviar'>";
			echo "<input type='reset' value='Datos Originales' name='limpiar'>";
			echo "</form>";
		  ?>	
		 
	
</center>
</div>
</div>
</body>
</html>
