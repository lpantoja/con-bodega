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
	height:1039px;
	z-index:0;
	left: 0;
	top: -16px;
	background-color: #FFFFFF;
}
#Layer2 {
	position:absolute;
	width:298px;
	height:24px;
	z-index:1;
	left: 271px;
	top: 15px;
}
.Estilo1 {
	color: #000000;
	font-weight: bold;
	font-size: 18px;
}
#Layer3 {
	position:absolute;
	width:405px;
	height:186px;
	z-index:2;
	left: 128px;
	top: 68px;
}
#Layer4 {
	position:absolute;
	width:463px;
	height:115px;
	z-index:3;
	left: 151px;
	top: 302px;
}
#Layer5 {
	position:absolute;
	width:248px;
	height:21px;
	z-index:4;
	left: 272px;
	top: 268px;
}
.Estilo5 {
	color: #000000;
	font-weight: bold;
}
#Layer6 {
	position:absolute;
	width:146px;
	height:64px;
	z-index:5;
	left: 666px;
	top: 16px;
}
.Estilo6 {
	font-size: 18px;
	font-weight: bold;
}
-->
  </style></head>
  <body >
<div style="width: 800px; position: relative; margin-left: auto; margin-right: auto; left: 0; top: 0;">
	
  <div id="Layer1">
    <div class="Estilo1" id="Layer2">Datos del pedido </div>
    <?
	  include ("connect.php");
	   $pedido=$_POST['cod_pro'];
	     $pedido=$_GET['cod_pro'];
	echo"<div id=\"Layer3\">";
echo"      <table width=\"481\" border=\"3\" bordercolor=\"#004080\" bgcolor=\"#F9FFFF\">";
echo"        <tr>";
  $sql="select *  from pedido where Id_pedido='$pedido' ";
				$result=odbc_exec($cid,$sql)or die(exit("Error en odbc_exec")); 
				
				 while (odbc_fetch_row($result))
				{ 
echo"          <td width=\"150\" bordercolor=\"#004080\" bgcolor=\"#F9FFFF\"><div align=\"center\" class=\"Estilo2\">C&oacute;digo Pedido </div></td>";
$var=odbc_result($result,"id_pedido");
echo"          <td width=\"311\" bordercolor=\"#004080\" bgcolor=\"#F9FFFF\">$var</td>";
echo"        </tr>";
echo"        <tr>";
$var=odbc_result($result,"descripcion");
echo"          <td bordercolor=\"#004080\" bgcolor=\"#F9FFFF\"><div align=\"center\" class=\"Estilo2\">Descrici&oacute;n</div></td>";
echo"          <td bordercolor=\"#004080\" bgcolor=\"#F9FFFF\">$var</td>";
echo"        </tr>";
echo"        <tr>";
$var=odbc_result($result,"id_usuario");
echo"          <td bordercolor=\"#004080\" bgcolor=\"#F9FFFF\"><div align=\"center\" class=\"Estilo2\">Rut usuario</div></td>";
echo"        <td bordercolor=\"#004080\" bgcolor=\"#F9FFFF\"> $var</td>";
echo"        </tr>";
echo"        <tr>";
$var=odbc_result($result,"NUMERO_ITEMS");
echo"          <td bordercolor=\"#004080\" bgcolor=\"#F9FFFF\"><div align=\"center\" class=\"Estilo2\">numero de items actuales</div></td>";
echo"          <td bordercolor=\"#004080\" bgcolor=\"#F9FFFF\">$var</td>";
echo"        </tr>";
echo"        <tr>";
$var=odbc_result($result,"fecha_ped");	
echo"          <td bordercolor=\"#004080\" bgcolor=\"#F9FFFF\"><div align=\"center\" class=\"Estilo2\">Fecha de Pedido </div></td>";
echo"          <td bordercolor=\"#004080\" bgcolor=\"#F9FFFF\">$var</td>";
echo"        </tr>";
echo"      </table>";
echo"    </div>";
}
	

	
	echo"<div id=\"Layer4\">";
echo"      <table width=\"450\" border=\"3\" bordercolor=\"#004080\" bgcolor=\"#F9FFFF\">";
echo"        <tr>";
echo"          <td width=\"183\" bordercolor=\"#004080\" bgcolor=\"#F9FFFF\"><div align=\"center\" class=\"Estilo2\">cod_producto</div></td>";
echo"          <td width=\"107\" bordercolor=\"#004080\" bgcolor=\"#F9FFFF\"><div align=\"center\" class=\"Estilo2\">nombre producto </div></td>";
echo"          <td width=\"138\" bordercolor=\"#004080\" bgcolor=\"#F9FFFF\"><div align=\"center\" class=\"Estilo2\">catidad</div></td>";
echo"        </tr>";
	  
	  $sql="select pedido_producto.ID_PROD as producto ,producto.NOMBRE_PROD as nombre,pedido_producto.CANTIDAD as cantidad from pedido_producto, producto   where pedido_producto.ID_PROD=producto.ID_PROD and pedido_producto.Id_pedido='$pedido' ";
				$result=odbc_exec($cid,$sql)or die(exit("Error en odbc_exec")); 
			
				 while (odbc_fetch_row($result))
				{	
echo"        <tr>";
$var=odbc_result($result,"producto");	
echo"          <td bordercolor=\"#004080\" bgcolor=\"#F9FFFF\">$var</td>";
$var=odbc_result($result,"nombre");	
echo"          <td bordercolor=\"#004080\" bgcolor=\"#F9FFFF\">$var</td>";
$var=odbc_result($result,"cantidad");	
echo"          <td bordercolor=\"#004080\" bgcolor=\"#F9FFFF\">$var</td>";
echo"        </tr>";
}
echo"      </table>";
echo"    </div>";
	
	
	?>
    
    <div class="Estilo5" id="Layer5">Productos</div>
  </div>
</div>
</body>
</html>
