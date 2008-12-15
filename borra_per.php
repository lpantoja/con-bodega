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
	height:598px;
	z-index:0;
	left: 0;
	top: -16px;
	background-color: #FFFFFF;
}
#Layer2 {
	position:absolute;
	width:167px;
	height:28px;
	z-index:1;
	left: 292px;
	top: 11px;
}
#Layer3 {
	position:absolute;
	width:523px;
	height:156px;
	z-index:2;
	left: 99px;
	top: 66px;
}
.Estilo1 {
	color: #000000;
	font-weight: bold;
}
.Estilo2 {color: #000000; font-weight: bold; font-size: 18px; }
#Layer4 {
	position:absolute;
	width:196px;
	height:27px;
	z-index:3;
	left: 586px;
	top: 22px;
}
-->
  </style>
       <script type="text/javascript" language="javascript">
    <!--
	function confirmLink(theLink, theSqlQuery)
	{
    var is_confirmed = confirm(confirmMsg + ' :\n' + theSqlQuery);
    return is_confirmed;
	} // end of the 'confirmLink()' function
    
	var confirmMsg  = 'Realmente desea ';
    //-->
    </script>
  </head>
  <body >
<div style="width: 800px; position: relative; margin-left: auto; margin-right: auto; left: 0; top: 0;">
	
  <div id="Layer1">
    <div class="Estilo2" id="Layer2">Borra Personas </div>
    <div id="Layer3">
      <?
	  include ("connect.php");
				$sql="Select * from usuario";
				$result=odbc_exec($cid,$sql)or die(exit("Error en odbc_exec"));
				
				
	  echo"<table width=\"509\" border=\"3\" bordercolor=\"#004080\" bgcolor=\"#F9FFFF\">";
echo"        <tr>";
echo"          <td><div align=\"center\"><span class=\"Estilo1\">Rut</span></div></td>";
echo"          <td><div align=\"center\"><span class=\"Estilo1\">Nombre</span></div></td>";
echo"          <td><div align=\"center\"><span class=\"Estilo1\">Apellidos</span></div></td>";
echo"          <td><div align=\"center\"><span class=\"Estilo1\">Tipo</span></div></td>";
echo"          <td><div align=\"center\"><span class=\"Estilo1\">Borrar</span></div></td>";
echo"        </tr>";
while (odbc_fetch_row($result))
{ 
$tipo_usuario=odbc_result($result,"identificador");
if($tipo_usuario==1)
	$tipo='Administrador';
	
if($tipo_usuario==2)
	$tipo='Comprador';

if($tipo_usuario==3)
	$tipo='Bodeguero';
$var1=odbc_result($result,"id_usuario");	
echo"        <tr>";
echo"          <td>$var1</td>";
$var=odbc_result($result,"nombre");
echo"          <td>$var</td>";
$var=odbc_result($result,"apellidos");
echo"          <td>$var</td>";
echo"          <td>$tipo</td>";
echo"          <td bordercolor=\"#004080\" bgcolor=\"#F9FFFF\"><a href=\"borrar_per_2.php?cod_pro=$var1&amp;nom_pro=$tipo\" onclick=\"return confirmLink(this, 'Borrar al usuario  :  $var1  ')\"> <img hspace=\"7\" width=\"11\" height=\"13\" src=\"imagenes/button_drop.png\" alt=\"Eliminar\" title=\"Eliminar\" border=\"0\" /></td>";
echo"        </tr>";
}
echo"      </table>";
	  ?>
    </div>
  </div>
</body>
</html>
