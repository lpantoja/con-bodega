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
    <!-- Creado por SWiSHmax - Flash f�cil - www.swishzone.com -->
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
	width:239px;
	height:30px;
	z-index:1;
	left: 289px;
	top: 32px;
}
.Estilo1 {
	font-size: 18px;
	font-weight: bold;
}
#Layer3 {
	position:absolute;
	width:330px;
	height:105px;
	z-index:2;
	left: 46px;
	top: 95px;
}
.Estilo2 {
	color: #004080;
	font-weight: bold;
}
#Layer4 {
	position:absolute;
	width:317px;
	height:168px;
	z-index:3;
	left: 419px;
	top: 90px;
}
-->
  </style>
  <script>
function valida(formulario){

	er=/^[0-9]+$/;
	if(((formulario.cod_pro.value)=='Escoja un codigo') || (!(formulario.cod_pro.value)) ){
		alert("El campo codigo Producto debe rellenarse con caracteres num�ricos");
		return false; // NO se enviar� el formulario.
	}
	return true; // Se enviar� el formulario.
}
</script>
  </head>
<body >
<div style="width: 800px; position: relative; margin-left: auto; margin-right: auto; left: 0; top: 0;">
	
  <div id="Layer1">
    <div class="Estilo1" id="Layer2">Modificar datos  Producto </div>
    <div id="Layer3">
     <form  onSubmit="return valida(formulario)"  name="formulario" method="post" action="mod_produc.php">
        <table width="282" border="3" bordercolor="#004080" bgcolor="#F9FFFF">
          <tr>
            <td width="114" bordercolor="#004080" bgcolor="#F9FFFF"><div align="center" class="Estilo2">C&oacute;digo producto </div></td>
            <td width="198" bordercolor="#004080" bgcolor="#F9FFFF"> <input name="cod_pro" type="text">  </td>
          </tr>           
        </table>
        <p>
          <label>
          <input type="submit" name="enviar" value="Enviar">
          </label>
          <label>
          <input type="reset" name="borrar" value="borrar">
          </label>
        </p>
        <p>&nbsp;</p>
      </form>
      </div>
    <div id="Layer4">
	  <form  onSubmit="return valida(formulario2)"  name="formulario2" method="post" action="mod_produc.php">
        <table width="282" border="3" bordercolor="#004080" bgcolor="#F9FFFF">
          <tr>
            <td width="114" bordercolor="#004080" bgcolor="#F9FFFF"><div align="center" class="Estilo2">C&oacute;digo producto </div></td>
            <td width="198" bordercolor="#004080" bgcolor="#F9FFFF"> <select name="cod_pro" >
			<option>Escoja un codigo</option> 
		   <? 
                 include ("connect.php");
				$sql="Select * from Producto ";
				$result=odbc_exec($cid,$sql)or die(exit("Error en odbc_exec"));

			   while (odbc_fetch_row($result))
				{ 
					$var=odbc_result($result,"Id_prod");
			   echo"		<option> $var </option>";
               }
		  ?>
             </select>  </td>
          </tr>           
        </table>
        <p>
          <label>
          <input type="submit" name="enviar" value="Enviar">
          </label>
          <label>
          <input type="reset" name="borrar" value="borrar">
          </label>
        </p>
        <p>&nbsp;</p>
      </form>
	</div>
  </div>
</div>
</body>
</html>
