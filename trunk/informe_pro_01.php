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
	height:767px;
	z-index:0;
	left: 0;
	top: -16px;
	background-color: #FFFFFF;
}
#Layer2 {
	position:absolute;
	width:212px;
	height:25px;
	z-index:1;
	left: 210px;
	top: 13px;
}
#Layer3 {
	position:absolute;
	width:691px;
	height:39px;
	z-index:2;
	left: 44px;
	top: 69px;
}
#Layer4 {
	position:absolute;
	width:122px;
	height:23px;
	z-index:2;
	left: 717px;
	top: 8px;
}
.Estilo1 {font-size: 18px}
.Estilo3 {font-weight: bold; color: #000000;}
.Estilo4 {font-size: 12px; color: #004080;}
.Estilo5 {font-size: 14px}
#Layer5 {
	position:absolute;
	width:33px;
	height:29px;
	z-index:3;
	left: 641px;
	top: 21px;
}
-->
  </style>
         <script type="text/javascript" language="javascript">
    <!--
	function imprimir()
	{
		print();
	} // end of the 'confirmLink()' function
    
    //-->
    </script>
  </head>
  <body >
<div style="width: 800px; position: relative; margin-left: auto; margin-right: auto; left: 0; top: 0;">
	
  <div id="Layer1">
  <?
  include("connect.php");
    $dia=$_POST['dia'];
  $mes=$_POST['mes'];
    $ano=$_POST['ano'];


if($dia && ($dia != 'Elija Dia') && ($mes != 'Elija Mes') ){
  $fecha=$dia.$mes.$ano;
   $sql=" select ID_PROD,NOMBRE_PROD,PRECIO,STOCK_MAX,STOCK_MIN,to_char(FECHA_ING,'dd/mm/YYYY') as FECHA_ING ,STOCK,to_char(FECHA_ING,'dd') from PRODUCTO where FECHA_ING='$fecha'";
  }
  if($mes && ($mes != 'Elija Mes')  && ($dia == 'Elija Dia') ){
   $fecha=$mes.$ano;
   
   $sql=" 
select ID_PROD,NOMBRE_PROD,PRECIO,STOCK_MAX,STOCK_MIN,to_char(FECHA_ING,'dd/mm/YYYY') as FECHA_ING ,STOCK,to_char(FECHA_ING,'mmYYYY') from PRODUCTO where to_char(FECHA_ING,'mmYYYY')='$fecha'";
  }
  if($ano && ($mes == 'Elija Mes') && ($dia == 'Elija Dia')){
     $fecha=$ano;
   
   $sql=" select ID_PROD,NOMBRE_PROD,PRECIO,STOCK_MAX,STOCK_MIN,to_char(FECHA_ING,'dd/mm/YYYY') as FECHA_ING ,STOCK,to_char(FECHA_ING,'YYYY') from PRODUCTO where to_char(FECHA_ING,'YYYY')='$fecha'";
  }
  
 echo"<div id=\"Layer3\">";
 
echo "<table width=\"700\" border=\"2\" cellpadding=\"0\" cellspacing=\"0\" bordercolor=\"#0052A4\">";
  echo "<tr>";
    echo "<th width=\"77\" bordercolor=\"#004080\" bgcolor=\"#F4FFFF\"><span class=\"Estilo4\">CODIGO</span></th>";
    echo "<th width=\"85\" bordercolor=\"#004080\" bgcolor=\"#F4FFFF\"><span class=\"Estilo4\">NOMBRE</span></th>";
    echo "<th width=\"81\" bordercolor=\"#004080\" bgcolor=\"#F4FFFF\"><span class=\"Estilo4\">PRECIO</span></th>";
    echo "<th width=\"123\" bordercolor=\"#004080\" bgcolor=\"#F4FFFF\"><span class=\"Estilo4\">STOCK MAXIMO</span></th>";
    echo "<th width=\"117\" bordercolor=\"#004080\" bgcolor=\"#F4FFFF\"><span class=\"Estilo4\">STOCK MINIMO</span></th>";
    echo "<th width=\"105\" bordercolor=\"#004080\" bgcolor=\"#F4FFFF\"><span class=\"Estilo4\">FECHA</span></th>";
    echo "<th width=\"94\" bordercolor=\"#004080\" bgcolor=\"#F4FFFF\"><span class=\"Estilo4\">STOCK</span></th>";
  echo " </tr>";

				$result=odbc_exec($cid,$sql)or die(exit("Error en odbc_exec")); 
				
				 while (odbc_fetch_row($result))
				{ 

				$var=odbc_result($result,"ID_PROD");
	echo "<tr>";
    echo "<td bordercolor=\"#004080\" bgcolor=\"#F4FFFF\"><div align=\"center\"><span class=\"Estilo5\">$var</span></div></td>";
	$var=odbc_result($result,"NOMBRE_PROD");
    echo "<td bordercolor=\"#004080\" bgcolor=\"#F4FFFF\"><div align=\"center\"><span class=\"Estilo5\">$var</span></div></td>";
	$var=odbc_result($result,"PRECIO");
    echo "<td bordercolor=\"#004080\" bgcolor=\"#F4FFFF\"><div align=\"center\"><span class=\"Estilo5\">$var</span></div></td>";
	$var=odbc_result($result,"STOCK_MAX");
    echo "<td bordercolor=\"#004080\" bgcolor=\"#F4FFFF\"><div align=\"center\"><span class=\"Estilo5\">$var</span></div></td>";
	$var=odbc_result($result,"STOCK_MIN");
    echo "<td bordercolor=\"#004080\" bgcolor=\"#F4FFFF\"><div align=\"center\"><span class=\"Estilo5\">$var</span></div></td>";
	$var=odbc_result($result,"FECHA_ING");
    echo "<td bordercolor=\"#004080\" bgcolor=\"#F4FFFF\"><div align=\"center\"><span class=\"Estilo5\">$var</span></div></td>";
	$var=odbc_result($result,"STOCK");
    echo "<td bordercolor=\"#004080\" bgcolor=\"#F4FFFF\"><div align=\"center\"><span class=\"Estilo5\">$var</span></div></td>";
  echo " </tr>";
				}
echo"    </table>";
echo"  </div>";
  ?>
  
  <div id="Layer2">
    <p align="center"><span class="Estilo1"><strong>Productos</strong></span></p>
  </div>
  
  <div id="Layer4">
    <p><a href="informe_pro_0.php"><strong>Volver</strong></a></p>
    </div>
  <div id="Layer5"><img src="imagenes/imprimir.JPG" onClick="imprimir()" width="35" height="27"></div>
  </div>
  </div>
</body>
</html>
