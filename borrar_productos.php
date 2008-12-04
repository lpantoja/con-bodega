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
	height:446px;
	z-index:0;
	left: 0;
	top: -16px;
	background-color: #FFFFFF;
}
#Layer2 {
	position:absolute;
	width:434px;
	height:163px;
	z-index:1;
	left: 159px;
	top: 90px;
}
.Estilo1 {
	color: #004080;
	font-weight: bold;
}
#Layer3 {
	position:absolute;
	width:203px;
	height:43px;
	z-index:2;
	left: 312px;
	top: 14px;
}
.Estilo2 {
	color: #000000;
	font-weight: bold;
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
    <div id="Layer2">
	<?
	include ("connect.php");
				$sql="Select * from Producto ";
				$result=odbc_exec($cid,$sql)or die(exit("Error en odbc_exec"));

    echo"  <table width=\"428\" border=\"2\" bordercolor=\"#004080\">";
echo"        <tr>";
echo"          <td width=\"122\" bordercolor=\"#004080\" bgcolor=\"#F9FFFF\"><span class=\"Estilo1\">Codigo Producto </span></td>";
echo"          <td width=\"157\" bordercolor=\"#004080\" bgcolor=\"#F9FFFF\"><span class=\"Estilo1\">Nombre Producto </span></td>";
echo"          <td width=\"127\" bordercolor=\"#004080\" bgcolor=\"#F9FFFF\"><span class=\"Estilo1\">Borrar </span></td>";
echo"        </tr>";
while (odbc_fetch_row($result))
{ 
	echo"        <tr>";
	$var1=odbc_result($result,"Id_prod");
	echo"          <td bordercolor=\"#004080\" bgcolor=\"#F9FFFF\">$var1</td>";
	$var2=odbc_result($result,"Nombre_prod");
	echo"          <td bordercolor=\"#004080\" bgcolor=\"#F9FFFF\">$var2</td>";
	echo"          <td bordercolor=\"#004080\" bgcolor=\"#F9FFFF\"><a href=\"borrar_productos_2.php?cod_pro=$var1&amp;nom_pro=$var2\" onclick=\"return confirmLink(this, 'Borrar el producto :  $var2  (Codigo $var1) ')\"> <img hspace=\"7\" width=\"11\" height=\"13\" src=\"imagenes/button_drop.png\" alt=\"Eliminar\" title=\"Eliminar\" border=\"0\" /></td>";
	echo"        </tr>";
	
}
echo"      </table>";
	?>
    </div>
    <div class="Estilo2" id="Layer3">Borrar Productos </div>
  </div>
  </div>
</body>
</html>
