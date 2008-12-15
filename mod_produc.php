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
	width:200px;
	height:115px;
	z-index:1;
	left: 112px;
	top: 77px;
}
#Layer3 {
	position:absolute;
	width:407px;
	height:295px;
	z-index:2;
	left: 161px;
	top: 95px;
}

#Layer4 {
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
-->
  </style></head>
  <body >
<div style="width: 800px; position: relative; margin-left: auto; margin-right: auto; left: 0; top: 0;">
	<div id="Layer1">
<div class="Estilo1" id="Layer4">Modificacion  Datos Producto </div>
  <?
   include ("connect.php");
  $cod_pro=$_POST['cod_pro'];


	$sql="Select * from Producto where Id_prod ='$cod_pro'";
	$result=odbc_exec($cid,$sql)or die(exit("Error en odbc_exec"));

echo" <div id=\"Layer3\"> ";	
	
while (odbc_fetch_row($result))
{ 
echo "<form name=\"form1\" method=\"post\" action=\"ing_mod_produc.php\">";
      echo "  <table width=\"332\" border=\"1\">";
echo "          <tr>";
echo "            <td width=\"145\"><div align=\"center\"><strong>C&oacute;digo producto </strong></div></td>";
	$var=odbc_result($result,"Id_prod");

echo "            <td width=\"136\"> <input type=\"text\" name=\"cod_pro\" value=\" $var \" >  </td>";
echo "          </tr>";
echo "          <tr>";
      echo "      <td><div align=\"center\"><strong>Nombre producto </strong></div></td>";
	 	$var=odbc_result($result,"Nombre_prod");
echo "            <td><input type=\"text\" name=\"nom_pro\" value=\" $var \"> </td>";
echo "          </tr>";
echo "          <tr>";
echo "            <td><div align=\"center\"><strong>Descrici&oacute;n</strong></div></td>";
	$var=odbc_result($result,"descripcion");
echo "             <td><textarea name=\"descr_pro\"> $var </textarea> </td>";
echo "          </tr>";
echo "          <tr>";
echo "            <td><div align=\"center\"><strong>Precio</strong></div></td>";
	$var=odbc_result($result,"precio");
echo "            <td><input type=\"text\" name=\"precio\" value=\" $var  \"></td>";
echo "          </tr>";
echo "          <tr>";
echo "            <td><div align=\"center\"><strong>Stock max </strong></div></td>";
	$var=odbc_result($result,"stock_max");
echo "            <td><input type=\"text\" name=\"stock_max\" value=\" $var \"> </td>";
echo "          </tr>";
echo "          <tr>";
echo "            <td><div align=\"center\"><strong>Stock m&iacute;nimo</strong></div></td>";
	$var=odbc_result($result,"stock_min");
echo "            <td><input type=\"text\" name=\"stock_min\" value=\" $var \"> </td>";
echo "          </tr>";
echo "          <tr>";
echo "            <td><div align=\"center\"><strong>Fecha de ingreso </strong></div></td>";
	$var=odbc_result($result,"fecha_ing");
echo "            <td><input type=\"text\" name=\"fecha\" value=\"$var\">  </td>";
echo "          </tr>";
echo "          <tr>";
echo "            <td><div align=\"center\"><strong>Cantidad actual </strong></div></td>";
	$var=odbc_result($result,"stock");
echo "            <td><input type=\"text\" name=\"cant\" value=\"$var \"></td>";
echo "          </tr>";
echo "        </table>";
echo "        <p>";
echo "          <label>";
echo "          <input type=\"submit\" name=\"enviar\" value=\"Enviar\">";
echo "          </label>";
echo "          <label>";
echo "          <input type=\"reset\" name=\"borrar\" value=\"borrar\">";
echo "          </label>";
echo "        </p>";
echo "        <p>&nbsp;</p>";
echo "      </form>";
echo" </div>";
 
}
 ?>
  </div>
</body>
</html>
