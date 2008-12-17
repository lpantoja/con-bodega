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
	height:560px;
	z-index:0;
	left: 0;
	top: -16px;
	background-color: #FFFFFF;
}
#Layer2 {
	position:absolute;
	width:200px;
	height:39px;
	z-index:1;
	left: 271px;
	top: 18px;
}
#Layer3 {
	position:absolute;
	width:518px;
	height:237px;
	z-index:2;
	left: 99px;
	top: 62px;
}
.Estilo4 {
	color: #000000;
	font-weight: bold;
	font-size: 18px;
}
-->
  </style></head>
  <body >
<div style="width: 800px; position: relative; margin-left: auto; margin-right: auto; left: 0; top: 0;">
	
  <div id="Layer1">
    <div class="Estilo4" id="Layer2">Productos en sobre stock </div>
    <div id="Layer3">
<?
echo"      <table width=\"520\" border=\"1\">";
echo"        <tr>";
echo"          <td width=\"101\" bordercolor=\"#004080\" bgcolor=\"#ECFFFF\"><span class=\"Estilo3\">codigo </span></td>";
echo"          <td width=\"148\" bordercolor=\"#004080\" bgcolor=\"#ECFFFF\"><span class=\"Estilo3\">Nombre</span></td>";
echo"          <td width=\"130\" bordercolor=\"#004080\" bgcolor=\"#ECFFFF\"><span class=\"Estilo3\">Stock</span></td>";
echo"          <td width=\"113\" bordercolor=\"#004080\" bgcolor=\"#ECFFFF\"><span class=\"Estilo3\">Stock max </span></td>";
echo"        </tr>";
   include ("connect.php");
		   
				$sql="SELECT *  FROM producto ";
				$result=odbc_exec($cid,$sql)or die(exit("Error en odbc_exec"));
			$bann=0;
			$var2=$var1=0;
				   while (odbc_fetch_row($result))
				{ 
					$var2=odbc_result($result,"stock_max") ;
										$var1=odbc_result($result,"stock") ;
										
					if($var1 >= $var2){
					$var=odbc_result($result,"id_prod") ;

echo"        <tr>";
echo"          <td bgcolor=\"#ECFFFF\">$var</td>";
					$var=odbc_result($result,"nombre_prod") ;
echo"          <td bgcolor=\"#ECFFFF\">$var</td>";
echo"          <td bgcolor=\"#ECFFFF\">$var1</td>";
echo"          <td bgcolor=\"#ECFFFF\">$var2</td>";
echo"        </tr>";
}
}
echo"      </table>";



?>
    </div>
  </div>
  </div>
</body>
</html>
